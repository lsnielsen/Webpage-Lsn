

<script>

    function getDiffPriceBT(data)
    {
        let price = getPriceBT(data);
        let newPrice = getNewPriceBT(data);
        let emptyCheck = (price !== "-") && (newPrice !== "-");
        let sizeCheck = (parseFloat(newPrice) > parseFloat(price)) && (parseFloat(price) >= 10.000);
        if (emptyCheck && sizeCheck) {
            return (newPrice - price).toFixed(3);
        } else {
            return "-";
        }
    }

    function getNewPriceBT(data)
    {
        let regex = /<dt class="CJwC7ukoOZNDCw3qM5xNY">Nypris[\w\W]+?">([0-9.]*)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getColorBT(data)
    {
        return "-";
    }

	function getKmBT(data)
	{
        let regex = /<dt class="[\w\W]*Kilometer<\/dt>[\w\W]*?">([0-9]*)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
	}

	function getCarAttrBT(data)
    {
        let regex = /<dl class="_35sVIAXVbKbano4g_1_PYh"><dt[\w\W]*">Motorstørrelse[\w\W]*?">([a-z0-9, A-Z]+)<\/dd><\/dl>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getModelDateBT(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Variant[\w\W]+?">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", "");
        } else {
            return "-";
        }
    }

	function getPriceBT(data)
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

	function getSightDateBT(data)
    {
        return "-";
    }

	function getModelDateBT(data)
    {
        return "-";
    }

	function getProdDateBT(data)
	{
        let regex = /<div data-grid="column"[\w\W]+">Årgang[\w\W]+?">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
	}

	function getRegDateBT(data)
	{
        let regex = /<div data-grid="column"[\w\W]+">registrationDate[\w\W]+?">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
	}

	function getHorsePowerBT(data)
	{
        let regex = /<div data-grid="column"[\w\W]+">HK[\w\W]+?">([0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
	}

    function getZeroToHundredBT(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Acceleration[\w\W]+?">([0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }


    function getTopSpeedBT(data)
    {
        let regex = /<dt class="CJwC7ukoOZNDCw3qM5xNY">Tophastighed[\w\W]+?">([0-9.]*)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getPropellantBT(data)
    {
        let regex = /<dt class="CJwC7ukoOZNDCw3qM5xNY">Brændstof[\w\W]+?">([A-Za-z]*)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getUsageBT(data)
    {
        let regex = /<div data-grid="column" class=[\w\W]+?Km\/l[\w\W]+?>([0-9]{0,2},?[0-9]{0,2})<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getEuronormBT(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Euronorm[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getWidthBT(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Bredde[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getLengthBT(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Længde[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getHeightBT(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Højde[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getLoadBT(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Max vægt[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getTractionBT(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Hjultræk[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getCylindersBT(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Antal cylindre[\w\W]+?">([0-9a-zA-Z.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getAbsBT(data)
    {
        let regex = /ABS Bremser/;
        let match = regex.exec(data);
        if (match !== null) {
            return "Ja";
        } else {
            return "-";
        }
    }

    function getMaxPayloadBT(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Max påhængsvægt[\w\W]+?">([0-9.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");;
        } else {
            return "-";
        }
    }

    function getAirbagsBT(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Antal airbags[\w\W]+?">([0-9]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getEspBT(data)
    {
        let regex = /ESP\/ESC/;
        let match = regex.exec(data);
        if (match !== null) {
            return "Ja";
        } else {
            return "-";
        }
    }

	function getGasTankBT(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Tank[\w\W]+?">([0-9]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getGeartypeBT(data)
    {
        let regex = /<dt class="CJwC7ukoOZNDCw3qM5xNY">Geartype[\w\W]+?">([A-Za-z]*)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getGearsBT(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Gear[\w\W]+?">([0-9.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getWeightBT(data)
    {
        let weightRegex = /<div data-grid="column"[\w\W]+">Vægt[\w\W]+?">([0-9.]+)<\/dd><\/dl><\/div>/;
        let match = weightRegex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getDoorsBT(data)
    {
        let doorRegex = /class=[\w\W]+">Døre<\/dt>[\w\W]+?">([0-9])<\/dd><\/dl><\/div>/;
        let match = doorRegex.exec(data);
        if (match !== null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

	function getContactInfoBT(data)
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