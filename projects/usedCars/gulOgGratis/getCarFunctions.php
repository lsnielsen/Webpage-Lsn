

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
	}

    function getHeight(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Højde[\w\W]+">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getLoad(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Max vægt[\w\W]+">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getTraction(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Hjultræk[\w\W]+">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getCylinders(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Antal cylindre[\w\W]+">([0-9a-zA-Z.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getAbs(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">ABS-bremser[\w\W]+">([0-9a-zA-Z.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getMaxPayload(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Max påhængsvægt[\w\W]+">([0-9.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getAirbags(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Antal airbags[\w\W]+">([0-9]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getEsp(data)
    {
        return "-";
    }

	function getGasTank(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Tank[\w\W]+">([0-9]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getGeartype(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Gear[\w\W]+">([0-9]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getGears(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Gear[\w\W]+">([0-9.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getWeight(data)
    {
        let weightRegex = /<div data-grid="column"[\w\W]+">Vægt[\w\W]+">([0-9.]+)<\/dd><\/dl><\/div>/;
        let match = weightRegex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
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