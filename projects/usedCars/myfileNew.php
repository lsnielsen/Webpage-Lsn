
<?php	
	include("array.php");
?>

<script>

	
	var urlTempOne = "https://www.bilbasen.dk/brugt/bil?IncludeEngrosCVR=true&PriceFrom=0&includeLeasing=true";

	var firstUrlArr = new Array();
	var secondUrlArr = new Array();
	var specificationArr = new Array();
	
	$( document ).ready(function() {
		for(i = 1; i<2; i++) {
			setTimeout(
				function() 
				{
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
				$("#webscraperTwo").click();
			}, 10000);
	});
	
		
	$("#webscraperTwo").click(function() {
		console.log("First array:");
		console.log(firstUrlArr);
		for(i = 0; i<firstUrlArr.length; i++) {
			callingSecondUrl(firstUrlArr[i]);
		}
		setTimeout(
			function() 
			{
				console.log("Second array:");
				console.log(secondUrlArr);
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
				for ($i = 0; $i < data.length; $i++) {
					subStr = data.substring($i, $i+130);

					tempOne = subStr.search(/<td class\=\"selectedcar\">[a-zA-Z0-9.,-\/ ]+<\/td>/);
					tempTwo = subStr.search(/<td style="color: #888;">[a-zA-Z0-9.,-\/ ]+<\/td>/);
					if (tempOne != -1 && tempTwo != -1) {
						
						var value = subStr.substring(tempTwo, subStr.length);
						value = value.replace("<td style=\"color: #888;\">", "");
						value = value.replace("</td>", "");
						value = value.replace("</td>", "");
						value = value.replace("</td>", "");
						value = value.replace("<td>&nbsp;", "");
						value = value.replace("<td class=\"selectedcar\">", "");
						value = value.replace(/\n/, "");
						value = value.replace(/\n/, "");
						for(i=0; i<20; i++) {
							value = value.replace(" ", "");
						}
						
						value = value.substr(value.indexOf(" ") + 1);
						value = value.replace(/ +/, "");
						
						//console.log(value);
						secondUrlArr.push(value);
						
						$i = $i + 133;
					}
					
					
					tempThree = subStr.search(/<li>[a-zA-Z-,.#;& ]+<\/li>/);
					if (tempThree != -1) {
						console.log(subStr);
					}
					
					
					
					
					
				}
				secondUrlArr.push(url);
				//console.log(" ");
			},
			'html'
		);
	}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	
	
	
</script>


<table id="msgDiv"></table>




