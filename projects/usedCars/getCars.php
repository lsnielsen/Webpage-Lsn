
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
				bilbasenCarCount = firstUrlArr.length;
				guloggratisCarCount = secondUrlArr.length;
				$("#bilbasenurls").text(bilbasenCarCount);
				$("#guloggratisurls").text(guloggratisCarCount);
				$(".middleSearch").show();
				getTheUsedCarBilbasen();
				getTheUsedCarGulOgGratis();
				setTimeout(
					function() 
					{
						$(".endSearch").show();
						makeArrayToPhp();
					}, 180100);
			}, 240100);
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
			if (loopI < 15) {         
				bilbasenLoop();             
			}                       
		}, 200)
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
			if (loopJ < 10) {         
				gulOgGratisLoop();             
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
		console.log("data array: ");
		console.log(dataArray);
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





