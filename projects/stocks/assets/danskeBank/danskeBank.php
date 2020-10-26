

<script>


    function getDanskeBankData()
    {
        callUrl();
        function callUrl() {
            var url = "https://www.marketwatch.com/investing/stock/danske?countrycode=dk";
            $.get( url,
                function( data ) {
                    getDanskeBankValue(data);
                    getDanskeBankPercentage(data);
                    getDanskeBankChange(data);
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 200);
        }
    }

    function getDanskeBankValue(data)
    {
        let danskeBankRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let danskeBankMatch = danskeBankRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (danskeBankMatch !== null) {
            $("#danskeBankVal").text(danskeBankMatch[1] + " DKK");
        } else if (closeMatch !== null) {
            $("#danskeBankVal").text(closeMatch[1] + " DKK");
        }
    }

    function getDanskeBankPercentage(data)
    {
        let danskeBankRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/"= ]+>([-0-9\.]+)%<\/bg-quote>/;
        let danskeBankMatch = danskeBankRegex.exec(data);
        let closeMatch = /<span class="change--percent--q">([0-9\.-]+)%<\/span>/.exec(data);
        if (danskeBankMatch !== null && closeMatch == null) {
            $("#danskeBankPercentage").text(danskeBankMatch[1] + " %");
            textColor(danskeBankMatch[1], "#danskeBankPercentage");
        } else if (closeMatch !== null) {
            $("#danskeBankPercentage").text(closeMatch[1] + " %");
            textColor(closeMatch[1], "#danskeBankPercentage");
        }
    }

    function getDanskeBankChange(data)
    {
        let danskeBankRegex = /<bg-quote field="change" format="[0,\.\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/delayed"[a-z=" ]*>([0-9\.-]+)<\/bg-quote>/;
        let danskeBankMatch = danskeBankRegex.exec(data);
        let closeMatch = /<span class="change--point--q">([0-9-\.]+)<\/span>/.exec(data);
        if (danskeBankMatch !== null) {
            $("#danskeBankChange").text(danskeBankMatch[1] + " DKK");
            textColor(danskeBankMatch[1], "#danskeBankChange");
        } else if (closeMatch !== null) {
            $("#danskeBankChange").text(closeMatch[1] + " DKK");
            textColor(closeMatch[1], "#danskeBankChange");
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