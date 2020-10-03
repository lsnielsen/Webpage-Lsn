

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
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (euroMatch !== null) {
            $("#euroVal").text(euroMatch[1]);
        } else if (closeMatch !== null) {
            $("#euroVal").text(closeMatch[1]);
        }
    }

    function getEuroPercentage(data)
    {
        let euroRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/"= ]+>([-0-9\.]+)%<\/bg-quote>/;
        let euroMatch = euroRegex.exec(data);
        let closeMatch = /<span class="change--percent--q">([0-9\.-]+)%<\/span>/.exec(data);
        if (euroMatch !== null && closeMatch == null) {
            $("#euroPercentage").text(euroMatch[1] + " %");
            textColor(euroMatch[1], "#euroPercentage");
        } else {
            $("#euroPercentage").text(closeMatch[1] + " %");
            textColor(closeMatch[1], "#euroPercentage");
        }
    }

    function getEuroChange(data)
    {
        let euroRegex = /<bg-quote field="change" format="0,0\.00\[00\]" channel="\/zigman2\/quotes\/210561242\/realtime\/sampled"[ a-z0-9-="\.]*>([0-9\.-]*)<\/bg-quote>/;
        let euroMatch = euroRegex.exec(data);
        let closeMatch = /<span class="change--point--q">([0-9-\.]+)<\/span>/.exec(data);
        if (euroMatch !== null) {
            $("#euroChange").text(euroMatch[1]);
            textColor(euroMatch[1], "#euroChange");
        } else if (closeMatch[1] !== null) {
            $("#euroChange").text(closeMatch[1]);
            textColor(closeMatch[1], "#euroChange");
        }
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