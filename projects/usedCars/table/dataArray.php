<script>

    function setExtraDefaultEquip(data, searchString)
    {
        let extraEquip = data.search(searchString);
        if(extraEquip != -1) {
            return "Ja"; } else { return "-"; }
    }

    function setTheFirstArray(singleCarArray, data, url)
    {
        singleCarArray.push(url);
        singleCarArray.push(getContactInfo(data));
        singleCarArray.push(getCarAttr(data)[0]);
        singleCarArray.push(getCarAttr(data)[1]);
        singleCarArray.push(getPrice(data));
        singleCarArray.push(getNewPrice(data));
        singleCarArray.push(getDiffPrice(data));
        singleCarArray.push(getKm(data));
        singleCarArray.push(getHorsePower(data));
        singleCarArray.push(getRegDate(data));
        singleCarArray.push(getGeartype(data));
        singleCarArray.push(getZeroToHundred(data));
        singleCarArray.push(getTopSpeed(data));
        singleCarArray.push(getPropellant(data));
        singleCarArray.push(getUsage(data));
        singleCarArray.push(getLoad(data));
        singleCarArray.push(getTraction(data));
        singleCarArray.push(getCylinders(data));
        singleCarArray.push(getAbs(data));
        singleCarArray.push(getMaxPayload(data));
        singleCarArray.push(getAirbags(data));
        singleCarArray.push(getEsp(data));
        singleCarArray.push(getGears(data));
        singleCarArray.push(getGasTank(data));
        singleCarArray.push(getWeight(data));
        singleCarArray.push(getProdDate(data));
        singleCarArray.push(getDoors(data));
        singleCarArray.push(getModelDate(data));
        singleCarArray.push(getSightDate(data));
        singleCarArray.push(getColor(data));
        singleCarArray.push(setExtraDefaultEquip(data, "Aluf&#230;lge"));
        singleCarArray.push(setExtraDefaultEquip(data, "Anh&#230;ngertr&#230;k"));
        singleCarArray.push(setExtraDefaultEquip(data, "Anh&#230;ngertr&#230;k, aftagl."));
        singleCarArray.push(setExtraDefaultEquip(data, "Android auto"));
        singleCarArray.push(setExtraDefaultEquip(data, "Antispin"));
        singleCarArray.push(setExtraDefaultEquip(data, "Apple carplay"));
        singleCarArray.push(getEuronorm(data));
        singleCarArray.push(getWidth(data));
        singleCarArray.push(getLength(data));
        singleCarArray.push(getHeight(data));
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