

<script>


    function getVestjyskBankData()
    {
        callUrl();
        function callUrl() {
            var url = "https://www.marketwatch.com/investing/stock/vjba?countrycode=dk";
            $.get( url,
                function( data ) {
                    getVestjyskBankValue(data);
                    getVestjyskBankPercentage(data);
                    getVestjyskBankChange(data);
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 200);
        }
    }

    function getVestjyskBankValue(data)
    {
        let vestjyskBankRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
        let vestjyskBankMatch = vestjyskBankRegex.exec(data);
        let closeMatch = /<span class="value">([0-9\.-]+)<\/span>/.exec(data);
        if (vestjyskBankMatch !== null) {
            $("#vestjyskBankVal").text(vestjyskBankMatch[1] + " DKK");
        } else if (closeMatch !== null) {
            $("#vestjyskBankVal").text(closeMatch[1] + " DKK");
        }
    }

    function getVestjyskBankPercentage(data)
    {
        let vestjyskBankRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/"= ]+>([-0-9\.]+)%<\/bg-quote>/;
        let vestjyskBankMatch = vestjyskBankRegex.exec(data);
        let closeMatch = /<span class="change--percent--q">([0-9\.-]+)%<\/span>/.exec(data);
        if (vestjyskBankMatch !== null && closeMatch == null) {
            $("#vestjyskBankPercentage").text(vestjyskBankMatch[1] + " %");
            textColor(vestjyskBankMatch[1], "#vestjyskBankPercentage");
        } else if (closeMatch !== null) {
            $("#vestjyskBankPercentage").text(closeMatch[1] + " %");
            textColor(closeMatch[1], "#vestjyskBankPercentage");
        }
    }

    function getVestjyskBankChange(data)
    {
        let vestjyskBankRegex = /<bg-quote field="change" format="[0,\.\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/delayed"[a-z=" ]*>([0-9\.-]+)<\/bg-quote>/;
        let vestjyskBankMatch = vestjyskBankRegex.exec(data);
        let closeMatch = /<span class="change--point--q">([0-9-\.]+)<\/span>/.exec(data);
        if (vestjyskBankMatch !== null) {
            $("#vestjyskBankChange").text(vestjyskBankMatch[1] + " DKK");
            textColor(vestjyskBankMatch[1], "#vestjyskBankChange");
        } else if (closeMatch !== null) {
            $("#vestjyskBankChange").text(closeMatch[1] + " DKK");
            textColor(closeMatch[1], "#vestjyskBankChange");
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