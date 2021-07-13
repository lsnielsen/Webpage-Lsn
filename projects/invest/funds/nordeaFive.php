

<script>

    const nordeaFiveDate = "29/6 - 2021";
    const nordeaFivePrice = 2000;
    const nordeaFiveName = "Nordea fund Five";
    const nordeaFiveStocks = 1468;
    const pricePerStockNordeaFive = (nordeaFivePrice / nordeaFiveStocks).toFixed(2);

    function getNordeaFiveData()
    {
        callUrl();
        function callUrl() {
            const url = "https://markets.ft.com/data/funds/tearsheet/summary?s=DK0060987899:DKK";
            $.get( url,
                function( data ) {
                    getNordeaFiveValue(data);
                    setNordeaFiveStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 5870);
        }
    }

    function setNordeaFiveStandardData()
    {
        $("#nordeaFiveDate").text(nordeaFiveDate);
        $("#nordeaFivePrice").text(nordeaFivePrice);
        $("#nordeaFiveName").text(nordeaFiveName);
        $("#nordeaFiveStocks").text(nordeaFiveStocks);
        $("#nordeaFiveStockPrice").text(pricePerStockNordeaFive);
    }

    function getNordeaFiveValue(data)
    {
        let nordeaFiveRegex = /<li><span class="mod-ui-data-list__label">Price \(DKK\)<\/span><span class="mod-ui-data-list__value">([0-9.]+)<\/span><\/li>/;
        let nordeaFiveMatch = nordeaFiveRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (nordeaFiveMatch !== null) {
            setNordeaFiveData(nordeaFiveMatch[1]);
        } else if (closeMatch !== null) {
            setNordeaFiveData(closeMatch[1]);
        }
    }

    function setNordeaFiveData(marketValue)
    {
        marketValue = Number(marketValue).toFixed(2);
		currentNordeaFiveValue = marketValue;
        $("#nordeaFiveVal").text(marketValue);

        let stockValue = (marketValue - pricePerStockNordeaFive).toFixed(2);
        textColor(stockValue, "#nordeaFiveStockResult");
        $("#nordeaFiveStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockNordeaFive) * 100) - 100).toFixed(2);
        $("#nordeaFivePercentage").text(percentageValue + " %");
        textColor(percentageValue, "#nordeaFivePercentage");

        let totalValue = ((marketValue * nordeaFiveStocks) - nordeaFivePrice).toFixed(2);
        $("#nordeaFiveResult").text(totalValue);
        textColor(totalValue, "#nordeaFiveResult");
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