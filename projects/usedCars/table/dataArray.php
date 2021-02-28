<script>

    function setExtraDefaultEquip(data, searchString)
    {
        let extraEquip = data.search(searchString);
        if(extraEquip != -1) { return "Ja"; } else { return "-"; }
    }

    function getMainEquip(data, regex)
    {
        const match = regex.exec(data);
        if (match !==  null) {
            return match[1].replace(",", ".");
        } else {
            return "-";
        }
    }

    function getDiffPrice(data)
    {
        let price = getMainEquip(data, /<p id="bbVipPricePrice">\D+([0-9.]+)[a-z\/\. ]*<\/span>/);
        let newPrice = getMainEquip(data, /<td style="color: #888;width:150px;">Nypris<\/td>[\n \W\w]+class="selectedcar">([0-9\.]+) kr/);
        let emptyCheck = (price !== "-") && (newPrice !== "-");
        let sizeCheck = (parseFloat(newPrice) > parseFloat(price)) && (parseFloat(price) >= 10.000);
        if (emptyCheck && sizeCheck) {
            return (newPrice - price).toFixed(3);
        } else {
            return "-";
        }
    }

    function getCarAttr(data)
    {
        let carRegexp = /(?<=<h1 id=\"bbVipTitle\" title=\")([a-zA-Z]+ [a-zA-Z0-9-]+[ CC]*) ([a-zA-Z0-9,]+ [a-zA-Z0-9,]+)/;
        let match = carRegexp.exec(data);
        if (match !==  null) {
            return [match[1], match[2].replace(",", ".")];
        } else {
            return ["-", "-"];
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

    function setTheFirstArray(singleCarArray, data, url)
    {
        singleCarArray.push(url);
        singleCarArray.push(getContactInfo(data));
        singleCarArray.push(getCarAttr(data)[0]);
        singleCarArray.push(getCarAttr(data)[1]);
        singleCarArray.push(getMainEquip(data, /<p id="bbVipPricePrice">\D+([0-9.]+)[a-z\/\. ]*<\/span>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;width:150px;">Nypris<\/td>[\n \W\w]+class="selectedcar">([0-9\.]+) kr/));
        singleCarArray.push(getDiffPrice(data));
        singleCarArray.push(getMainEquip(data, /<section id="bbVipMileage" class="section">[\w\W]*?>Km<[\w\W]*?([0-9.]+)/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">HK\/Nm<\/td>[\w\W]+">([0-9]+ hk \/ [0-9]{2,3} Nm)<\/td>/));
        singleCarArray.push(getMainEquip(data, /<div class="car-first-registration-date">[\w\W]+">([0-9]{1,2}\/[0-9]{4})<\/span>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">Geartype<\/td>[\w\W]+\">(Manuel|Automatisk|Auto)<\/td>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">0 - 100 km\/t<\/td>[\w\W]+?([0-9,]+ sek)<\/td>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">Tophastighed<\/td>[\w\W]+([0-9]{3} km\/t)<\/td>/));
        singleCarArray.push(getMainEquip(data,  /<td class="selectedcar">(Diesel|Benzin)<\/td>/));
        singleCarArray.push(getMainEquip(data,  /<td style="color: #888;">[a-zA-Z() ]*<\/td>[\w\W]+?([0-9,]+ km\/l)<\/td>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">Lasteevne<\/td>[\w\W]+?([0-9]{3} kg)<\/td>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">Trækhjul<\/td>[\w\W]*?">([a-zA-Z]+)<\/td>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">Cylindre<\/td>[\w\W]*?">([0-9])<\/td>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">ABS-bremser<\/td>[\w\W]*?">(Ja)<\/td>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">Max. påhæng<\/td>[\w\W]*?">([0-9.]+ kg)<\/td>/));
        singleCarArray.push(getMainEquip(data, /<td style=\"color: #888;">Airbags<\/td>[\w\W]*?">([0-9]{1,2})<\/td>/));
        singleCarArray.push(getMainEquip(data, /<td style=\"color: #888;">ESP<\/td>[\W\w]+selectedcar">([a-zA-Z]{2,3})<\/td>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">Gear<\/td>[\w\W]+([0-9] gear)<\/td>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">Tank<\/td>[\w\W]+([0-9]{2} l)<\/td>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">.{4}<\/td>[\w\W]+\">([0-9]{3,4} kg)<\/td>/));
        singleCarArray.push(getMainEquip(data, /<div class="car-production-date">[\w\W]+?([0-9- \/]{3,})<\/span>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">.{4}<\/td>[\w\W]+class=\"selectedcar\">([0-9]{0,2})<\/td>/));
        singleCarArray.push(getMainEquip(data, /<div class="car-model-year">[\w\W]+?([0-9]{4})<\/span>/));
        singleCarArray.push(getMainEquip(data, /<li title="Dato for sidste syn"><span>Synet:<\/span>([0-9\/]+)<\/li>/));
        singleCarArray.push(getMainEquip(data, /<li title="Farve"><span>Farve:<\/span>([a-zA-Zøåæ ]+)<\/li>/));
        singleCarArray.push(setExtraDefaultEquip(data, "Aluf&#230;lge"));
        singleCarArray.push(setExtraDefaultEquip(data, "Anh&#230;ngertr&#230;k"));
        singleCarArray.push(setExtraDefaultEquip(data, "Anh&#230;ngertr&#230;k, aftagl."));
        singleCarArray.push(setExtraDefaultEquip(data, "Android auto"));
        singleCarArray.push(setExtraDefaultEquip(data, "Antispin"));
        singleCarArray.push(setExtraDefaultEquip(data, "Apple carplay"));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">Euronorm<\/td>[\w\W]+?([0-9])<\/td>/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">Bredde<\/td>[\w\W]+?([0-9]{3} cm)/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">L.ngde<\/td>[\w\W]+?([0-9]{3} cm)/));
        singleCarArray.push(getMainEquip(data, /<td style="color: #888;">H.jde<\/td>[\w\W]+([0-9]{3} cm)<\/td>/));
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