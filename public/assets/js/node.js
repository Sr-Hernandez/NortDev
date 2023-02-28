const fetch = require("node-fetch");

const getBtcPrice = async () => {
  const response = await fetch(
    "https://api.coinbase.com/v2/prices/BTC-USD/spot"
  );
  const data = await response.json();
  return data.data.amount;
};

module.exports = getBtcPrice;