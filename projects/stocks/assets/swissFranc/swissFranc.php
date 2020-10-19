

<script>


    function getSwissFrancData()
    {
        callUrl();
        function callUrl() {
            var url = "https://www.marketwatch.com/investing/currency/usdchf";
            $.get( url,
                function( data ) {
                    getSwissFrancValue(data);
                    getSwissFrancPercentage(data);
                    getSwissFrancChange(data);
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 200);
        }
    }

    function getSwissFrancValue(data)
    {
        let swissFrancRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let swissFrancMatch = swissFrancRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (swissFrancMatch !== null) {
            $("#swissFrancVal").text(swissFrancMatch[1]);
        } else if (closeMatch !== null) {
            $("#swissFrancVal").text(closeMatch[1]  );
        }
    }

    function getSwissFrancPercentage(data)
    {
        let swissFrancRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/"= ]+>([-0-9\.]+)%<\/bg-quote>/;
        let swissFrancMatch = swissFrancRegex.exec(data);
        let closeMatch = /<span class="change--percent--q">([0-9\.-]+)%<\/span>/.exec(data);
        if (swissFrancMatch !== null && closeMatch == null) {
            $("#swissFrancPercentage").text(swissFrancMatch[1] + " %");
            textColor(swissFrancMatch[1], "#swissFrancPercentage");
        } else if (closeMatch !== null) {
            $("#swissFrancPercentage").text(closeMatch[1] + " %");
            textColor(closeMatch[1], "#swissFrancPercentage");
        }
    }

    function getSwissFrancChange(data)
    {
        let swissFrancRegex = /<bg-quote field="change" format="[0,\.\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/delayed"[a-z=" ]*>([0-9\.-]+)<\/bg-quote>/;
        let swissFrancMatch = swissFrancRegex.exec(data);
        let closeMatch = /<span class="change--point--q">([0-9-\.]+)<\/span>/.exec(data);
        if (swissFrancMatch !== null) {
            $("#swissFrancChange").text(swissFrancMatch[1] + " DKK");
            textColor(swissFrancMatch[1], "#swissFrancChange");
        } else if (closeMatch !== null) {
            $("#swissFrancChange").text(closeMatch[1] + " DKK");
            textColor(closeMatch[1], "#swissFrancChange");
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