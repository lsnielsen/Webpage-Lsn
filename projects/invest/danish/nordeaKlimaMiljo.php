

<script>

    let nordeaKlimaMiljoDate = "9/1 - 2021";
    let nordeaKlimaMiljoPrice = 8000.00;
    let nordeaKlimaMiljoName = "NordeaKlimaMiljo Group";
    let nordeaKlimaMiljoStocks = 1210;
    let pricePerStock = (nordeaKlimaMiljoPrice / nordeaKlimaMiljoStocks).toFixed(2);

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
            }, 5000);
        }
    }

    function setNordeaKlimaMiljoStandardData()
    {
        $("#nordeaKlimaMiljoDate").text(nordeaKlimaMiljoDate);
        $("#nordeaKlimaMiljoPrice").text(nordeaKlimaMiljoPrice);
        $("#nordeaKlimaMiljoName").text(nordeaKlimaMiljoName);
        $("#nordeaKlimaMiljoStocks").text(nordeaKlimaMiljoStocks);
        $("#nordeaKlimaMiljoStockPrice").text(pricePerStock);
    }

    function getNordeaKlimaMiljoValue(data)
    {
        let nordeaKlimaMiljoRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
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
        $("#nordeaKlimaMiljoVal").text(startValue);
        let totalValue = ((startValue * nordeaKlimaMiljoStocks) - nordeaKlimaMiljoPrice).toFixed(2);
        let stockValue = (startValue - pricePerStock).toFixed(2);
        let percentageValue = (((startValue / pricePerStock) * 100) - 100).toFixed(2);
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