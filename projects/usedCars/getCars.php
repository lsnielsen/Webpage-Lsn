
<?php	
	include("bilbasen/array.php");
	include("bilbasen/getCarFunctions.php");
	include("bilbasen/extraEquipment.php");
	include("bilbasen/starter.php");
	
	include("gulOgGratis/starter.php");
	include("gulOgGratis/array.php");
	include("gulOgGratis/getCarFunctions.php");
	include("gulOgGratis/extraEquipment.php");
?>

<script>
	
	var basicStartUrl = "https://www.bilbasen.dk/brugt/bil/";
	var basicEndUrl = "?includeengroscvr=true&pricefrom=0&includeleasing=true";
	
	var secondBasicUrl = "https://www.guloggratis.dk/biler/personbiler/";

	var firstUrlArr = new Array();
	var secondUrlArr = new Array();
	var dataArray = new Array();
	var modelArray = new Array();
	var loopI = 1;
	var loopJ = 1;
	var firstBool = false;
	var secondBool = false;
	var lastBool = false;
	
        
	$("select.carModel").change(function(){
		setFrontpage();		
		modelArray = choosenModel.split(" ");
		bilbasenUrl = basicStartUrl + modelArray[0] + "/" + modelArray[1] + basicEndUrl;
		gulOgGratisUrl = secondBasicUrl + modelArray[0].toLowerCase() + "/" + modelArray[1].toLowerCase();
		
		bilbasenLoop();
		gulOgGratisLoop();
		
		//console.log("chosen: " + modelArray);
		
		firstPauseLoop();
		
		
	
	});
	
	function firstPauseLoop()
	{
		//console.log("firstPauseLoop");
		setTimeout(function() {   
			if (firstBool == false || secondBool == false) {         
				firstPauseLoop();             
			} else {
				gulOgGratisCars = secondUrlArr.length;
				firstUrlArr = unique(firstUrlArr)

				$("#bilbasenurls").text(firstUrlArr.length);
				$("#guloggratisurls").text(gulOgGratisCars);
				$(".middleSearch").show();
				getTheUsedCarBilbasen();
				if (gulOgGratisCars != 0) {
					getTheUsedCarGulOgGratis();
				}
				secondPauseLoop();
			}
							
		}, 2000)	
	}
	
	function secondPauseLoop()
	{
		//console.log("secondPauseLoop");
		setTimeout(
			function() 
			{
				if(lastBool == false) {
					secondPauseLoop();
				} else {
					$(".endSearch").show();
					makeArrayToPhp();
				}
		}, 2000);		
	}
	
	function unique(list) {
		var result = [];
		$.each(list, function(i, e) {
			if ($.inArray(e, result) == -1) result.push(e);
		});
		return result;
	}
		
	function bilbasenLoop() {       
		setTimeout(function() {   
			if (loopI >= 2) {
				pageUrl = bilbasenUrl + "&page=" + loopI;
				callingFirstUrl(pageUrl, modelArray);
			} else {
				callingFirstUrl(bilbasenUrl, modelArray);
			}
			loopI++;                  
			if (loopI < 25) {         
				bilbasenLoop();             
			} else if (loopI == 25) {
				setTimeout(function() {
					secondBool = true;
				}, 500)
			}             
		}, 250)
	}

	function gulOgGratisLoop() {       
		setTimeout(function() {   
			if (loopJ >= 2) {
				theUrl = gulOgGratisUrl + "/?n=" + loopJ*60;
				callingSecondUrl(theUrl);
			} else {
				//console.log("Gul og gratis url: " + gulOgGratisUrl);
				callingSecondUrl(gulOgGratisUrl);
			}
			loopJ++;                  
			if (loopJ < 20) {         
				gulOgGratisLoop();             
			} else if (loopJ == 20) {
				setTimeout(function() {
					firstBool = true;
				}, 500)
			}				
		}, 200)
	}
	
	
	function setFrontpage()
	{
		$("#backButton").hide();
		$(".modelDropdown").hide();
		$(".startSearch").show();
		
		choosenModel = $(".carModel").children("option:selected").val();
		$(".theChoosenModel").text(choosenModel);
	}
	
	
	function makeArrayToPhp()
	{
		//console.log("data array: ");
		//console.log(dataArray);
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
	


	
</script>





