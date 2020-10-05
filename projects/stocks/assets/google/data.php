

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
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 200);
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