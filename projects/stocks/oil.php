

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
        }
    }

    function getOilPercentage(data)
    {
        let oilRegex = /<bg-quote field="percentchange" format="0,0\.00%" channel="\/zigman2\/quotes\/204600377\/composite">([0-9\.-]+%)<\/bg-quote>/;
        let oilMatch = oilRegex.exec(data);
        if (oilMatch !== null) {
            $("#oilPercentage").text(oilMatch[1]);
        }
    }

    function getOilChange(data)
    {
        let oilRegex = /<bg-quote field="change" format="0,0.00" channel="\/zigman2\/quotes\/204600377\/composite">([0-9\.-]+)<\/bg-quote>/;
        let oilMatch = oilRegex.exec(data);
        if (oilMatch !== null) {
            $("#oilChange").text(oilMatch[1]);
        }
    }


</script>