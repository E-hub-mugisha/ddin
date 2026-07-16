// server.js
// ---------------------------------------------------------------------------
// Minimal proxy between your React app and core-api.ddin.rw.
//
// What it does:
//   - Logs into DDIN once (agency/auth/login), keeps the bearer token in memory,
//     and refreshes it (agency/auth/refresh-token) shortly before it expires.
//   - Exposes two routes for the React app to call instead of DDIN directly:
//       POST /api/validate   -> DDIN agency/thirdpartyagency/services/validate/biller
//       POST /api/execute    -> DDIN agency/thirdpartyagency/services/execute/bill-payment
//                                (or thirdparty/collection/initiate for MoMo top-ups)
//   - Because these calls happen server-to-server, the browser's CORS restrictions
//     don't apply, and the DDIN credentials/tokens never reach the browser bundle.
//
// This is intentionally a single file with no framework beyond Express, so it can
// run anywhere Node runs (your laptop, a small VPS, Render, Railway, etc.).
// ---------------------------------------------------------------------------

require("dotenv").config();
const express = require("express");
const cors = require("cors");

const app = express();
app.use(cors()); // for local dev; see step 5 below to restrict this before deploying
app.use(express.json());

// ---------------------------------------------------------------------------
// Config — pull from environment variables, not hardcoded, so this file is safe
// to commit to git. See the .env setup in the steps below.
// ---------------------------------------------------------------------------
const DDIN_BASE_URL = process.env.DDIN_BASE_URL || "https://core-api.ddin.rw/v1";
const DDIN_USERNAME = process.env.DDIN_USERNAME;
const DDIN_PASSWORD = process.env.DDIN_PASSWORD;
const DDIN_X_API_KEY = process.env.DDIN_X_API_KEY; // needed for MoMo collection/initiate calls
const PORT = process.env.PORT || 4000;

if (!DDIN_USERNAME || !DDIN_PASSWORD) {
  console.error("Missing DDIN_USERNAME / DDIN_PASSWORD environment variables. See README steps.");
  process.exitCode = 1;
  return;
}

// ---------------------------------------------------------------------------
// In-memory session (token, refresh token, expiry). Lives only in this process's
// memory — never written to disk, and never sent to the browser.
// ---------------------------------------------------------------------------
const session = {
  token: null,
  refreshToken: null,
  expiresAt: 0,
  refreshTimer: null,
};

async function ddinFetch(path, { method = "GET", headers = {}, body } = {}) {
  const res = await fetch(`${DDIN_BASE_URL}${path}`, {
    method,
    headers: { "Content-Type": "application/json", ...headers },
    body: body ? JSON.stringify(body) : undefined,
  });
  const data = await res.json().catch(() => ({}));
  if (!res.ok) {
    const err = new Error(data?.message || data?.error || `DDIN request failed (${res.status})`);
    err.status = res.status;
    throw err;
  }
  return data;
}

function applySession(data) {
  const token = data.token || data.accessToken || data.jwt;
  const refreshToken = data.refreshToken || session.refreshToken;

  let expiresAt;
  try {
    const payload = JSON.parse(Buffer.from(token.split(".")[1], "base64").toString("utf8"));
    expiresAt = payload.exp ? payload.exp * 1000 : Date.now() + 55 * 60 * 1000;
  } catch {
    expiresAt = Date.now() + 55 * 60 * 1000;
  }

  session.token = token;
  session.refreshToken = refreshToken;
  session.expiresAt = expiresAt;

  if (session.refreshTimer) clearTimeout(session.refreshTimer);
  const msUntilRefresh = Math.max(expiresAt - Date.now() - 60_000, 10_000);
  session.refreshTimer = setTimeout(refreshSession, msUntilRefresh);
  console.log(`[ddin] session refreshed, next refresh in ${Math.round(msUntilRefresh / 1000)}s`);
}

async function login() {
  const data = await ddinFetch("/agency/auth/login", {
    method: "POST",
    body: { username: DDIN_USERNAME, password: DDIN_PASSWORD },
  });
  applySession(data);
}

async function refreshSession() {
  if (!session.refreshToken) return login();
  try {
    const data = await ddinFetch("/agency/auth/refresh-token", {
      method: "POST",
      body: { refreshToken: session.refreshToken },
    });
    applySession(data);
  } catch (err) {
    console.warn("[ddin] refresh failed, falling back to fresh login:", err.message);
    await login();
  }
}

async function authHeader() {
  if (!session.token || Date.now() > session.expiresAt - 30_000) {
    await (session.token ? refreshSession() : login());
  }
  return { Authorization: `Bearer ${session.token}` };
}

// ---------------------------------------------------------------------------
// Routes consumed by the React app
// ---------------------------------------------------------------------------

app.get("/api/health", (req, res) => {
  res.json({ ok: true, hasSession: !!session.token });
});

app.post("/api/validate", async (req, res) => {
  const { billerCode, productCode, customerId } = req.body || {};
  if (!billerCode || !productCode || !customerId) {
    return res.status(400).json({ message: "billerCode, productCode, and customerId are required." });
  }
  try {
    const data = await ddinFetch("/agency/thirdpartyagency/services/validate/biller", {
      method: "POST",
      body: { billerCode, productCode, customerId },
    });
    res.json(data);
  } catch (err) {
    res.status(err.status || 502).json({ message: err.message });
  }
});

app.post("/api/execute", async (req, res) => {
  const { billerCode, productCode, customerId, clientPhone, amount, ccy, requestId, isMomoCollection } = req.body || {};
  if (!billerCode || !customerId || !amount || !requestId) {
    return res.status(400).json({ message: "billerCode, customerId, amount, and requestId are required." });
  }
  try {
    if (isMomoCollection) {
      const headers = { ...(await authHeader()), "X-API-key": DDIN_X_API_KEY };
      const data = await ddinFetch("/thirdparty/collection/initiate", {
        method: "POST",
        headers,
        body: {
          provider: billerCode,
          customerAccountNumber: String(clientPhone || customerId).replace(/\D/g, ""),
          customerName: customerId,
          currencyCode: ccy || "RWF",
          amount: String(amount),
          referenceId: requestId,
          additionalProperties: { description: `Payment for ${billerCode}` },
        },
      });
      return res.json(data);
    }

    const headers = await authHeader();
    const data = await ddinFetch("/agency/thirdpartyagency/services/execute/bill-payment", {
      method: "POST",
      headers,
      body: { clientPhone, customerId, billerCode, productCode, amount: String(amount), ccy: ccy || "RWF", requestId },
    });
    res.json(data);
  } catch (err) {
    res.status(err.status || 502).json({ message: err.message });
  }
});

app.get("/api/balance", async (req, res) => {
  try {
    const headers = await authHeader();
    const data = await ddinFetch("/agency/accounts/main/balance", { headers });
    res.json(data);
  } catch (err) {
    res.status(err.status || 502).json({ message: err.message });
  }
});

// ---------------------------------------------------------------------------
// Startup — log in once immediately so the first request from React doesn't stall
// ---------------------------------------------------------------------------
login()
  .then(() => {
    app.listen(PORT, () => console.log(`DDIN proxy listening on http://localhost:${PORT}`));
  })
  .catch((err) => {
    console.error("Initial DDIN login failed:", err.message);
    console.error("Check DDIN_USERNAME / DDIN_PASSWORD / DDIN_BASE_URL in your .env file.");
    process.exitCode = 1; // let Node shut down naturally instead of process.exit(1),
                          // which can crash with an assertion error on Windows/libuv
                          // when called immediately after an async rejection.
  });