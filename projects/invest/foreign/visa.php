

<script>

    const visaDate = "28/1 - 2021";
    const visaPrice = 2502.61;
    const visaName = "Visa Inc.";
    const visaStocks = 2;
    const pricePerStockVisa = (visaPrice / visaStocks).toFixed(2);

    function getVisaData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/v";
            $.get( url,
                function( data ) {
                    getVisaValue(data);
                    setVisaStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 2000);
        }
    }

    function setVisaStandardData()
    {
        $("#visaDate").text(visaDate);
        $("#visaPrice").text(visaPrice);
        $("#visaName").text(visaName);
        $("#visaStocks").text(visaStocks);
        $("#visaStockPrice").text(pricePerStockVisa);
    }

    function getVisaValue(data)
    {
        let visaRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let visaMatch = visaRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (visaMatch !== null) {
            setVisaData(visaMatch[1]);
        } else if (closeMatch !== null) {
            setVisaData(closeMatch[1]);
        }
    }

    function setVisaData(marketValue)
    {
        marketValue = (marketValue * foreignUsdDkkCurrency).toFixed(2);
        $("#visaVal").text(marketValue);

        let stockValue = (marketValue - pricePerStockVisa).toFixed(2);
        textColor(stockValue, "#visaStockResult");
        $("#visaStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockVisa) * 100) - 100).toFixed(2);
        $("#visaPercentage").text(percentageValue + " %");
        textColor(percentageValue, "#visaPercentage");

        let totalValue = ((marketValue * visaStocks) - visaPrice).toFixed(2);
        $("#visaResult").text(totalValue);
        textColor(totalValue, "#visaResult");
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