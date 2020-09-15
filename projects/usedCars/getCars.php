
<?php	
	include("array.php");
	include("getCarFunctions.php");
	include("extraEquipment.php");
?>

<script>

	
	var basicUrl = "https://www.bilbasen.dk/brugt/bil?IncludeEngrosCVR=true&PriceFrom=0&includeLeasing=true";

	var firstUrlArr = new Array();
	var dataArray = new Array();
	
        
	$("select.carModel").change(function(){
		$(".dropdown").hide();
		choosenModel = $(this).children("option:selected").val();
		modelArray = choosenModel.split(" ");
		console.log("chosen: " + modelArray);
		
		var loopI = 1;
		myLoop();
		function myLoop() {       
			setTimeout(function() {   
				if (loopI >= 2) {
					theUrl = basicUrl + "&page=" + loopI;
					callingFirstUrl(theUrl, modelArray);
				} else {
					callingFirstUrl(basicUrl, modelArray);
				}
				loopI++;                  
				if (loopI < 1560) {         
				myLoop();             
				}                       
			}, 150)
		}
		
		
		setTimeout(
			function() 
			{
				$("#webscraper").click();
				setTimeout(
					function() 
					{
						//makeArrayToPhp();
					}, 1000);
			}, 250100);
	});
	
	
	
	
	
	
	function callingFirstUrl(urlOne, modelArray) 
	{
		console.log(" ");
		$.get(urlOne, 
			function( data ) {
		
				for ($i = 0; $i < data.length; $i++) {
					subStr = data.substring($i, $i+80);
					temp = subStr.search(/\"\/brugt\/bil\/[a-z]+\/[a-zA-Z0-9-,.\/]+\"$/);
					if (temp != -1) {
						var theFirstString = subStr.substring(temp + 1, subStr.length - 1);
						//console.log("url: " + theFirstString);
						//console.log("model: " + modelArray[0] + " " + modelArray[1]);
						if (subStr.includes(modelArray[0]) && subStr.includes(modelArray[1])) {
							console.log("true, includes: " + modelArray[0] + ", " + modelArray[1]);
							theFirstString = "https://www.bilbasen.dk" + theFirstString;
							console.log("url: " + theFirstString);
							firstUrlArr.push(theFirstString);
						}
					}
				}
			}, 
			'html' // or 'text', 'xml', 'more'
		);  
	}		
	
		
	$("#webscraper").click(function() {
		console.log("First array:");
		console.log(firstUrlArr);
		
		var loopII = 0;
		mySecondLoop();
		function mySecondLoop() {       
			setTimeout(function() {   
				console.log("Making second url call");
				callingSecondUrl(firstUrlArr[loopII]);
				loopII++;                  
				if (loopII < firstUrlArr.length) {         
					mySecondLoop();             
				}                       
			}, 80)
		}
		
		setTimeout(
			function() 
			{
				console.log("Second array:");
				console.log(dataArray);
			}, 3000);
	});
	
	
	function callingSecondUrl(url)
	{
		console.log("second url calls, url: " + url);
		$.get(url, 
			function( data ) {
				console.log("calling the second url");
				var singleCarArray = new Array();
				theLink = url;
				getModelName(data, singleCarArray);
				setPriceAttributes(data, singleCarArray);
				setPrimerAttributes(data, singleCarArray);
				setRegAttributes(data, singleCarArray);
				setProdAttributes(data, singleCarArray);
				setModelAttributes(data, singleCarArray);
				setSightAttributes(data, singleCarArray);
				setColorAttributes(data, singleCarArray);
				setExtraEquipment(data, singleCarArray);
				
				setTheFirstArray(singleCarArray);
				console.log("single car array : " + singleCarArray);
			},
			'html'
		);
	}
	
	
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
	
	function myFunction() {
		document.getElementById("myDropdown").classList.toggle("show");
	}
	
	window.onclick = function(event) {
		if (!event.target.matches('.dropbtn')) {
			var dropdowns = document.getElementsByClassName("dropdown-content");
			var i;
			for (i = 0; i < dropdowns.length; i++) {
				var openDropdown = dropdowns[i];
				if (openDropdown.classList.contains('show')) {
					openDropdown.classList.remove('show');
				}
			}
		}
	}
	
</script>





