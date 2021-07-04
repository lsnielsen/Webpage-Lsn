<html>

<script>

    let bioteknologiDate = "3/5 - 2021";
    let bioteknologiPrice = 1694;
    let bioteknologiName = "Danske invest bioteknologi";
    let bioteknologiStocks = 10;
    let pricePerStockBioteknologi = (bioteknologiPrice / bioteknologiStocks).toFixed(2);

    function getBioteknologiData()
    {
        callUrl();
        function callUrl() {
            const url = "https://markets.ft.com/data/funds/tearsheet/summary?s=dk0010264456:dkk";
            $.get( url,
                function( data ) {
                    getBioteknologiValue(data);
                    setBioteknologiStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, Math.floor(Math.random() * 40000) + 2000);
        }
    }

    function setBioteknologiStandardData()
    {
        $("#bioteknologiDate").text(bioteknologiDate);
        $("#bioteknologiPrice").text(bioteknologiPrice);
        $("#bioteknologiName").text(bioteknologiName);
        $("#bioteknologiStocks").text(bioteknologiStocks);
        $("#bioteknologiStockPrice").text(pricePerStockBioteknologi);
    }

    function getBioteknologiValue(data)
    {
        let bioteknologiRegex = /<span class="mod-ui-data-list__value">([0-9]{2,5}\.[0-9]{2})<\/span><\/li>/;
        let bioteknologiMatch = bioteknologiRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (bioteknologiMatch !== null) {
            setBioteknologiData(bioteknologiMatch[1]);
        } else if (closeMatch !== null) {
            setData(closeMatch[1]);
        }
    }

    function setBioteknologiData(startValue)
    {
        startValue = parseFloat(startValue);
        $("#bioteknologiVal").text(startValue);
        let totalValue = ((startValue * bioteknologiStocks) - bioteknologiPrice).toFixed(2);
        let stockValue = (startValue - pricePerStockBioteknologi).toFixed(2);
        let percentageValue = (((startValue / pricePerStockBioteknologi) * 100) - 100).toFixed(2);
        $("#bioteknologiPercentage").text(percentageValue + " %");
        $("#bioteknologiResult").text(totalValue);
        $("#bioteknologiStockResult").text(stockValue);
        danishTextColor(percentageValue, "#bioteknologiPercentage");
        danishTextColor(totalValue, "#bioteknologiResult");
        danishTextColor(stockValue, "#bioteknologiStockResult");
    }



</script>

</html>
