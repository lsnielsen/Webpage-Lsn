

<script>

    let todayPrice;

    function getDetailedStockData()
    {
        callUrl();
    }

    function callUrl() {
        const url = "https://www.marketwatch.com/investing/stock/astgrp?countrycode=dk";
        $.get( url,
            function( data ) {
                priceToday(data);
                totalDiff();
            },
            'html'
        );
        setTimeout(function () {
            callUrl();
        }, 200);
    }

    function priceToday(data)
    {
        let closeRegex = /<h3 class="intraday__price ">[\w\W]*<sup class="character">kr.<\/sup>[\w\W]*<span class="value">([0-9\.]+)<\/span>/;
        let closeMatch = closeRegex.exec(data);
        let openRegex = /<h3 class="intraday__price ">[\w\W]*?kr\.[\w\W]*?value" field="Last" format="0,0\.00" channel="\/zigman2\/quotes\/215377295\/delayed">([0-9\.]+)<\/bg-quote>/;
        let openMatch = openRegex.exec(data);
        if (closeMatch !== null) {
            todayPrice = closeMatch[1];
        } else if (openMatch !== null) {
            todayPrice = openMatch[1];
        }
        $("#priceToday").text(todayPrice);
    }

    function totalDiff()
    {
        let diff = 7.30 - todayPrice;
        let percentage = (Math.abs(diff) / 7.30 * 100).toFixed(2);
        $("#totalDiff").text(percentage + " %");
        if (diff > 0) {
            $("#totalDiff").css("color", "red");
        } else if (diff < 0) {
            $("#totalDiff").css("color", "green");
        }
    }





</script>