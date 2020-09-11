
<?php	
	include("array.php");
?>

<script>

	
	var urlTempOne = "https://www.bilbasen.dk/brugt/bil?IncludeEngrosCVR=true&PriceFrom=0&includeLeasing=true";

	var firstUrlArr = new Array();
	var dataArray = new Array();
	
	$( document ).ready(function() {
		for(i = 1; i<2; i++) {
			setTimeout(
				function() 
				{
					if (i >= 2) {
						urlTempOne = urlTempOne + "&page=" + i;
					}
					callingFirstUrl(urlTempOne);
				}, 6000
			);
		}
		setTimeout(
			function() 
			{
				$("#webscraper").click();
				setTimeout(
					function() 
					{
						makeArrayToPhp();
					}, 5000);
			}, 13000);
	});
	
	
	
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
	
	
	
	
		
	$("#webscraper").click(function() {
		//console.log("First array:");
		//console.log(firstUrlArr);
		for(i = 0; i<firstUrlArr.length; i++) {
			callingSecondUrl(firstUrlArr[i]);
		}
		setTimeout(
			function() 
			{
				console.log("Second array:");
				console.log(dataArray);
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
				var singleCarArray = new Array();
				setCarAttributes(data, singleCarArray);
				setRegAttributes(data, singleCarArray);
				setProdAttributes(data, singleCarArray);
				setModelAttributes(data, singleCarArray);
				setSightAttributes(data, singleCarArray);
				setColorAttributes(data, singleCarArray);
				setPriceAttributes(data, singleCarArray);
				setEquipmentAttributes(data, singleCarArray);
					
				singleCarArray.push(url);
				dataArray.push(singleCarArray);
			},
			'html'
		);
	}
	
	function setPriceAttributes(data, singleCarArray)
	{				
		priceEnd = data.search("kr</td>");
		//console.log("price start, end: " + priceEnd);
		if (priceEnd != -1) {
			priceString = data.substring(priceEnd-20, priceEnd);
			for(i=0; i<10; i++) {
				priceString = priceString.replace(/\n/, "");
			}
			for(i=0; i<60; i++) {
				priceString = priceString.replace(" ", "");
			}
			priceString = priceString.replace(/[a-z">]+/, "");
			//console.log(priceString);
			singleCarArray.push(priceString);
		} else {
			singleCarArray.push("No value for price");
		}
		singleCarArray.push("EXTRAEQUIPMENT");
	}
	
	function setColorAttributes(data, singleCarArray)
	{			
		colorStart = data.search("<span>Farve:</span>");
		//console.log("color start, end: " + colorStart);
		if (colorStart != -1) {
			colorString = data.substring(colorStart, colorStart+60);
			colorString = colorString.replace("<span>Farve:</span>", "");
			colorString = colorString.replace("</li>", "");
			for(i=0; i<10; i++) {
				colorString = colorString.replace(/\n/, "");
			}
			for(i=0; i<60; i++) {
				colorString = colorString.replace(" ", "");
			}
			colorString = colorString.replace(/<[a-z<>\/]*/, "");
			colorString = colorString.replace(/<[a-z<>\/]*/, "");
			//console.log(colorString);
			singleCarArray.push(colorString);
		} else {
			singleCarArray.push("No value for color");
		}
	}
	
	function setSightAttributes(data, singleCarArray)
	{
		sightStart = data.search("<li title=\"Dato for sidste syn\"><span>Synet:</span>");
		sightEnd = data.search("<li title=\"Farve\"><span>Farve:</span>");
		//console.log("sight start, end: " + sightStart + " " + sightEnd);
		if (sightStart != -1 && sightEnd != -1) {
			sightString = data.substring(sightStart, sightEnd);
			sightString = sightString.replace("<li title=\"Dato for sidste syn\"><span>Synet:</span>", "");
			sightString = sightString.replace("</li>", "");
			for(i=0; i<10; i++) {
				sightString = sightString.replace(/\n/, "");
			}
			for(i=0; i<200; i++) {
				sightString = sightString.replace(" ", "");
			}
			//console.log(sightString);
			singleCarArray.push(sightString);
		} else {
			singleCarArray.push("No value for sight");
		}
	}
	
	function setModelAttributes(data, singleCarArray)
	{		
		modelStart = data.search("<div class=\"car-model-year\">");
		modelEnd = data.search("<section class=\"section vip-finance\"");
		if (modelStart != -1 && modelEnd != -1) {
			modelString = data.substring(modelStart, modelEnd);
			modelString = modelString.replace("<div class=\"car-model-year\">", "");
			modelString = modelString.replace("<span class=\"label\">Modelår</span>", "");
			modelString = modelString.replace("</div>", "");
			modelString = modelString.replace("</div>", "");
			modelString = modelString.replace("</div>", "");
			modelString = modelString.replace("</div>", "");
			modelString = modelString.replace("</section>", "");
			modelString = modelString.replace("</span>", "");
			modelString = modelString.replace("<span class=\"value\">", "");
			for(i=0; i<10; i++) {
				modelString = modelString.replace(/\n/, "");
			}
			for(i=0; i<200; i++) {
				modelString = modelString.replace(" ", "");
			}
			//console.log("Model: " + modelString);
			singleCarArray.push(modelString);
		}
	}
	
	function setProdAttributes(data, singleCarArray)
	{				
		prodStart = data.search("<div class=\"car-production-date\">");
		prodEnd = data.search("<div class=\"car-model-year\">");
		if (prodStart != -1 && prodEnd != -1) {
			prodString = data.substring(prodStart, prodEnd);
			prodString = prodString.replace("<div class=\"car-production-date\">", "");
			prodString = prodString.replace("<span class=\"label\">Produceret</span>", "");
			prodString = prodString.replace("</div>", "");
			prodString = prodString.replace("</span>", "");
			prodString = prodString.replace("<span class=\"value\">", "");
			for(i=0; i<5; i++) {
				prodString = prodString.replace(/\n/, "");
			}
			for(i=0; i<200; i++) {
				prodString = prodString.replace(" ", "");
			}
			//console.log("production: " + prodString);
			singleCarArray.push(prodString);
		}
	}
	
	function setRegAttributes(data, singleCarArray)
	{					
		regStart = data.search("<div class=\"car-first-registration-date\">");
		regEnd = data.search("<div class=\"car-production-date\">");
		if (regStart != -1 && regEnd != -1) {
			regString = data.substring(regStart, regEnd);
			regString = regString.replace("<div class=\"car-first-registration-date\">", "");
			regString = regString.replace("<span class=\"label\">1. registrering</span>", "");
			regString = regString.replace("<img src='/Public/images/ico-tooltip.png' class=\"bb-vip-popover-icon\"/>", "");
			regString = regString.replace("</div>", "");
			regString = regString.replace("</span>", "");
			regString = regString.replace("<span class=\"value\">", "");
			for(i=0; i<5; i++) {
				regString = regString.replace(/\n/, "");
			}
			for(i=0; i<200; i++) {
				regString = regString.replace(" ", "");
			}
			//console.log("registration: " + regString);
			singleCarArray.push(regString);
		}
	}
		
	function setCarAttributes(data, singleCarArray)
	{
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
				singleCarArray.push(value);
				
				$i = $i + 133;
			}					
		}
	}
		
	function setEquipmentAttributes(data, singleCarArray)
	{				
		equipStart = data.search("<section id=\"bbVipEquipment\" class=\"section\">");
		equipEnd = data.search("<section id=\"bbVipDescription\" class=\"section cf\">");
		if (equipStart != -1 && equipEnd != -1) {
			equipString = data.substring(equipStart, equipEnd);
			equipString = equipString.replace("<section id=\"bbVipEquipment\" class=\"section\">", "");
			equipString = equipString.replace("<ul class=\"last\">", "");
			equipString = equipString.replace("</ul>", "");
			equipString = equipString.replace("</section>", "");

			for(i=0; i<100; i++) {
				equipString = equipString.replace("<li>", "");
				equipString = equipString.replace("</li>", "");
			}
			for(i=0; i<80; i++) {
				equipString = equipString.replace(/\n +/, " ");
			}
			equipString = equipString.trim().split(" ");
		}
		//console.log("Equipment values:");
		//console.log(equipString);
		
		singleCarArray.push(equipString);
	}
		
		
		
		
		
		
		
		
		
		
		
		
		
	
	
	
	
</script>





