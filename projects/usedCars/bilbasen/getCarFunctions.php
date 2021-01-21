

<script>



	function getMainAttributes(data)
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
		
		carRegexp = /(?<=<h1 id=\"bbVipTitle\" title=\")([a-zA-Z]+ [a-zA-Z0-9-]+[ CC]*) ([a-zA-Z0-9,]+ [a-zA-Z0-9,]+)/;
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

		priceRegex = /<p id="bbVipPricePrice">\D+([0-9.]+)[a-z\/\. ]*<\/span>/;
		match = priceRegex.exec(data);
		if (match !==  null) {
			thePrice = match[1];
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
		
	function setPrimerAttributes(data)
	{
		horsePowerRegexp = /<td style="color: #888;">HK\/Nm<\/td>[\w\W]+([0-9]{3} hk \/ [0-9]{3} Nm)<\/td>/;
		match = horsePowerRegexp.exec(data);
		if (match !== null) {
			horsePowerAndNm = match[1];
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

        usageRegexp = /<td class="selectedcar">(Diesel|Benzin)<\/td>/;
        usageMatch = usageRegexp.exec(data);
		if (usageMatch !== null) {
            energyUsage = usageMatch[1];
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

		heightRegexp = /<td style="color: #888;">H.jde<\/td>[\w\W]+([0-9]{3} cm)<\/td>/;
        heightMatch = heightRegexp.exec(data);
		if (heightMatch !== null) {
                    theHeight = heightMatch[1];
		} else {
                    theHeight = "-";
		}

        lengthRegexp = /<td style="color: #888;">L.ngde<\/td>[\w\W]+?([0-9]{3} cm)/;
        lengthMatch = lengthRegexp.exec(data);
		if (lengthMatch !== null) {
			theLength = lengthMatch[1];
		} else {
			theLength = "-";
		}
                
		widthRegexp = /<td style="color: #888;">Bredde<\/td>[\w\W]+?([0-9]{3} cm)/;
        widthMatch = widthRegexp.exec(data);
		if (widthMatch !== null) {
			theWidth = widthMatch[1];
		} else {
			theWidth = "-";
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
	}

	function getCylinders(data)
    {
        cylRegex = /<td style="color: #888;">Cylindre<\/td>[\w\W]*?">([0-9])<\/td>/;
        let match = cylRegex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getAbs(data)
    {
        let absRegex = /<td style="color: #888;">ABS-bremser<\/td>[\w\W]*?">(Ja)<\/td>/;
        let match = absRegex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getMaxPayload(data)
    {
        let maxloadRegex = /<td style="color: #888;">Max. påhæng<\/td>[\w\W]*?">([0-9.]+ kg)<\/td>/;
        let match = maxloadRegex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getAirbags(data)
    {
        let airbagRegex = /<td style=\"color: #888;">Airbags<\/td>[\w\W]*?">([0-9]{1,2})<\/td>/;
        let match = airbagRegex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getEsp(data)
    {
        let espRegex = /<td style=\"color: #888;">ESP<\/td>[\W\w]+selectedcar">([a-zA-Z]{2,3})<\/td>/;
        let match = espRegex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getGasTank(data)
    {
        let tankRegexp = /<td style="color: #888;">Tank<\/td>[\w\W]+([0-9]{2} l)<\/td>/;
        let match = tankRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getGears(data)
    {
        let gearRegexp = /<td style="color: #888;">Gear<\/td>[\w\W]+([0-9] gear)<\/td>/;
        let match = gearRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getGeartype(data)
    {
        let geartypeRegexp = /<td style="color: #888;">Geartype<\/td>[\w\W]+\">(Manuel|Automatisk|Auto)<\/td>/;
        let match = geartypeRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getWeight(data)
    {
        let weightRegexp = /<td style="color: #888;">.{4}<\/td>[\w\W]+\">([0-9]{3,4} kg)<\/td>/;
        let match = weightRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getDoors(data)
    {
        let doorRegexp = /<td style="color: #888;">.{4}<\/td>[\w\W]+class=\"selectedcar\">([0-9]{0,2})<\/td>/;
        const match = doorRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getContactInfo(data)
    {
        let contactRegexp = /(?<=<div>)(\d{4}) (( |.)+)<\/div>/;
        const match = contactRegexp.exec(data);
        if (match !==  null) {
            return match[1] + " " + match[2];
        } else {
            return "-";
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