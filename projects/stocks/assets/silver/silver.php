

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
        let silverRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let silverMatch = silverRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (silverMatch !== null) {
            $("#silverVal").text(silverMatch[1]);
        } else if (closeMatch !== null) {
            $("#silverVal").text(closeMatch[1]);
        }
    }

    function getSilverPercentage(data)
    {
        let silverRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/"= ]+>([-0-9\.]+)%<\/bg-quote>/;
        let silverMatch = silverRegex.exec(data);
        let closeMatch = /<span class="change--percent--q">([0-9\.-]+)%<\/span>/.exec(data);
        if (silverMatch !== null && closeMatch == null) {
            $("#silverPercentage").text(silverMatch[1] + " %");
            textColor(silverMatch[1], "#silverPercentage");
        } else if (closeMatch !== null) {
            $("#silverPercentage").text(closeMatch[1] + " %");
            textColor(closeMatch[1], "#silverPercentage");
        }
    }

    function getSilverChange(data)
    {
        let silverRegex = /<bg-quote field="change" format="0,0\.00\[0\]" channel="\/zigman2\/quotes\/[0-9]{9}\/delayed"[a-z=" ]*>([0-9\.-]+)<\/bg-quote>/;
        let silverMatch = silverRegex.exec(data);
        let closeMatch = /<span class="change--point--q">([0-9-\.]+)<\/span>/.exec(data);
        if (silverMatch !== null) {
            $("#silverChange").text(silverMatch[1]);
            textColor(silverMatch[1], "#silverChange");
        } else if (closeMatch !== null) {
            $("#silverChange").text(closeMatch[1]);
            textColor(closeMatch[1], "#silverChange");
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