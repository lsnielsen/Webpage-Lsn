

<script>


    function getData()
    {
        var profileUrl = "https://www.marketwatch.com/investing/stock/danske?countrycode=dk";
        $.get( profileUrl,
            function( profileData ) {
                getLastYearGrowth(profileData);
                getPEGRatio();
                getRevenue(profileData);
                getNetIncome(profileData);
            },
            'html'
        );
        setTimeout(function () {
            getData();
        }, 5000);
    }

    function getRevenue(data)
    {
        let stockRegex = /<p class="column">Revenue<\/p>[\w\W]{1,5}<p class="data lastcolumn">\$([0-9\.]+)([A-Z]*)<\/p>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== -1) {
            $("#revenue").text(stockMatch[1] + " " + stockMatch[2]);
        }
    }

    function getNetIncome(data)
    {
        let stockRegex = /<p class="column">Net Income<\/p>[\w\W]{1,8}<p class="data lastcolumn">\$([0-9\.]+)([A-Z]*)<\/p>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== -1) {
            $("#netIncome").text(stockMatch[1] + " " + stockMatch[2]);
        }
    }

    function getPEGRatio()
    {
        let pegRatio = (peRatio / lastYearGrowth).toPrecision(3);
        $("#pegRatio").text(pegRatio);
    }

    function getLastYearGrowth(data)
    {
        let stockRegex = /[0-9]{4} Sales Growth <\/p>[\w\W]*<p class="data lastcolumn">([0-9\.]+)%<\/p>/;
        let stockMatch = stockRegex.exec(data);
        if (stockMatch !== -1) {
            lastYearGrowth = stockMatch[1];
            $("#lastYearGrowth").text(lastYearGrowth + " %");
        }
    }

</script>