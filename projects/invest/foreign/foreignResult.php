
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
    let currentBitcoinGroupValue;
  let currentLockheedMartinValue;

  let currentSgceValue;
  let currentLaefValue;
  let currentKahootValue;
  let currentEqmValue;
  
    let foreignUsdDkkCurrency;
    let foreignEuroDkkCurrency;
    let foreignNokDkkCurrency;
    let totalForeignBuyValue;
    let currentTotalForeignValue;
    let totalForeignWinLoss;

    function setForeignResultValues()
    {
        totalForeignBuyValue = (colaPrice + disneyPrice + fordPrice + visaPrice + 
				gmPrice + mcDonaldPrice + bitcoinGroupPrice + lockheedMartinPrice +
			        sgcePrice + laefPrice + kahootPrice + equitransMidstreamPrice).toFixed(2);

	currentTotalForeignValue = ((currentColaValue * colaStocks) +
            (currentDisneyValue * disneyStocks) + (currentFordValue * fordStocks) +
            (currentVisaValue * visaStocks) + (currentGmValue * gmStocks) +
            (currentMcDonaldValue * mcDonaldStocks) + 
			(currentBitcoinGroupValue * bitcoinGroupStocks) +
				    (currentLockheedMartinValue * lockheedMartinStocks) +
				    (currentSgceValue * sgceStocks)).toFixed(2);
	
        totalForeignWinLoss = (currentTotalForeignValue - totalForeignBuyValue).toFixed(2);
        $("#totalForeignBuyValue").text(totalForeignBuyValue);
        $("#currentTotalForeignValue").text(currentTotalForeignValue);
        $("#totalForeignWinLoss").text(totalForeignWinLoss);
        textColor(totalForeignWinLoss, "#totalForeignWinLoss");
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
        callTotalForeignUrl();
        function callTotalForeignUrl() {
            getForeignUsdDkkCurrency();
	    getForeignEuroDkkCurrency();
	    getForeignNokDkkCurrency();
            setForeignResultValues();
            setTimeout(function () {
                callTotalForeignUrl();
            }, Math.floor(Math.random() * 40000) + 2000);
        }
    });

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
	
    function getForeignEuroDkkCurrency()
    {
        let url = "https://themoneyconverter.com/EUR/DKK";
        $.get(url ,function( data ) {
            let currencyRegex = /1 eur = ([0-9]{1,2}\.[0-9]{4}) dkk/i;
            let currencyMatch = currencyRegex.exec(data);
            if (currencyMatch !== null) {
                foreignEuroDkkCurrency = currencyMatch[1];
            } else {
                foreignEuroDkkCurrency = 1;
            }
        }, 'html' );
    }
    function getForeignNokDkkCurrency()
    {
        let url = "https://themoneyconverter.com/NOK/DKK";
        $.get(url ,function( data ) {
            let currencyRegex = /1 nok = ([0-9]{1,2}\.[0-9]{3,7}) dkk/i;
            let currencyMatch = currencyRegex.exec(data);
            if (currencyMatch !== null) {
                foreignNokDkkCurrency = currencyMatch[1];
            } else {
                foreignNokDkkCurrency = 1;
            }
        }, 'html' );
    }

</script>

</html>
