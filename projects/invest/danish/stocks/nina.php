<html>

<script>

    let ninaDate = "3/5 - 2021";
    let ninaPrice = 1578.58;
    let ninaName = "Nordea Invest North America";
    let ninaStocks = 10;
    let pricePerStockNina = (ninaPrice / ninaStocks).toFixed(2);

    function getNinaData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.nordnet.dk/markedet/investeringsforeninger-liste/16756243-nordea-invest-north";
            $.get( url,
                function( data ) {
                    getNinaValue(data);
                    setNinaStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, danishUpdateInterval());
        }
    }

    function setNinaStandardData()
    {
        $("#ninaDate").text(ninaDate);
        $("#ninaPrice").text(ninaPrice);
        $("#ninaName").text(ninaName);
        $("#ninaStocks").text(ninaStocks);
        $("#ninaStockPrice").text(pricePerStockNina);
    }

    function getNinaValue(data)
    {
        let ninaRegex = /<div.+StyledPriceText[-a-z0-9 ]*">([0-9]{2,5},[0-9]*)<\/span><\/div><\/div>/;
        let ninaMatch = ninaRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (ninaMatch !== null) {
            setNinaData(ninaMatch[1]);
        } else if (closeMatch !== null) {
            setData(closeMatch[1]);
        }
    }

    function setNinaData(startValue)
    {
        startValue = parseFloat(startValue);
	currentNinaValue = startValue;
        $("#ninaVal").text(startValue);
        let totalValue = ((startValue * ninaStocks) - ninaPrice).toFixed(2);
        let stockValue = (startValue - pricePerStockNina).toFixed(2);
        let percentageValue = (((startValue / pricePerStockNina) * 100) - 100).toFixed(2);
        $("#ninaPercentage").text(percentageValue + " %");
        $("#ninaResult").text(totalValue);
        $("#ninaStockResult").text(stockValue);
        danishTextColor(startValue-pricePerStockNina, "#ninaVal");
        danishTextColor(percentageValue, "#ninaPercentage");
        danishTextColor(totalValue, "#ninaResult");
        danishTextColor(stockValue, "#ninaStockResult");
    }

   

</script>

</html>
