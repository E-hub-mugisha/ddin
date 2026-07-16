const express = require("express");
const router = express.Router();

// Same catalog that used to live in the React component (SERVICES array).
// Moved server-side so the frontend has one source of truth and this file
// can evolve independently of the UI.
const SERVICES = [
  { id: "wasac", name: "WASAC water bill", category: "Utilities", billerCode: "wasac", productCode: "wasac", isMomoCollection: false },
  { id: "reco", name: "REG electricity", category: "Utilities", billerCode: "reco", productCode: "reco", isMomoCollection: false },
  { id: "tax", name: "RRA tax payment", category: "Government", billerCode: "tax", productCode: "tax", isMomoCollection: false },
  { id: "irembo", name: "Irembo e-services", category: "Government", billerCode: "irembo", productCode: "irembo", isMomoCollection: false },
  { id: "rssb", name: "RSSB contributions", category: "Government", billerCode: "rssb", productCode: "rssb", isMomoCollection: false },
  { id: "mpost", name: "Rwanda Post (MPost)", category: "Government", billerCode: "mpost", productCode: "mpost", isMomoCollection: false },
  { id: "mtn", name: "MTN airtime & data", category: "Telecom", billerCode: "mtn", productCode: "airtime", isMomoCollection: true },
  { id: "airtel", name: "Airtel airtime", category: "Telecom", billerCode: "airtel", productCode: "airtime", isMomoCollection: true },
  { id: "bk", name: "Bank of Kigali", category: "Financial", billerCode: "bk", productCode: "bk", isMomoCollection: false },
  { id: "spenn", name: "SPENN wallet", category: "Financial", billerCode: "spenn", productCode: "spenn", isMomoCollection: true },
  { id: "ecobank", name: "Ecobank transfer", category: "Financial", billerCode: "ecobank", productCode: "ecobank", isMomoCollection: false },
  { id: "school", name: "School fees", category: "Financial", billerCode: "school", productCode: "school", isMomoCollection: false },
];

router.get("/", (req, res) => {
  res.json(SERVICES);
});

module.exports = router;
