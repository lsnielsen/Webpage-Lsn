<html>

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
            const url = "https://www.nordnet.dk/markedet/aktiekurser/17150971-astralis";
            $.get( url,
                function( data ) {
                    getAstralisValue(data);
                    setAstralisStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, danishUpdateInterval());
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
        let astralisRegex = /StyledPriceText[-a-z0-9 ]*">([0-9]{1,5},[0-9]*)<\/span><\/div><\/div>/;
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
	startValue = startValue.replace(/,/,".");
	currentAstralisValue = startValue;
        $("#astralisVal").text(startValue);
        let totalValue = ((startValue * astralisStocks) - astralisPrice).toFixed(2);
        let stockValue = (startValue - pricePerStockAstralis).toFixed(2);
        let percentageValue = (((startValue / pricePerStockAstralis) * 100) - 100).toFixed(2);
        $("#astralisPercentage").text(percentageValue + " %");
        $("#astralisResult").text(totalValue);
        $("#astralisStockResult").text(stockValue);
        danishTextColor(startValue-pricePerStockAstralis, "#astralisVal");
        danishTextColor(percentageValue, "#astralisPercentage");
        danishTextColor(totalValue, "#astralisResult");
        danishTextColor(stockValue, "#astralisStockResult");
    }


</script>
</html>