<html>

<script>

    const novoDate = "12/2 - 2021";
    const novoPrice = 1780.40;
    const novoName = "Novo Nordisk";
    const novoStocks = 4;
    const pricePerStockNovo = (novoPrice / novoStocks).toFixed(2);

    function getNovoData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.nordnet.dk/markedet/aktiekurser/16256554-novo-nordisk-b";
            $.get( url,
                function( data ) {
                    getNovoValue(data);
                    setNovoStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, danishUpdateInterval());
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
        let novoRegex = /StyledPriceText-sc-4o8a3-2 jokmrl">([0-9]{3,4},[0-9]{2})<\/span><\/div><\/div>/;
        let novoMatch = novoRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (novoMatch !== null) {
            setNovoData(novoMatch[1]);
        } else if (closeMatch !== null) {
            setNovoData(closeMatch[1]);
        }
    }

    function setNovoData(marketValue)
    {
    	marketValue = marketValue.replace(/,/,".");
	marketValue = parseFloat(marketValue);
        marketValue = marketValue.toFixed(2);
        $("#novoVal").text(marketValue);

        let stockValue = (marketValue - pricePerStockNovo).toFixed(2);
        danishTextColor(stockValue, "#novoStockResult");
        $("#novoStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockNovo) * 100) - 100).toFixed(2);
        $("#novoPercentage").text(percentageValue + " %");
        danishTextColor(percentageValue, "#novoPercentage");

        let totalValue = ((marketValue * novoStocks) - novoPrice).toFixed(2);
        $("#novoResult").text(totalValue);
        danishTextColor(totalValue, "#novoResult");
		
        danishTextColor(marketValue-pricePerStockNovo, "#novoVal");
    }



</script>

</html>