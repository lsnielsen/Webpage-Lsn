

<script>

    const lockheedMartinDate = "8/3 - 2021";
    const lockheedMartinPrice = 4231.87;
    const lockheedMartinName = "LockheedMartin";
    const lockheedMartinStocks = 2;
    const pricePerStockLockheedMartin = (lockheedMartinPrice / lockheedMartinStocks).toFixed(2);

    function getLockheedMartinData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/lmt";
            $.get( url,
                function( data ) {
                    getLockheedMartinValue(data);
                    setLockheedMartinStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, Math.floor(Math.random() * 40000) + 2000);
        }
    }

    function setLockheedMartinStandardData()
    {
        $("#lockheedMartinDate").text(lockheedMartinDate);
        $("#lockheedMartinPrice").text(lockheedMartinPrice);
        $("#lockheedMartinName").text(lockheedMartinName);
        $("#lockheedMartinStocks").text(lockheedMartinStocks);
        $("#lockheedMartinStockPrice").text(pricePerStockLockheedMartin);
    }

    function getLockheedMartinValue(data)
    {
        let lockheedMartinRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let lockheedMartinMatch = lockheedMartinRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (lockheedMartinMatch !== null) {
            setLockheedMartinData(lockheedMartinMatch[1]);
        } else if (closeMatch !== null) {
            setLockheedMartinData(closeMatch[1]);
        }
    }

    function setLockheedMartinData(marketValue)
    {
        marketValue = (marketValue * foreignUsdDkkCurrency).toFixed(2);
	currentLockheedMartinValue = marketValue;
        $("#lockheedMartinVal").text(marketValue);
	textColor(marketValue - pricePerStockLockheedMartin, "#lockheedMartinVal");

        let stockValue = (marketValue - pricePerStockLockheedMartin).toFixed(2);
        textColor(stockValue, "#lockheedMartinStockResult");
        $("#lockheedMartinStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockLockheedMartin) * 100) - 100).toFixed(2);
        $("#lockheedMartinPercentage").text(percentageValue + " %");
        textColor(percentageValue, "#lockheedMartinPercentage");

        let totalValue = ((marketValue * lockheedMartinStocks) - lockheedMartinPrice).toFixed(2);
        $("#lockheedMartinResult").text(totalValue);
        textColor(totalValue, "#lockheedMartinResult");
    }


</script>