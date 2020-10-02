

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
        let euroRegex = /channel="\/zigman2\/quotes\/210561242\/realtime\/sampled[ -=a-z0-9">]*">([0-9.]+)<\/bg-quote>/;
        let euroMatch = euroRegex.exec(data);
        if (euroMatch !== null) {
            $("#euroVal").text(euroMatch[1]);
        }
    }

    function getEuroPercentage(data)
    {
        let euroRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/210561242\/realtime\/sampled"[a-z-="0-9 ]*>([0-9.% -]+)<\/bg-quote>/;
        let euroMatch = euroRegex.exec(data);
        if (euroMatch !== null) {
            $("#euroPercentage").text(euroMatch[1]);
        }
    }

    function getEuroChange(data)
    {
        let euroRegex = /<bg-quote field="change" format="0,0\.00\[00\]" channel="\/zigman2\/quotes\/210561242\/realtime\/sampled"[ a-z0-9-="\.]*>([0-9\.-]*)<\/bg-quote>/;
        let euroMatch = euroRegex.exec(data);
        if (euroMatch !== null) {
            $("#euroChange").text(euroMatch[1]);
        }
    }


</script>