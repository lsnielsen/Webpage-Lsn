

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
	}

	function getColor(data)
    {
        let colorRegexp = /<li title="Farve"><span>Farve:<\/span>([a-zA-Zøåæ ]+)<\/li>/;
        let match = colorRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getSightDate(data)
    {
        let sightDateRegexp = /<li title="Dato for sidste syn"><span>Synet:<\/span>([0-9\/]+)<\/li>/;
        let match = sightDateRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getModelDate(data)
    {
        let modelDateRegexp = /<div class="car-model-year">[\w\W]+?([0-9]{4})<\/span>/;
        let match = modelDateRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getProdDate(data)
    {
        let prodDateRegexp = /<div class="car-production-date">[\w\W]+?([0-9- \/]{3,})<\/span>/;
        let match = prodDateRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getRegDate(data)
    {
        let regDateRegexp = /<div class="car-first-registration-date">[\w\W]+">([0-9]{1,2}\/[0-9]{4})<\/span>/;
        let match = regDateRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }
		
	function getHorsePower(data)
	{
        let horsePowerRegexp = /<td style="color: #888;">HK\/Nm<\/td>[\w\W]+([0-9]{2,3} hk \/ [0-9]{2,3} Nm)<\/td>/;
        let match = horsePowerRegexp.exec(data);
		if (match !== null) {
			return match[1];
		} else {
			return "-";
		}
	}

	function getZeroToHundred(data)
    {
        let zeroToHundredRegex = /<td style="color: #888;">0 - 100 km\/t<\/td>[\w\W]+?([0-9,]+ sek)<\/td>/;
        let match = zeroToHundredRegex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getTopSpeed(data)
    {
        let topSpeedRegexp = /<td style="color: #888;">Tophastighed<\/td>[\w\W]+([0-9]{3} km\/t)<\/td>/;
        let match = topSpeedRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getPropellant(data)
    {
        let propRegexp = /<td class="selectedcar">(Diesel|Benzin)<\/td>/;
        let match = propRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getUsage(data)
    {
        let usageRegexp = /<td style="color: #888;">[a-zA-Z() ]*<\/td>[\w\W]+?([0-9,]+ km\/l)<\/td>/;
        let match = usageRegexp.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getEuronorm(data)
    {
        let euroRegex = /<td style="color: #888;">Euronorm<\/td>[\w\W]+?([0-9])<\/td>/;
        let match = euroRegex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getHeight(data)
    {
        let heightRegexp = /<td style="color: #888;">H.jde<\/td>[\w\W]+([0-9]{3} cm)<\/td>/;
        let match = heightRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getLength(data)
    {
        let lengthRegexp = /<td style="color: #888;">L.ngde<\/td>[\w\W]+?([0-9]{3} cm)/;
        let lengthMatch = lengthRegexp.exec(data);
        if (lengthMatch !== null) {
            return lengthMatch[1];
        } else {
            return "-";
        }
    }

	function getWidth(data)
    {
        let widthRegexp = /<td style="color: #888;">Bredde<\/td>[\w\W]+?([0-9]{3} cm)/;
        let widthMatch = widthRegexp.exec(data);
        if (widthMatch !== null) {
            return widthMatch[1];
        } else {
            return "-";
        }
    }

	function getLoad(data)
    {
        let loadRegexp = /<td style="color: #888;">Lasteevne<\/td>[\w\W]+?([0-9]{3} kg)<\/td>/;
        let match = loadRegexp.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getTraction(data)
    {
        let tractionRegex = /<td style="color: #888;">Trækhjul<\/td>[\w\W]*?">([a-zA-Z]+)<\/td>/;
        let match = tractionRegex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
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