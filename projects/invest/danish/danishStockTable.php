
    <table class="table table-hover table-dark table-bordered">
        <thead>
            <tr>
                <th scope="col">Dato</th>
                <th scope="col">Købspris</th>
                <th scope="col">Aktiv</th>
                <th scope="col">Antal aktier</th>
                <th scope="col">Pris/aktie</th>
                <th scope="col">Kurs</th>
                <th scope="col">Tab/gevinst per aktie</th>
                <th scope="col">Procentvis ændring per aktie</th>
                <th scope="col">Samlet resultat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td id="astralisDate"> </td>
                <td id="astralisPrice">  </td>
                <td id="astralisName" scope="row" class="theAsset" onclick="assetsPage('astralis')"></td>
                <td id="astralisStocks"></td>
                <td id="astralisStockPrice"></td>
                <td id="astralisVal"></td>
                <td id="astralisStockResult"></td>
                <td id="astralisPercentage"></td>
                <td id="astralisResult"></td>
            </tr>
            <tr>
                <td id="novoDate"></td>
                <td id="novoPrice"></td>
                <td id="novoName" scope="row" class="theAsset" onclick="assetsPage('novo')"></td>
                <td id="novoStocks"></td>
                <td id="novoStockPrice"></td>
                <td id="novoVal"></td>
                <td id="novoStockResult"></td>
                <td id="novoPercentage"></td>
                <td id="novoResult"></td>
            </tr>
        </tbody>
    </table>
