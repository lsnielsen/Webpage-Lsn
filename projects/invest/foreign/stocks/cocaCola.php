
<html>
<script>

    const colaDate = "12/2 - 2021";
    const colaPrice = 1898.73;
    const colaName = "Coca Cola";
    const colaStocks = 6;
    const pricePerStockCola = (colaPrice / colaStocks).toFixed(2);

    function getColaData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/ko";
            $.get( url,
                function( data ) {
                    getColaValue(data);
                    setColaStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, Math.floor(Math.random() * 40000) + 2000);
        }
    }

    function setColaStandardData()
    {
        $("#colaDate").text(colaDate);
        $("#colaPrice").text(colaPrice);
        $("#colaName").text(colaName);
        $("#colaStocks").text(colaStocks);
        $("#colaStockPrice").text(pricePerStockCola);
    }

    function getColaValue(data)
    {
        let colaRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let colaMatch = colaRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (colaMatch !== null) {
            setColaData(colaMatch[1]);
        } else if (closeMatch !== null) {
            setColaData(closeMatch[1]);
        }
    }

    function setColaData(marketValue)
    {
        marketValue = (marketValue * foreignUsdDkkCurrency).toFixed(2);
	currentColaValue = marketValue;
        $("#colaVal").text(marketValue);
	textColor(marketValue, "#colaVal");

        let stockValue = (marketValue - pricePerStockCola).toFixed(2);
        textColor(stockValue, "#colaStockResult");
        $("#colaStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockCola) * 100) - 100).toFixed(2);
        $("#colaPercentage").text(percentageValue + " %");
        textColor(percentageValue, "#colaPercentage");

        let totalValue = ((marketValue * colaStocks) - colaPrice).toFixed(2);
        $("#colaResult").text(totalValue);
        textColor(totalValue, "#colaResult");
    }



</script>
</html>