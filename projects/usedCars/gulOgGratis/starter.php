
<script>

	function callingSecondUrl(url)
	{
		//console.log("First url call ");
		$.get(url, 
			function( data ) {
				//console.log("Gul og gratis data: " + data);
				for ($i = 0; $i < data.length; $i++) {
					subStr = data.substring($i, $i+200);
					//"/biler/personbiler/audi/a6/annonce/48941394-audi-a6-limousine"
					temp = subStr.search(/\"\/biler\/personbiler\/[a-z]+\/[a-zA-Z0-9-,.\/]+\/annonce\/[0-9a-zA-Z-]+\"$/);
					if (temp != -1) {
						var theFirstString = subStr.substring(temp + 1, subStr.length - 1);
						//console.log("url: " + theFirstString);
						//console.log("model: " + modelArray[0] + " " + modelArray[1]);
						//console.log("true, includes: " + modelArray[0] + ", " + modelArray[1]);
						theFirstString = "https://www.guloggratis.dk" + theFirstString;
						//console.log("url: " + theFirstString);
						secondUrlArr.push(theFirstString);
						//console.log("\n \n");
					}
				}
			}, 
			'html' // or 'text', 'xml', 'more'
		);  
	}


		
	function getTheUsedCarGulOgGratis() {
		//console.log("First Gul og gratis array:");
		//console.log(secondUrlArr);
		
		var loopJJ = 0;
		mySecondLoop();
		function mySecondLoop() {       
			setTimeout(function() {   
				//console.log("Making second url call");
				getTheCarGulOgGratis(secondUrlArr[loopJJ]);
				loopJJ++;                  
				if (loopJJ < 1) {         
					mySecondLoop();             
				}                       
			}, 120)
		}
		
		setTimeout(
			function() 
			{
				//console.log("Second array:");
				//console.log(dataArray);
			}, 3000);
	}


	
	function getTheCarGulOgGratis(url)
	{
		//console.log("second url calls, url: " + url);
		$.get(url, 
			function( data ) {
				//console.log("Gul og gratis car url: " + data);
				var singleCarArray = new Array();
				theLink = url;
				getMainGogAttributes(data, singleCarArray);
				setPrimerGogAttributes(data, singleCarArray);
				setExtraGogEquipment(data);
				
				console.log("single car array : " + singleCarArray);
				setTheFirstGogArray(singleCarArray);
			},
			'html'
		);
	}

</script>