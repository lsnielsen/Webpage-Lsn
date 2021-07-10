

<script>

    const nordeaDate = "16/12 - 2020";
    const nordeaPrice = 1000;
    const nordeaName = "Nordea";
    const nordeaStocks = 848;
    const pricePerStockNordea = (nordeaPrice / nordeaStocks).toFixed(2);

    function getNordeaData()
    {
        callUrl();
        function callUrl() {
            const url = "https://markets.ft.com/data/funds/tearsheet/summary?s=DK0060987709:DKK";
            $.get( url,
                function( data ) {
                    getNordeaValue(data);
                    setNordeaStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 5870);
        }
    }

    function setNordeaStandardData()
    {
        $("#nordeaDate").text(nordeaDate);
        $("#nordeaPrice").text(nordeaPrice);
        $("#nordeaName").text(nordeaName);
        $("#nordeaStocks").text(nordeaStocks);
        $("#nordeaStockPrice").text(pricePerStockNordea);
    }

    function getNordeaValue(data)
    {
        let nordeaRegex = /<li><span class="mod-ui-data-list__label">Price \(DKK\)<\/span><span class="mod-ui-data-list__value">([0-9.]+)<\/span><\/li>/;
        let nordeaMatch = nordeaRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (nordeaMatch !== null) {
            setNordeaData(nordeaMatch[1]);
        } else if (closeMatch !== null) {
            setNordeaData(closeMatch[1]);
        }
    }

    function setNordeaData(marketValue)
    {
        marketValue = Number(marketValue).toFixed(2);
        $("#nordeaVal").text(marketValue);

        let stockValue = (marketValue - pricePerStockNordea).toFixed(2);
        textColor(stockValue, "#nordeaStockResult");
        $("#nordeaStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockNordea) * 100) - 100).toFixed(2);
        $("#nordeaPercentage").text(percentageValue + " %");
        textColor(percentageValue, "#nordeaPercentage");

        let totalValue = ((marketValue * nordeaStocks) - nordeaPrice).toFixed(2);
        $("#nordeaResult").text(totalValue);
        textColor(totalValue, "#nordeaResult");
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