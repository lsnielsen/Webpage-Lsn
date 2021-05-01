

<script>

    let afkastPlusDate = "9/1 - 2021";
    let afkastPlusPrice = 8000.00;
    let afkastPlusName = "AfkastPlus Group";
    let afkastPlusStocks = 1210;
    let pricePerStockAP = (afkastPlusPrice / afkastPlusStocks).toFixed(2);

    function getAfkastPlusData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.morningstar.dk/dk/funds/snapshot/snapshot.aspx?id=F000010QNK";
            $.get( url,
                function( data ) {
                    getAfkastPlusValue(data);
                    setAfkastPlusStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, Math.floor(Math.random() * 40000) + 2000);
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
        let afkastPlusRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let afkastPlusMatch = afkastPlusRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (afkastPlusMatch !== null) {
            setData(afkastPlusMatch[1]);
        } else if (closeMatch !== null) {
            setData(closeMatch[1]);
        }
    }

    function setData(startValue)
    {
        $("#afkastPlusVal").text(startValue);
        let totalValue = ((startValue * afkastPlusStocks) - afkastPlusPrice).toFixed(2);
        let stockValue = (startValue - pricePerStockAP).toFixed(2);
        let percentageValue = (((startValue / pricePerStockAP) * 100) - 100).toFixed(2);
        $("#afkastPlusPercentage").text(percentageValue + " %");
        $("#afkastPlusResult").text(totalValue);
        $("#afkastPlusStockResult").text(stockValue);
        textColor(percentageValue, "#afkastPlusPercentage");
        textColor(totalValue, "#afkastPlusResult");
        textColor(stockValue, "#afkastPlusStockResult");
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