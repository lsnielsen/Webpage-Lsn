


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
                <td id="totalFundsBuyValue"></td>
                <td id="currentTotalFundsValue"></td>
                <td id="totalFundsWinLoss"></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    let currentNordeaValue;
    let totalFundsBuyValue;
    let totalFundsWinLoss;
    let currentTotalFundsValue;

    function setFundsResultValues()
    {
        totalFundsBuyValue = (nordeaPrice).toFixed(2);
        currentTotalFundsValue = (currentNordeaValue * nordeaStocks).toFixed(2);
        totalFundsWinLoss = (currentTotalFundsValue - totalFundsBuyValue).toFixed(2);
        $("#totalFundsBuyValue").text(totalFundsBuyValue);
        $("#currentTotalFundsValue").text(currentTotalFundsValue);
        $("#totalFundsWinLoss").text(totalFundsWinLoss);
        textColor(totalFundsWinLoss, "#totalFundsWinLoss");
    }

    function textColor(value, field)
    {
        if (value < 0) {
            $(field).css("color", "red");
        } else {
            $(field).css("color", "green");
        }
    }

    $( document ).ready(function() {
        callTotalFundsUrl();
        function callTotalFundsUrl() {
            const nordeaUrl = "https://markets.ft.com/data/funds/tearsheet/summary?s=DK0060987709:DKK";
            $.get( nordeaUrl, function( nordeaData ) {
                getNordeaResultValue(nordeaData);
            }, 'html');
            setFundsResultValues();
            setTimeout(function () {
                callTotalFundsUrl();
            }, 2000);
        }
    });

    function getNordeaResultValue(data)
    {
        let nordeaRegex = /<li><span class="mod-ui-data-list__label">Price \(DKK\)<\/span><span class="mod-ui-data-list__value">([0-9.]+)<\/span><\/li>/;
        let nordeaMatch = nordeaRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (nordeaMatch !== null) {
            currentNordeaValue = nordeaMatch[1];
        } else if (closeMatch !== null) {
            currentNordeaValue = closeMatch[1];
        }
    }

</script>
