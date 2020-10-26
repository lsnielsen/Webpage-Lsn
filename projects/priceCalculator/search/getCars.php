

<script>
    loopI = 1;
    carDetailsLoop = 0;
    linkArray = new Array();
    yearArray = new Array();
    kmArray = new Array();
    priceArray = new Array();

    function carGetter()
    {
        const basicStartUrl = "https://www.bilbasen.dk/brugt/bil/";
        const basicEndUrl = "?includeengroscvr=true&pricefrom=0&includeleasing=true";
        let bilbasenUrl;
        if (typeof(model)    !== 'undefined') {
            let temporary = model.split(" ");
            bilbasenUrl = basicStartUrl + temporary[0] + "/" + temporary[1] + basicEndUrl;
        } else {
            console.log("what");
            bilbasenUrl = basicStartUrl + "audi" + "/" + "a3" + basicEndUrl;
        }
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
                    getCarDetails();
                }, 500)
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
                            linkArray.push(temp);
                        }
                    }
                }
            },
            'html' // or 'text', 'xml', 'more'
        );
    }

    function getCarDetails()
    {
        getAttributeLoop();
        function getAttributeLoop()
        {
            $.get(linkArray[carDetailsLoop],
                function (data) {
                    let yearMatch = /<span class="value">.+([0-9]{4})<\/span>/.exec(data);
                    let kmMatch = /Km.* ([0-9]{1,3}\.[0-9]{3}).*<\/span>.*<\/p>.*\/section>.*<section id="bbVipUsage"/s.exec(data);
                    let priceMatch = /<span class="value">([0-9]{1,3}\.[0-9]{3}) (kr\.|kr\.\/md\.)<\/span>/.exec(data);

                    if (yearMatch !== null && kmMatch !== null && priceMatch !== null && priceMatch[2] !== "kr./md.") {
                        yearArray.push(yearMatch[1]);
                        kmArray.push(kmMatch[1]);
                        priceArray.push(priceMatch[1]);
                    } else {
                        yearArray.push("-");
                        kmArray.push("-");
                        priceArray.push("-");
                    }
                },
                'html' // or 'text', 'xml', 'more'
            );
            if(carDetailsLoop < linkArray.length) {
                carDetailsLoop++;
                console.log("loop: " + carDetailsLoop);
                setTimeout(function() {
                    getAttributeLoop();
                }, 150);
            } else {
                console.log(yearArray);
                console.log(kmArray);
                console.log(priceArray);
                console.log(linkArray);
            }
        }
    }






</script>