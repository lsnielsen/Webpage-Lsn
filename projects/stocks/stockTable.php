
    <table class="table table-hover table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col">Aktiv</th>
                <th scope="col">Værdi USD</th>
                <th scope="col">Ændring</th>
                <th scope="col">Ændring i %</th>
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row" class="theAsset" onclick="assetPage('gold')">Guld</th>
                <td id="goldVal"></td>
                <td id="goldChange"></td>
                <td id="goldPercentage"></td>
                <td>
                    <a href="https://www.marketwatch.com/investing/stock/gold" target="_blank">
                        marketwatch.com/gold
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row" class="theAsset" onclick="assetPage('euro/usd')">Euro/USD</th>
                <td id="euroVal"></td>
                <td id="euroChange"></td>
                <td id="euroPercentage"></td>
                <td>
                    <a href="https://www.marketwatch.com/investing/currency/eurusd" target="_blank">
                        marketwatch.com/eurusd
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row" class="theAsset" onclick="assetPage('oil')">Olie</th>
                <td id="oilVal"></td>
                <td id="oilChange"></td>
                <td id="oilPercentage"></td>
                <td>
                    <a href="https://www.marketwatch.com/investing/fund/oil" target="_blank">
                        marketwatch.com/oil
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row" class="theAsset" onclick="assetPage('silver')">Sølv</th>
                <td id="silverVal"></td>
                <td id="silverChange"></td>
                <td id="silverPercentage"></td>
                <td>
                    <a href="https://www.marketwatch.com/investing/future/si00" target="_blank">
                        marketwatch.com/silver
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row" class="theAsset" onclick="assetPage('google')">Google / Alphabet</th>
                <td id="googleVal"></td>
                <td id="googleChange"></td>
                <td id="googlePercentage"></td>
                <td>
                    <a href="https://www.marketwatch.com/investing/stock/googl" target="_blank">
                        marketwatch.com/google
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row" class="theAsset" onclick="assetPage('bitcoin')">Bitcoin</th>
                <td id="bitcoinVal"></td>
                <td id="bitcoinChange"></td>
                <td id="bitcoinPercentage"></td>
                <td>
                    <a href="https://www.marketwatch.com/investing/cryptocurrency/btcusd" target="_blank">
                        marketwatch.com/bitcoin
                    </a>
                </td>
            </tr>
        </tbody>
    </table>

<script>
    function getStockData()
    {
        getEuroUsdData();
        getGoldData();
        getOilData();
        getSilverData();
        getGoogleData();
        getBitcoinData();
    }
    function assetPage(page) {
        const form = document.createElement("form");
        form.action = "/Webpage-Lsn/controller/stock.php";
        document.cookie = "stockButton=" + page;
        $(document.body).append(form);
        form.submit();
    }
</script>

<style>
    td, th{
        text-align: center;
    }
    .theAsset {
        cursor: pointer;
    }
</style>