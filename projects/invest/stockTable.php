
    <table class="table table-hover table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col">Dato</th>
                <th scope="col">Købspris</th>
                <th scope="col">Aktiv</th>
                <th scope="col">Antal aktier</th>
                <th scope="col">Pris/aktie</th>
                <th scope="col">Kurs</th>
                <th scope="col">Tab/Gevinst</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="astralisDate"></td>
                <td id="astralisPrice"></td>
                <th scope="row" class="theAsset" onclick="assetsPage('astralis')">Astralis Group</th>
                <td id="astralisStocks"></td>
                <td id="astralisStockPrice"></td>
                <td id="astralisVal"></td>
                <td id="astralisResult"></td>
            </tr>
            <tr>
                <td id="novoDate"></td>
                <td id="novoPrice"></td>
                <th scope="row" class="theAsset" onclick="assetsPage('novo')">Novo Nordisk</th>
                <td id="novoStocks"></td>
                <td id="novoStockPrice"></td>
                <td id="novoVal"></td>
                <td id="novoResult"></td>
            </tr>
        </tbody>
    </table>

<script>
    function getInvestData()
    {
        getAstralisData();
        getNovoData();
    }
    function assetsPage(page) {
        const form = document.createElement("form");
        form.action = "/Webpage-Lsn/controller/stock.php";
        document.cookie = "stockButton=" + page;
        $(document.body).append(form);
        form.submit();
    }
</script>
