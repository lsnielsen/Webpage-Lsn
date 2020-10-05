

<script>


    function getDetailedStockData()
    {
        callUrl();
        function callUrl() {
            var url = "https://www.marketwatch.com/investing/stock/googl";
            $.get( url,
                function( data ) {
                    getStockValue(data);
                    getStockPercentage(data);
                    getStockChange(data);
                    getOpenValue(data);
                    getDayRangeValue(data);
                    getWeekRangeValue(data);
                    getMarketCap(data);
                    getOutstanding(data);
                    getCloseValue(data);
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 200);
        }
    }

    function getCloseValue(data)
    {
        let stockRegex = /<td class="table__cell u-semi">\$([0-9,\.]+)<\/td>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== null) {
            $("#closeValue").text(stockMatch[1]);
        }
    }

    function getOutstanding(data)
    {
        let stockRegex = /Outstanding<\/small>[ \n]+<span class="primary kv__primary ">\$*([0-9,\. -]+[A-Z]*)<\/span>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== null) {
            $("#outstanding").text(stockMatch[1]);
        }
    }

    function getMarketCap(data)
    {
        let stockRegex = /Market Cap<\/small>[ \n]+<span class="primary kv__primary ">\$([0-9,\. -]+[A-Z]*)<\/span>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== null) {
            $("#marketCap").text(stockMatch[1]);
        }
    }

    function getWeekRangeValue(data)
    {
        let stockRegex = /Week Range<\/small>[ \n]+<span class="primary kv__primary ">([0-9,\. -]+)<\/span>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== null) {
            $("#weekRangeValue").text(stockMatch[1]);
        }
    }

    function getDayRangeValue(data)
    {
        let stockRegex = /Day Range<\/small>[ \n]+<span class="primary kv__primary ">([0-9,\. -]+)<\/span>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== null) {
            $("#rangeValue").text(stockMatch[1]);
        }
    }

    function getStockValue(data)
    {
        let stockRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== null) {
            $("#stockValue").text(stockMatch[1]);
        }
    }

    function getOpenValue(data)
    {
        let stockRegex = /Open<\/small>[ \n]+<span class="primary kv__primary ">\$([0-9,\.]+)<\/span>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== null) {
            $("#openValue").text(stockMatch[1]);
        }
    }

    function getStockPercentage(data)
    {
        let stockRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/"= ]+>([-0-9\.]+)%<\/bg-quote>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== null) {
            $("#stockPercentage").text(stockMatch[1] + " %");
            if (stockMatch[1] < 0) {
                $("#stockPercentage").css("color", "red");
            } else {
                $("#stockPercentage").css("color", "green");
            }
        }
    }

    function getStockChange(data)
    {
        let stockRegex = /<bg-quote field="change" format="0,0\.00\[00\]" channel="\/zigman2\/quotes\/[0-9]{9}\/[0-9a-z-=" \.]*>([0-9\.-]+)<\/bg-quote>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== null) {
            $("#stockChange").text(stockMatch[1]);
            if (stockMatch[1] < 0) {
                $("#stockChange").css("color", "red");
            } else {
                $("#stockChange").css("color", "green");
            }
        }
    }


</script>