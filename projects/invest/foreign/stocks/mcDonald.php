
<html>
<script>

    const mcDonaldDate = "12/2 - 2021";
    const mcDonaldPrice = 2634.58;
    const mcDonaldName = "McDonald's";
    const mcDonaldStocks = 2;
    const pricePerStockMcDonald = (mcDonaldPrice / mcDonaldStocks).toFixed(2);

    function getMcDonaldData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/mcd";
            $.get( url,
                function( data ) {
                    getMcDonaldValue(data);
                    setMcDonaldStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, Math.floor(Math.random() * 40000) + 2000);
        }
    }

    function setMcDonaldStandardData()
    {
        $("#mcDonaldDate").text(mcDonaldDate);
        $("#mcDonaldPrice").text(mcDonaldPrice);
        $("#mcDonaldName").text(mcDonaldName);
        $("#mcDonaldStocks").text(mcDonaldStocks);
        $("#mcDonaldStockPrice").text(pricePerStockMcDonald);
    }

    function getMcDonaldValue(data)
    {
        let mcDonaldRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let mcDonaldMatch = mcDonaldRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (mcDonaldMatch !== null) {
            setMcDonaldData(mcDonaldMatch[1]);
        } else if (closeMatch !== null) {
            setMcDonaldData(closeMatch[1]);
        }
    }

    function setMcDonaldData(marketValue)
    {
        marketValue = (marketValue * foreignUsdDkkCurrency).toFixed(2);
	currentMcDonaldValue = marketValue;
        $("#mcDonaldVal").text(marketValue);
	textColor(marketValue, "#mcDonaldVal");

        let stockValue = (marketValue - pricePerStockMcDonald).toFixed(2);
        textColor(stockValue, "#mcDonaldStockResult");
        $("#mcDonaldStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockMcDonald) * 100) - 100).toFixed(2);
        $("#mcDonaldPercentage").text(percentageValue + " %");
        textColor(percentageValue, "#mcDonaldPercentage");

        let totalValue = ((marketValue * mcDonaldStocks) - mcDonaldPrice).toFixed(2);
        $("#mcDonaldResult").text(totalValue);
        textColor(totalValue, "#mcDonaldResult");
    }


</script>
</html>