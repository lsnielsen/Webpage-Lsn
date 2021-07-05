
<html>

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
    let usdDkkCurrency;
    let totalDanishBuyValue;
    let currentTotaldanishValue;
    let totalDanishWinLoss

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
            }, Math.floor(Math.random() * 40000) + 2000);
        }
    });

    function setDanishResultValues()
    {
        totalDanishBuyValue = (astralisPrice + novoPrice).toFixed(2);
        currentTotaldanishValue = ((currentAstralisValue * astralisStocks) + (currentNovoValue * novoStocks)).toFixed(2);
        totalDanishWinLoss = (currentTotaldanishValue - totalDanishBuyValue).toFixed(2);
        $("#totalDanishBuyValue").text(totalDanishBuyValue);
        $("#currentTotalDanishValue").text(currentTotaldanishValue);
        $("#totalDanishWinLoss").text(totalDanishWinLoss);
        textColor(totalDanishWinLoss, "#totalDanishWinLoss");
    }

    function textColor(value, field)
    {
        if (value < 0) {
            $(field).css("color", "red");
        } else {
            $(field).css("color", "green");
        }
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
        let novoRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let novoMatch = novoRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (novoMatch !== null) {
            currentNovoValue = novoMatch[1] * usdDkkCurrency;
        } else if (closeMatch !== null) {
            currentNovoValue = closeMatch[1] * usdDkkCurrency;
        }
    }

</script>

</html>
