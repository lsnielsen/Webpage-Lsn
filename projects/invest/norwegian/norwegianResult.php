


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
                <td id="totalNorwegianBuyValue"></td>
                <td id="currentTotalNorwegianValue"></td>
                <td id="totalNorwegianWinLoss"></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    let currentKahootValue;
    let totalNorwegianBuyValue;
    let currentTotalnorwegianValue;
    let totalNorwegianWinLoss

    $( document ).ready(function() {
        callTotalNorwegianUrl();
        function callTotalNorwegianUrl() {
            const kahootUrl = "https://www.marketwatch.com/investing/stock/kahot?countrycode=no";
            $.get( kahootUrl, function( kahootData ) {
                getKahootResultValue(kahootData);
            }, 'html');
            getUsdDkkCurrency();
            setNorwegianResultValues();
            setTimeout(function () {
                callTotalNorwegianUrl();
            }, 3250);
        }
    });

    function setNorwegianResultValues()
    {
        totalNorwegianBuyValue = (kahootPrice).toFixed(2);
        currentTotalnorwegianValue = ((currentKahootValue * kahootStocks)).toFixed(2);
        totalNorwegianWinLoss = (currentTotalnorwegianValue - totalNorwegianBuyValue).toFixed(2);
        $("#totalNorwegianBuyValue").text(totalNorwegianBuyValue);
        $("#currentTotalNorwegianValue").text(currentTotalnorwegianValue);
        $("#totalNorwegianWinLoss").text(totalNorwegianWinLoss);
        textColor(totalNorwegianWinLoss, "#totalNorwegianWinLoss");
    }

    function textColor(value, field)
    {
        if (value < 0) {
            $(field).css("color", "red");
        } else {
            $(field).css("color", "green");
        }
    }

    function getKahootResultValue(data)
    {
        let kahootRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let kahootMatch = kahootRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (kahootMatch !== null) {
            currentKahootValue = kahootMatch[1];
        } else if (closeMatch !== null) {
            currentKahootValue = closeMatch[1];
        }
    }

</script>
