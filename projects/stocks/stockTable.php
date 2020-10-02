
    <table class="table table-hover table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col">Aktiv</th>
                <th scope="col">Ændring i %</th>
                <th scope="col">Værdi USD</th>
                <th scope="col">Ændring</th>
                <th scope="col">Link</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Guld</th>
                <td id="goldPercentage"></td>
                <td id="goldVal"></td>
                <td id="goldChange"></td>
                <td>
                    <a href="https://www.marketwatch.com/investing/stock/gold" target="_blank">
                        marketwatch.com/gold
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row">Euro/USD</th>
                <td id="euroPercentage"></td>
                <td id="euroVal"></td>
                <td id="euroChange"></td>
                <td>
                    <a href="https://www.marketwatch.com/investing/currency/eurusd" target="_blank">
                        marketwatch.com/eurusd
                    </a>
                </td>
            </tr>
            <tr>
                <th scope="row">Olie</th>
                <td id="oilPercentage"></td>
                <td id="oilVal"></td>
                <td id="oilChange"></td>
                <td>
                    <a href="https://www.marketwatch.com/investing/fund/oil" target="_blank">
                        marketwatch.com/oil
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
    }
</script>

<style>
    td, th{
        text-align: center;
    }
</style>