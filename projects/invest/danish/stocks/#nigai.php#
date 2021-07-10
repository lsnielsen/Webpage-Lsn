<html>

<script>

    let nordeaKlimaMiljoDate = "14/4 - 2021";
    let nordeaKlimaMiljoPrice = 1770.27;
    let nordeaKlimaMiljoName = "NordeaKlimaMiljo Group";
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
            }, Math.floor(Math.random() * 40000) + 2000);
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
            setData(nordeaKlimaMiljoMatch[1]);
        } else if (closeMatch !== null) {
            setData(closeMatch[1]);
        }
    }

    function setData(startValue)
    {
        startValue = parseFloat(startValue);
        $("#nordeaKlimaMiljoVal").text(startValue);
        let totalValue = ((startValue * nordeaKlimaMiljoStocks) - nordeaKlimaMiljoPrice).toFixed(2);
        let stockValue = (startValue - pricePerStockNKM).toFixed(2);
        let percentageValue = (((startValue / pricePerStockNKM) * 100) - 100).toFixed(2);
        $("#nordeaKlimaMiljoPercentage").text(percentageValue + " %");
        $("#nordeaKlimaMiljoResult").text(totalValue);
        $("#nordeaKlimaMiljoStockResult").text(stockValue);
        textColor(percentageValue, "#nordeaKlimaMiljoPercentage");
        textColor(totalValue, "#nordeaKlimaMiljoResult");
        textColor(stockValue, "#nordeaKlimaMiljoStockResult");
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
