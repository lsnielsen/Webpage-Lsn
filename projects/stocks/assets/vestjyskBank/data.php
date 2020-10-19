

<script>

    let todayPrice;

    function getDetailedStockData()
    {
        callUrl();
    }

    function callUrl() {
        const url = "https://www.marketwatch.com/investing/stock/vjba?countrycode=dk";
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
        let closeRegex = /<span class="value">([0-9\.-]+)<\/span>/;
        let closeMatch = closeRegex.exec(data);
        let openRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
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
        let diff = 3.00 - todayPrice;
        let percentage = (Math.abs(diff) / 8.30 * 100).toFixed(2);
        $("#totalDiff").text(percentage + " %");
        if (diff > 0) {
            $("#totalDiff").css("color", "red");
        } else if (diff < 0) {
            $("#totalDiff").css("color", "green");
        }
    }





</script>