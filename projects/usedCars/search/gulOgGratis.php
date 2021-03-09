
<script>

	function fetchGulOgGratisLink(url)
	{
		$.get(url, 
			function( data ) {
                let theGoglinkRegex = data.match(/\"\/biler\/personbiler\/[a-z]+\/[a-zA-Z0-9-,.\/]+\/annonce\/[0-9a-zA-Z-]+\"/g);
                for (let i = 0; i < theGoglinkRegex.length; i++) {
                    let gogTemp = theGoglinkRegex[i].match(/\/biler\/personbiler\/[a-z]+\/[a-zA-Z0-9-,.\/]+\/annonce\/[0-9a-zA-Z-]+/);
                    let gulOgGratisLink = "https://www.guloggratis.dk" + gogTemp;
                    if (!gulOgGratisArray.includes(gulOgGratisLink)) {
                        gulOgGratisArray.push(gulOgGratisLink);
                    }
                }
			}, 
			'html' // or 'text', 'xml', 'more'
		);  
	}


		
	function getTheUsedCarGulOgGratis() {
		
		var loopJJ = 0;
		gulOgGratisLinkLoop();
		function gulOgGratisLinkLoop() {       
			setTimeout(function() {   
				getTheCarGulOgGratis(gulOgGratisArray[loopJJ]);
				loopJJ++;                  
				if (loopJJ < gulOgGratisArray.length) {         
					gulOgGratisLinkLoop();             
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