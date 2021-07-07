
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
                <td id="totalDanishBuyValue"></td>
                <td id="currentTotalDanishValue"></td>
                <td id="totalDanishWinLoss"></td>
                <td id="totalDanishPercentage"></td>
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
  let totalDanishPercentage;

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
	totalDanishPercentage = (((currentTotaldanishValue / totalDanishBuyValue) * 100) - 100).toFixed(2);
	$("#totalDanishPercentage").text(totalDanishPercentage + " %");
        $("#totalDanishBuyValue").text(totalDanishBuyValue);
        $("#currentTotalDanishValue").text(currentTotaldanishValue);
        $("#totalDanishWinLoss").text(totalDanishWinLoss);
        textColor(totalDanishWinLoss, "#totalDanishWinLoss");
	textColor(totalDanishPercentage, "#totalDanishPercentage");
    }

</script>

</html>
