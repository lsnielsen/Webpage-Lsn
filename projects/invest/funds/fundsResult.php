
<html>

<div class="container-sm">
    <table class="table table-bordered align-middle table-primary">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Købspris</th>
                <th scope="col">Nuværende pris</th>
                <th scope="col">Gevinst \ tab</th>
                <th scope="col">Procentvis ændring</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Samlet</th>
                <td id="totalFundsBuyValue"></td>
                <td id="currentTotalFundsValue"></td>
                <td id="totalFundsWinLoss"></td>
                <td id="totalFundsPercentage"></td>
            </tr>
        </tbody>
    </table>
</div>

<script>
    let currentNordeaValue;
    let currentNordeaFiveValue;
    let totalFundsBuyValue;
    let totalFundsWinLoss;
    let currentTotalFundsValue;

    function setFundsResultValues()
    {
        totalFundsBuyValue = (nordeaPrice + nordeaFivePrice).toFixed(2);
        currentTotalFundsValue = ((currentNordeaValue * nordeaStocks) + (currentNordeaFiveValue * nordeaFiveStocks)).toFixed(2);
        totalFundsWinLoss = (currentTotalFundsValue - totalFundsBuyValue).toFixed(2);
	totalFundsPercentage = (((currentTotalFundsValue / totalFundsBuyValue) * 100) - 100).toFixed(2);
        $("#totalFundsPercentage").text(totalFundsPercentage + " %");
        $("#totalFundsBuyValue").text(totalFundsBuyValue);
        $("#currentTotalFundsValue").text(currentTotalFundsValue);
        $("#totalFundsWinLoss").text(totalFundsWinLoss);
        textColor(totalFundsWinLoss, "#totalFundsWinLoss");
        textColor(totalFundsPercentage, "#totalFundsPercentage");
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
      	    setFundsResultValues();
            setTimeout(function () {
                callTotalFundsUrl();
            }, 2000);
        }
    });
	

</script>
</html>
