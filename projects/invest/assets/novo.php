

<script>

    const novoDate = "12/2 - 2021";
    const novoPrice = 1780.40;
    const novoName = "Novo Nordisk";
    const novoStocks = 4;
    const pricePerStockNovo = (novoPrice / novoStocks).toFixed(2);
    let theCurrency;

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

    function getCurrency()
    {
        let url = "https://themoneyconverter.com/USD/DKK";
        $.get(url ,function( data ) {
            let currencyRegex = /1 usd = ([0-9]{1,2}\.[0-9]{4}) dkk/i;
            let currencyMatch = currencyRegex.exec(data);
            if (currencyMatch !== null) {
                theCurrency = currencyMatch[1];
            } else {
                theCurrency = 1;
            }
        }, 'html' );
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

    function setNovoData(marketValue)
    {
        getCurrency();
        marketValue = (marketValue * theCurrency).toFixed(2);
        $("#novoVal").text(marketValue);
        let totalValue = ((marketValue * novoStocks) - novoPrice).toFixed(2);
        let stockValue = (marketValue - pricePerStockNovo).toFixed(2);
        let percentageValue = (((marketValue / pricePerStockNovo) * 100) - 100).toFixed(2);
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