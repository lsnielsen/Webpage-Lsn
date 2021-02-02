

<script>

    function getDiffPriceGog(data)
    {
        return "-";
    }

    function getNewPriceGog(data)
    {
        return "-";
    }

    function getColorGog(data)
    {
        return "-";
    }

	function getKmGog(data)
	{
        let regex = /<div data-grid="column"[\w\W]+">Km[\w\W]+">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
	}

	function getCarAttrGog(data)
    {
        let regex = /<dl class="_35sVIAXVbKbano4g_1_PYh"><dt[\w\W]*">Motorstørrelse[\w\W]*">([a-z0-9, A-Z]+)<\/dd><\/dl>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getModelDateGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Variant[\w\W]+">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getPriceGog(data)
    {
        let regex = /<div class="[\w\W]+price">[\w\W]+">([0-9. a-z]+)<\/div><\/div><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getColor(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Farve[\w\W]+">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
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
        let regex = /<div data-grid="column"[\w\W]+">Årgang[\w\W]+">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
	}

	function getRegDateGog(data)
	{
        let regex = /<div data-grid="column"[\w\W]+">registrationDate[\w\W]+">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
	}

	function getHorsePowerGog(data)
	{
        let regex = /<div data-grid="column"[\w\W]+">HK[\w\W]+">([0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
	}

    function getZeroToHundredGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Acceleration[\w\W]+">([0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }


    function getTopSpeedGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Tophastighed[\w\W]+">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getPropellantGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Brændstof[\w\W]+">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getUsageGog(data)
    {
        let regex = /<div data-grid="column" class=[\w\W]+?Km\/l[\w\W]+?>([0-9]{0,2},?[0-9]{0,2})<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getEuronormGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Euronorm[\w\W]+">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getWidthGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Bredde[\w\W]+">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getLengthGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Længde[\w\W]+">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getHeightGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Højde[\w\W]+">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getLoadGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Max vægt[\w\W]+">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getTractionGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Hjultræk[\w\W]+">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getCylindersGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Antal cylindre[\w\W]+">([0-9a-zA-Z.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getAbsGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">ABS-bremser[\w\W]+">([0-9a-zA-Z.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getMaxPayloadGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Max påhængsvægt[\w\W]+">([0-9.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

    function getAirbagsGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Antal airbags[\w\W]+">([0-9]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getEspGog(data)
    {
        return "-";
    }

	function getGasTankGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Tank[\w\W]+">([0-9]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getGeartypeGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Gear[\w\W]+">([0-9]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getGearsGog(data)
    {
        let regex = /<div data-grid="column"[\w\W]+">Gear[\w\W]+">([0-9.]+)<\/dd><\/dl><\/div>/;
        let match = regex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getWeightGog(data)
    {
        let weightRegex = /<div data-grid="column"[\w\W]+">Vægt[\w\W]+">([0-9.]+)<\/dd><\/dl><\/div>/;
        let match = weightRegex.exec(data);
        if (match !== null) {
            return match[1];
        } else {
            return "-";
        }
    }

	function getDoorsGog(data)
    {
        let doorRegex = /class=[\w\W]+">Døre<\/dt>[\w\W]+">([0-9])<\/dd><\/dl><\/div>/;
        let match = doorRegex.exec(data);
        if (match !== null) {
            return match[1];
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