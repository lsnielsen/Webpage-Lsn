

<script>

    const gmDate = "12/2 - 2021";
    const gmPrice = 1780.40;
    const gmName = "Gm Nordisk";
    const gmStocks = 4;
    const pricePerStockGm = (gmPrice / gmStocks).toFixed(2);

    function getGmData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/nvo";
            $.get( url,
                function( data ) {
                    getGmValue(data);
                    setGmStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 2000);
        }
    }

    function setGmStandardData()
    {
        $("#gmDate").text(gmDate);
        $("#gmPrice").text(gmPrice);
        $("#gmName").text(gmName);
        $("#gmStocks").text(gmStocks);
        $("#gmStockPrice").text(pricePerStockGm);
    }

    function getGmValue(data)
    {
        let gmRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let gmMatch = gmRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (gmMatch !== null) {
            setGmData(gmMatch[1]);
        } else if (closeMatch !== null) {
            setGmData(closeMatch[1]);
        }
    }

    function setGmData(marketValue)
    {
        marketValue = (marketValue * usdDkkCurrency).toFixed(2);
        $("#gmVal").text(marketValue);

        let stockValue = (marketValue - pricePerStockGm).toFixed(2);
        textColor(stockValue, "#gmStockResult");
        $("#gmStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockGm) * 100) - 100).toFixed(2);
        $("#gmPercentage").text(percentageValue + " %");
        textColor(percentageValue, "#gmPercentage");

        let totalValue = ((marketValue * gmStocks) - gmPrice).toFixed(2);
        $("#gmResult").text(totalValue);
        textColor(totalValue, "#gmResult");
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