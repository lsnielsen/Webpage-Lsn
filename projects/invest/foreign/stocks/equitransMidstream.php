
<html>
<script>

    const equitransMidstreamDate = "8/4 - 2021";
    const equitransMidstreamPrice = 1057.68;
    const equitransMidstreamName = "Equitrans Midstream";
    const equitransMidstreamStocks = 20;
    const pricePerStockEquitransMidstream = (equitransMidstreamPrice / equitransMidstreamStocks).toFixed(2);

    function getEMSteamData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/etrn";
            $.get( url,
                function( data ) {
                    getEquitransMidstreamValue(data);
                    setEquitransMidstreamStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, Math.floor(Math.random() * 40000) + 2000);
        }
    }

    function setEquitransMidstreamStandardData()
    {
        $("#equitransMidstreamDate").text(equitransMidstreamDate);
        $("#equitransMidstreamPrice").text(equitransMidstreamPrice);
        $("#equitransMidstreamName").text(equitransMidstreamName);
        $("#equitransMidstreamStocks").text(equitransMidstreamStocks);
        $("#equitransMidstreamStockPrice").text(pricePerStockEquitransMidstream);
    }

    function getEquitransMidstreamValue(data)
    {
        let equitransMidstreamRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let equitransMidstreamMatch = equitransMidstreamRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (equitransMidstreamMatch !== null) {
            setEquitransMidstreamData(equitransMidstreamMatch[1]);
        } else if (closeMatch !== null) {
            setEquitransMidstreamData(closeMatch[1]);
        }
    }

    function setEquitransMidstreamData(marketValue)
    {
        marketValue = (marketValue * foreignUsdDkkCurrency).toFixed(2);
        $("#equitransMidstreamVal").text(marketValue);
	textColor(marketValue, "#equitransMidstreamVal");

        let stockValue = (marketValue - pricePerStockEquitransMidstream).toFixed(2);
        textColor(stockValue, "#equitransMidstreamStockResult");
        $("#equitransMidstreamStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockEquitransMidstream) * 100) - 100).toFixed(2);
        $("#equitransMidstreamPercentage").text(percentageValue + " %");
        textColor(percentageValue, "#equitransMidstreamPercentage");

        let totalValue = ((marketValue * equitransMidstreamStocks) - equitransMidstreamPrice).toFixed(2);
        $("#equitransMidstreamResult").text(totalValue);
        textColor(totalValue, "#equitransMidstreamResult");
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