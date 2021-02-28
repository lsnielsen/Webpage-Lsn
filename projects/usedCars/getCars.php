
<?php
    include("bilbasen/starter.php");

    include("gulOgGratis/starter.php");

    include("table/dataArray.php");
    include("table/dataArrayGog.php");

?>

<script>

    const basicStartUrl = "https://www.bilbasen.dk/brugt/bil/";
    const basicEndUrl = "?includeengroscvr=true&pricefrom=0&includeleasing=true";

    const secondBasicUrl = "https://www.guloggratis.dk/biler/personbiler/";

    const firstUrlArr = new Array();
    const secondUrlArr = new Array();
    const dataArray = new Array();
    let modelArray = new Array();
	let loopI = 1;
	let loopJ = 1;
	let firstBool = false;
	let secondBool = false;
	let lastBool = false;
	
        
	$("select.carModel").change(function(){
		setFrontpage();		
		modelArray = choosenModel.split(" ");
		document.cookie = "theChoosenCarModel=" + modelArray[0] + " " + modelArray[modelArray.length-1];
		bilbasenUrl = basicStartUrl + modelArray[0] + "/" + modelArray[1] + basicEndUrl;
		gulOgGratisUrl = secondBasicUrl + modelArray[0].toLowerCase() + "/" + modelArray[1].toLowerCase();

		bilbasenLoop();
		gulOgGratisLoop();
		firstPauseLoop();
	});
	
	function firstPauseLoop()
	{
		setTimeout(function() {   
			if (firstBool == false || secondBool == false) {         
				firstPauseLoop();             
			} else {
				gulOgGratisCars = secondUrlArr.length;
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
        setTimeout(
            function()
            {
                if(lastBool == false) {
                    secondPauseLoop();
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
			if (loopI >= 2) {
				pageUrl = bilbasenUrl + "&page=" + loopI;
				callingFirstUrl(pageUrl);
			} else {
				callingFirstUrl(bilbasenUrl);
			}
			loopI++;                  
			if (loopI < 25) {         
				bilbasenLoop();             
			} else if (loopI == 25) {
				setTimeout(function() {
					secondBool = true;
				}, 250)
			}             
		}, 250)
	}

	function gulOgGratisLoop() {       
		setTimeout(function() {   
			if (loopJ >= 2) {
				theUrl = gulOgGratisUrl + "/?n=" + loopJ*60;
				callingSecondUrl(theUrl);
			} else {
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





