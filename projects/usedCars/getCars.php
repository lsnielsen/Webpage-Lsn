
<?php
    include("search/bilbasen.php");
    include("search/gulOgGratis.php");

    include("table/dataArray.php");
    include("table/dataArrayGog.php");

?>

<script>

    const bilbasenStartUrl = "https://www.bilbasen.dk/brugt/bil/";
    const bilbasenEndUrl = "?includeengroscvr=true&pricefrom=0&includeleasing=true";

    let gulOgGratisUrl = "https://www.guloggratis.dk/biler/personbiler/";

    const bilbasenArray = new Array();
    const gulOgGratisArray = new Array();
    const dataArray = new Array();
    let choosenModelArray = new Array();
	let bilbasenCounter = 1;
	let gulOgGratisCounter = 1;
	let gulOgGratisBool = false;
	let bilbasenBool = false;
	let lastBool = false;
	
        
	$("select.carModel").change(function(){
		setFrontpage();		
		choosenModelArray = choosenModel.split(" ");
		document.cookie = "theChoosenCarModel=" + choosenModelArray[0] + " " + choosenModelArray[choosenModelArray.length-1];
		bilbasenUrl = bilbasenStartUrl + choosenModelArray[0] + "/" + choosenModelArray[1] + bilbasenEndUrl;
		gulOgGratisUrl = gulOgGratisUrl + choosenModelArray[0].toLowerCase() + "/" + choosenModelArray[1].toLowerCase();

		bilbasenLoop();
		gulOgGratisLoop();
		getLinksPause();
	});
	
	function getLinksPause()
	{
		setTimeout(function() {   
			if (gulOgGratisBool == false || bilbasenBool == false) {         
				getLinksPause();             
			} else {
				gulOgGratisCars = gulOgGratisArray.length;
				$("#bilbasenurls").text(bilbasenArray.length);
				$("#guloggratisurls").text(gulOgGratisCars);
				$(".middleSearch").show();
				getTheUsedCarBilbasen();
				if (gulOgGratisCars != 0) {
                    getTheUsedCarGulOgGratis();
				}
				getTheCarsPause();
			}
							
		}, 2000)	
	}
	
	function getTheCarsPause()
	{
        setTimeout(
            function()
            {
                if(lastBool == false) {
                    getTheCarsPause();
                } else {
                    setTimeout(
                        function()
                        {
                            makeArrayToPhp();
                        }, 200
                    );
                }
            }, 5000
        );
	}
		
	function bilbasenLoop() {       
		setTimeout(function() {
			if (bilbasenCounter >= 2) {
				pageUrl = bilbasenUrl + "&page=" + bilbasenCounter;
				callingFirstUrl(pageUrl);
			} else {
				callingFirstUrl(bilbasenUrl);
			}
			bilbasenCounter++;                  
			if (bilbasenCounter < 25) {         
				bilbasenLoop();             
			} else if (bilbasenCounter == 25) {
				setTimeout(function() {
					bilbasenBool = true;
				}, 250)
			}             
		}, 250)
	}

	function gulOgGratisLoop() {       
		setTimeout(function() {   
			if (gulOgGratisCounter >= 2) {
				theUrl = gulOgGratisUrl + "/?n=" + gulOgGratisCounter*60;
				callingSecondUrl(theUrl);
			} else {
				callingSecondUrl(gulOgGratisUrl);
			}
			gulOgGratisCounter++;                  
			if (gulOgGratisCounter < 20) {         
				gulOgGratisLoop();             
			} else if (gulOgGratisCounter == 20) {
				setTimeout(function() {
					gulOgGratisBool = true;
				}, 500)
			}				
		}, 200)
	}


	function setFrontpage()
	{
        $("#backButton").hide();
        $("#headerInfo").hide();
        $(".modelDropdown").hide();
        $(".tableContainer").hide();
        $(".nrOfCarsDiv").hide();

        $(".searchInfo").show();
		$(".startSearch").show();
        $(".middleSearch").hide();
		$(".endSearch").hide();

		choosenModel = $(".carModel").children("option:selected").val();
		$(".theChoosenModel").text(choosenModel);
	}
	
	
	function makeArrayToPhp()
	{
		$(".endSearch").show();
		for(let i=0; i<dataArray.length; i++) {
			let arrayValue = dataArray[i];
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





