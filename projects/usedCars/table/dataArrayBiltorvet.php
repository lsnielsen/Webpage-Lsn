<script>

    function setExtraDefaultEquip(data, searchString)
    {
        let extraEquip = data.search(searchString);
        if(extraEquip != -1) { return "Ja"; } else { return "-"; }
    }

    function getDiffPriceBiltorvet(data)
    {
        let price = getMainEquip(data, /<div class="[\w\W]+price">[\w\W]+?">([0-9. a-z]+)<\/div><\/div><\/div>/);
        let newPrice = getMainEquip(data, /<dt class="CJwC7ukoOZNDCw3qM5xNY">Nypris[\w\W]+?">([0-9.]*)<\/dd><\/dl><\/div>/);
        let emptyCheck = (price !== "-") && (newPrice !== "-");
        let sizeCheck = (parseFloat(newPrice) > parseFloat(price)) && (parseFloat(price) >= 10.000);
        if (emptyCheck && sizeCheck) {
            return (newPrice - price).toFixed(3);
        } else {
            return "-";
        }
    }

    function setBiltorvetSingleCarData(singleCarArray, data, url)
    {
        singleCarArray.push(url);
        singleCarArray.push(getMainEquip(data, /<div class=[\w\W]+">([0-9]{4} [a-zA-Z]*)<\/span><\/div>/));
        singleCarArray.push(getMainEquip(data, /<dl class="_35sVIAXVbKbano4g_1_PYh"><dt[\w\W]*">Motorstørrelse[\w\W]*?">([a-z0-9, A-Z]+)<\/dd><\/dl>/));
        singleCarArray.push(getMainEquip(data, /<dl class="_35sVIAXVbKbano4g_1_PYh"><dt[\w\W]*">Motorstørrelse[\w\W]*?">([a-z0-9, A-Z]+)<\/dd><\/dl>/));
        singleCarArray.push(getMainEquip(data, /<div class="[\w\W]+price">[\w\W]+?">([0-9.]+) kr\.<\/div><\/div><\/div>/));
        singleCarArray.push(getMainEquip(data, /<dt class="CJwC7ukoOZNDCw3qM5xNY">Nypris[\w\W]+?">([0-9.]*)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getDiffPriceBiltorvet(data));
        singleCarArray.push(getMainEquip(data, /<dt class="[\w\W]*Kilometer<\/dt>[\w\W]*?">([0-9]*)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">HK[\w\W]+?">([0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">registrationDate[\w\W]+?">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<dt class="CJwC7ukoOZNDCw3qM5xNY">Geartype[\w\W]+?">([A-Za-z]*)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Acceleration[\w\W]+?">([0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<dt class="CJwC7ukoOZNDCw3qM5xNY">Tophastighed[\w\W]+?">([0-9.]*)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<dt class="CJwC7ukoOZNDCw3qM5xNY">Brændstof[\w\W]+?">([A-Za-z]*)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column" class=[\w\W]+?Km\/l[\w\W]+?>([0-9]{0,2},?[0-9]{0,2})<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Max vægt[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Hjultræk[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Antal cylindre[\w\W]+?">([0-9a-zA-Z.]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push("Ja, sandsynligvis");
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Max påhængsvægt[\w\W]+?">([0-9.]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Antal airbags[\w\W]+?">([0-9]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push("-");
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Gear[\w\W]+?">([0-9.]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Tank[\w\W]+?">([0-9]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Vægt[\w\W]+?">([0-9.]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Årgang[\w\W]+?">([\//0-9a-zA-Z-.,]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /class=[\w\W]+">Døre<\/dt>[\w\W]+?">([0-9])<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Variant[\w\W]+?">([\/0-9a-zA-Z-.,/]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push("-");
        singleCarArray.push("-");
        singleCarArray.push(setExtraDefaultEquip(data, "Aluf&#230;lge"));
        singleCarArray.push(setExtraDefaultEquip(data, "Anh&#230;ngertr&#230;k"));
        singleCarArray.push(setExtraDefaultEquip(data, "Anh&#230;ngertr&#230;k, aftagl."));
        singleCarArray.push(setExtraDefaultEquip(data, "Android auto"));
        singleCarArray.push(setExtraDefaultEquip(data, "Antispin"));
        singleCarArray.push(setExtraDefaultEquip(data, "Apple carplay"));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Euronorm[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Bredde[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Længde[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(getMainEquip(data, /<div data-grid="column"[\w\W]+">Højde[\w\W]+?">([0-9a-zA-Z-.]+)<\/dd><\/dl><\/div>/));
        singleCarArray.push(setExtraDefaultEquip(data, /Arml&#230;n/));
        singleCarArray.push(setExtraDefaultEquip(data, /Auto. n&#248;dbremse/));
        singleCarArray.push(setExtraDefaultEquip(data, /Auto. parkering/));
        singleCarArray.push(setExtraDefaultEquip(data, /Auto. start\/stop/));
        singleCarArray.push(setExtraDefaultEquip(data, /Automatisk lys/));
        singleCarArray.push(setExtraDefaultEquip(data, /AUX tilslutning/));
        singleCarArray.push(setExtraDefaultEquip(data, /Bakkamera/));
        singleCarArray.push(setExtraDefaultEquip(data, /Bakspejl m. nedbl./));
        singleCarArray.push(setExtraDefaultEquip(data, /Bi-xenon/));
        singleCarArray.push(setExtraDefaultEquip(data, /Blindvinkelassistent/));
        singleCarArray.push(setExtraDefaultEquip(data, /Bluetooth/));
        singleCarArray.push(setExtraDefaultEquip(data, /Brugtbilsattest/));
        singleCarArray.push(setExtraDefaultEquip(data, /Centrall&#229;s fjernb./));
        singleCarArray.push(setExtraDefaultEquip(data, /DAB radio/));
        singleCarArray.push(setExtraDefaultEquip(data, /<li>d.+ktryksm.+ler<\/li>/i));
        singleCarArray.push(setExtraDefaultEquip(data, /Digitalt cockpit/));
        singleCarArray.push(setExtraDefaultEquip(data, /El indst. f&#248;rers&#230;de m. memory/));
        singleCarArray.push(setExtraDefaultEquip(data, /Elektrisk kabinevarmer/));
        singleCarArray.push(setExtraDefaultEquip(data, /Elektrisk parkeringsbremse/));
        singleCarArray.push(setExtraDefaultEquip(data, /Elektriske komforts&#230;der/));
        singleCarArray.push(setExtraDefaultEquip(data, /Elektronisk bagklap/));
        singleCarArray.push(setExtraDefaultEquip(data, /El-klapbare sidespejle m. varme/));
        singleCarArray.push(setExtraDefaultEquip(data, /Elektriske vinduer/));
        singleCarArray.push(setExtraDefaultEquip(data, /Fartpilot/));
        singleCarArray.push(setExtraDefaultEquip(data, /Fartpilot, adaptiv/));
        singleCarArray.push(setExtraDefaultEquip(data, /Fjernlysassistent/));
        singleCarArray.push(setExtraDefaultEquip(data, /Fuld LED forlygter/));
        singleCarArray.push(setExtraDefaultEquip(data, /Head-up display/));
        singleCarArray.push(setExtraDefaultEquip(data, /Infocenter/));
        singleCarArray.push(setExtraDefaultEquip(data, /Internet/));
        singleCarArray.push(setExtraDefaultEquip(data, /Isofix/));
        singleCarArray.push(setExtraDefaultEquip(data, /Klimaanl&#230;g, 4-zonet/));
        singleCarArray.push(setExtraDefaultEquip(data, /K&#248;recomputer/));
        singleCarArray.push(setExtraDefaultEquip(data, /Kurvelys/));
        singleCarArray.push(setExtraDefaultEquip(data, /L&#230;derrat/));
        singleCarArray.push(setExtraDefaultEquip(data, /LED K&248;relys/));
        singleCarArray.push(setExtraDefaultEquip(data, /Lygtevasker/));
        singleCarArray.push(setExtraDefaultEquip(data, /Musikstreaming via bluetooth/));
        singleCarArray.push(setExtraDefaultEquip(data, /Navigation/));
        singleCarArray.push(setExtraDefaultEquip(data, /N&#248;glefri betjening/));
        singleCarArray.push(setExtraDefaultEquip(data, /Panoramatag/));
        singleCarArray.push(setExtraDefaultEquip(data, /Parkeringssensor (bag)/));
        singleCarArray.push(setExtraDefaultEquip(data, /Parkeringssensor (for)/));
        singleCarArray.push(setExtraDefaultEquip(data, /Regnsensor/));
        singleCarArray.push(setExtraDefaultEquip(data, /S&#230;debetr&#230;k, dell&#230;der/));
        singleCarArray.push(setExtraDefaultEquip(data, /S&#230;debetr&#230;k, l&#230;der/));
        singleCarArray.push(setExtraDefaultEquip(data, /S&#230;devarme/));
        singleCarArray.push(setExtraDefaultEquip(data, /SD kortl&#230;ser/));
        singleCarArray.push(setExtraDefaultEquip(data, /Service ok/));
        singleCarArray.push(setExtraDefaultEquip(data, /Servo/));
        singleCarArray.push(setExtraDefaultEquip(data, /<li>Skiltegenkendelse<\/li>/));
        singleCarArray.push(setExtraDefaultEquip(data, /Soltag, elektrisk/));
        singleCarArray.push(setExtraDefaultEquip(data, /Soltag, manuelt/));
        singleCarArray.push(setExtraDefaultEquip(data, /Splitbags&#230;de/));
        singleCarArray.push(setExtraDefaultEquip(data, /Sportss&#230;der/));
        singleCarArray.push(setExtraDefaultEquip(data, /Startsp&#230;rre/));
        singleCarArray.push(setExtraDefaultEquip(data, /Svingbart tr&#230;k (elektrisk)/));
        singleCarArray.push(setExtraDefaultEquip(data, /Svingbart tr&#230;k (manuelt)/));
        singleCarArray.push(setExtraDefaultEquip(data, /T&#229;gelygter/));
        singleCarArray.push(setExtraDefaultEquip(data, /Tagr&#230;ling/));
        singleCarArray.push(setExtraDefaultEquip(data, /Tr&#229;dl&#248;s mobilopladning/));
        singleCarArray.push(setExtraDefaultEquip(data, /Tr&#229;thedsregistrering/));
        singleCarArray.push(setExtraDefaultEquip(data, /Undervogn, s&#230;nket/));
        singleCarArray.push(setExtraDefaultEquip(data, /USB tilslutning/));
        singleCarArray.push(setExtraDefaultEquip(data, /Vognbaneassistent/));
        singleCarArray.push(setExtraDefaultEquip(data, /xenonlygter/));

        dataArray.push(singleCarArray);
    }
</script>