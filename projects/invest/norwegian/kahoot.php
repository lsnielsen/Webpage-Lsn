

<script>

    const kahootDate = "7/4 - 2021";
    const kahootPrice = 1538.42;
    const kahootName = "Kahoot";
    const kahootStocks = 20;
    const pricePerStockKahoot = (kahootPrice / kahootStocks).toFixed(2);

    function getKahootData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/kahot?countrycode=no";
            $.get( url,
                function( data ) {
                    getKahootValue(data);
                    setKahootStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 5000);
        }
    }

    function setKahootStandardData()
    {
        $("#kahootDate").text(kahootDate);
        $("#kahootPrice").text(kahootPrice);
        $("#kahootName").text(kahootName);
        $("#kahootStocks").text(kahootStocks);
        $("#kahootStockPrice").text(pricePerStockKahoot);
    }

    function getKahootValue(data)
    {
        let kahootRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let kahootMatch = kahootRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (kahootMatch !== null) {
            setKahootData(kahootMatch[1]);
        } else if (closeMatch !== null) {
            setKahootData(closeMatch[1]);
        }
    }

    function setKahootData(marketValue)
    {
        marketValue = marketValue;
        $("#kahootVal").text(marketValue);

        let stockValue = (marketValue - pricePerStockKahoot).toFixed(2);
        textColor(stockValue, "#kahootStockResult");
        $("#kahootStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockKahoot) * 100) - 100).toFixed(2);
        $("#kahootPercentage").text(percentageValue + " %");
        textColor(percentageValue, "#kahootPercentage");

        let totalValue = ((marketValue * kahootStocks) - kahootPrice).toFixed(2);
        $("#kahootResult").text(totalValue);
        textColor(totalValue, "#kahootResult");
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