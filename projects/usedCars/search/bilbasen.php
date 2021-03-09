
<script>

	function fetchBilbasenLink(urlOne)
	{
        $.get(urlOne,
            function( data ) {
                let linkRegex = data.match(/href="(\/brugt\/bil\/[a-z]+\/[a-zA-Z0-9-]+\/[a-zA-Z0-9-]+\/[0-9]+)\">/g);
                for (let i = 0; i < linkRegex.length; i++) {
                    let temp = linkRegex[i].match(/\/brugt\/bil\/[a-z]+\/[a-zA-Z0-9-]+\/[a-zA-Z0-9-]+\/[0-9]+/);
                    let bilbasenLink = "https://www.bilbasen.dk" + temp;
                    if (!bilbasenArray.includes(bilbasenLink)) {
                        bilbasenArray.push(bilbasenLink);
                    }
                }
            },
            'html' // or 'text', 'xml', 'more'
        );
	}		
	
		
	function getTheUsedCarBilbasen()
    {
        let loopII = 0;
        bilbasenLinkLoop();
        function bilbasenLinkLoop() {
            setTimeout(function() {
                getTheCarFromBilbasen(bilbasenArray[loopII]);
                loopII++;
                if (loopII < bilbasenArray.length) {
                    bilbasenLinkLoop();
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
                setBilbasenSingleCarData(singleCarArray, data, url);
            },
            'html'
        );
	}










</script>