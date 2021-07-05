<html>

<script>

    let nordeaKlimaMiljoDate = "14/4 - 2021";
    let nordeaKlimaMiljoPrice = 1770.27;
    let nordeaKlimaMiljoName = "Nordea Klima Miljo Group";
    let nordeaKlimaMiljoStocks = 10;
    let pricePerStockNKM = (nordeaKlimaMiljoPrice / nordeaKlimaMiljoStocks).toFixed(2);

    function getNordeaKlimaMiljoData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.nordnet.dk/markedet/investeringsforeninger-liste/16101244-nordea-invest-klima";
            $.get( url,
                function( data ) {
                    getNordeaKlimaMiljoValue(data);
                    setNordeaKlimaMiljoStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, danishUpdateInterval());
        }
    }

    function setNordeaKlimaMiljoStandardData()
    {
        $("#nordeaKlimaMiljoDate").text(nordeaKlimaMiljoDate);
        $("#nordeaKlimaMiljoPrice").text(nordeaKlimaMiljoPrice);
        $("#nordeaKlimaMiljoName").text(nordeaKlimaMiljoName);
        $("#nordeaKlimaMiljoStocks").text(nordeaKlimaMiljoStocks);
        $("#nordeaKlimaMiljoStockPrice").text(pricePerStockNKM);
    }

    function getNordeaKlimaMiljoValue(data)
    {
        let nordeaKlimaMiljoRegex = /<div.+StyledPriceText[-a-z0-9 ]*">([0-9]{2,5},[0-9]*)<\/span><\/div><\/div>/;
        let nordeaKlimaMiljoMatch = nordeaKlimaMiljoRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (nordeaKlimaMiljoMatch !== null) {
            setNKMData(nordeaKlimaMiljoMatch[1]);
        } else if (closeMatch !== null) {
            setData(closeMatch[1]);
        }
    }

    function setNKMData(startValue)
    {
        startValue = parseFloat(startValue);
	currentNordeaKMGValue = startValue;
        $("#nordeaKlimaMiljoVal").text(startValue);
        let totalValue = ((startValue * nordeaKlimaMiljoStocks) - nordeaKlimaMiljoPrice).toFixed(2);
        let stockValue = (startValue - pricePerStockNKM).toFixed(2);
        let percentageValue = (((startValue / pricePerStockNKM) * 100) - 100).toFixed(2);
        $("#nordeaKlimaMiljoPercentage").text(percentageValue + " %");
        $("#nordeaKlimaMiljoResult").text(totalValue);
        $("#nordeaKlimaMiljoStockResult").text(stockValue);
        danishTextColor(startValue-pricePerStockNKM, "#nordeaKlimaMiljoVal");
        danishTextColor(percentageValue, "#nordeaKlimaMiljoPercentage");
        danishTextColor(totalValue, "#nordeaKlimaMiljoResult");
        danishTextColor(stockValue, "#nordeaKlimaMiljoStockResult");
    }



</script>

</html>
