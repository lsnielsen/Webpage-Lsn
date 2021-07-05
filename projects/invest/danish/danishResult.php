
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
  let currentAfkastPlusValue;
  let currentNordeaKMGValue;
  let currentNordeaIGAIValue;
  let currentBioteknologiValue;
  let currentNinaValue;
  let currentSkagenValue;
    let totalDanishBuyValue;
    let currentTotaldanishValue;
    let totalDanishWinLoss

    $( document ).ready(function() {
        callTotalDanishUrl();
        function callTotalDanishUrl() {
            setDanishResultValues();
            setTimeout(function () {
                callTotalDanishUrl();
            }, danishUpdateInterval());
        }
    });

    function setDanishResultValues()
    {
        totalDanishBuyValue = (astralisPrice + novoPrice + skagenPrice + bioteknologiPrice + ninaPrice + afkastPlusPrice + nordeaKlimaMiljoPrice + nigaiPrice).toFixed(2);
        currentTotaldanishValue = ((currentAstralisValue * astralisStocks) +
				   (currentNovoValue * novoStocks) +
				   (currentNordeaKMGValue * nordeaKlimaMiljoStocks) +
				   (currentNordeaIGAIValue * nigaiStocks) +
				   (currentBioteknologiValue * bioteknologiStocks) +
				   (currentNinaValue * ninaStocks) +
				   (currentSkagenValue * skagenStocks) +
				   (currentAfkastPlusValue * afkastPlusStocks)).toFixed(2);
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

</script>

</html>
