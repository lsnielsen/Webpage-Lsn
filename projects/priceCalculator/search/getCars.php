

<script>
    loopI = 1;
    carDetailsLoop = 0;
    linkArray = new Array();
    yearArray = new Array();
    kmArray = new Array();
    priceArray = new Array();
    gearArray = new Array();
    geartypeArray = new Array();

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
                    let gearMatch = /<td class="selectedcar">([0-9]) gear<\/td>/.exec(data);
                    let gearTypeMatch = /<td class="selectedcar">(Automatisk|Manuel)<\/td>/.exec(data);
                    let priceMatch = /<span class="value">([0-9]{1,3}\.[0-9]{3})[ a-z\.\/]*<\/span>/.exec(data);

                    if (yearMatch !== null) {
                        yearArray.push(yearMatch[1]);
                    } else {
                        //console.log("No year match " + linkArray[i]);
                        yearArray.push("-");
                    }
                    if (kmMatch !== null) {
                        kmArray.push(kmMatch[1]);
                    } else {
                        //console.log("No km match " + linkArray[i]);
                        kmArray.push("-");
                    }
                    if (gearMatch !== null) {
                        gearArray.push(gearMatch[1]);
                    } else {
                        //console.log("No gear match " + linkArray[i]);
                        gearArray.push("-");
                    }
                    if (gearTypeMatch !== null) {
                        geartypeArray.push(gearTypeMatch[1]);
                    } else {
                        //console.log("No geartype match "  + linkArray[i]);
                        geartypeArray.push("-");
                    }
                    if (priceMatch !== null) {
                        priceArray.push(priceMatch[1]);
                    } else {
                        //console.log("No price match "  + linkArray[i]);
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
                console.log(gearArray);
                console.log(geartypeArray);
                console.log(priceArray);
                console.log(linkArray);
            }
        }
    }






</script>