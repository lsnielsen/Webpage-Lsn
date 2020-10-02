

<script>


    function getEuroUsdData()
    {
        callUrl();
        function callUrl() {
            var url = "https://www.marketwatch.com/investing/currency/eurusd";
            $.get( url,
                function( data ) {
                    getEuroValue(data);
                    getEuroPercentage(data);
                    getEuroChange(data);
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 200);
        }
    }

    function getEuroValue(data)
    {
        let euroRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let euroMatch = euroRegex.exec(data);
        if (euroMatch !== null) {
            $("#euroVal").text(euroMatch[1]);
        }
    }

    function getEuroPercentage(data)
    {
        let euroRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/"= ]+>([-0-9\.]+)%<\/bg-quote>/;
        let euroMatch = euroRegex.exec(data);
        if (euroMatch !== null) {
            $("#euroPercentage").text(euroMatch[1] + " %");
            if (euroMatch[1] < 0) {
                $("#euroPercentage").css("color", "red");
            } else {
                $("#euroPercentage").css("color", "green");
            }
        }
    }

    function getEuroChange(data)
    {
        let euroRegex = /<bg-quote field="change" format="0,0\.00\[00\]" channel="\/zigman2\/quotes\/210561242\/realtime\/sampled"[ a-z0-9-="\.]*>([0-9\.-]*)<\/bg-quote>/;
        let euroMatch = euroRegex.exec(data);
        if (euroMatch !== null) {
            $("#euroChange").text(euroMatch[1]);
            if (euroMatch[1] < 0) {
                $("#euroChange").css("color", "red");
            } else {
                $("#euroChange").css("color", "green");
            }
        }
    }


</script>