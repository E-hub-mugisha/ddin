const express = require("express");
const { randomUUID } = require("crypto");
const ddin = require("../lib/ddinClient");

const router = express.Router();

// Keep this in sync with routes/services.js — a tiny lookup so we know
// which DDIN flow (MoMo collection vs bill payment) a given serviceId maps to.
const SERVICE_MAP = {
  wasac: { billerCode: "wasac", productCode: "wasac", isMomoCollection: false },
  reco: { billerCode: "reco", productCode: "reco", isMomoCollection: false },
  tax: { billerCode: "tax", productCode: "tax", isMomoCollection: false },
  irembo: { billerCode: "irembo", productCode: "irembo", isMomoCollection: false },
  rssb: { billerCode: "rssb", productCode: "rssb", isMomoCollection: false },
  mpost: { billerCode: "mpost", productCode: "mpost", isMomoCollection: false },
  mtn: { billerCode: "mtn", productCode: "airtime", isMomoCollection: true, provider: "mtn" },
  airtel: { billerCode: "airtel", productCode: "airtime", isMomoCollection: true, provider: "airtel" },
  bk: { billerCode: "bk", productCode: "bk", isMomoCollection: false },
  spenn: { billerCode: "spenn", productCode: "spenn", isMomoCollection: true, provider: "mtn" },
  ecobank: { billerCode: "ecobank", productCode: "ecobank", isMomoCollection: false },
  school: { billerCode: "school", productCode: "school", isMomoCollection: false },
};

function toE164(phone) {
  const raw = String(phone || "").replace(/\s/g, "");
  return raw.startsWith("0") ? `250${raw.slice(1)}` : raw;
}

// POST /api/payments/initiate
// body: { serviceId, phoneNumber, amount, customerId?, email?, customerName? }
router.post("/initiate", async (req, res) => {
  const { serviceId, phoneNumber, amount, customerId, email, customerName } = req.body || {};

  const service = SERVICE_MAP[serviceId];
  if (!service) {
    return res.status(400).json({ message: `Unknown serviceId: ${serviceId}` });
  }
  if (!phoneNumber || !amount) {
    return res.status(400).json({ message: "phoneNumber and amount are required." });
  }

  const referenceId = randomUUID();

  try {
    if (service.isMomoCollection) {
      const data = await ddin.initiateCollection({
        provider: service.provider,
        customerAccountNumber: toE164(phoneNumber),
        customerName: customerName || "Customer",
        amount,
        referenceId,
        description: `${serviceId} payment`,
      });
      const operationId = data?.data?.operationId || data?.operationId || referenceId;
      return res.json({ referenceId: operationId, raw: data });
    }

    // Non-MoMo services go through validate -> execute bill-payment
    if (!customerId) {
      return res.status(400).json({ message: "customerId is required for this service." });
    }

    await ddin.validateBiller({
      billerCode: service.billerCode,
      productCode: service.productCode,
      customerId,
    });

    const data = await ddin.executeBillPayment({
      email,
      clientPhone: phoneNumber,
      customerId,
      billerCode: service.billerCode,
      productCode: service.productCode,
      amount,
      requestId: referenceId,
    });

    const txId = data?.data?.transactionId || data?.transactionId || referenceId;
    return res.json({ referenceId: txId, raw: data });
  } catch (err) {
    const message = err?.response?.data?.message || err.message || "Failed to initiate payment";
    return res.status(err?.response?.status || 502).json({ message });
  }
});

// GET /api/payments/status/:referenceId
// Tries the MoMo collection status endpoint first, falls back to bill-payment
// transaction details, since we don't track which flow a referenceId came from.
router.get("/status/:referenceId", async (req, res) => {
  const { referenceId } = req.params;

  try {
    const data = await ddin.getCollectionStatus(referenceId);
    const status = normalizeStatus(data?.data?.status || data?.status);
    return res.json({ status, raw: data });
  } catch (err) {
    // Fall back to bill-payment transaction lookup
    try {
      const data = await ddin.getBillPaymentTransactionDetails(referenceId);
      const status = normalizeStatus(data?.data?.status || data?.status);
      return res.json({ status, raw: data });
    } catch (err2) {
      const message = err2?.response?.data?.message || err2.message || "Failed to check payment status";
      return res.status(err2?.response?.status || 502).json({ message });
    }
  }
});

function normalizeStatus(raw) {
  const s = String(raw || "").toLowerCase();
  if (["successful", "success", "completed"].includes(s)) return "SUCCESSFUL";
  if (["failed", "error", "declined"].includes(s)) return "FAILED";
  return "PENDING";
}

module.exports = router;
