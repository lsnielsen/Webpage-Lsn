

<script>
    loopI = 1;
    linkArray = new Array();

    function carGetter()
    {
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

                }, 250)
            }
        }, 250)
    }

    function getLinks(webpage) {
        $.get(webpage,
            function( data ) {
                for (let i = 0; i < data.length; i++) {
                    let subStr = data.substring(i, i+200);
                    const regex = /href="(\/brugt\/bil\/[a-z]+\/[0-9a-z]+\/[a-z0-9-]+\/[0-9]+)">/;
                    const match = regex.exec(subStr);
                    let temp;
                    if (match !== null) {
                        temp = "https://www.bilbasen.dk" + match[1];
                        if (!linkArray.includes(temp)) {
                            console.log("match");
                            linkArray.push(temp);
                        }
                    }
                }
            },
            'html' // or 'text', 'xml', 'more'
        );
        console.log("linkArray.length: " + linkArray.length);
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