<script>

    function setExtraDefaultEquip(data, searchString)
    {
        let extraEquip = data.search(searchString);
        if(extraEquip != -1) { return "Ja"; } else { return "-"; }
    }

    function setTheFirstArrayBT(singleCarArray, data, url)
    {
        singleCarArray.push(url);
        singleCarArray.push(getContactInfoBT(data));
        singleCarArray.push(getCarAttrBT(data));
        singleCarArray.push(getCarAttrBT(data));
        singleCarArray.push(getPriceBT(data));
        singleCarArray.push(getNewPriceBT(data));
        singleCarArray.push(getDiffPriceBT(data));
        singleCarArray.push(getKmBT(data));
        singleCarArray.push(getHorsePowerBT(data));
        singleCarArray.push(getRegDateBT(data));
        singleCarArray.push(getGeartypeBT(data));
        singleCarArray.push(getZeroToHundredBT(data));
        singleCarArray.push(getTopSpeedBT(data));
        singleCarArray.push(getPropellantBT(data));
        singleCarArray.push(getUsageBT(data));
        singleCarArray.push(getLoadBT(data));
        singleCarArray.push(getTractionBT(data));
        singleCarArray.push(getCylindersBT(data));
        singleCarArray.push(getAbsBT(data));
        singleCarArray.push(getMaxPayloadBT(data));
        singleCarArray.push(getAirbagsBT(data));
        singleCarArray.push(getEspBT(data));
        singleCarArray.push(getGearsBT(data));
        singleCarArray.push(getGasTankBT(data));
        singleCarArray.push(getWeightBT(data));
        singleCarArray.push(getProdDateBT(data));
        singleCarArray.push(getDoorsBT(data));
        singleCarArray.push(getModelDateBT(data));
        singleCarArray.push(getSightDateBT(data));
        singleCarArray.push(getColorBT(data));
        singleCarArray.push(setExtraDefaultEquip(data, "Aluf&#230;lge"));
        singleCarArray.push(setExtraDefaultEquip(data, "Anh&#230;ngertr&#230;k"));
        singleCarArray.push(setExtraDefaultEquip(data, "Anh&#230;ngertr&#230;k, aftagl."));
        singleCarArray.push(setExtraDefaultEquip(data, "Android auto"));
        singleCarArray.push(setExtraDefaultEquip(data, "Antispin"));
        singleCarArray.push(setExtraDefaultEquip(data, "Apple carplay"));
        singleCarArray.push(getEuronormBT(data));
        singleCarArray.push(getWidthBT(data));
        singleCarArray.push(getLengthBT(data));
        singleCarArray.push(getHeightBT(data));
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