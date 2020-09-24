

<script>



	function getMainGogAttributes(data, gogCarArray)
	{
		sizeStart = data.search(/"Motorstørrelse","value":"/);
		sizeStr = data.substring(sizeStart+26, sizeStart+30);
		sizeEnd = sizeStr.search(/"[ \n]*/);
		gogTheSize = sizeStr.substring(0, sizeEnd);
		
	
		varStart = data.search(/"Variant","value":"/);
		varStr = data.substring(varStart+19, varStart+35);
		varEnd = varStr.search(/"[ \n]*/);
		gogTheVar = varStr.substring(0, varEnd);
		
		
		if (sizeStart != -1 && sizeEnd != -1 && varStart != -1 && varEnd != -1) {
			
			temp = gogTheSize + " " + gogTheVar;
			gogTheEngine = temp.replace(",", ".");

			console.log("Engine: " + gogTheEngine);
		} else {
		    gogTheCarModel = "-";
			gogTheEngine = "-";
		}
			
		priceStart = data.search(/,"text":"[0-9]+.[0-9]+ kr.","/);
		if (priceStart != -1) {
			priceString = data.substring(priceStart+9, priceStart+25);
			priceEnd = priceString.search(/kr.","/);
			console.log("price start, end: " + priceStart + ", " + priceEnd);
			priceString = priceString.substring(0, priceEnd);
			console.log("price: " + priceString + "\n");
			gogThePrice = priceString;
		} else {
			gogThePrice = "-";
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
			gogTheRegistrationDate = regString;
		} else {
			gogTheRegistrationDate = "-";
		}
	}
		
	function setPrimerGogAttributes(data, gogCarArray)
	{
		hkStart = data.search("<td style=\"color: #888;\">HK/Nm</td>");
		hkEnd = data.search("<td style=\"color: #888;\">0 - 100 km/t</td>");
		if (hkStart != -1 && hkEnd != -1) {
			gogHorsePowerAndNm = removePrimerGogAttributeSpace(hkStart, hkEnd, data);
		} else {
			gogHorsePowerAndNm = "-";
		}

		zeroToHundredStart = data.search(/[0-9]+,[0-9]* sek/);
		if (zeroToHundredStart != -1) {
			fromZeroToHundred = data.substring(zeroToHundredStart, zeroToHundredStart+8);
			fromZeroToHundred = fromZeroToHundred.replace("<", "");
			gogFromZeroToHundred = fromZeroToHundred.replace(",", ".");
			//console.log("0-100 km/t: " + fromZeroToHundred);
		} else {
			gogFromZeroToHundred = "-";
		}

		topSpeedStart = data.search("<td style=\"color: #888;\">Tophastighed</td>");
		topSpeedEnd = data.search("<td style=\"color: #888;\">Drivmiddel</td>");
		if (topSpeedStart != -1 && topSpeedEnd != -1) {
			gogTheTopSpeed = removePrimerGogAttributeSpace(topSpeedStart, topSpeedEnd, data);
			//console.log("topspeed: " + theTopSpeed);
		} else {
			gogTheTopSpeed = "-";
		}

		propellantStart = data.search("<td style=\"color: #888;\">Drivmiddel</td>");
		propellantEnd = data.search("<td style=\"color: #888;\">Forbrug</td>");
		if (propellantStart != -1 && propellantEnd != -1) {
			energyToUse = removePrimerGogAttributeSpace(propellantStart, propellantEnd, data);
			gogEnergyToUse = energyToUse.replace(",", ".");
		} else {
			gogEnergyToUse = "-";
		}

		usageStart = data.search(/[0-9]+,[0-9]* km\/l/);
		if (usageStart != -1) {
			energyUsage = data.substring(usageStart, usageStart+9);
			gogEnergyUsage = energyUsage.replace(",", ".");
			//console.log("Energi forbrug: " + energyUsage);
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

		widthStart = data.search("<td style=\"color: #888;\">Bredde</td>");
		widthEnd = data.search("<td style=\"color: #888;\">Længde</td>");
		if (widthStart != -1 && widthEnd != -1) {
			gogTheWidth = removePrimerGogAttributeSpace(widthStart, widthEnd, data);
		} else {
			gogTheWidth = "-";
		}

		lengthStart = data.search("<td style=\"color: #888;\">Længde</td>");
		lengthEnd = data.search("<td style=\"color: #888;\">Højde</td>");
		if (lengthStart != -1 && lengthEnd != -1) {
			gogTheLength = removePrimerGogAttributeSpace(lengthStart, lengthEnd, data);
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

		loadStart = data.search("<td style=\"color: #888;\">Lasteevne</td>");
		loadEnd = data.search("<td style=\"color: #888;\">Trækhjul</td>");
		if (loadStart != -1 && loadEnd != -1) {
			gogLoadAbility = removePrimerGogAttributeSpace(loadStart, loadEnd, data);
		} else {
			gogLoadAbility = "-";
		}

		tractionStart = data.search("<td style=\"color: #888;\">Trækhjul</td>");
		tractionEnd = data.search("<td style=\"color: #888;\">Cylindre</td>");
		if (tractionStart != -1 && tractionEnd != -1) {
			gogDrivingWheels = removePrimerGogAttributeSpace(tractionStart, tractionEnd, data);
		} else {
			gogDrivingWheels = "-";
		}

		cylStart = data.search("<td style=\"color: #888;\">Cylindre</td>");
		cylEnd = data.search("<td style=\"color: #888;\">ABS-bremser</td>");
		if (cylStart != -1 && cylEnd != -1) {
			gogTheCylinders = removePrimerGogAttributeSpace(cylStart, cylEnd, data);
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

		airbagStart = data.search("<td style=\"color: #888;\">Airbags</td>");
		airbagEnd = data.search("<td style=\"color: #888;\">ESP</td>");
		if (airbagStart != -1 && airbagEnd != -1) {
			gogNumberOfAirbags = removePrimerGogAttributeSpace(airbagStart, airbagEnd, data);
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

		tankStart = data.search("<td style=\"color: #888;\">Tank</td>");
		tankEnd = data.search("<td style=\"color: #888;\">Gear</td>");
		if (tankStart != -1 && tankEnd != -1) {
			gogTheGasTank = removePrimerGogAttributeSpace(tankStart, tankEnd, data);
		} else {
			gogTheGasTank = "-";
		}

		gearStart = data.search("<td style=\"color: #888;\">Gear</td>");
		gearEnd = data.search("<td style=\"color: #888;\">Geartype</td>");
		if (gearStart != -1 && gearEnd != -1) {
			gogTheGears = removePrimerGogAttributeSpace(gearStart, gearEnd, data);
		} else {
			gogTheGears = "-";
		}

		geartypeStart = data.search("<td style=\"color: #888;\">Geartype</td>");
		geartypeEnd = data.search("<td style=\"color: #888;\">Vægt</td>");
		if (geartypeStart != -1 && geartypeEnd != -1) {
			gogTheGearType = removePrimerGogAttributeSpace(geartypeStart, geartypeEnd, data);
		} else {
			gogTheGearType = "-";
		}

		weightStart = data.search("<td style=\"color: #888;\">Vægt</td>");
		weightEnd = data.search("<td style=\"color: #888;\">Døre</td>");
		if (weightStart != -1 && weightEnd != -1) {
			gogTheWeight = removePrimerGogAttributeSpace(weightStart, weightEnd, data);
		} else {
			gogTheWeight = "-";
		}

		doorStart = data.search(/<td style="color: #888;">Døre<\/td>/);
		doorTxt = data.substring(doorStart+101 , doorStart+102);
		//console.log("doors; start: " + doorStart + ", \n doorTxt: " + doorTxt);
		if (doorStart != -1) {
			gogCountOfDoors = doorTxt;
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