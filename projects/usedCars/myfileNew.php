
<?php	
	include("array.php");
?>

<script>

	
	var urlTempOne = "https://www.bilbasen.dk/brugt/bil?IncludeEngrosCVR=true&PriceFrom=0&includeLeasing=true";

	var firstUrlArr = new Array();
	var secondUrlArr = new Array();
	
	$( document ).ready(function() {
		console.log("first click");
		for(i = 1; i<2; i++) {
			setTimeout(
				function() 
				{
					console.log("call " + i);
					if (i >= 2) {
						urlTempOne = urlTempOne + "&page=" + i;
					}
					callingFirstUrl(urlTempOne);
				}, 5000
			);
		}
		setTimeout(
			function() 
			{
				$("#webscraperTwo").show();
			}, 10000);
	});
	
	function callingFirstUrl(urlOne) 
	{
		$.get(urlOne, 
			function( data ) {
				//console.log("Datatype: " + typeof data);
				//console.log("Datalength: " + data.length );
				//console.log(" ");
		
				for ($i = 0; $i < data.length; $i++) {
					subStr = data.substring($i, $i+60);
					temp = subStr.search(/\"\/brugt\/bil\/[a-z]+\/[a-zA-Z0-9-,.\/]+\"$/);
					if (temp != -1) {
						//console.log("matching url");
						var theFirstString = subStr.substring(temp + 1, subStr.length - 1);
						theFirstString = "https://www.bilbasen.dk" + theFirstString;
						firstUrlArr.push(theFirstString);
					}
				}
			}, 
			'html' // or 'text', 'xml', 'more'
		);  
	}		
		
	$("#webscraperTwo").click(function() {
		console.log("Second click:");
		console.log("Array of urls first:");
		console.log(firstUrlArr);
		for(i = 0; i<firstUrlArr.length; i++) {
			callingSecondUrl(firstUrlArr[i]);
		}
	});
	
	function callingSecondUrl(url)
	{
		$.get(url, 
			function( data ) {
				for ($i = 0; $i < data.length; $i++) {
					subStr = data.substring($i, $i+130);

					tempOne = subStr.search(/<td class\=\"selectedcar\">[a-zA-Z0-9.,-\/ ]+<\/td>/);
					tempTwo = subStr.search(/<td style="color: #888;">[a-zA-Z0-9.,-\/ ]+<\/td>/);
					if (tempOne != -1 && tempTwo != -1) {
						
						var theString = subStr.substring(tempTwo, subStr.length);
						theString = theString.replace(/<\/td>\n[ ]*<td>&nbsp;<\/td>\n[ ]*<td class="selectedcar">/,'');
						//theString = theString.replace("<td style=\"color: #888;\">", "");
						//theString = theString.replace("</td>", "");
						//theString = theString.replace("</td>", "");
						//theString = theString.replace("</td>", "");
						//theString = theString.replace("<td>&nbsp;", "");
						//theString = theString.replace("<td class=\"selectedcar\">", "");
						console.log(theString);
						console.log(" ");
						secondUrlArr.push(theString);
						$i = $i + 133;
					}
				}
			},
			'html'
		);
	}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
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
	
	
	
	
	
</script>


<table id="msgDiv"></table>




