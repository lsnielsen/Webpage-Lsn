

<script>

    function getDiffPriceGog(data)
    {
        let price = getPriceGog(data);
        let newPrice = getNewPriceGog(data);
        let emptyCheck = (price !== "-") && (newPrice !== "-");
        let sizeCheck = (parseFloat(newPrice) > parseFloat(price)) && (parseFloat(price) >= 10.000);
        if (emptyCheck && sizeCheck) {
            return (newPrice - price).toFixed(3);
        } else {
            return "-";
        }
    }

    function getNewPriceGog(data)
    {
        let regex = /<dt class="CJwC7ukoOZNDCw3qM5xNY">Nypris[\w\W]+?">([0-9.]*)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getColorGog(data)
    {
        return "-";
    }

	function getKmGog(data)
	{
        let regex = /<dt class="[\w\W]*Kilometer<\/dt>[\w\W]*?">([0-9]*)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
	}

	function getCarAttrGog(data)
    {
        let regex = /<dl class="_35sVIAXVbKbano4g_1_PYh"><dt[\w\W]*">Motorstørrelse[\w\W]*?">([a-z0-9, A-Z]+)<\/dd><\/dl>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getModelDateGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Variant[\w\W]+?">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", "");
        } else {
            return "-";
        }
    }

	function getPriceGog(data)
    {
        let regex = /<div class="[\w\W]+price">[\w\W]+?">([0-9. a-z]+)<\/div><\/div><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace("kr.", "");
        } else {
            return "-";
        }
    }

	function getColor(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Farve[\w\W]+?">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

	function getSightDateGog(data)
    {
        return "-";
    }

	function getModelDateGog(data)
    {
        return "-";
    }

	function getProdDateGog(data)
	{
        let regex = /<div data-grid="column"[\w\W]+">Årgang[\w\W]+?">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
	}

	function getRegDateGog(data)
	{
        let regex = /<div data-grid="column"[\w\W]+">registrationDate[\w\W]+?">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
	}

	function getHorsePowerGog(data)
	{
        let regex = /<div data-grid="column"[\w\W]+">HK[\w\W]+?">([0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
	}

    function getZeroToHundredGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Acceleration[\w\W]+?">([0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }


    function getTopSpeedGog(data)
    {
        let regex = /<dt class="CJwC7ukoOZNDCw3qM5xNY">Tophastighed[\w\W]+?">([0-9.]*)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getPropellantGog(data)
    {
        let regex = /<dt class="CJwC7ukoOZNDCw3qM5xNY">Brændstof[\w\W]+?">([A-Za-z]*)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getUsageGog(data)
    {
        let regex = /<div data-grid="column" class=[\w\W]+?Km\/l[\w\W]+?>([0-9]{0,2},?[0-9]{0,2})<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getEuronormGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Euronorm[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getWidthGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Bredde[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getLengthGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Længde[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getHeightGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Højde[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getLoadGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Max vægt[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getTractionGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Hjultræk[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getCylindersGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Antal cylindre[\w\W]+?">([0-9a-zA-Z.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getAbsGog(data)
    {
        let regex = /ABS Bremser/;
        let match = regex.exec(data);
        if (match !== null) {
            return "Ja";
        } else {
            return "-";
        }
    }

    function getMaxPayloadGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Max påhængsvægt[\w\W]+?">([0-9.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getAirbagsGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Antal airbags[\w\W]+?">([0-9]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getEspGog(data)
    {
        let regex = /ESP\/ESC/;
        let match = regex.exec(data);
        if (match !== null) {
            return "Ja";
        } else {
            return "-";
        }
    }

	function getGasTankGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Tank[\w\W]+?">([0-9]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getGeartypeGog(data)
    {
        let regex = /<dt class="CJwC7ukoOZNDCw3qM5xNY">Geartype[\w\W]+?">([A-Za-z]*)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getGearsGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Gear[\w\W]+?">([0-9.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getWeightGog(data)
    {
        let weightRegex = /<div data-grid="column"[\w\W]+">Vægt[\w\W]+?">([0-9.]+)<\/dd><\/dl><\/div>/;
        let match = weightRegex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getDoorsGog(data)
    {
        let doorRegex = /class=[\w\W]+">Døre<\/dt>[\w\W]+?">([0-9])<\/dd><\/dl><\/div>/;
        let match = doorRegex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getContactInfoGog(data)
	{
	    let contactRegex = /<div class=[\w\W]+">([0-9]{4} [a-zA-Z]*)<\/span><\/div>/;
	    let match = contactRegex.exec(data);
	    if (match !== null) {
	        return match[1];
        } else {
            return "-";
        }
	}





</script>