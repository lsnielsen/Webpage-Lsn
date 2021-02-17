

<script>

    let novoDate = "12/2 - 2021";
    let novoPrice = 1780.40;
    let novoName = "Novo Nordisk";
    let novoStocks = 4;
    let pricePerStockNovo = (novoPrice / novoStocks).toFixed(2);

    function getNovoData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/nvo";
            $.get( url,
                function( data ) {
                    getNovoValue(data);
                    setNovoStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 1200);
        }
    }

    function setNovoStandardData()
    {
        $("#novoDate").text(novoDate);
        $("#novoPrice").text(novoPrice);
        $("#novoName").text(novoName);
        $("#novoStocks").text(novoStocks);
        $("#novoStockPrice").text(pricePerStockNovo);
    }

    function getNovoValue(data)
    {
        let novoRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let novoMatch = novoRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (novoMatch !== null) {
            setNovoData(novoMatch[1]);
        } else if (closeMatch !== null) {
            setNovoData(closeMatch[1]);
        }
    }

    function setNovoData(startValue)
    {
        $("#novoVal").text(startValue);
        let totalValue = ((startValue * novoStocks) - novoPrice).toFixed(2);
        let stockValue = (startValue - pricePerStockNovo).toFixed(2);
        let percentageValue = (((startValue / pricePerStockNovo) * 100) - 100).toFixed(2);
        $("#novoPercentage").text(percentageValue + " %");
        $("#novoResult").text(totalValue);
        $("#novoStockResult").text(stockValue);
        textColor(percentageValue, "#novoPercentage");
        textColor(totalValue, "#novoResult");
        textColor(stockValue, "#novoStockResult");
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