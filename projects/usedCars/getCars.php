
<?php
    include("search/bilbasen.php");
    include("search/gulOgGratis.php");
    include("search/biltorvet.php");

    include("table/dataArray.php");
    include("table/dataArrayGog.php");
    include("table/dataArrayBiltorvet.php");

?>

<script>

    const bilbasenStartUrl = "https://www.bilbasen.dk/brugt/bil/";
    const bilbasenEndUrl = "?includeengroscvr=true&pricefrom=0&includeleasing=true";

    let gulOgGratisUrl = "https://www.guloggratis.dk/biler/personbiler/";

    const biltorvetUrl = "https://www.biltorvet.dk/soeg/18909339";

    const bilbasenArray = new Array();
    const gulOgGratisArray = new Array();
    const biltorvetArray = new Array();
    const dataArray = new Array();
    let choosenModelArray = new Array();
	let bilbasenCounter = 1;
	let gulOgGratisCounter = 1;
	let biltorvetCounter = 1;
	let gulOgGratisBool = false;
	let bilbasenBool = false;
	let biltorvetBool = false;
	let lastBool = false;
	
        
	$("select.carModel").change(function(){
		setFrontpage();		
		choosenModelArray = choosenModel.split(" ");
		document.cookie = "theChoosenCarModel=" + choosenModelArray[0] + " " + choosenModelArray[choosenModelArray.length-1];
		bilbasenUrl = bilbasenStartUrl + choosenModelArray[0] + "/" + choosenModelArray[1] + bilbasenEndUrl;
		gulOgGratisUrl = gulOgGratisUrl + choosenModelArray[0].toLowerCase() + "/" + choosenModelArray[1].toLowerCase();

		getBilbasenLinks();
		getGulOgGratisLinks();
		getBiltorvetLinks();
		getLinksPause();
	});
	
	function getLinksPause()
	{
		setTimeout(function() {   
			if (gulOgGratisBool == false || bilbasenBool == false || biltorvetBool == false) {
				getLinksPause();             
			} else {
				$("#bilbasenurls").text(bilbasenArray.length);
				$("#guloggratisurls").text(gulOgGratisArray.length);
				$("#biltorveturls").text(biltorvetArray.length);
				$(".middleSearch").show();
				getTheUsedCarBilbasen();
				if (gulOgGratisArray.length !== 0) {
                    getTheUsedCarGulOgGratis();
				}
				getTheCarsPause();
			}		
		}, 2000);
	}
	
	function getTheCarsPause()
	{
        setTimeout(function() {
            if(lastBool == false) {
                getTheCarsPause();
            } else {
                setTimeout(function() {
                    makeArrayToPhp();
                }, 200);
            }
        }, 5000);
	}
		
	function getBiltorvetLinks() {
		setTimeout(function() {
			if (biltorvetCounter >= 2) {
				pageUrl = biltorvetUrl;
				fetchBiltorvetLink(pageUrl);
			} else {
				fetchBiltorvetLink(biltorvetUrl);
			}
            biltorvetCounter++;
			if (biltorvetCounter < 25) {
                getBiltorvetLinks();
			} else if (biltorvetCounter == 25) {
				setTimeout(function() {
					biltorvetBool = true;
				}, 250)
			}             
		}, 250)
	}

	function getBilbasenLinks() {
		setTimeout(function() {
			if (bilbasenCounter >= 2) {
				pageUrl = bilbasenUrl + "&page=" + bilbasenCounter;
				fetchBilbasenLink(pageUrl);
			} else {
				fetchBilbasenLink(bilbasenUrl);
			}
			bilbasenCounter++;
			if (bilbasenCounter < 25) {
				getBilbasenLinks();
			} else if (bilbasenCounter == 25) {
				setTimeout(function() {
					bilbasenBool = true;
				}, 250)
			}
		}, 250)
	}

	function getGulOgGratisLinks() {       
		setTimeout(function() {   
			if (gulOgGratisCounter >= 2) {
				theUrl = gulOgGratisUrl + "/?n=" + gulOgGratisCounter*60;
				fetchGulOgGratisLink(theUrl);
			} else {
				fetchGulOgGratisLink(gulOgGratisUrl);
			}
			gulOgGratisCounter++;                  
			if (gulOgGratisCounter < 20) {         
				getGulOgGratisLinks();             
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
		for(let i=0; i < dataArray.length; i++) {
			let arrayValue = dataArray[i];
			for(let j=0; j < arrayValue.length; j++) {
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





