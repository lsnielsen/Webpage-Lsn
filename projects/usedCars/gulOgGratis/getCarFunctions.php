

<script>



	function getMainGogAttributes(data, gogCarArray)
	{	
		kmStart = data.search(/"Km [0-9]+/);
		if (kmStart != -1) {
			gogTheKilometers = data.substring(kmStart+4, kmStart+10);
			//console.log("Km: " + gogTheKilometers + "\n");
		} else {
			gogTheKilometers = "-";
		}
		
		sizeStart = data.search(/"Motorstørrelse","value":"/);
		if (sizeStart != -1) {
			sizeStr = data.substring(sizeStart+26, sizeStart+30);
			sizeStr = sizeStr.replace(",", ".");
			//console.log("Motor: " + sizeStr + "\n");
			gogTheEngine = sizeStr.replace("\"", "");
		} else {
			gogTheEngine = "-";
		}

		modelStart = data.search(/"Variant","value":"/);
		if(modelStart != -1) {
			varStr = data.substring(modelStart+19, modelStart+35);
			varStr = varStr.replace(",", ".");
			varStr = varStr.replace(/\"}.{\"/, "");
			//console.log("Mærke: " + varStr);
		    gogTheCarModel = varStr;
		} else {
		    gogTheCarModel = $(".carModel").children("option:selected").val();
		}
	
		
		priceStart = data.search(/,"text":"[0-9]+.[0-9]+ kr.","/);
		if (priceStart != -1) {
			priceString = data.substring(priceStart+9, priceStart+25);
			priceEnd = priceString.search(/kr.","/);
			//console.log("price start, end: " + priceStart + ", " + priceEnd);
			priceString = priceString.substring(0, priceEnd);
			//console.log("price: " + priceString + "\n");
			gogThePrice = priceString;
		} else {
			gogThePrice = "-";
		}
		
		colorStart = data.search(/"Farve","value":"/);
		//console.log("color start, end: " + colorStart);
		if (colorStart != -1) {
			colorString = data.substring(colorStart+17, colorStart+30);
			colorString = colorString.replace("\}", "");
			colorString = colorString.replace("\"", "");
			colorString = colorString.replace(",", "");
			colorString = colorString.replace("\{", "");
			colorString = colorString.replace("\"", "");
			colorString = colorString.replace("name", "");
			gogTheColor = colorString;
		} else {
			gogTheColor = "-";
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
			gogLastDateOfSight = sightString;
		} else {
			gogLastDateOfSight = "-";
		}
		
		modelStart = data.search(/Årgang","value":"/);
		if (modelStart != -1) {
			modelString = data.substring(modelStart+17, modelStart+21);
			//console.log("Model: " + modelString);
			gogYearOfTheModel = modelString;
		} else {
			gogYearOfTheModel = "-";
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
			gogTheProductionDate = prodString;
		} else {
			gogTheProductionDate = "-";
		}
				
		regStart = data.search(/"registrationDate":"/);
		if (regStart != -1) {
			regString = data.substring(regStart+20, regStart+30);
			//console.log("registration: " + regString);
			gogTheRegistrationDate = regString;
		} else {
			gogTheRegistrationDate = "-";
		}
	}
		
	function setPrimerGogAttributes(data, gogCarArray)
	{
		hkStart = data.search(/"HK","value":"/);
		if (hkStart != -1) {
			gogHorsePowerAndNm = data.substring(hkStart+14, hkStart+17) + " hk";
		} else {
			gogHorsePowerAndNm = "-";
		}

		zeroToHundredStart = data.search(/"Acceleration","value":"/);
		if (zeroToHundredStart != -1) {
			fromZeroToHundred = data.substring(zeroToHundredStart+24, zeroToHundredStart+29);
			gogFromZeroToHundred = fromZeroToHundred.replace(",", ".");
			//console.log("0-100 km/t: " + gogFromZeroToHundred);
		} else {
			gogFromZeroToHundred = "-";
		}

		topSpeedStart = data.search(/"Tophastighed","value":"/);
		if (topSpeedStart != -1) {
			gogTheTopSpeed = data.substring(topSpeedStart+24, topSpeedStart+27) + " km/t";
			//console.log("topspeed: " + gogTheTopSpeed);
		} else {
			gogTheTopSpeed = "-";
		}

		propellantStart = data.search(/"Brændstof","value":"/);
		if (propellantStart != -1) {
			energyToUse = data.substring(propellantStart+21, propellantStart + 27);
			gogEnergyToUse = energyToUse.replace(",", ".");
		} else {
			gogEnergyToUse = "-";
		}

		usageStart = data.search(/[0-9]+,[0-9]* km\/l/);
		usageStartII = data.search(/km\/l: [0-9]+,[0-9]*/);
		if (usageStart != -1) {
			energyUsage = data.substring(usageStart, usageStart+9);
			gogEnergyUsage = energyUsage.replace(",", ".");
			//console.log("Energi forbrug: " + energyUsage);
		} else if (usageStartII != -1) {
			energyUsage = data.substring(usageStart+7, usageStart+16);
			gogEnergyUsage = energyUsage.replace(",", ".");
		} else {
			gogEnergyUsage = "-";
		}

		euroStart = data.search("<td style=\"color: #888;\">Euronorm</td>");
		euroEnd = data.search("<td style=\"color: #888;\">Bredde</td>");
		if (euroStart != -1 && euroEnd != -1) {
			gogTheEuronorm = removePrimerGogAttributeSpace(euroStart, euroEnd, data);
		} else {
			gogTheEuronorm = "-";
		}

		widthStart = data.search(/"Bredde","value":"/);
		if (widthStart != -1) {
			gogTheWidth = data.substring(widthStart+18, widthStart+21) + " cm";
		} else {
			gogTheWidth = "-";
		}

		lengthStart = data.search(/"Længde","value":"/);
		if (lengthStart != -1) {
			gogTheLength = data.substring(lengthStart+18, lengthStart+21) + " cm";
		} else {
			gogTheLength = "-";
		}

		heightStart = data.search("<td style=\"color: #888;\">Højde</td>");
		heightEnd = data.search("<td style=\"color: #888;\">Lasteevne</td>");
		if (heightStart != -1 && heightEnd != -1) {
			gogTheHeight = removePrimerGogAttributeSpace(heightStart, heightEnd, data);
		} else {
			gogTheHeight = "-";
		}

		loadStart = data.search(/"Max vægt","value":"/);
		if (loadStart != -1) {
			gogLoadAbility = data.substring(loadStart+20, loadStart+24) + " kg";
		} else {
			gogLoadAbility = "-";
		}

		tractionStart = data.search(/"Hjultræk","value":"/);
		if (tractionStart != -1) {
			gogDrivingWheels = data.substring(tractionStart+20, tractionStart+35);
			//console.log(gogDrivingWheels);
		} else {
			gogDrivingWheels = "-";
		}

		cylStart = data.search(/"Antal cylindre","value":"/);
		if (cylStart != -1) {
			gogTheCylinders = data.substring(cylStart+26, cylStart+27);
		} else {
			gogTheCylinders = "-";
		}

		absStart = data.search("<td style=\"color: #888;\">ABS-bremser</td>");
		absEnd = data.search("<td style=\"color: #888;\">Max. påhæng</td>");
		if (absStart != -1 && absEnd != -1) {
			gogAbsBreaks = removePrimerGogAttributeSpace(absStart, absEnd, data);
		} else {
			gogAbsBreaks = "-";
		}

		maxloadStart = data.search("<td style=\"color: #888;\">Max. påhæng</td>");
		maxloadEnd = data.search("<td style=\"color: #888;\">Airbags</td>");
		if (maxloadStart != -1 && maxloadEnd != -1) {
			gogTheMaxLoad = removePrimerGogAttributeSpace(maxloadStart, maxloadEnd, data);
		} else {
			gogTheMaxLoad = "-";
		}

		airbagStart = data.search(/"Antal airbags","value":"/);
		if (airbagStart != -1) {
			gogNumberOfAirbags = data.substring(airbagStart+25, airbagStart+26);
		} else {
			gogNumberOfAirbags = "-";
		}

		espStart = data.search("<td style=\"color: #888;\">ESP</td>");
		espEnd = data.search("<td style=\"color: #888;\">Tank</td>");
		if (espStart != -1 && espEnd != -1) {
			gogDoesEsp = removePrimerGogAttributeSpace(espStart, espEnd, data);
		} else {
			gogDoesEsp = "-";
		}

		tankStart = data.search(/"Tank","value":"/);
		if (tankStart != -1) {
			gogTheGasTank = data.substring(tankStart+16, tankStart+18) + " l";
		} else {
			gogTheGasTank = "-";
		}

		gearStart = data.search(/"Gear","value":"/);
		if (gearStart != -1) {
			gogTheGears = data.substring(gearStart+16, gearStart+17);
		} else {
			gogTheGears = "-";
		}

		geartypeStart = data.search(/"Geartype","value":"/);
		if (geartypeStart != -1) {
			gogTheGearType = data.substring(geartypeStart+20, geartypeStart+26);
			if (gogTheGearType.includes('auto') || gogTheGearType.includes('Auto')) {
				gogTheGearType = "Automatgear";
			}
		} else {
			gogTheGearType = "-";
		}

		weightStart = data.search(/"Vægt","value":"/);
		if (weightStart != -1) {
			gogTheWeight = data.substring(weightStart+16, weightStart+20);
		} else {
			gogTheWeight = "-";
		}

		doorStart = data.search(/"Døre","value":"/);
		if (doorStart != -1) {
			//console.log("doors; start: " + doorStart + ", \n doorTxt: " + doorTxt);
			gogCountOfDoors = doorTxt = data.substring(doorStart+16, doorStart+17);
		} else {
			gogCountOfDoors = "-";
		}

		getGogContactDetails(data);

		
	}
	
	function getGogContactDetails(data)
	{
		postalStart = data.search(/"zipcode":"/);
		postalTxt = data.substring(postalStart+11 , postalStart+15);
		//console.log(" \n postal start: " + postalStart + ", \n postalTxt: " + postalTxt);
		
		cityStart = data.search(/"city":"/);
		cityTxt = data.substring(cityStart+8 , cityStart+50);
		cityEnd = cityTxt.search(/","nearestRegion"/);
		cityTxt = cityTxt.substring(0, cityEnd);
		//console.log(" \n city; start: " + cityStart + ", \n cityTxt: " + cityTxt);
		
		adressStart = data.search(/<div>[a-zA-Z- æøå]+ [0-9a-zA-Z ]+<\/div>/);
		adressTxt = data.substring(adressStart+5 , adressStart+40);
		adressEnd = adressTxt.search(/<\/div>/);
		adressTxt = adressTxt.substring(0, adressEnd);
		//console.log("adress; start: " + adressStart + ", \n adressTxt: " + adressTxt);
		
		phoneStart = data.search(/<a href="tel:\d{8}">\d{8}<\/a>/);
		phoneTxt = data.substring(phoneStart+23 , phoneStart+40);
		phoneEnd = phoneTxt.search(/<\/a>/);
		phoneTxt = phoneTxt.substring(0, phoneEnd);
		//console.log(" phone; start: " + phoneStart + ", \n phoneTxt: " + phoneTxt + " \n");
		
		if(cityStart == -1) {
			gogContactInfo = "-";
		} else {
			gogContactInfo = postalTxt + " " + cityTxt; // + "\n" + adressTxt + "\n" + phoneTxt;
			//console.log("Kontakt: " + contactInfo);
		}
		
	}
	
	



	function removePrimerGogAttributeSpace(start, end, data)
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