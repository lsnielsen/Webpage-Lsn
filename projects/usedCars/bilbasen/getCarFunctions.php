

<script>



	function getMainAttributes(data, singleCarArray)
	{
		kmStart = data.search(/<span class="label">Km<\/span>/);
		kmEnd = data.search(/<section id="bbVipUsage" class="section">/);
		if (kmStart != -1) {
			theKmSub = data.substring(kmStart, kmEnd);
			kmNewStart = theKmSub.search(/<span class="value">/);
			kmNewEnd = theKmSub.search(/ <\/span>/);
			theKilometers = theKmSub.substring(kmNewStart+20, kmNewEnd);
			//console.log("Km string: " + theKilometers + "\n");
		} else {
			theKilometers = "-";
		}
		
		carRegexp = /(?<=<h1 id=\"bbVipTitle\" title=\")([a-zA-Z]+ [a-zA-Z0-9]+) ([a-zA-Z0-9,]+ [a-zA-Z0-9,]+)/;
		match = carRegexp.exec(data);
		if (match !==  null) {
			theCarModel = match[1];
			theEngine = match[2].replace(",", ".");
		} else {
		    theCarModel = "-";
			theEngine = "-";
		}
			
		starterPriceRegexp = /<td style="color: #888;width:150px;">Nypris<\/td>[\n \W\w]+class="selectedcar">([0-9\.]+) kr/;
		match = starterPriceRegexp.exec(data);
		if (match !==  null) {
			theStarterPrice = match[1];
		}

		priceStart = data.search(/<span class="value">[0-9]+.[0-9]+ kr.<\/span>/);
		if (priceStart != -1) {
			priceString = data.substring(priceStart+20, priceStart+50);
			priceEnd = priceString.search("kr.</span>");
			//console.log("price start, end: " + priceStart + ", " + priceEnd);
			priceString = priceString.substring(0, priceEnd);
			//console.log("price: " + priceString + "\n");
			thePrice = priceString;
		} else {
			thePrice = "-";
		}
		
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
			theColor = colorString;
		} else {
			theColor = "-";
		}

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
			lastDateOfSight = sightString;
		} else {
			lastDateOfSight = "-";
		}
		
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
			yearOfTheModel = modelString;
		} else {
			yearOfTheModel = "-";
		}
				
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
			theProductionDate = prodString;
		} else {
			theProductionDate = "-";
		}
				
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
			theRegistrationDate = regString;
		} else {
			theRegistrationDate = "-";
		}
	}
		
	function setPrimerAttributes(data, singleCarArray)
	{
		hkStart = data.search("<td style=\"color: #888;\">HK/Nm</td>");
		hkEnd = data.search("<td style=\"color: #888;\">0 - 100 km/t</td>");
		if (hkStart != -1 && hkEnd != -1) {
			horsePowerAndNm = removePrimerAttributeSpace(hkStart, hkEnd, data);
		} else {
			horsePowerAndNm = "-";
		}

		zeroToHundredStart = data.search(/[0-9]+,[0-9]* sek/);
		if (zeroToHundredStart != -1) {
			fromZeroToHundred = data.substring(zeroToHundredStart, zeroToHundredStart+8);
			fromZeroToHundred = fromZeroToHundred.replace("<", "");
			fromZeroToHundred = fromZeroToHundred.replace(",", ".");
			//console.log("0-100 km/t: " + fromZeroToHundred);
		} else {
			fromZeroToHundred = "-";
		}

		topSpeedRegexp = /<td style="color: #888;">Tophastighed<\/td>[\w\W]+([0-9]{3} km\/t)<\/td>/;
		match = topSpeedRegexp.exec(data);
		if (match !== null) {
			theTopSpeed = match[1];
		} else {
			theTopSpeed = "-";
		}

		propellantStart = data.search("<td style=\"color: #888;\">Drivmiddel</td>");
		propellantEnd = data.search("<td style=\"color: #888;\">Forbrug</td>");
		if (propellantStart != -1 && propellantEnd != -1) {
			energyToUse = removePrimerAttributeSpace(propellantStart, propellantEnd, data);
			energyToUse = energyToUse.replace(",", ".");
		} else {
			energyToUse = "-";
		}

		usageStart = data.search(/[0-9]+,[0-9]* km\/l/);
		if (usageStart != -1) {
			energyUsage = data.substring(usageStart, usageStart+9);
			energyUsage = energyUsage.replace(",", ".");
			//console.log("Energi forbrug: " + energyUsage);
		} else {
			energyUsage = "-";
		}

		euroStart = data.search("<td style=\"color: #888;\">Euronorm</td>");
		euroEnd = data.search("<td style=\"color: #888;\">Bredde</td>");
		if (euroStart != -1 && euroEnd != -1) {
			theEuronorm = removePrimerAttributeSpace(euroStart, euroEnd, data);
		} else {
			theEuronorm = "-";
		}

		widthStart = data.search("<td style=\"color: #888;\">Bredde</td>");
		widthEnd = data.search("<td style=\"color: #888;\">Længde</td>");
		if (widthStart != -1 && widthEnd != -1) {
			theWidth = removePrimerAttributeSpace(widthStart, widthEnd, data);
		} else {
			theWidth = "-";
		}

		lengthStart = data.search("<td style=\"color: #888;\">Længde</td>");
		lengthEnd = data.search("<td style=\"color: #888;\">Højde</td>");
		if (lengthStart != -1 && lengthEnd != -1) {
			theLength = removePrimerAttributeSpace(lengthStart, lengthEnd, data);
		} else {
			theLength = "-";
		}

		heightStart = data.search("<td style=\"color: #888;\">Højde</td>");
		heightEnd = data.search("<td style=\"color: #888;\">Lasteevne</td>");
		if (heightStart != -1 && heightEnd != -1) {
			theHeight = removePrimerAttributeSpace(heightStart, heightEnd, data);
		} else {
			theHeight = "-";
		}

		loadRegexp = /<td style="color: #888;">Lasteevne<\/td>[\w\W]+([0-9]{3} kg)<\/td>/;
		match = loadRegexp.exec(data);
		if (match !== null) {
			loadAbility = match[1];
		} else {
			loadAbility = "-";
		}

		tractionStart = data.search("<td style=\"color: #888;\">Trækhjul</td>");
		tractionEnd = data.search("<td style=\"color: #888;\">Cylindre</td>");
		if (tractionStart != -1 && tractionEnd != -1) {
			drivingWheels = removePrimerAttributeSpace(tractionStart, tractionEnd, data);
		} else {
			drivingWheels = "-";
		}

		cylStart = data.search("<td style=\"color: #888;\">Cylindre</td>");
		cylEnd = data.search("<td style=\"color: #888;\">ABS-bremser</td>");
		if (cylStart != -1 && cylEnd != -1) {
			theCylinders = removePrimerAttributeSpace(cylStart, cylEnd, data);
		} else {
			theCylinders = "-";
		}

		absStart = data.search("<td style=\"color: #888;\">ABS-bremser</td>");
		absEnd = data.search("<td style=\"color: #888;\">Max. påhæng</td>");
		if (absStart != -1 && absEnd != -1) {
			absBreaks = removePrimerAttributeSpace(absStart, absEnd, data);
		} else {
			absBreaks = "-";
		}

		maxloadStart = data.search("<td style=\"color: #888;\">Max. påhæng</td>");
		maxloadEnd = data.search("<td style=\"color: #888;\">Airbags</td>");
		if (maxloadStart != -1 && maxloadEnd != -1) {
			theMaxLoad = removePrimerAttributeSpace(maxloadStart, maxloadEnd, data);
		} else {
			theMaxLoad = "-";
		}

		airbagStart = data.search("<td style=\"color: #888;\">Airbags</td>");
		airbagEnd = data.search("<td style=\"color: #888;\">ESP</td>");
		if (airbagStart != -1 && airbagEnd != -1) {
			numberOfAirbags = removePrimerAttributeSpace(airbagStart, airbagEnd, data);
		} else {
			numberOfAirbags = "-";
		}

		espStart = data.search("<td style=\"color: #888;\">ESP</td>");
		espEnd = data.search("<td style=\"color: #888;\">Tank</td>");
		if (espStart != -1 && espEnd != -1) {
			doesEsp = removePrimerAttributeSpace(espStart, espEnd, data);
		} else {
			doesEsp = "-";
		}

		tankStart = data.search("<td style=\"color: #888;\">Tank</td>");
		tankEnd = data.search("<td style=\"color: #888;\">Gear</td>");
		if (tankStart != -1 && tankEnd != -1) {
			theGasTank = removePrimerAttributeSpace(tankStart, tankEnd, data);
		} else {
			theGasTank = "-";
		}

		gearStart = data.search("<td style=\"color: #888;\">Gear</td>");
		gearEnd = data.search("<td style=\"color: #888;\">Geartype</td>");
		if (gearStart != -1 && gearEnd != -1) {
			theGears = removePrimerAttributeSpace(gearStart, gearEnd, data);
		} else {
			theGears = "-";
		}

		geartypeStart = data.search("<td style=\"color: #888;\">Geartype</td>");
		geartypeEnd = data.search("<td style=\"color: #888;\">Vægt</td>");
		if (geartypeStart != -1 && geartypeEnd != -1) {
			theGearType = removePrimerAttributeSpace(geartypeStart, geartypeEnd, data);
		} else {
			theGearType = "-";
		}

		weightStart = data.search("<td style=\"color: #888;\">Vægt</td>");
		weightEnd = data.search("<td style=\"color: #888;\">Døre</td>");
		if (weightStart != -1 && weightEnd != -1) {
			theWeight = removePrimerAttributeSpace(weightStart, weightEnd, data);
		} else {
			theWeight = "-";
		}

		doorStart = data.search(/<td style="color: #888;">Døre<\/td>/);
		doorTxt = data.substring(doorStart+101 , doorStart+102);
		//console.log("doors; start: " + doorStart + ", \n doorTxt: " + doorTxt);
		if (doorStart != -1) {
			countOfDoors = doorTxt;
		} else {
			countOfDoors = "-";
		}

		getContactDetails(data);

		
	}
	
	function getContactDetails(data)
	{
		contactRegexp = /(?<=<div>)(\d{4}) (( |.)+)<\/div>/;
		var match = contactRegexp.exec(data);
		if (match !==  null) {
			contactInfo = match[1] + " " + match[2];
		} else {
			contactInfo = "-";
		}
	}
	
	



	function removePrimerAttributeSpace(start, end, data)
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
		for(i=0; i<50; i++) {
			value = value.replace("   ", "");
		}
		for(i=0; i<20; i++) {
			value = value.replace(/\n/, "");
		}
		
		value = value.substr(value.indexOf(" ") + 1);
		value = value.replace(/ +/, "");
		
		value = value.replace("</table>", "");

		value = value.replace(",", ".");
		return value;
	}







</script>