

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
		
	function setPrimerAttributes(data, singleCarArray)
	{

		hkStart = data.search("<td style=\"color: #888;\">HK/Nm</td>");
		hkEnd = data.search("<td style=\"color: #888;\">0 - 100 km/t</td>");
		if (hkStart != -1 && hkEnd != -1) {
			removePrimerAttributeSpace(hkStart, hkEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		colorStart = data.search("<td style=\"color: #888;\">0 - 100 km/t</td>");
		colorEnd = data.search("<td style=\"color: #888;\">Tophastighed</td>");
		if (colorStart != -1 && colorEnd != -1) {
			removePrimerAttributeSpace(colorStart, colorEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		topSpeedStart = data.search("<td style=\"color: #888;\">Tophastighed</td>");
		topSpeedEnd = data.search("<td style=\"color: #888;\">Drivmiddel</td>");
		if (topSpeedStart != -1 && topSpeedEnd != -1) {
			removePrimerAttributeSpace(topSpeedStart, topSpeedEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		propellantStart = data.search("<td style=\"color: #888;\">Drivmiddel</td>");
		propellantEnd = data.search("<td style=\"color: #888;\">Forbrug</td>");
		if (propellantStart != -1 && propellantEnd != -1) {
			removePrimerAttributeSpace(propellantStart, propellantEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		usageStart = data.search("<td style=\"color: #888;\">Forbrug</td>");
		usageEnd = data.search(/<td style="color: #888;">[a-zA-Z\(\) ]+<\/td>/);
		console.log("usageStart, usageEnd: " + usageStart + ", " + usageEnd);
		if (usageStart != -1 && usageEnd != -1) {
			removePrimerAttributeSpace(usageStart, usageEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		euroStart = data.search("<td style=\"color: #888;\">Euronorm</td>");
		euroEnd = data.search("<td style=\"color: #888;\">Bredde</td>");
		if (euroStart != -1 && euroEnd != -1) {
			removePrimerAttributeSpace(euroStart, euroEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		widthStart = data.search("<td style=\"color: #888;\">Bredde</td>");
		widthEnd = data.search("<td style=\"color: #888;\">Længde</td>");
		if (widthStart != -1 && widthEnd != -1) {
			removePrimerAttributeSpace(widthStart, widthEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		lengthStart = data.search("<td style=\"color: #888;\">Længde</td>");
		lengthEnd = data.search("<td style=\"color: #888;\">Højde</td>");
		if (lengthStart != -1 && lengthEnd != -1) {
			removePrimerAttributeSpace(lengthStart, lengthEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		heightStart = data.search("<td style=\"color: #888;\">Højde</td>");
		heightEnd = data.search("<td style=\"color: #888;\">Lasteevne</td>");
		if (heightStart != -1 && heightEnd != -1) {
			removePrimerAttributeSpace(heightStart, heightEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		loadStart = data.search("<td style=\"color: #888;\">Lasteevne</td>");
		loadEnd = data.search("<td style=\"color: #888;\">Trækhjul</td>");
		if (loadStart != -1 && loadEnd != -1) {
			removePrimerAttributeSpace(loadStart, loadEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		tractionStart = data.search("<td style=\"color: #888;\">Trækhjul</td>");
		tractionEnd = data.search("<td style=\"color: #888;\">Cylindre</td>");
		if (tractionStart != -1 && tractionEnd != -1) {
			removePrimerAttributeSpace(tractionStart, tractionEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		cylStart = data.search("<td style=\"color: #888;\">Cylindre</td>");
		cylEnd = data.search("<td style=\"color: #888;\">ABS-bremser</td>");
		if (cylStart != -1 && cylEnd != -1) {
			removePrimerAttributeSpace(cylStart, cylEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		absStart = data.search("<td style=\"color: #888;\">ABS-bremser</td>");
		absEnd = data.search("<td style=\"color: #888;\">Max. påhæng</td>");
		if (absStart != -1 && absEnd != -1) {
			removePrimerAttributeSpace(absStart, absEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		maxloadStart = data.search("<td style=\"color: #888;\">Max. påhæng</td>");
		maxloadEnd = data.search("<td style=\"color: #888;\">Airbags</td>");
		if (maxloadStart != -1 && maxloadEnd != -1) {
			removePrimerAttributeSpace(maxloadStart, maxloadEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		airbagStart = data.search("<td style=\"color: #888;\">Airbags</td>");
		airbagEnd = data.search("<td style=\"color: #888;\">ESP</td>");
		if (airbagStart != -1 && airbagEnd != -1) {
			removePrimerAttributeSpace(airbagStart, airbagEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		espStart = data.search("<td style=\"color: #888;\">ESP</td>");
		espEnd = data.search("<td style=\"color: #888;\">Tank</td>");
		if (espStart != -1 && espEnd != -1) {
			removePrimerAttributeSpace(espStart, espEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		tankStart = data.search("<td style=\"color: #888;\">Tank</td>");
		tankEnd = data.search("<td style=\"color: #888;\">Gear</td>");
		if (tankStart != -1 && tankEnd != -1) {
			removePrimerAttributeSpace(tankStart, tankEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		gearStart = data.search("<td style=\"color: #888;\">Gear</td>");
		gearEnd = data.search("<td style=\"color: #888;\">Geartype</td>");
		if (gearStart != -1 && gearEnd != -1) {
			removePrimerAttributeSpace(gearStart, gearEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		geartypeStart = data.search("<td style=\"color: #888;\">Geartype</td>");
		geartypeEnd = data.search("<td style=\"color: #888;\">Vægt</td>");
		if (geartypeStart != -1 && geartypeEnd != -1) {
			removePrimerAttributeSpace(geartypeStart, geartypeEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		weightStart = data.search("<td style=\"color: #888;\">Vægt</td>");
		weightEnd = data.search("<td style=\"color: #888;\">Døre</td>");
		if (weightStart != -1 && weightEnd != -1) {
			removePrimerAttributeSpace(weightStart, weightEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		doorStart = data.search("<td style=\"color: #888;\">Døre</td>");
		doorEnd = data.search("<p>* Der tages forbehold for evt. fejl</p>");
		if (doorStart != -1 && doorEnd != -1) {
			removePrimerAttributeSpace(doorStart, doorEnd, data, singleCarArray);
		} else {
			singleCarArray.push("-");
		}

		
	}



	function removePrimerAttributeSpace(start, end, data, singleCarArray)
	{
		var value = data.substring(start, end);
		value = value.replace("<td style=\"color: #888;\">", "");
		value = value.replace("</td>", "");
		value = value.replace("</td>", "");
		value = value.replace("</td>", "");
		value = value.replace("<td>&nbsp;", "");
		value = value.replace("<td class=\"selectedcar\">", "");
		value = value.replace(/\n/, "");
		value = value.replace(/\n/, "");
		value = value.replace("<td class=\"currentcar\">-</td>", "");
		value = value.replace("</tr>", "");
		value = value.replace("<tr>", "");
		value = value.replace("<td class=\"alignright\">- / -</td>", "");

		for(i=0; i<20; i++) {
			value = value.replace(" ", "");
		}
		for(i=0; i<20; i++) {
			value = value.replace(/\n/, "");
		}
		
		value = value.substr(value.indexOf(" ") + 1);
		value = value.replace(/ +/, "");
		
		value = value.replace("</table>", "");

		value = value.replace(",", ".");
		//console.log( " \n \n value: \n " + value);
		singleCarArray.push(value);
	}



















</script>