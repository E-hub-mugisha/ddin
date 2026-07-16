const axios = require("axios");

const {
  DDIN_BASE_URL,
  DDIN_USERNAME,
  DDIN_PASSWORD,
  DDIN_COLLECTION_API_KEY,
} = process.env;

if (!DDIN_BASE_URL || !DDIN_USERNAME || !DDIN_PASSWORD) {
  throw new Error(
    "Missing DDIN_BASE_URL, DDIN_USERNAME, or DDIN_PASSWORD in environment. Check your .env file.",
  );
}

const ddin = axios.create({ baseURL: DDIN_BASE_URL, timeout: 15000 });

// ─── In-memory token state (server-side only, never sent to the browser) ──────
let accessToken = null;
let refreshToken = null;
let refreshTimer = null;

async function login() {
  const { data } = await ddin.post("/agency/auth/login", {
    username: DDIN_USERNAME,
    password: DDIN_PASSWORD,
  });

  accessToken =
    data?.data?.accessToken || data?.data?.token || data?.accessToken || data?.token;
  refreshToken = data?.data?.refreshToken || data?.refreshToken || null;

  if (!accessToken) {
    throw new Error("DDIN login succeeded but no access token was returned.");
  }

  scheduleRefresh();
  return accessToken;
}

async function refresh() {
  if (!refreshToken) return login();
  try {
    const { data } = await ddin.post("/agency/auth/refresh-token", {
      refreshToken,
    });
    const token =
      data?.data?.accessToken || data?.data?.token || data?.accessToken || data?.token;
    const newRefresh = data?.data?.refreshToken || data?.refreshToken;
    if (!token) throw new Error("No token in refresh response");
    accessToken = token;
    if (newRefresh) refreshToken = newRefresh;
    scheduleRefresh();
    return accessToken;
  } catch (err) {
    // Refresh failed (expired, revoked, etc) — fall back to a fresh login
    return login();
  }
}

function scheduleRefresh() {
  clearTimeout(refreshTimer);
  // Refresh proactively every 25 minutes, matching the original frontend behavior
  refreshTimer = setTimeout(() => {
    refresh().catch((err) => {
      console.error("DDIN token refresh failed:", err.message);
    });
  }, 25 * 60 * 1000);
  refreshTimer.unref?.(); // don't keep the process alive just for this timer
}

async function ensureAuth() {
  if (!accessToken) await login();
  return accessToken;
}

function authHeaders() {
  return { Authorization: `Bearer ${accessToken}` };
}

// Wraps a DDIN call: ensures auth, retries once after a fresh login on 401.
async function callAuthed(requestFn) {
  await ensureAuth();
  try {
    return await requestFn();
  } catch (err) {
    if (err?.response?.status === 401) {
      await login();
      return await requestFn();
    }
    throw err;
  }
}

// ─── Public DDIN operations used by our routes ─────────────────────────────────

async function getMainBalance() {
  const { data } = await callAuthed(() =>
    ddin.get("/agency/accounts/main/balance", { headers: authHeaders() }),
  );
  return data;
}

async function validateBiller({ billerCode, productCode, customerId }) {
  const { data } = await ddin.post("/agency/thirdpartyagency/services/validate/biller", {
    billerCode,
    productCode,
    customerId,
  });
  return data;
}

async function executeBillPayment({
  email,
  clientPhone,
  customerId,
  billerCode,
  productCode,
  amount,
  ccy = "RWF",
  requestId,
}) {
  const { data } = await callAuthed(() =>
    ddin.post(
      "/agency/thirdpartyagency/services/execute/bill-payment",
      { email, clientPhone, customerId, billerCode, productCode, amount: String(amount), ccy, requestId },
      { headers: authHeaders() },
    ),
  );
  return data;
}

async function initiateCollection({
  provider = "mtn",
  customerAccountNumber,
  customerName,
  amount,
  referenceId,
  description = "",
}) {
  if (!DDIN_COLLECTION_API_KEY) {
    throw new Error("Missing DDIN_COLLECTION_API_KEY in environment.");
  }
  const { data } = await callAuthed(() =>
    ddin.post(
      "/thirdparty/collection/initiate",
      {
        provider,
        customerAccountNumber,
        customerName,
        currencyCode: "RWF",
        amount: String(parseFloat(amount).toFixed(2)),
        referenceId,
        additionalProperties: { description },
      },
      {
        headers: {
          ...authHeaders(),
          "X-API-key": DDIN_COLLECTION_API_KEY,
        },
      },
    ),
  );
  return data;
}

async function getCollectionStatus(operationId) {
  const { data } = await callAuthed(() =>
    ddin.get(`/thirdparty/collection/operation/${operationId}`, {
      headers: authHeaders(),
    }),
  );
  return data;
}

async function getBillPaymentTransactionDetails(txId) {
  const { data } = await ddin.get(`/agency/thirdpartyagency/services/transaction/details/${txId}`);
  return data;
}

module.exports = {
  login,
  validateBiller,
  executeBillPayment,
  initiateCollection,
  getCollectionStatus,
  getBillPaymentTransactionDetails,
  getMainBalance,
};
