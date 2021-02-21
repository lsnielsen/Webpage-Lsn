

<script>

    let fordDate = "12/2 - 2021";
    let fordPrice = 1453.40;
    let fordName = "Ford Group";
    let fordStocks = 20;
    let pricePerStockFord = (fordPrice / fordStocks).toFixed(2);

    function getFordData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/f";
            $.get( url,
                function( data ) {
                    getFordValue(data);
                    setStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 2000);
        }
    }

    function setStandardData()
    {
        $("#fordDate").text(fordDate);
        $("#fordPrice").text(fordPrice);
        $("#fordName").text(fordName);
        $("#fordStocks").text(fordStocks);
        $("#fordStockPrice").text(pricePerStockFord);
    }

    function getFordValue(data)
    {
        let fordRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let fordMatch = fordRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (fordMatch !== null) {
            setFordData(fordMatch[1]);
        } else if (closeMatch !== null) {
            setFordData(closeMatch[1]);
        }
    }

    function setFordData(marketValue)
    {
        marketValue = (marketValue * foreignUsdDkkCurrency).toFixed(2);
        $("#fordVal").text(marketValue);
        let totalValue = ((marketValue * fordStocks) - fordPrice).toFixed(2);
        let stockValue = (marketValue - pricePerStockFord).toFixed(2);
        let percentageValue = (((marketValue / pricePerStockFord) * 100) - 100).toFixed(2);
        $("#fordPercentage").text(percentageValue + " %");
        $("#fordResult").text(totalValue);
        $("#fordStockResult").text(stockValue);
        textColor(percentageValue, "#fordPercentage");
        textColor(totalValue, "#fordResult");
        textColor(stockValue, "#fordStockResult");
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