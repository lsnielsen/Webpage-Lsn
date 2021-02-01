

<script>



	function getMainGogAttributes(data)
	{	
		kmStart = data.search(/"Km [0-9]+/);
		if (kmStart != -1) {
			TheKilometers = data.substring(kmStart+4, kmStart+10);
			//console.log("Km: " + TheKilometers + "\n");
		} else {
			TheKilometers = "-";
		}
		
		sizeStart = data.search(/"Motorstørrelse","value":"/);
		if (sizeStart != -1) {
			sizeStr = data.substring(sizeStart+26, sizeStart+30);
			sizeStr = sizeStr.replace(",", ".");
			//console.log("Motor: " + sizeStr + "\n");
			TheEngine = sizeStr.replace("\"", "");
		} else {
			TheEngine = "-";
		}

		modelStart = data.search(/"Variant","value":"/);
		if(modelStart != -1) {
			varStr = data.substring(modelStart+19, modelStart+35);
			varStr = varStr.replace(",", ".");
			varStr = varStr.replace(/\"}.{\"/, "");
			//console.log("Mærke: " + varStr);
		    TheCarModel = varStr;
		} else {
		    TheCarModel = $(".carModel").children("option:selected").val();
		}
		
		priceStart = data.search(/,"text":"[0-9]+.[0-9]+ kr.","/);
		if (priceStart != -1) {
			priceString = data.substring(priceStart+9, priceStart+25);
			priceEnd = priceString.search(/kr.","/);
			//console.log("price start, end: " + priceStart + ", " + priceEnd);
			priceString = priceString.substring(0, priceEnd);
			//console.log("price: " + priceString + "\n");
			ThePrice = priceString;
		} else {
			ThePrice = "-";
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
			TheColor = colorString;
		} else {
			TheColor = "-";
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
			LastDateOfSight = sightString;
		} else {
			LastDateOfSight = "-";
		}
		
		modelStart = data.search(/Årgang","value":"/);
		if (modelStart != -1) {
			modelString = data.substring(modelStart+17, modelStart+21);
			//console.log("Model: " + modelString);
			YearOfTheModel = modelString;
		} else {
			YearOfTheModel = "-";
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
			TheProductionDate = prodString;
		} else {
			TheProductionDate = "-";
		}
				
		regStart = data.search(/"registrationDate":"/);
		if (regStart != -1) {
			regString = data.substring(regStart+20, regStart+30);
			//console.log("registration: " + regString);
			TheRegistrationDate = regString;
		} else {
			TheRegistrationDate = "-";
		}
	}
		
	function setPrimerGogAttributes(data)
	{
		hkStart = data.search(/"HK","value":"/);
		if (hkStart != -1) {
			HorsePowerAndNm = data.substring(hkStart+14, hkStart+17) + " hk";
		} else {
			HorsePowerAndNm = "-";
		}


        zeroToHundredRegexp = /class="_1fTZdVMx6avWCXl7TuqKzA">Acceleration<\/dt><dd class="_3c9Ubpq8hEnOr0VfgTBnSN">([0-9]{1,2},[0-9]{1,2})<\/dd><\/dl>/;
        match = zeroToHundredRegexp.exec(data);
        if (match !==  null) {
            FromZeroToHundred = match[1].replace(",", ".");
        } else {
            FromZeroToHundred = "-";
        }

		topSpeedStart = data.search(/"Tophastighed","value":"/);
		if (topSpeedStart != -1) {
			TheTopSpeed = data.substring(topSpeedStart+24, topSpeedStart+27) + " km/t";
			//console.log("topspeed: " + TheTopSpeed);
		} else {
			TheTopSpeed = "-";
		}

		propellantStart = data.search(/"Brændstof","value":"/);
		if (propellantStart != -1) {
			energyToUse = data.substring(propellantStart+21, propellantStart + 27);
			EnergyToUse = energyToUse.replace(",", ".");
		} else {
			EnergyToUse = "-";
		}

        usageRegex = /<div data-grid="column" class=[\w\W]+?Km\/l[\w\W]+?>([0-9]{0,2},?[0-9]{0,2})<\/dd><\/dl><\/div>/;
		usageMatch = usageRegex.exec(data);
        if (usageMatch !== null) {
            energyUsage = usageMatch[1].replace(",", ".") + " km/l";
            //console.log("Energi forbrug: " + energyUsage);
        } else {
            energyUsage = "-";
        }

		euroStart = data.search("<td style=\"color: #888;\">Euronorm</td>");
		euroEnd = data.search("<td style=\"color: #888;\">Bredde</td>");
		if (euroStart != -1 && euroEnd != -1) {
			TheEuronorm = removePrimerAttributeSpace(euroStart, euroEnd, data);
		} else {
			TheEuronorm = "-";
		}

		widthStart = data.search(/"Bredde","value":"/);
		if (widthStart != -1) {
			TheWidth = data.substring(widthStart+18, widthStart+21) + " cm";
		} else {
			TheWidth = "-";
		}

		lengthStart = data.search(/"Længde","value":"/);
		if (lengthStart != -1) {
			TheLength = data.substring(lengthStart+18, lengthStart+21) + " cm";
		} else {
			TheLength = "-";
		}

		heightStart = data.search("<td style=\"color: #888;\">Højde</td>");
		heightEnd = data.search("<td style=\"color: #888;\">Lasteevne</td>");
		if (heightStart != -1 && heightEnd != -1) {
			TheHeight = removePrimerAttributeSpace(heightStart, heightEnd, data);
		} else {
			TheHeight = "-";
		}

		loadStart = data.search(/"Max vægt","value":"/);
		if (loadStart != -1) {
			LoadAbility = data.substring(loadStart+20, loadStart+24) + " kg";
		} else {
			LoadAbility = "-";
		}

		tractionStart = data.search(/"Hjultræk","value":"/);
		if (tractionStart != -1) {
			DrivingWheels = data.substring(tractionStart+20, tractionStart+35);
			//console.log(DrivingWheels);
		} else {
			DrivingWheels = "-";
		}

		cylStart = data.search(/"Antal cylindre","value":"/);
		if (cylStart != -1) {
			TheCylinders = data.substring(cylStart+26, cylStart+27);
		} else {
			TheCylinders = "-";
		}

		absStart = data.search("<td style=\"color: #888;\">ABS-bremser</td>");
		absEnd = data.search("<td style=\"color: #888;\">Max. påhæng</td>");
		if (absStart != -1 && absEnd != -1) {
			AbsBreaks = removePrimerAttributeSpace(absStart, absEnd, data);
		} else {
			AbsBreaks = "-";
		}

		maxloadStart = data.search("<td style=\"color: #888;\">Max. påhæng</td>");
		maxloadEnd = data.search("<td style=\"color: #888;\">Airbags</td>");
		if (maxloadStart != -1 && maxloadEnd != -1) {
			TheMaxLoad = removePrimerAttributeSpace(maxloadStart, maxloadEnd, data);
		} else {
			TheMaxLoad = "-";
		}

		airbagStart = data.search(/"Antal airbags","value":"/);
		if (airbagStart != -1) {
			NumberOfAirbags = data.substring(airbagStart+25, airbagStart+26);
		} else {
			NumberOfAirbags = "-";
		}

		espStart = data.search("<td style=\"color: #888;\">ESP</td>");
		espEnd = data.search("<td style=\"color: #888;\">Tank</td>");
		if (espStart != -1 && espEnd != -1) {
			DoesEsp = removePrimerAttributeSpace(espStart, espEnd, data);
		} else {
			DoesEsp = "-";
		}

		tankStart = data.search(/"Tank","value":"/);
		if (tankStart != -1) {
			TheGasTank = data.substring(tankStart+16, tankStart+18) + " l";
		} else {
			TheGasTank = "-";
		}

		gearStart = data.search(/"Gear","value":"/);
		if (gearStart != -1) {
			TheGears = data.substring(gearStart+16, gearStart+17);
		} else {
			TheGears = "-";
		}

		geartypeStart = data.search(/"Geartype","value":"/);
		if (geartypeStart != -1) {
			TheGearType = data.substring(geartypeStart+20, geartypeStart+26);
			if (TheGearType.includes('auto') || TheGearType.includes('Auto')) {
				TheGearType = "Automatgear";
			}
		} else {
			TheGearType = "-";
		}

		weightStart = data.search(/"Vægt","value":"/);
		if (weightStart != -1) {
			TheWeight = data.substring(weightStart+16, weightStart+20);
		} else {
			TheWeight = "-";
		}
	}

	function getDoors(data)
    {
        let doorRegex = /class=[\w\W]+">Døre<\/dt>[\w\W]+">([0-9])<\/dd><\/dl><\/div>/;
        let match = doorRegex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }
	
	function getContactInfo(data)
	{
	    let contactRegex = /<div class=[\w\W]+">([0-9]{4} [a-zA-Z]*)<\/span><\/div>/;
	    let match = contactRegex.exec(data);
	    if (match !== null) {
	        return match[1];
        } else {
	        return "-";
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