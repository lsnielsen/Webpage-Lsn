
<script>

	function callingThirdUrl(urlOne)
	{
        $.get(urlOne,
            function( data ) {
                console.log({data});
                let linkRegex = data.match(/[&a-z;:]*\/bil\/[a-z0-9]+\/[a-z0-9-]*\/[a-z0-9-]*\/[0-9]*/g);
                for (let i = 0; i < linkRegex.length; i++) {
                    let temp = linkRegex[i].match(/(\/bil\/[a-z0-9]+\/[a-z0-9-]*\/[a-z0-9-]*\/[0-9]*)/);
                    let theFirstString = "https://www.biltorvet.dk" + temp;
                    if (!firstUrlArr.includes(theFirstString)) {
                        firstUrlArr.push(theFirstString);
                    }
                }
            },
            'html' // or 'text', 'xml', 'more'
        );
	}
	
		
	function getTheUsedCarBilTorvet()
    {
        let loopII = 0;
        mySecondLoop();
        function mySecondLoop() {
            setTimeout(function() {
                getTheCarFromBilTorvet(firstUrlArr[loopII]);
                loopII++;
                if (loopII < firstUrlArr.length) {
                    mySecondLoop();
                } else {
                    setTimeout(function() {
                        lastBool = true;
                    }, 3000)
                }
            }, 120)
        }
	}
	
	
	function getTheCarFromBilTorvet(url)
	{
        $.get(url,
            function( data ) {
                let singleCarArray = new Array();
                setTheFirstArrayBT(singleCarArray, data, url);
            },
            'html'
        );
	}










</script>