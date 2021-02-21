


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
                <td id="totalForeignBuyValue"></td>
                <td id="currentTotalForeignValue"></td>
                <td id="totalForeignWinLoss"></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    let currentColaValue;
    let currentDisneyValue;
    let foreignUsdDkkCurrency;

    $( document ).ready(function() {
        callTotalForeignUrl();
        function callTotalForeignUrl() {
            const colaUrl = "https://www.marketwatch.com/investing/stock/astgrp?countrycode=dk";
            const disneyUrl = "https://www.marketwatch.com/investing/stock/nvo";
            $.get( colaUrl, function( colaData ) {
                getColaResultValue(colaData);
            }, 'html');
            $.get(disneyUrl, function (disneyData) {
                getDisneyResultValue(disneyData);
            }, 'html');
            getForeignUsdDkkCurrency();
            setForeignResultValues();
            setTimeout(function () {
                callTotalForeignUrl();
            }, 2000);
        }
    });

    function setForeignResultValues()
    {
        let totalBuyValue = colaPrice + disneyPrice;
        let currentTotalValue = ((currentColaValue * colaStocks) + (currentDisneyValue * disneyStocks)).toFixed(2);
        let totalWinLoss = (currentTotalValue - totalBuyValue).toFixed(2);
        $("#totalForeignBuyValue").text(totalBuyValue);
        $("#currentTotalForeignValue").text(currentTotalValue);
        $("#totalForeignWinLoss").text(totalWinLoss);
    }

    function getColaResultValue(data)
    {
        let colaRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let colaMatch = colaRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (colaMatch !== null) {
            currentColaValue = colaMatch[1];
        } else if (closeMatch !== null) {
            currentColaValue = closeMatch[1];
        }
    }

    function getDisneyResultValue(data)
    {
        let disneyRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let disneyMatch = disneyRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (disneyMatch !== null) {
            currentDisneyValue = disneyMatch[1] * foreignUsdDkkCurrency;
        } else if (closeMatch !== null) {
            currentDisneyValue = closeMatch[1] * foreignUsdDkkCurrency;
        }
    }

    function getForeignUsdDkkCurrency()
    {
        let url = "https://themoneyconverter.com/USD/DKK";
        $.get(url ,function( data ) {
            let currencyRegex = /1 usd = ([0-9]{1,2}\.[0-9]{4}) dkk/i;
            let currencyMatch = currencyRegex.exec(data);
            if (currencyMatch !== null) {
                foreignUsdDkkCurrency = currencyMatch[1];
            } else {
                foreignUsdDkkCurrency = 1;
            }
        }, 'html' );
    }

</script>
