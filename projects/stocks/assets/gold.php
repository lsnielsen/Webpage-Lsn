

<script>


    function getGoldData()
    {
        callUrl();
        function callUrl() {
            var url = "https://www.marketwatch.com/investing/stock/gold";
            $.get( url,
                function( data ) {
                    getGoldValue(data);
                    getGoldPercentage(data);
                    getGoldChange(data);
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 200);
        }
    }

    function getGoldValue(data)
    {
        let goldRegex = /<bg-quote class="value[ a-z]*" field="Last" format="0,0\.00" channel="\/zigman2\/quotes\/201432642\/composite,\/zigman2\/quotes\/201432642\/lastsale"[ a-z0-9-="\.]*>([0-9\.]+)<\/bg-quote>/;
        let goldMatch = goldRegex.exec(data);
        if (goldMatch !== null) {
            $("#goldVal").text(goldMatch[1]);
        }
    }

    function getGoldPercentage(data)
    {
        let goldRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/201432642\/composite"[a-z=" ]*>([0-9\.-]+)%<\/bg-quote>/;
        let goldMatch = goldRegex.exec(data);
        if (goldMatch !== null) {
            $("#goldPercentage").text(goldMatch[1] + " %");
            if (goldMatch[1] < 0) {
                $("#goldPercentage").css("color", "red");
            } else {
                $("#goldPercentage").css("color", "green");
            }
        }
    }

    function getGoldChange(data)
    {
        let goldRegex = /<bg-quote field="change" format="0,0\.00\[00\]" channel="\/zigman2\/quotes\/201432642\/composite"[ a-z0-9="-\.]*>([0-9\.-]+)<\/bg-quote>/;
        let goldMatch = goldRegex.exec(data);
        if (goldMatch !== null) {
            $("#goldChange").text(goldMatch[1]);
            if (goldMatch[1] < 0) {
                $("#goldChange").css("color", "red");
            } else {
                $("#goldChange").css("color", "green");
            }
        }
    }


</script>