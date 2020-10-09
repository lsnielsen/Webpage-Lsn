
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
                <th scope="row" class="theAsset" onclick="assetsPage('gold')">Guld</th>
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
                <th scope="row" class="theAsset" onclick="assetsPage('euro/usd')">Euro/USD</th>
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
                <th scope="row" class="theAsset" onclick="assetsPage('oil')">Olie</th>
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
                <th scope="row" class="theAsset" onclick="assetsPage('silver')">Sølv</th>
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
                <th scope="row" class="theAsset" onclick="assetsPage('google')">Google / Alphabet</th>
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
                <th scope="row" class="theAsset" onclick="assetsPage('bitcoin')">Bitcoin</th>
                <td id="bitcoinVal"></td>
                <td id="bitcoinChange"></td>
                <td id="bitcoinPercentage"></td>
                <td>
                    <a href="https://www.marketwatch.com/investing/cryptocurrency/btcusd" target="_blank">
                        marketwatch.com/bitcoin
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row" class="theAsset" onclick="assetsPage('astralis')">Astralis Group</th>
                <td id="astralisVal"></td>
                <td id="astralisChange"></td>
                <td id="astralisPercentage"></td>
                <td>
                    <a href="https://www.marketwatch.com/investing/stock/astgrp?countrycode=dk" target="_blank">
                        marketwatch.com/astralis
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
        getAstralisData();
    }
    function assetsPage(page) {
        const form = document.createElement("form");
        form.action = "/Webpage-Lsn/controller/stock.php";
        document.cookie = "stockButton=" + page;
        $(document.body).append(form);
        form.submit();
    }
</script>
