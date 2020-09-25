
<script>

	function callingFirstUrl(urlOne, modelArray) 
	{
		//console.log("First url call ");
		$.get(urlOne, 
			function( data ) {
		
				for ($i = 0; $i < data.length; $i++) {
					subStr = data.substring($i, $i+200);
					temp = subStr.search(/\"\/brugt\/bil\/[a-z]+\/[a-zA-Z0-9-,.\/]+\"$/);
					if (temp != -1) {
						var theFirstString = subStr.substring(temp + 1, subStr.length - 1);
						//console.log("url: " + theFirstString);
						//console.log("model: " + modelArray[0] + " " + modelArray[1]);
						//console.log("true, includes: " + modelArray[0] + ", " + modelArray[1]);
						theFirstString = "https://www.bilbasen.dk" + theFirstString;
						//console.log("url: " + theFirstString);
						firstUrlArr.push(theFirstString);
					}
				}
			}, 
			'html' // or 'text', 'xml', 'more'
		);  
	}		
	
		
	function getTheUsedCarBilbasen() {
		//console.log("First array:");
		//console.log(firstUrlArr);
		
		var loopII = 0;
		mySecondLoop();
		function mySecondLoop() {       
			setTimeout(function() {   
				//console.log("Making second url call");
				getTheCarFromBilbasen(firstUrlArr[loopII]);
				loopII++;                  
				if (loopII < firstUrlArr.length) {         
					mySecondLoop();             
				}                       
			}, 1200)
		}
	}
	
	
	function getTheCarFromBilbasen(url)
	{
		//console.log("second url calls, url: " + url);
		$.get(url, 
			function( data ) {
				//console.log("calling the second url");
				var singleCarArray = new Array();
				theLink = url;
				getMainAttributes(data, singleCarArray);
				setPrimerAttributes(data, singleCarArray);
				setExtraEquipment(data);
				
				setTheFirstArray(singleCarArray);
				//console.log("single car array : " + singleCarArray);
			},
			'html'
		);
	}










</script>