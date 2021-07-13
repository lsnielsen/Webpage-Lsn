

<html>
<div class="container-sm">
    <div class="page-header text-center" style="color: #801d44;">
        <h1>
            Samlet resultat:
        </h1>
    </div>
</div>

<div class="container-sm">
    <table class="table table-bordered align-middle table-danger table-striped table-hover">
        <thead>
            <tr>
                <th scope="col"></th>
                <th scope="col">Købspris</th>
                <th scope="col">Nuværende pris</th>
                <th scope="col">% - vis gevinst \ tab</th>
                <th scope="col">Gevinst \ tab</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">Samlet</th>
                <td id="totalResultBuyValue"></td>
                <td id="currentTotalResultValue"></td>
                <td id="currentPercentValue"></td>
                <td id="totalResultWinLoss"></td>
            </tr>
        </tbody>
    </table>
</div>

<script>

    function setTotalResultValues()
    {
        loopFunction();
        function loopFunction() {

            let theTotalResultBuyValue = (Number(totalForeignBuyValue) + Number(totalFundsBuyValue) + Number(totalDanishBuyValue)).toFixed(2);
            let theCurrentTotalResultValue = (Number(currentTotalForeignValue) + Number(currentTotalFundsValue) + Number(currentTotalDanishValue)).toFixed(2);
            let theTotalResultWinLoss = (Number(totalForeignWinLoss) + 	Number(totalFundsWinLoss) + Number(totalDanishWinLoss)).toFixed(2);
	    let percentageWinLoss = (((theCurrentTotalResultValue / theTotalResultBuyValue) * 100) - 100).toFixed(2);

            $("#totalResultBuyValue").text(theTotalResultBuyValue);
            $("#currentTotalResultValue").text(theCurrentTotalResultValue);
            $("#currentPercentValue").text(percentageWinLoss);
            $("#totalResultWinLoss").text(theTotalResultWinLoss);

            totalTextColor(theTotalResultWinLoss, "#totalResultWinLoss");
            totalTextColor(percentageWinLoss, "#currentPercentValue");

            setTimeout(function () {
                loopFunction();
            }, 5000);
        }
    }

    function totalTextColor(value, field)
    {
        if (value < 0) {
            $(field).css("color", "red");
        } else {
            $(field).css("color", "green");
        }
    }

</script>
</html>
