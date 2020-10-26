

<script>
    loopI = 1;
    carDetailsLoop = 0;
    linkArray = new Array();
    yearArray = new Array();
    kmArray = new Array();
    priceArray = new Array();
    startPriceArray = new Array();

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
                    let startPrice = /<tr>\s*<td style="color: #888;width:150px;">Nypris<\/td>[\w\W]*"Hvad betyder nypris?[\w\W]*<td class="selectedcar">([0-9]{1,3}\.[0-9]{3}) kr<\/td>/.exec(data);
                    let priceType = checkPriceType(priceMatch);
                    let yearBool = checkForYearMatch(yearMatch);

                    if (yearBool && kmMatch !== null && priceMatch !== null && priceType && startPrice !== null) {
                        yearArray.push(yearMatch[1]);
                        kmArray.push(kmMatch[1]);
                        priceArray.push(priceMatch[1]);
                        startPriceArray.push(startPrice[1]);
                    }
                },
                'html' // or 'text', 'xml', 'more'
            );
            if(carDetailsLoop < linkArray.length) {
                carDetailsLoop++;
                setTimeout(function() {
                    getAttributeLoop();
                }, 50);
            } else {
                //console.log(yearArray);
                //console.log(kmArray);
                //console.log(priceArray);
                //console.log(startPriceArray);
                //console.log(linkArray);
                calculateTheResult();
            }
        }
    }

    function checkForYearMatch(yearMatch)
    {
        let chosenYear = $(".theYear").text();
        if (yearMatch !== null) {
            if (chosenYear == yearMatch[1]) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    function checkPriceType(priceMatch)
    {
        if (priceMatch !== null) {
            if (priceMatch[2] == "kr./md.") {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }

    function calculateTheResult()
    {
        let pricePerKilometer = 0;
        let starterPrice;
        let drivenKilometer;
        let finalResult;
        for (let i = 0; i < kmArray.length; i++) {
            let temp = priceArray[i] / kmArray[i];
            pricePerKilometer = pricePerKilometer + (startPriceArray[i] - priceArray[i]) / kmArray[i];
        }
        pricePerKilometer = (pricePerKilometer / kmArray.length).toFixed(2);
        $(".theAveragePricePerKm").text(pricePerKilometer);
        starterPrice = $(".theStartPrice").text();
        drivenKilometer = $(".theKm").text();
        finalResult = (starterPrice - (drivenKilometer * pricePerKilometer)).toFixed(2);
        $(".theResultPrice").text(finalResult);

        //console.log("pris/km: " + pricePerKilometer);
        //console.log("start pris: " + starterPrice);
        //console.log("Antal km: " + drivenKilometer);
        //console.log("Resultat: " + finalResult);

        $(".theResults").show();
    }




</script>