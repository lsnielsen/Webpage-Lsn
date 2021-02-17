

<script>

    let astralisDate = "9/1 - 2021";
    let astralisPrice = 8000.00;
    let astralisName = "Astralis Group";
    let astralisStocks = 1210;
    let pricePerStock = (astralisPrice / astralisStocks).toFixed(2);

    function getAstralisData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/astgrp?countrycode=dk";
            $.get( url,
                function( data ) {
                    getAstralisValue(data);
                    setStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 1200);
        }
    }

    function setStandardData()
    {
        $("#astralisDate").text(astralisDate);
        $("#astralisPrice").text(astralisPrice);
        $("#astralisName").text(astralisName);
        $("#astralisStocks").text(astralisStocks);
        $("#astralisStockPrice").text(pricePerStock);
    }

    function getAstralisValue(data)
    {
        let astralisRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let astralisMatch = astralisRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (astralisMatch !== null) {
            setData(astralisMatch[1]);
        } else if (closeMatch !== null) {
            setData(closeMatch[1]);
        }
    }

    function setData(startValue)
    {
        $("#astralisVal").text(startValue);
        let totalValue = ((startValue * astralisStocks) - astralisPrice).toFixed(2);
        let stockValue = (startValue - pricePerStock).toFixed(2);
        let percentageValue = (((startValue / pricePerStock) * 100) - 100).toFixed(2);
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