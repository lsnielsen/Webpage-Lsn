

<script>

    const disneyDate = "12/2 - 2021";
    const disneyPrice = 1780.40;
    const disneyName = "Disney Nordisk";
    const disneyStocks = 4;
    const pricePerStockDisney = (disneyPrice / disneyStocks).toFixed(2);

    function getDisneyData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/nvo";
            $.get( url,
                function( data ) {
                    getDisneyValue(data);
                    setDisneyStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 2000);
        }
    }

    function setDisneyStandardData()
    {
        $("#disneyDate").text(disneyDate);
        $("#disneyPrice").text(disneyPrice);
        $("#disneyName").text(disneyName);
        $("#disneyStocks").text(disneyStocks);
        $("#disneyStockPrice").text(pricePerStockDisney);
    }

    function getDisneyValue(data)
    {
        let disneyRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let disneyMatch = disneyRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (disneyMatch !== null) {
            setDisneyData(disneyMatch[1]);
        } else if (closeMatch !== null) {
            setDisneyData(closeMatch[1]);
        }
    }

    function setDisneyData(marketValue)
    {
        marketValue = (marketValue * usdDkkCurrency).toFixed(2);
        $("#disneyVal").text(marketValue);

        let stockValue = (marketValue - pricePerStockDisney).toFixed(2);
        textColor(stockValue, "#disneyStockResult");
        $("#disneyStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockDisney) * 100) - 100).toFixed(2);
        $("#disneyPercentage").text(percentageValue + " %");
        textColor(percentageValue, "#disneyPercentage");

        let totalValue = ((marketValue * disneyStocks) - disneyPrice).toFixed(2);
        $("#disneyResult").text(totalValue);
        textColor(totalValue, "#disneyResult");
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