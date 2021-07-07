

<script>

    const bitcoinGroupDate = "24/2 - 2021";
    const bitcoinGroupPrice = 2509.76;
    const bitcoinGroupName = "Bitcoin Group";
    const bitcoinGroupStocks = 6;
    const pricePerStockBitcoinGroup = (bitcoinGroupPrice / bitcoinGroupStocks).toFixed(2);

    function getBitcoinGroupData()
    {
        callUrl();
        function callUrl() {
            const url = "https://www.marketwatch.com/investing/stock/ade?countrycode=xe";
            $.get( url,
                function( data ) {
                    getBitcoinGroupValue(data);
                    setBitcoinGroupStandardData();
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 5000);
        }
    }

    function setBitcoinGroupStandardData()
    {
        $("#bitcoinGroupDate").text(bitcoinGroupDate);
        $("#bitcoinGroupPrice").text(bitcoinGroupPrice);
        $("#bitcoinGroupName").text(bitcoinGroupName);
        $("#bitcoinGroupStocks").text(bitcoinGroupStocks);
        $("#bitcoinGroupStockPrice").text(pricePerStockBitcoinGroup);
    }

    function getBitcoinGroupValue(data)
    {
        let bitcoinGroupRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let bitcoinGroupMatch = bitcoinGroupRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (bitcoinGroupMatch !== null) {
            setBitcoinGroupData(bitcoinGroupMatch[1]);
        } else if (closeMatch !== null) {
            setBitcoinGroupData(closeMatch[1]);
        }
    }

    function setBitcoinGroupData(marketValue)
    {
        marketValue = marketValue;
	currentBitcoinGroupValue = marketValue;
        $("#bitcoinGroupVal").text(marketValue);

        let stockValue = (marketValue - pricePerStockBitcoinGroup).toFixed(2);
        textColor(stockValue, "#bitcoinGroupStockResult");
        $("#bitcoinGroupStockResult").text(stockValue);

        let percentageValue = (((marketValue / pricePerStockBitcoinGroup) * 100) - 100).toFixed(2);
        $("#bitcoinGroupPercentage").text(percentageValue + " %");
        textColor(percentageValue, "#bitcoinGroupPercentage");

        let totalValue = ((marketValue * bitcoinGroupStocks) - bitcoinGroupPrice).toFixed(2);
        $("#bitcoinGroupResult").text(totalValue);
        textColor(totalValue, "#bitcoinGroupResult");
    }


</script>