
<?php	
	include("bilbasen/array.php");
	include("bilbasen/getCarFunctions.php");
	include("bilbasen/extraEquipment.php");
	include("bilbasen/starter.php");
	
	include("gulOgGratis/starter.php");
?>

<script>
	
	var basicStartUrl = "https://www.bilbasen.dk/brugt/bil/";
	var basicEndUrl = "?includeengroscvr=true&pricefrom=0&includeleasing=true";
	
	var secondBasicUrl = "https://www.guloggratis.dk/biler/personbiler/";

	var firstUrlArr = new Array();
	var secondUrlArr = new Array();
	var dataArray = new Array();
	var loopI = 1;
	var loopJ = 1;
	
        
	$("select.carModel").change(function(){
		setFrontpage();		
		modelArray = choosenModel.split(" ");
		//console.log("chosen: " + modelArray);
		bilbasenUrl = basicStartUrl + modelArray[0] + "/" + modelArray[1] + basicEndUrl;
		gulOgGratisUrl = secondBasicUrl + modelArray[0].toLowerCase() + "/" + modelArray[1].toLowerCase();
		
		bilbasenLoop();
		gulOgGratisLoop();
		
		
		setTimeout(
			function() 
			{
				$(".middleSearch").show();
				getTheUsedCarBilbasen();
				getTheUsedCarGulOgGratis();
				setTimeout(
					function() 
					{
						$(".endSearch").show();
						makeArrayToPhp();
					}, 10000);
			}, 30000);
	});
		
	function bilbasenLoop() {       
		setTimeout(function() {   
			if (loopI >= 2) {
				pageUrl = bilbasenUrl + "&page=" + loopI;
				callingFirstUrl(pageUrl, modelArray);
			} else {
				callingFirstUrl(bilbasenUrl, modelArray);
			}
			loopI++;                  
			if (loopI < 2) {         
				bilbasenLoop();             
			}                       
		}, 100)
	}

	function gulOgGratisLoop() {       
		setTimeout(function() {   
			if (loopJ >= 2) {
				theUrl = basicUrl + "&page=" + loopJ;
				callingSecondUrl(theUrl);
			} else {
				//console.log("Gul og gratis url: " + gulOgGratisUrl);
				callingSecondUrl(gulOgGratisUrl);
			}
			loopJ++;                  
			if (loopJ < 2) {         
				gulOgGratisLoop();             
			}                       
		}, 100)
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





