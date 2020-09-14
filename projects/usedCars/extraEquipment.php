

<script>


	function setExtraEquipment(data, singleCarArray)
	{
		equip = data.search("ABS-bremser");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Alufælge");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Android auto");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Anhængertræk");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Anhængertræk, aftagl.");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Antispin");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Apple carplay");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Armlæn");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Auto. nødbremse");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Auto. parkering");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Auto. start/stop");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Automatgear");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Automatisk lys");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("AUX tilslutning");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Bakkamera");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Bakspejl m. nedbl.");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Bi-xenon");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Blindvinkelassistent");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Bluetooth");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Brugtbilsattest");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Centrallås fjernb.");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("DAB radio");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Dæktryksmåler");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Digitalt cockpit");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("El indst. førersæde m. memory");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Elektrisk kabinevarmer");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Elektrisk parkeringsbremse");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Elektriske komfortsæder");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Elektronisk bagklap");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("El-klapbare sidespejle m. varme");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Fartpilot");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Fartpilot, adaptiv");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Fjernlysassistent");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Fuld LED forlygter");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Head-up display");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Infocenter");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Internet");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Isofix");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Klimaanlæg, 4-zonet");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Kørecomputer");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Kurvelys");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Læderrat");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("LED Kørelys");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Lygtevasker");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Musikstreaming via bluetooth");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Navigation");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Nøglefri betjening");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Panoramatag");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Parkeringssensor (bag)");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Parkeringssensor (for)");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Regnsensor");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Sædebetræk, dellæder");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Sædebetræk, læder");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Sædevarme");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("SD kortlæser");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Servo");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Service ok");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Skiltegenkendelse");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Soltag, elektrisk");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Soltag, manuelt");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Splitbagsæde");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Sportssæder");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Startspærre");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Svingbart træk (elektrisk)");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Svingbart træk (manuelt)");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Tågelygter");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Tagræling");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Trådløs mobilopladning");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Træthedsregistrering");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Undervogn, sænket");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("USB tilslutning");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Vognbaneassistent");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
		equip = data.search("Xenonlygter");	
		if(equip != -1) { singleCarArray.push("Ja"); } else { singleCarArray.push("-"); }
		
	}









</script>