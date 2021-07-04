<html>

<script>

    let afkastPlusDate = "9/1 - 2021";
    let afkastPlusPrice = 1460.00;
    let afkastPlusName = "AfkastPlus Group";
    let afkastPlusStocks = 10;
    let pricePerStockAP = (afkastPlusPrice / afkastPlusStocks).toFixed(2);

    function getAfkastPlusData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.nordnet.dk/markedet/investeringsforeninger-liste/16964063-wealth-invest-akl";
            $.get( url,
                function( data ) {
                    getAfkastPlusValue(data);
                    setAfkastPlusStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, danishUpdateInterval());
        }
    }

    function setAfkastPlusStandardData()
    {
        $("#afkastPlusDate").text(afkastPlusDate);
        $("#afkastPlusPrice").text(afkastPlusPrice);
        $("#afkastPlusName").text(afkastPlusName);
        $("#afkastPlusStocks").text(afkastPlusStocks);
        $("#afkastPlusStockPrice").text(pricePerStockAP);
    }

    function getAfkastPlusValue(data)
    {
        let afkastPlusRegex = /<div.+StyledPriceText[-a-z0-9 ]*">([0-9]{2,5},[0-9]*)<\/span><\/div><\/div>/;
        let afkastPlusMatch = afkastPlusRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (afkastPlusMatch !== null) {
            setAfkastPlusData(afkastPlusMatch[1]);
        } else if (closeMatch !== null) {
            setData(closeMatch[1]);
        }
    }

    function setAfkastPlusData(startValue)
    {
		startValue = parseFloat(startValue);
     	$("#afkastPlusVal").text(startValue);
        let totalValue = ((startValue * afkastPlusStocks) - afkastPlusPrice).toFixed(2);
        let stockValue = (startValue - pricePerStockAP).toFixed(2);
        let percentageValue = (((startValue / pricePerStockAP) * 100) - 100).toFixed(2);
        $("#afkastPlusPercentage").text(percentageValue + " %");
        $("#afkastPlusResult").text(totalValue);
        $("#afkastPlusStockResult").text(stockValue);
        danishTextColor(percentageValue, "#afkastPlusPercentage");
        danishTextColor(totalValue, "#afkastPlusResult");
        danishTextColor(stockValue, "#afkastPlusStockResult");
    }



</script>

</html>
