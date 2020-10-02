

<script>


    function getOilData()
    {
        callUrl();
        function callUrl() {
            var url = "https://www.marketwatch.com/investing/fund/oil";
            $.get( url,
                function( data ) {
                    getOilValue(data);
                    getOilPercentage(data);
                    getOilChange(data);
                },
                'html'
            );
            setTimeout(function () {
                callUrl();
            }, 200);
        }
    }

    function getOilValue(data)
    {
        let oilRegex = /<bg-quote class="value" field="Last" format="0,0.00" channel="\/zigman2\/quotes\/204600377\/composite,\/zigman2\/quotes\/204600377\/lastsale">([0-9\.]+)<\/bg-quote>/;
        let oilMatch = oilRegex.exec(data);
        if (oilMatch !== null) {
            $("#oilVal").text(oilMatch[1]);
        } else {
            let valueClose = /<span class="value">([0-9-%\.]+)<\/span>/.exec(data);
            $("#oilVal").text("Lukket: " + valueClose[1]);
        }

    }
    function getOilPercentage(data)
    {
        let oilRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/204600377\/composite">([0-9\.-]+)%<\/bg-quote>/;
        let oilMatch = oilRegex.exec(data);
        if (oilMatch !== null) {
            $("#oilPercentage").text(oilMatch[1] + " %");
            oilPercentageTxt(oilMatch, "#oilPercentage");
        } else {
            let percentageClose = /<span class="change--percent--q">([0-9-\.]+)%<\/span>/.exec(data);
            $("#oilPercentage").text("Lukket: " + percentageClose[1] + " %");
            oilPercentageTxt(percentageClose, "#oilPercentage");
        }
    }

    function oilPercentageTxt(match, field)
    {
        if (match[1] < 0) {
            $(field).css("color", "red");
        } else {
            $(field).css("color", "green");
        }
    }

    function getOilChange(data)
    {
        let oilRegex = /<bg-quote field="change" format="0,0.00" channel="\/zigman2\/quotes\/204600377\/composite">([0-9\.-]+)<\/bg-quote>/;
        let oilMatch = oilRegex.exec(data);
        if (oilMatch !== null) {
            $("#oilChange").text(oilMatch[1]);
            oilPercentageTxt(oilMatch, "#oilChange");
        } else {
            let changeClose = /<span class="change--point--q">([0-9-%\.]+)<\/span>/.exec(data);
            $("#oilChange").text("Lukket: " + changeClose[1]);
            oilPercentageTxt(changeClose, "#oilChange");
        }
    }


</script>