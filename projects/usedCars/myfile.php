
<?php	
	include("array.php");
?>

<script>

	
	var urlTempOne = "https://www.bilbasen.dk/brugt/bil?IncludeEngrosCVR=true&PriceFrom=0&includeLeasing=true";
	var urlTempTwo = "https://www.bilbasen.dk/brugt/bil/vw";
	var urlTempThree = "https://www.bilbasen.dk/brugt/bil/vw/passat";
	var urlTempFour = "https://www.bilbasen.dk/brugt/bil/vw/passat/1,4_gte_variant_dsg_5d";
	var urlTempFive = "https://www.bilbasen.dk/brugt/bil";
	
	// Denne url starter sådan: /brugt/bil/vw/passat/14-gte-variant-dsg-5d/4808684
	urlTempUrl = "https://www.bilbasen.dk/brugt/bil/vw/passat/14-gte-variant-dsg-5d/4808684";

	var firstUrlArr = new Array();
	var secondUrlArr = new Array();
	var thirdUrlArr = new Array();
	var fourthUrlArr = new Array();
	
	$( document ).ready(function() {
		console.log(starterArray);
		$("#webscraperOne").click(function() {
			console.log("first click");
			for(i = 0; i<starterArray.length; i++) {
				callingFirstUrl(starterArray[i]);
			}
			setTimeout(
				function() 
				{
					$("#webscraperTwo").show();
				}, 20000);
		});
		
		$("#webscraperTwo").click(function() {
			console.log("Second click:");
			console.log("Array of urls first:");
			console.log(firstUrlArr);
			for(i = 0; i<firstUrlArr.length; i++) {
				callingSecondUrl(firstUrlArr[i]);
			}
			setTimeout(
				function() 
				{
					$("#webscraperThree").show();
				}, 20000);

		});
		
		$("#webscraperThree").click(function() {
			console.log("Third click:");
			console.log("Array of urls second:");
			console.log(secondUrlArr);
			for(var i in secondUrlArr) {
				callingThirdUrl(secondUrlArr[i]);
			}
			setTimeout(
				function() 
				{
					$("#webscraperFour").show();
				}, 120000);
		});
		
		$("#webscraperFour").click(function() {
			console.log("Fourth click:");
			console.log("Array of urls third:");
			console.log(thirdUrlArr);
			for(var i in thirdUrlArr) {
				callingFourthUrl(thirdUrlArr[i]);
			}			
		});
	});
	
	function callingFourthUrl(fourthUrl) 
	{
		//console.log("last url: " + fourthUrl);
		$.get(fourthUrl, 
			function( data ) {
				console.log("fourth url data: " + data);
			//	console.log("third url ");
				for ($i = 0; $i < data.length; $i++) {
					subStr = data.substring($i, $i+60);
					temp = subStr.search(/[a-zA-Z0-9.\/:]*\/brugt\/bil\/[a-z]+[\/]*[a-z]*\-*[a-z]+\-*[a-z]*\/*[a-zA-Z0-9,_]*\"$/);
					if (temp != -1) {
						var theFourthString = subStr.substring(temp + 1, subStr.length - 1);
				//		console.log("matching url: " + theFourthString);
						fourthUrlArr.push(theFourthString);
					}
				}
			}, 
			'html' // or 'text', 'xml', 'more'
		);  
	}
	
	
	function callingThirdUrl(lastUrl)
	{
		//console.log("last url: " + lastUrl);
		$.get(lastUrl, 
			function( data ) {
				//console.log("third url data: " + data);
			//	console.log("third url ");
				for ($i = 0; $i < data.length; $i++) {
					subStr = data.substring($i, $i+60);
					temp = subStr.search(/[a-zA-Z0-9.\/:]*\/brugt\/bil\/[a-z]+[\/]*[a-z]*\-*[a-z]+\-*[a-z]*\/*[a-zA-Z0-9,_]*\"$/);
					if (temp != -1) {
						var thethirdString = subStr.substring(temp + 1, subStr.length - 1);
				//		console.log("matching url: " + thethirdString);
						thirdUrlArr.push(thethirdString);
					}
				}
			}, 
			'html' // or 'text', 'xml', 'more'
		);  
	}
	
	
	
	
	
	
	
	function callingFirstUrl(urlOne) 
	{
		$.get(urlOne, 
			function( data ) {
				//console.log("Datatype: " + typeof data);
				//console.log("Datalength: " + data.length );
				//console.log(" ");
		
				for ($i = 0; $i < data.length; $i++) {
					subStr = data.substring($i, $i+60);
					temp = subStr.search(/\"https:\/\/www\.bilbasen\.dk\/brugt\/bil\/[a-z]+\/[a-z]+\-*[a-z]+\-*[a-z]+\"$/);
					if (temp != -1) {
						//console.log("matching url");
						var theFirstString = subStr.substring(temp + 1, subStr.length - 1);
						firstUrlArr.push(theFirstString);
					}
				}
			}, 
			'html' // or 'text', 'xml', 'more'
		);  
	}
	
	function callingSecondUrl(urlTwo)
	{
		//console.log("callingSecondUrl " + urlTwo);
		$.get(urlTwo, 
			function( dataTwo ) {
				//console.log("inside dataTwo, urlTwo: " + urlTwo);
				//console.log(dataTwo);
				for ($i = 0; $i < dataTwo.length; $i++) {
					subStrTwo = dataTwo.substring($i, $i+60);
					tempTwo = subStrTwo.search(/\"\/brugt\/bil\/[a-z]+\/[a-z]+\-*[a-z]+\-*[a-z]+\"$/);
					if (tempTwo != -1) {
						var theSecondString = subStrTwo.substring(tempTwo + 1, subStrTwo.length - 1);
						theSecondString = "https://www.bilbasen.dk" + theSecondString;
						//console.log("matching url: " + theSecondString);
						secondUrlArr.push(theSecondString);
					}
				}
			},
			'html'
		);
	}
</script>


<table id="msgDiv"></table>




