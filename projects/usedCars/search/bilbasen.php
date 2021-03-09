
<script>

	function callingFirstUrl(urlOne)
	{
        $.get(urlOne,
            function( data ) {
                let linkRegex = data.match(/href="(\/brugt\/bil\/[a-z]+\/[a-zA-Z0-9-]+\/[a-zA-Z0-9-]+\/[0-9]+)\">/g);
                for (let i = 0; i < linkRegex.length; i++) {
                    let temp = linkRegex[i].match(/\/brugt\/bil\/[a-z]+\/[a-zA-Z0-9-]+\/[a-zA-Z0-9-]+\/[0-9]+/);
                    let theFirstString = "https://www.bilbasen.dk" + temp;
                    if (!firstUrlArr.includes(theFirstString)) {
                        firstUrlArr.push(theFirstString);
                    }
                }
            },
            'html' // or 'text', 'xml', 'more'
        );
	}		
	
		
	function getTheUsedCarBilbasen()
    {
        let loopII = 0;
        mySecondLoop();
        function mySecondLoop() {
            setTimeout(function() {
                getTheCarFromBilbasen(firstUrlArr[loopII]);
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
	
	
	function getTheCarFromBilbasen(url)
	{
        $.get(url,
            function( data ) {
                let singleCarArray = new Array();
                setTheFirstArray(singleCarArray, data, url);
            },
            'html'
        );
	}










</script>