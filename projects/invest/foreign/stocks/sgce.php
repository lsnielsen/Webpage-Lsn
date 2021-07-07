<html>

<script>

    const sgceDate = "1/7 - 2021";
    const sgcePrice = 1727.79;
    const sgceName = "iShares Global Clean Energy";
    const sgceStocks = 20;
    const pricePerStockSgce = (sgcePrice / sgceStocks).toFixed(2);

    function getSgceData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/dis";
            $.get( url,
                function( data ) {
                    getSgceValue(data);
                    setSgceStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, Math.floor(Math.random() * 40000) + 2000);
        }
    }

    function setSgceStandardData()
    {
        $("#sgceDate").text(sgceDate);
        $("#sgcePrice").text(sgcePrice);
        $("#sgceName").text(sgceName);
        $("#sgceStocks").text(sgceStocks);
        $("#sgceStockPrice").text(pricePerStockSgce);
    }

    function getSgceValue(data)
    {
        let sgceRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let sgceMatch = sgceRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (sgceMatch !== null) {
            setSgceData(sgceMatch[1]);
        } else if (closeMatch !== null) {
            setSgceData(closeMatch[1]);
        }
    }

    function setSgceData(marketValue)
    {
        marketValue = (marketValue * foreignUsdDkkCurrency).toFixed(2);
	currentSgceValue = marketValue;
        $("#sgceVal").text(marketValue);

        let stockValue = (marketValue - pricePerStockSgce).toFixed(2);
        textColor(stockValue, "#sgceStockResult");
        $("#sgceStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockSgce) * 100) - 100).toFixed(2);
        $("#sgcePercentage").text(percentageValue + " %");
        textColor(percentageValue, "#sgcePercentage");

        let totalValue = ((marketValue * sgceStocks) - sgcePrice).toFixed(2);
        $("#sgceResult").text(totalValue);
        textColor(totalValue, "#sgceResult");
    }


</script>
</html>
