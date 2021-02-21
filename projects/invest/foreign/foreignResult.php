


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
    let currentVisaValue;
    let currentMcDonaldValue;
    let currentGmValue;
    let currentFordValue;
    let foreignUsdDkkCurrency;

    $( document ).ready(function() {
        callTotalForeignUrl();
        function callTotalForeignUrl() {
            const mcDonaldUrl = "https://www.marketwatch.com/investing/stock/mcd";
            const colaUrl = "https://www.marketwatch.com/investing/stock/ko";
            const disneyUrl = "https://www.marketwatch.com/investing/stock/dis";
            const visaUrl = "https://www.marketwatch.com/investing/stock/v";
            const fordUrl = "https://www.marketwatch.com/investing/stock/f";
            const gmUrl = "https://www.marketwatch.com/investing/stock/gm";
            $.get( gmUrl, function( gmData ) {
                getGmResultValue(gmData);
            }, 'html');
            $.get( fordUrl, function( fordData ) {
                getFordResultValue(fordData);
            }, 'html');
            $.get( mcDonaldUrl, function( mcDonaldData ) {
                getMcDonaldResultValue(mcDonaldData);
            }, 'html');
            $.get( colaUrl, function( colaData ) {
                getColaResultValue(colaData);
            }, 'html');
            $.get(disneyUrl, function (disneyData) {
                getDisneyResultValue(disneyData);
            }, 'html');
            $.get(visaUrl, function (visaData) {
                getVisaResultValue(visaData);
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
        let totalBuyValue = (colaPrice + disneyPrice + fordPrice + visaPrice + gmPrice + mcDonaldPrice).toFixed(2);
        let currentTotalValue = ((currentColaValue * colaStocks) +
            (currentDisneyValue * disneyStocks) + (currentFordValue * fordStocks) +
            (currentVisaValue * visaStocks) + (currentGmValue * gmStocks) +
            (currentMcDonaldValue * mcDonaldStocks)).toFixed(2);
        let totalWinLoss = (currentTotalValue - totalBuyValue).toFixed(2);
        $("#totalForeignBuyValue").text(totalBuyValue);
        $("#currentTotalForeignValue").text(currentTotalValue);
        $("#totalForeignWinLoss").text(totalWinLoss);
    }

    function getMcDonaldResultValue(data)
    {
        let mcDonaldRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let mcDonaldMatch = mcDonaldRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (mcDonaldMatch !== null) {
            currentMcDonaldValue = mcDonaldMatch[1];
        } else if (closeMatch !== null) {
            currentMcDonaldValue = closeMatch[1];
        }
    }

    function getFordResultValue(data)
    {
        let fordRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let fordMatch = fordRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (fordMatch !== null) {
            currentFordValue = fordMatch[1];
        } else if (closeMatch !== null) {
            currentFordValue = closeMatch[1];
        }
    }

    function getGmResultValue(data)
    {
        let gmRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let gmMatch = gmRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (gmMatch !== null) {
            currentGmValue = gmMatch[1];
        } else if (closeMatch !== null) {
            currentGmValue = closeMatch[1];
        }
    }

    function getVisaResultValue(data)
    {
        let visaRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let visaMatch = visaRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (visaMatch !== null) {
            currentVisaValue = visaMatch[1];
        } else if (closeMatch !== null) {
            currentVisaValue = closeMatch[1];
        }
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
