
<?php	
	include("array.php");
	include("getCarFunctions.php");
	include("extraEquipment.php");
?>

<script>

	
	var theUrl = "https://www.bilbasen.dk/brugt/bil?IncludeEngrosCVR=true&PriceFrom=0&includeLeasing=true";

	var firstUrlArr = new Array();
	var dataArray = new Array();
	
	$( document ).ready(function() {
		for(i = 1; i<2; i++) {
			setTimeout(
				function() 
				{
					if (i >= 2) {
						theUrl = theUrl + "&page=" + i;
					}
					callingFirstUrl(theUrl);
				}, 6000
			);
		}
		setTimeout(
			function() 
			{
				$("#webscraper").click();
				setTimeout(
					function() 
					{
						makeArrayToPhp();
					}, 5000);
			}, 13000);
	});
	
	
	
	function makeArrayToPhp()
	{
		for(i=0; i<dataArray.length; i++) {
			arrayValue = dataArray[i];
			for(j=0; j<arrayValue.length; j++) {
				if (arrayValue[j] == ",") {
					arrayValue[j] = ".";
				}
			}
		}
		$('#arrayButton').val(dataArray);
		$("#arrayButton").show();
		$("#arrayButton").click();
	}
	
	
	
	
		
	$("#webscraper").click(function() {
		//console.log("First array:");
		//console.log(firstUrlArr);
		for(i = 0; i<firstUrlArr.length; i++) {
			callingSecondUrl(firstUrlArr[i]);
		}
		setTimeout(
			function() 
			{
				console.log("Second array:");
				console.log(dataArray);
			}, 3000);
	});
	
	function callingFirstUrl(urlOne) 
	{
		$.get(urlOne, 
			function( data ) {
		
				for ($i = 0; $i < data.length; $i++) {
					subStr = data.substring($i, $i+60);
					temp = subStr.search(/\"\/brugt\/bil\/[a-z]+\/[a-zA-Z0-9-,.\/]+\"$/);
					if (temp != -1) {
						var theFirstString = subStr.substring(temp + 1, subStr.length - 1);
						theFirstString = "https://www.bilbasen.dk" + theFirstString;
						firstUrlArr.push(theFirstString);
					}
				}
			}, 
			'html' // or 'text', 'xml', 'more'
		);  
	}		
	
	
	function callingSecondUrl(url)
	{
		$.get(url, 
			function( data ) {
				var singleCarArray = new Array();
				singleCarArray.push(url);
				getModelName(data, singleCarArray);
				setPriceAttributes(data, singleCarArray);
				setCarAttributes(data, singleCarArray);
				setRegAttributes(data, singleCarArray);
				setProdAttributes(data, singleCarArray);
				setModelAttributes(data, singleCarArray);
				setSightAttributes(data, singleCarArray);
				setColorAttributes(data, singleCarArray);
				setExtraEquipment(data, singleCarArray);
				
					
				dataArray.push(singleCarArray);
			},
			'html'
		);
	}
	

	
		

		
		
		
		
		
		
		
		
		
		
		
		
		
	
	
	
	
</script>





