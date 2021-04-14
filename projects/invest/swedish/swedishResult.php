


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
                <td id="totalSwedishBuyValue"></td>
                <td id="currentTotalSwedishValue"></td>
                <td id="totalSwedishWinLoss"></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    let currentKahootValue;
    let usdDkkCurrency;
    let totalSwedishBuyValue;
    let currentTotalswedishValue;
    let totalSwedishWinLoss

    $( document ).ready(function() {
        callTotalSwedishUrl();
        function callTotalSwedishUrl() {
            const kahootUrl = "https://www.marketwatch.com/investing/stock/kahot?countrycode=no";
            $.get( kahootUrl, function( kahootData ) {
                getKahootResultValue(kahootData);
            }, 'html');
            getUsdDkkCurrency();
            setSwedishResultValues();
            setTimeout(function () {
                callTotalSwedishUrl();
            }, 2000);
        }
    });

    function setSwedishResultValues()
    {
        totalSwedishBuyValue = (kahootPrice).toFixed(2);
        currentTotalswedishValue = ((currentKahootValue * kahootStocks)).toFixed(2);
        totalSwedishWinLoss = (currentTotalswedishValue - totalSwedishBuyValue).toFixed(2);
        $("#totalSwedishBuyValue").text(totalSwedishBuyValue);
        $("#currentTotalSwedishValue").text(currentTotalswedishValue);
        $("#totalSwedishWinLoss").text(totalSwedishWinLoss);
        textColor(totalSwedishWinLoss, "#totalSwedishWinLoss");
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

    function getUsdDkkCurrency()
    {
        let url = "https://themoneyconverter.com/USD/DKK";
        $.get(url ,function( data ) {
            let currencyRegex = /1 usd = ([0-9]{1,2}\.[0-9]{4}) dkk/i;
            let currencyMatch = currencyRegex.exec(data);
            if (currencyMatch !== null) {
                usdDkkCurrency = currencyMatch[1];
            } else {
                usdDkkCurrency = 1;
            }
        }, 'html' );
    }

</script>
