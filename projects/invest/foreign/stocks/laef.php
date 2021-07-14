<html>

<script>

    const laefDate = "3/5 - 2021";
    const laefPrice = 1821.97;
    const laefName = "Latin American Equity fund";
    const laefStocks = 20;
    const pricePerStockLaef = (laefPrice / laefStocks).toFixed(2);

    function getLaefData()
    {
        callUrl();
        function callUrl() {
            const url = "https://markets.ft.com/data/funds/tearsheet/summary?s=lu0309468808:eur";
            $.get( url,
                function( data ) {
                    getLaefValue(data);
                    setLaefStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, updateInterval());
        }
    }

    function setLaefStandardData()
    {
        $("#laefDate").text(laefDate);
        $("#laefPrice").text(laefPrice);
        $("#laefName").text(laefName);
        $("#laefStocks").text(laefStocks);
        $("#laefStockPrice").text(pricePerStockLaef);
    }

    function getLaefValue(data)
    {
        let laefRegex = /list__value">([0-9]+\.[0-9]{2})<\/span>/;
        let laefMatch = laefRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (laefMatch !== null) {
            setLaefData(laefMatch[1]);
        } else if (closeMatch !== null) {
            setLaefData(closeMatch[1]);
        }
    }

    function setLaefData(marketValue)
    {
        marketValue = (marketValue * foreignEuroDkkCurrency).toFixed(2);
	currentLaefValue = marketValue;
        $("#laefVal").text(marketValue);
	textColor(marketValue - pricePerStockLaef, "#laefVal");

        let stockValue = (marketValue - pricePerStockLaef).toFixed(2);
        textColor(stockValue, "#laefStockResult");
        $("#laefStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockLaef) * 100) - 100).toFixed(2);
        $("#laefPercentage").text(percentageValue + " %");
        textColor(percentageValue, "#laefPercentage");

        let totalValue = ((marketValue * laefStocks) - laefPrice).toFixed(2);
        $("#laefResult").text(totalValue);
        textColor(totalValue, "#laefResult");
    }


</script>
</html>
