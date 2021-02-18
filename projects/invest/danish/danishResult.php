


<div class="container-sm">
    <table class="table table-bordered align-middle table-primary">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Købspris</th>
                <th scope="col">Nuværende pris</th>
                <th scope="col">Gevinst \ tab</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Samlet</th>
                <td id="totalDanishBuyValue"></td>
                <td id="currentTotalDanishValue"></td>
                <td id="totalDanishWinLoss"></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    let currentAstralisValue;
    let currentNovoValue;

    $( document ).ready(function() {
        callTotalDanishUrl();
        function callTotalDanishUrl() {
            const astralisUrl = "https://www.marketwatch.com/investing/stock/astgrp?countrycode=dk";
            const novoUrl = "https://www.marketwatch.com/investing/stock/nvo";
            $.get( astralisUrl, function( astralisData ) {
                getAstralisResultValue(astralisData);
            }, 'html');
            $.get(novoUrl, function (novoData) {
                getNovoResultValue(novoData);
            }, 'html');
            setDanishResultValues();
            setTimeout(function () {
                callTotalDanishUrl();
            }, 2000);
        }
    });

    function setDanishResultValues()
    {
        console.log("astalis: " + currentAstralisValue + ", and novo: " + currentNovoValue);
        let totalBuyValue = astralisPrice + novoPrice;
        let currentTotalValue = ((currentAstralisValue * astralisStocks) + (currentNovoValue * novoStocks)).toFixed(2);
        let totalWinLoss = (currentTotalValue - totalBuyValue).toFixed(2);
        $("#totalDanishBuyValue").text(totalBuyValue);
        $("#currentTotalDanishValue").text(currentTotalValue);
        $("#totalDanishWinLoss").text(totalWinLoss);
    }

    function getAstralisResultValue(data)
    {
        let astralisRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let astralisMatch = astralisRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (astralisMatch !== null) {
            currentAstralisValue = astralisMatch[1];
        } else if (closeMatch !== null) {
            currentAstralisValue = closeMatch[1];
        }
    }

    function getNovoResultValue(data)
    {
        getCurrency();
        let novoRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let novoMatch = novoRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (novoMatch !== null) {
            currentNovoValue = novoMatch[1] * theCurrency;
        } else if (closeMatch !== null) {
            currentNovoValue = closeMatch[1] * theCurrency;
        }
    }

</script>
