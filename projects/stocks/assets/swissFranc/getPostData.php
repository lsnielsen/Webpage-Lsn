









<script>

    var postDataArray = new Array();
    const swizzFrancUrl = "https://www.marketwatch.com/investing/currency/usdchf";

    function getSwizzFrancPostData() {
        $.get( swizzFrancUrl,
            function( data ) {
                let openRegex = /<bg-quote class="value[" ]+[negative" ]* field="Last" format="0,0.00[0\[\]]*" channel="\/zigman2\/quotes\/[0-9]{9}\/[a-z\/0-9A-Z-\"=, ]+">([0-9\.,]+)<\/bg-quote>/;
                let openMatch = openRegex.exec(data);
                if (openMatch !== null) {
                    todayPrice = openMatch[1];
                }
            }, 'html'
        );
        setTimeout(function () {
            getSwizzFrancPostData();
        }, 200);
    }













</script>





