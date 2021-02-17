

<script>

    let astralisDate = "9/1 - 2021";
    let astralisPrice = 8000.00;
    let astralisName = "Astralis Group";
    let astralisStocks = 1210;

    function getAstralisData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/astgrp?countrycode=dk";
            $.get( url,
                function( data ) {
                    getAstralisValue(data);
                    getAstralisPercentage(data);
                    getAstralisStockResult(data);
                    setStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 200);
        }
    }

    function setStandardData()
    {
        $("#astralisDate").text(astralisDate);
        $("#astralisPrice").text(astralisPrice);
        $("#astralisName").text(astralisName);
        $("#astralisStocks").text(astralisStocks);
        let pricePerStock = (astralisPrice / astralisStocks).toFixed(2);
        $("#astralisStockPrice").text(pricePerStock);
    }

    function getAstralisValue(data)
    {
        let astralisRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let astralisMatch = astralisRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (astralisMatch !== null) {
            $("#astralisVal").text(astralisMatch[1] + " DKK");
        } else if (closeMatch !== null) {
            $("#astralisVal").text(closeMatch[1] + " DKK");
        }
    }

    function getAstralisPercentage(data)
    {
        let astralisRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/"= ]+>([-0-9\.]+)%<\/bg-quote>/;
        let astralisMatch = astralisRegex.exec(data);
        let closeMatch = /<span class="change--percent--q">([0-9\.-]+)%<\/span>/.exec(data);
        if (astralisMatch !== null && closeMatch == null) {
            $("#astralisPercentage").text(astralisMatch[1] + " %");
            textColor(astralisMatch[1], "#astralisPercentage");
        } else if (closeMatch !== null) {
            $("#astralisPercentage").text(closeMatch[1] + " %");
            textColor(closeMatch[1], "#astralisPercentage");
        }
    }

    function getAstralisStockResult(data)
    {
        let astralisRegex = /<bg-quote field="change" format="[0,\.\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/delayed"[a-z=" ]*>([0-9\.-]+)<\/bg-quote>/;
        let astralisMatch = astralisRegex.exec(data);
        let closeMatch = /<span class="change--point--q">([0-9-\.]+)<\/span>/.exec(data);
        if (astralisMatch !== null) {
            $("#astralisStockResult").text(astralisMatch[1] + " DKK");
            textColor(astralisMatch[1], "#astralisStockResult");
        } else if (closeMatch !== null) {
            $("#astralisStockResult").text(closeMatch[1] + " DKK");
            textColor(closeMatch[1], "#astralisStockResult");
        }
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