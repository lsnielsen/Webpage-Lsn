
<script>

	function callingSecondUrl(url)
	{
		$.get(url, 
			function( data ) {
                let theGoglinkRegex = data.match(/\"\/biler\/personbiler\/[a-z]+\/[a-zA-Z0-9-,.\/]+\/annonce\/[0-9a-zA-Z-]+\"/g);
                for (let i = 0; i < theGoglinkRegex.length; i++) {
                    let theGogTemp = theGoglinkRegex[i].match(/\/biler\/personbiler\/[a-z]+\/[a-zA-Z0-9-,.\/]+\/annonce\/[0-9a-zA-Z-]+/);
                    let theGogFirstString = "https://www.guloggratis.dk" + theGogTemp;
                    if (!gulOgGratisArray.includes(theGogFirstString)) {
                        gulOgGratisArray.push(theGogFirstString);
                    }
                }
			}, 
			'html' // or 'text', 'xml', 'more'
		);  
	}


		
	function getTheUsedCarGulOgGratis() {
		
		var loopJJ = 0;
		mySecondLoop();
		function mySecondLoop() {       
			setTimeout(function() {   
				getTheCarGulOgGratis(gulOgGratisArray[loopJJ]);
				loopJJ++;                  
				if (loopJJ < gulOgGratisArray.length) {         
					mySecondLoop();             
				}                       
			}, 1000)
		}
	}


	
	function getTheCarGulOgGratis(url)
	{
		$.get(url, 
			function( data ) {
                const gogCarArray = new Array();
                setTheFirstArrayGog(gogCarArray, data, url);
			},
			'html'
		);
	}

</script>