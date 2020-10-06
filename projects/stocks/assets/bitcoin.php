

<script>


    function getBitcoinData()
    {
        callUrl();
        function callUrl() {
            var url = "https://www.marketwatch.com/investing/cryptocurrency/btcusd";
            $.get( url,
                function( data ) {
                    getBitcoinValue(data);
                    getBitcoinPercentage(data);
                    getBitcoinChange(data);
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 200);
        }
    }

    function getBitcoinValue(data)
    {
        let bitcoinRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="[,\.0\[\]]*" channel="\/zigman2\/quotes\/[0-9]*\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let bitcoinMatch = bitcoinRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (bitcoinMatch !== null) {
            $("#bitcoinVal").text(bitcoinMatch[1]);
        } else if (closeMatch !== null) {
            $("#bitcoinVal").text(closeMatch[1]);
        }
    }

    function getBitcoinPercentage(data)
    {
        let bitcoinRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/[0-9]*\/[a-z\/"= ]+>([-0-9\.]+)%<\/bg-quote>/;
        let bitcoinMatch = bitcoinRegex.exec(data);
        let closeMatch = /<span class="change--percent--q">([0-9\.-]+)%<\/span>/.exec(data);
        if (bitcoinMatch !== null && closeMatch == null) {
            $("#bitcoinPercentage").text(bitcoinMatch[1] + " %");
            textColor(bitcoinMatch[1], "#bitcoinPercentage");
        } else {
            $("#bitcoinPercentage").text(closeMatch[1] + " %");
            textColor(closeMatch[1], "#bitcoinPercentage");
        }
    }

    function getBitcoinChange(data)
    {
        let bitcoinRegex = /<bg-quote field="change" format="0,0[\.\[\]]*" channel="\/zigman2\/quotes\/[0-9]*\/realtime[ a-z0-9-="\.]*>([0-9\.-]*)<\/bg-quote>/;
        let bitcoinMatch = bitcoinRegex.exec(data);
        let closeMatch = /<span class="change--point--q">([0-9-\.]+)<\/span>/.exec(data);
        if (bitcoinMatch !== null) {
            $("#bitcoinChange").text(bitcoinMatch[1]);
            textColor(bitcoinMatch[1], "#bitcoinChange");
        } else if (closeMatch[1] !== null) {
            $("#bitcoinChange").text(closeMatch[1]);
            textColor(closeMatch[1], "#bitcoinChange");
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