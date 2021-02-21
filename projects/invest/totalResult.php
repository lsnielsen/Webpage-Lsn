



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
                <td id="totalResultBuyValue"></td>
                <td id="currentTotalResultValue"></td>
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

            let theTotalResultBuyValue = (Number(totalDanishBuyValue) + Number(totalForeignBuyValue)).toFixed(2);
            let theCurrentTotalResultValue = (Number(currentTotaldanishValue) + Number(currentTotalForeignValue)).toFixed(2);
            let theTotalResultWinLoss = (Number(totalDanishWinLoss) + Number(totalForeignWinLoss)).toFixed(2);

            $("#totalResultBuyValue").text(theTotalResultBuyValue);
            $("#currentTotalResultValue").text(theCurrentTotalResultValue);
            $("#totalResultWinLoss").text(theTotalResultWinLoss);

            setTimeout(function () {
                loopFunction();
            }, 2000);
        }
    }

</script>



