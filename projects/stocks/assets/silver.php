

<script>


    function getSilverData()
    {
        callUrl();
        function callUrl() {
            var url = "https://www.marketwatch.com/investing/future/si00";
            $.get( url,
                function( data ) {
                    getSilverValue(data);
                    getSilverPercentage(data);
                    getSilverChange(data);
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 200);
        }
    }

    function getSilverValue(data)
    {
        let silverRegex = /<bg-quote class="value[ a-z]*" field="Last" format="0,0\.00\[0\]" channel="\/zigman2\/quotes\/[0-9]{9}\/delayed">([0-9\.]+)<\/bg-quote>/;
        let silverMatch = silverRegex.exec(data);
        if (silverMatch !== null) {
            $("#silverVal").text(silverMatch[1]);
        }
    }

    function getSilverPercentage(data)
    {
        let silverRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/[0-9]{9}\/delayed"[a-z=" ]*>([0-9\.-]+)%<\/bg-quote>/;
        let silverMatch = silverRegex.exec(data);
        if (silverMatch !== null) {
            $("#silverPercentage").text(silverMatch[1] + " %");
            if (silverMatch[1] < 0) {
                $("#silverPercentage").css("color", "red");
            } else {
                $("#silverPercentage").css("color", "green");
            }
        }
    }

    function getSilverChange(data)
    {
        let silverRegex = /<bg-quote field="change" format="0,0\.00\[0\]" channel="\/zigman2\/quotes\/[0-9]{9}\/delayed"[a-z=" ]*>([0-9\.-]+)<\/bg-quote>/;
        let silverMatch = silverRegex.exec(data);
        if (silverMatch !== null) {
            $("#silverChange").text(silverMatch[1]);
            if (silverMatch[1] < 0) {
                $("#silverChange").css("color", "red");
            } else {
                $("#silverChange").css("color", "green");
            }
        }
    }


</script>