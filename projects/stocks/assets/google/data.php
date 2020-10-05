

<script>

    let outstanding;
    let earnings;
    let earningsPerShare;
    let peRatio;
    let lastYearGrowth;

    function getDetailedStockData()
    {
        callUrl();
        getData();
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
                    getEarnings(data);
                    getEarningsPerShare();
                    getPERatio(data);
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 200);
        }
        function getData()
        {
            var profileUrl = "https://www.marketwatch.com/investing/stock/googl/profile";
            $.get( profileUrl,
                function( profileData ) {
                    getLastYearGrowth(profileData);
                    getPEGRatio();
                    getRevenue(profileData);
                    getNetIncome(profileData);
                },
                'html'
            );
            setTimeout(function () {
                getData();
            }, 5000);
        }
    }

    function getRevenue(data)
    {
        let stockRegex = /<p class="column">Revenue<\/p>[\w\W]{1,5}<p class="data lastcolumn">\$([0-9\.]+)([A-Z]*)<\/p>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== -1) {
            $("#revenue").text(stockMatch[1] + " " + stockMatch[2]);
        }
    }

    function getNetIncome(data)
    {
        let stockRegex = /<p class="column">Net Income<\/p>[\w\W]{1,8}<p class="data lastcolumn">\$([0-9\.]+)([A-Z]*)<\/p>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== -1) {
            $("#netIncome").text(stockMatch[1] + " " + stockMatch[2]);
        }
    }

    function getPEGRatio()
    {
        let pegRatio = (peRatio / lastYearGrowth).toPrecision(3);
        $("#pegRatio").text(pegRatio);
    }

    function getLastYearGrowth(data)
    {
        let stockRegex = /[0-9]{4} Sales Growth <\/p>[\w\W]*<p class="data lastcolumn">([0-9\.]+)%<\/p>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== -1) {
            lastYearGrowth = stockMatch[1];
            $("#lastYearGrowth").text(lastYearGrowth + " %");
        }
    }

    function getPERatio(data)
    {
        let stockRegex = /P\/E Ratio<\/small>[ \n]+<span class="primary kv__primary ">([0-9,\. -]+)[A-Z]*<\/span>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== -1) {
            peRatio = stockMatch[1];
            $("#peRatio").text(peRatio);
        }
    }

    function getEarningsPerShare()
    {
        earningsPerShare = (earnings / outstanding).toPrecision(3);
        $("#earningsPerShare").text(earningsPerShare);
    }

    function getEarnings(data)
    {
        let EPS = /EPS<\/small>[ \n]+<span class="primary kv__primary ">\$([0-9,\. -]+)[A-Z]*<\/span>/.exec(data);
        if (EPS !== null) {
            earnings = (EPS[1] * outstanding).toPrecision(3);
            $("#earnings").text(earnings);
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
        let stockRegex = /Outstanding<\/small>[ \n]+<span class="primary kv__primary ">\$*([0-9,\. -]+)([A-Z]*)<\/span>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== null) {
            if (stockMatch[2] == "M") {
                outstanding = stockMatch[1] * 1000 * 1000;
            }
            $("#outstanding").text(stockMatch[1] + " " + stockMatch[2]);
        }
    }

    function getMarketCap(data)
    {
        let stockRegex = /Market Cap<\/small>[ \n]+<span class="primary kv__primary ">\$([0-9,\. -]+)([A-Z]*)<\/span>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== null) {
            $("#marketCap").text(stockMatch[1] + " " + stockMatch[2]);
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