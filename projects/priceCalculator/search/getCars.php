

<script>
    loopI = 1;
    linkArray = new Array();

    function carGetter()
    {
        console.log("carGetter");
        const basicStartUrl = "https://www.bilbasen.dk/brugt/bil/";
        const basicEndUrl = "?includeengroscvr=true&pricefrom=0&includeleasing=true";
        const bilbasenUrl = basicStartUrl + "audi" + "/" + "a3" + basicEndUrl;
        setTimeout(function() {
            let pageUrl;
            if (loopI === 1) {
                getLinks(bilbasenUrl);
            } else {
                pageUrl = bilbasenUrl + "&page=" + loopI;
                getLinks(pageUrl);
            }
            loopI++;
            if (loopI < 25) {
                carGetter();
            } else if (loopI == 25) {
                setTimeout(function() {
                    secondBool = true;
                }, 250)
            }
        }, 250)
    }

    function getLinks(webpage) {
        console.log("getLinks");
        const regex = /<div class="row">[\n ]*<a class="listing-heading darkLink" href="(\/brugt\/bil\/[a-z]+\/[a-z0-9]+\/[0-9a-z-]+\/[0-9]+)">[0-9a-zA-Z ,\.-]+<\/a>[\n ]*<\/div>/g;
        const match = regex.exec(webpage);
        let temp;
        if (match !== null) {
            for (let $i = 1; $i < match.length; $i++) {
                temp = "https://www.bilbasen.dk" + match[$i];
                linkArray.push(temp);
            }
        }
    }

    function temporary()
    {
        $.get(urlOne,
            function( data ) {
                for (let $i = 0; $i < data.length; $i++) {
                    let subStr = data.substring($i, $i+200);

                    let temp = subStr.search(/href="\/brugt\/bil\/[a-z]+\/[a-zA-Z0-9-]+\/[a-zA-Z0-9-]+\/[0-9]+(\">)$/);
                    if (temp != -1) {
                        let theFirstString = subStr.substring(temp + 6, subStr.length - 2);
                        theFirstString = "https://www.bilbasen.dk" + theFirstString;

                        if (!firstUrlArr.includes(theFirstString)) {
                            firstUrlArr.push(theFirstString);
                        }
                    }
                }
            },
            'html' // or 'text', 'xml', 'more'
        );
    }






</script>