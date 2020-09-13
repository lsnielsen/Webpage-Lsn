

<script>



	function getModelName(data, singleCarArray)
	{
		nameStart = data.search("<h1 id=\"bbVipTitle\" title=\"");
		nameEnd = data.search("<div class=\"reviews-wrapper\">");
		//console.log("nameStart, nameEnd = " + nameStart + ", " + nameEnd);
		if (nameStart != -1 && nameEnd != -1) {
			firstSubstring = data.substring(nameStart, nameEnd);
			
			modelStart = firstSubstring.search("<span>");
			modelEnd = firstSubstring.search("</span>");
			secondSubstring = firstSubstring.substring(modelStart+6, modelEnd);
			singleCarArray.push(secondSubstring);
			
			thirdSubstring = firstSubstring.substring(modelEnd+7, modelEnd+20);
			thirdSubstring = thirdSubstring.replace(",", ".");
			singleCarArray.push(thirdSubstring);
			//console.log("Model: " + secondSubstring + ", engine: " + thirdSubstring);
		} else {
			singleCarArray.push("-");
			singleCarArray.push("-");
		}
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
			singleCarArray.push("-");
		}
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
			singleCarArray.push("-");
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
			singleCarArray.push("-");
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
/*				if (subStr.search(/[0-9]+ hk \/ [0-9]+ Nm/) != -1) {
					singleCarArray['hk/nm'] = value;
				} else if (subStr.search(/[0-9,]+ sek/) != -1) {
					singleCarArray['0-100km/t'] = value;
				} else if (subStr.search(/[0-9,]+ km\/t/) != -1) {
					singleCarArray['km/t'] = value;
				} else if (subStr.search("diesel") != -1 || subStr.search("benzin") != -1) {
					singleCarArray['drivmiddel'] = value;
				} else if (subStr.search(/[0-9]+ kg/) != -1) {
					singleCarArray['weight'] = value;
				} else if (subStr.search(/[0-9]+ cm/) != -1) {
					singleCarArray['width'] = value;
				} */
				value = value.replace(",", ".");
				singleCarArray.push(value);
				
				$i = $i + 133;
			} 			
		}
	}
























</script>