

<script>

    const colaDate = "12/2 - 2021";
    const colaPrice = 1780.40;
    const colaName = "Coca Cola";
    const colaStocks = 4;
    const pricePerStockCola = (colaPrice / colaName).toFixed(2);

    function getColaData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/coca-cola-founders";
            $.get( url,
                function( data ) {
                    getColaValue(data);
                    setColaStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 2000);
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

    function setFordData(marketValue)
    {
        marketValue = (marketValue * usdDkkCurrency).toFixed(2);
        $("#fordVal").text(marketValue);

        let stockValue = (marketValue - pricePerStockFord).toFixed(2);
        textColor(stockValue, "#fordStockResult");
        $("#fordStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockFord) * 100) - 100).toFixed(2);
        $("#fordPercentage").text(percentageValue + " %");
        textColor(percentageValue, "#fordPercentage");

        let totalValue = ((marketValue * fordStocks) - fordPrice).toFixed(2);
        $("#fordResult").text(totalValue);
        textColor(totalValue, "#fordResult");
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