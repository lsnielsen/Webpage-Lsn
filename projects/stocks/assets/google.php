

<script>


    function getGoogleData()
    {
        callUrl();
        function callUrl() {
            var url = "https://www.marketwatch.com/investing/stock/googl";
            $.get( url,
                function( data ) {
                    getGoogleValue(data);
                    getGooglePercentage(data);
                    getGoogleChange(data);
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 200);
        }
    }

    function getGoogleValue(data)
    {
        let googleRegex = /<bg-quote class="value[ a-z]*" field="Last" format="0,0\.00" channel="\/zigman2\/quotes\/[0-9]{9}\/composite,\/zigman2\/quotes\/202490156\/lastsale" session="pre">([0-9\.,]+)<\/bg-quote>/;
        let googleMatch = googleRegex.exec(data);
        if (googleMatch !== null) {
            $("#googleVal").text(googleMatch[1]);
        }
    }

    function getGooglePercentage(data)
    {
        let googleRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/[0-9]{9}\/[0-9-a-z=" ]*>([0-9\.-]+)%<\/bg-quote>/;
        let googleMatch = googleRegex.exec(data);
        if (googleMatch !== null) {
            $("#googlePercentage").text(googleMatch[1] + " %");
            if (googleMatch[1] < 0) {
                $("#googlePercentage").css("color", "red");
            } else {
                $("#googlePercentage").css("color", "green");
            }
        } 
    }

    function getGoogleChange(data)
    {
        let googleRegex = /<bg-quote field="change" format="0,0\.00\[00\]" channel="\/zigman2\/quotes\/[0-9]{9}\/[0-9a-z-=" \.]*>([0-9\.-]+)<\/bg-quote>/;
        let googleMatch = googleRegex.exec(data);
        if (googleMatch !== null) {
            $("#googleChange").text(googleMatch[1]);
            if (googleMatch[1] < 0) {
                $("#googleChange").css("color", "red");
            } else {
                $("#googleChange").css("color", "green");
            }
        }
    }


</script>