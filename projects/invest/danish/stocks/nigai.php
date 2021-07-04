<html>

<script>

    let nigaiDate = "3/5 - 2021";
    let nigaiPrice = 1882.88;
    let nigaiName = "Nordea invest globale aktier indeks KL";
    let nigaiStocks = 10;
    let pricePerStockNigai = (nigaiPrice / nigaiStocks).toFixed(2);

    function getNigaiData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.nordnet.dk/markedet/investeringsforeninger-liste/16092835-nordea-inv-globale";
            $.get( url,
                function( data ) {
                    getNigaiValue(data);
                    setNigaiStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, danishUpdateInterval());
        }
    }

    function setNigaiStandardData()
    {
        $("#nigaiDate").text(nigaiDate);
        $("#nigaiPrice").text(nigaiPrice);
        $("#nigaiName").text(nigaiName);
        $("#nigaiStocks").text(nigaiStocks);
        $("#nigaiStockPrice").text(pricePerStockNigai);
    }

    function getNigaiValue(data)
    {
        let nigaiRegex = /<div.+StyledPriceText[-a-z0-9 ]*">([0-9]{2,5},[0-9]*)<\/span><\/div><\/div>/;
        let nigaiMatch = nigaiRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (nigaiMatch !== null) {
            setNigaiData(nigaiMatch[1]);
        } else if (closeMatch !== null) {
            setData(closeMatch[1]);
        }
    }

    function setNigaiData(startValue)
    {
        startValue = parseFloat(startValue);
        $("#nigaiVal").text(startValue);
        let totalValue = ((startValue * nigaiStocks) - nigaiPrice).toFixed(2);
        let stockValue = (startValue - pricePerStockNigai).toFixed(2);
        let percentageValue = (((startValue / pricePerStockNigai) * 100) - 100).toFixed(2);
        $("#nigaiPercentage").text(percentageValue + " %");
        $("#nigaiResult").text(totalValue);
        $("#nigaiStockResult").text(stockValue);
        danishTextColor(startValue-pricePerStockNigai, "#nigaiVal");
        danishTextColor(percentageValue, "#nigaiPercentage");
        danishTextColor(totalValue, "#nigaiResult");
        danishTextColor(stockValue, "#nigaiStockResult");
    }


</script>

</html>
