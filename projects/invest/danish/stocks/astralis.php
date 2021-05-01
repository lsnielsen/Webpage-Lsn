

<script>

    let astralisDate = "9/1 - 2021";
    let astralisPrice = 8000.00;
    let astralisName = "Astralis Group";
    let astralisStocks = 1210;
    let pricePerStockAstralis = (astralisPrice / astralisStocks).toFixed(2);

    function getAstralisData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/asgrf";
            $.get( url,
                function( data ) {
                    getAstralisValue(data);
                    setAstralisStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, Math.floor(Math.random() * 40000) + 2000);
        }
    }

    function setAstralisStandardData()
    {
        $("#astralisDate").text(astralisDate);
        $("#astralisPrice").text(astralisPrice);
        $("#astralisName").text(astralisName);
        $("#astralisStocks").text(astralisStocks);
        $("#astralisStockPrice").text(pricePerStockAstralis);
    }

    function getAstralisValue(data)
    {
        let astralisRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let astralisMatch = astralisRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (astralisMatch !== null) {
            setAstralisData(astralisMatch[1]);
        } else if (closeMatch !== null) {
            setAstralisData(closeMatch[1]);
        }
    }

    function setAstralisData(startValue)
    {
        $("#astralisVal").text(startValue);
        let totalValue = ((startValue * astralisStocks) - astralisPrice).toFixed(2);
        let stockValue = (startValue - pricePerStockAstralis).toFixed(2);
        let percentageValue = (((startValue / pricePerStockAstralis) * 100) - 100).toFixed(2);
        $("#astralisPercentage").text(percentageValue + " %");
        $("#astralisResult").text(totalValue);
        $("#astralisStockResult").text(stockValue);
        textColor(percentageValue, "#astralisPercentage");
        textColor(totalValue, "#astralisResult");
        textColor(stockValue, "#astralisStockResult");
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