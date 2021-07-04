<html>

<script>

    let skagenDate = "11/5 - 2021";
    let skagenPrice = 3512;
    let skagenName = "Skagen m2";
    let skagenStocks = 20;
    let pricePerStockSkagen = (skagenPrice / skagenStocks).toFixed(2);

    function getSkagenData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.nordnet.dk/markedet/fondslister/16808106-skagen-m-2-a";
            $.get( url,
                function( data ) {
                    getSkagenValue(data);
                    setSkagenStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, Math.floor(Math.random() * 40000) + 2000);
        }
    }

    function setSkagenStandardData()
    {
        $("#skagenDate").text(skagenDate);
        $("#skagenPrice").text(skagenPrice);
        $("#skagenName").text(skagenName);
        $("#skagenStocks").text(skagenStocks);
        $("#skagenStockPrice").text(pricePerStockSkagen);
    }

    function getSkagenValue(data)
    {
        let skagenRegex = /<div.+StyledPriceText[-a-z0-9 ]*">([0-9]{2,5},[0-9]*)<\/span><\/div><\/div>/;
        let skagenMatch = skagenRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (skagenMatch !== null) {
            setSkagenData(skagenMatch[1]);
        } else if (closeMatch !== null) {
            setData(closeMatch[1]);
        }
    }

    function setSkagenData(startValue)
    {
        startValue = parseFloat(startValue);
        $("#skagenVal").text(startValue);
        let totalValue = ((startValue * skagenStocks) - skagenPrice).toFixed(2);
        let stockValue = (startValue - pricePerStockSkagen).toFixed(2);
        let percentageValue = (((startValue / pricePerStockSkagen) * 100) - 100).toFixed(2);
        $("#skagenPercentage").text(percentageValue + " %");
        $("#skagenResult").text(totalValue);
        $("#skagenStockResult").text(stockValue);
        textColor(percentageValue, "#skagenPercentage");
        textColor(totalValue, "#skagenResult");
        textColor(stockValue, "#skagenStockResult");
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

</html>
