
<script>

	function fetchBiltorvetLink(urlOne)
	{
        $.get(urlOne,
            function( data ) {
                let linkRegex = data.match(/(\/bil\/[a-z0-9 -]+\/[0-9a-z]+\/[a-z0-9-\/]+)/g);
                for (let i = 0; i < linkRegex.length; i++) {
                    let temp = linkRegex[i].match(/\/bil\/[a-z0-9 -]+\/[0-9a-z]+\/[a-z0-9-\/]+/);
                    let biltorvetLink = "https://www.biltorvet.dk" + temp;
                    if (!biltorvetArray.includes(biltorvetLink)) {
                        biltorvetArray.push(biltorvetLink);
                    }
                }
            },
            'html' // or 'text', 'xml', 'more'
        );
	}		
	
		
	function getTheUsedCarBiltorvet()
    {
        let loopII = 0;
        biltorvetLinkLoop();
        function biltorvetLinkLoop() {
            setTimeout(function() {
                getTheCarFromBiltorvet(biltorvetArray[loopII]);
                loopII++;
                if (loopII < biltorvetArray.length) {
                    biltorvetLinkLoop();
                } else {
                    setTimeout(function() {
                        lastBool = true;
                    }, 3000)
                }
            }, 120)
        }
	}
	
	
	function getTheCarFromBiltorvet(url)
	{
        $.get(url,
            function( data ) {
                let singleCarArray = new Array();
                setBiltorvetSingleCarData(singleCarArray, data, url);
            },
            'html'
        );
	}










</script>