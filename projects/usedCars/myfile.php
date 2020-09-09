
<?php	
	include("array.php");
?>

<script>


	var firstUrlArr = new Array();
	var secondUrlArr = new Array();
	
	$( document ).ready(function() {
		console.log(starterArray);
		$("#webscraperOne").click(function() {
			console.log("first click");
			for(i = 0; i<starterArray.length; i++) {
				callingFirstUrl(starterArray[i]);
			}
		});
		
		$("#webscraperTwo").click(function() {
			console.log("Array of urls first:");
			console.log(firstUrlArr);
			for(i = 0; i<firstUrlArr.length; i++) {
				callingSecondUrl(firstUrlArr[i]);
			}
		});
		
		$("#webscraperThree").click(function() {
			console.log("Array of urls second:");
			console.log(secondUrlArr);
			for(var i in secondUrlArr) {
				tempUrl = secondUrlArr[i];
				console.log(tempUrl);
				callingThirdUrl(tempUrl);
			}
		});
	});
	
	
	
	
	function callingThirdUrl(lastUrl)
	{
		console.log("last url: " + lastUrl);
		$.get(lastUrl, 
			function( data ) {
				console.log(data);
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
	
	
	
	
	
	
	urlOne = "https://www.bilbasen.dk/brugt/bil?IncludeEngrosCVR=true&PriceFrom=0&includeLeasing=true";
	urlTwo = "https://www.bilbasen.dk/brugt/bil/vw";
	urlThree = "https://www.bilbasen.dk/brugt/bil/vw/passat";
	urlFour = "https://www.bilbasen.dk/brugt/bil/vw/passat/1,4_gte_variant_dsg_5d";
	urlFive = "https://www.bilbasen.dk/brugt/bil";
	
	// Denne url starter sådan: /brugt/bil/vw/passat/14-gte-variant-dsg-5d/4808684
	url = "https://www.bilbasen.dk/brugt/bil/vw/passat/14-gte-variant-dsg-5d/4808684";
	
	
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




