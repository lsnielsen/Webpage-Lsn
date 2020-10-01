
<script>

	function callingSecondUrl(url)
	{
		$.get(url, 
			function( data ) {
				for ($i = 0; $i < data.length; $i++) {
					subStr = data.substring($i, $i+200);
					temp = subStr.search(/\"\/biler\/personbiler\/[a-z]+\/[a-zA-Z0-9-,.\/]+\/annonce\/[0-9a-zA-Z-]+\"$/);
					if (temp != -1) {
						var theFirstString = subStr.substring(temp + 1, subStr.length - 1);
						theFirstString = "https://www.guloggratis.dk" + theFirstString;
						secondUrlArr.push(theFirstString);
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
				getTheCarGulOgGratis(secondUrlArr[loopJJ]);
				loopJJ++;                  
				if (loopJJ < secondUrlArr.length) {         
					mySecondLoop();             
				}                       
			}, 1000)
		}
	}


	
	function getTheCarGulOgGratis(url)
	{
		$.get(url, 
			function( data ) {
				var gogCarArray = new Array();

				gogTheLink = url;
				getMainGogAttributes(data);
				setPrimerGogAttributes(data);
				setExtraGogEquipment(data);
				setTheFirstGogArray(gogCarArray);
			},
			'html'
		);
	}

</script>