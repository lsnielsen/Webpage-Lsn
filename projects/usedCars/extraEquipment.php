

<script>


	function setExtraEquipment(data, singleCarArray)
	{
		equip = data.search("ABS-bremser");	
		if(equip != -1) { singleCarArray['abs'] = "Ja"; } else { singleCarArray['abs'] = "-"; }
		
		equip = data.search("Alufælge");	
		if(equip != -1) { singleCarArray['alufælge'] = "Ja"; } else { singleCarArray['alufælge'] = "-"; }
		
		equip = data.search("Android auto");	
		if(equip != -1) { singleCarArray['android'] = "Ja"; } else { singleCarArray['android'] = "-"; }
		
		equip = data.search("Anhængertræk");	
		if(equip != -1) { singleCarArray['trækkrog'] = "Ja"; } else { singleCarArray['trækkrog'] = "-"; }
		
		equip = data.search("Anhængertræk, aftagl.");	
		if(equip != -1) { singleCarArray['aftagl'] = "Ja"; } else { singleCarArray['aftagl'] = "-"; }
		
		equip = data.search("Antispin");	
		if(equip != -1) { singleCarArray['antispin'] = "Ja"; } else { singleCarArray['antispin'] = "-"; }
		
		equip = data.search("Apple carplay");	
		if(equip != -1) { singleCarArray['appleCarplay'] = "Ja"; } else { singleCarArray['appleCarplay'] = "-"; }
		
		equip = data.search("Armlæn");	
		if(equip != -1) { singleCarArray['armlæn'] = "Ja"; } else { singleCarArray['armlæn'] = "-"; }
		
		equip = data.search("Auto. nødbremse");	
		if(equip != -1) { singleCarArray['autoBremse'] = "Ja"; } else { singleCarArray['autoBremse'] = "-"; }
		
		equip = data.search("Auto. parkering");	
		if(equip != -1) { singleCarArray['autoPark'] = "Ja"; } else { singleCarArray['autoPark'] = "-"; }
		
		equip = data.search("Auto. start/stop");	
		if(equip != -1) { singleCarArray['autoStartStop'] = "Ja"; } else { singleCarArray['autoStartStop'] = "-"; }
		
		equip = data.search("Automatgear");	
		if(equip != -1) { singleCarArray['autoGear'] = "Ja"; } else { singleCarArray['autoGear'] = "-"; }
		
		equip = data.search("Automatisk lys");	
		if(equip != -1) { singleCarArray['autoLys'] = "Ja"; } else { singleCarArray['autoLys'] = "-"; }
		
		equip = data.search("AUX tilslutning");	
		if(equip != -1) { singleCarArray['auxTilslutning'] = "Ja"; } else { singleCarArray['auxTilslutning'] = "-"; }
		
		equip = data.search("Bakkamera");	
		if(equip != -1) { singleCarArray['bakkamera'] = "Ja"; } else { singleCarArray['bakkamera'] = "-"; }
		
		equip = data.search("Bakspejl m. nedbl.");	
		if(equip != -1) { singleCarArray['bakspejlNedbl'] = "Ja"; } else { singleCarArray['bakspejlNedbl'] = "-"; }
		
		equip = data.search("Bi-xenon");	
		if(equip != -1) { singleCarArray['bi-xenon'] = "Ja"; } else { singleCarArray['bi-xenon'] = "-"; }
		
		equip = data.search("Blindvinkelassistent");	
		if(equip != -1) { singleCarArray['blindvinkel'] = "Ja"; } else { singleCarArray['blindvinkel'] = "-"; }
		
		equip = data.search("Bluetooth");	
		if(equip != -1) { singleCarArray['bluetooth'] = "Ja"; } else { singleCarArray['bluetooth'] = "-"; }
		
		equip = data.search("Brugtbilsattest");	
		if(equip != -1) { singleCarArray['brugtbilsattest'] = "Ja"; } else { singleCarArray['brugtbilsattest'] = "-"; }
		
		equip = data.search("Centrallås fjernb.");	
		if(equip != -1) { singleCarArray['centrallås'] = "Ja"; } else { singleCarArray['centrallås'] = "-"; }
		
		equip = data.search("DAB radio");	
		if(equip != -1) { singleCarArray['dabRadio'] = "Ja"; } else { singleCarArray['dabRadio'] = "-"; }
		
		equip = data.search("Dæktryksmåler");	
		if(equip != -1) { singleCarArray['dæktryksmåler'] = "Ja"; } else { singleCarArray['dæktryksmåler'] = "-"; }
		
		equip = data.search("Digitalt cockpit");	
		if(equip != -1) { singleCarArray['digitalCockpit'] = "Ja"; } else { singleCarArray['digitalCockpit'] = "-"; }
		
		equip = data.search("El indst. førersæde m. memory");	
		if(equip != -1) { singleCarArray['memoryFrontseat'] = "Ja"; } else { singleCarArray['memoryFrontseat'] = "-"; }
		
		equip = data.search("Elektrisk kabinevarmer");	
		if(equip != -1) { singleCarArray['cabinWarmer'] = "Ja"; } else { singleCarArray['cabinWarmer'] = "-"; }
		
		equip = data.search("Elektrisk parkeringsbremse");	
		if(equip != -1) { singleCarArray['parkBreak'] = "Ja"; } else { singleCarArray['parkBreak'] = "-"; }
		
		equip = data.search("Elektriske komfortsæder");	
		if(equip != -1) { singleCarArray['comfSeats'] = "Ja"; } else { singleCarArray['comfSeats'] = "-"; }
		
		equip = data.search("Elektronisk bagklap");	
		if(equip != -1) { singleCarArray['elecBackDoor'] = "Ja"; } else { singleCarArray['elecBackDoor'] = "-"; }
		
		equip = data.search("El-klapbare sidespejle m. varme");	
		if(equip != -1) { singleCarArray['sideMirrorElWarm'] = "Ja"; } else { singleCarArray['sideMirrorElWarm'] = "-"; }
		
		equip = data.search("Fartpilot");	
		if(equip != -1) { singleCarArray['speedPilot'] = "Ja"; } else { singleCarArray['speedPilot'] = "-"; }
		
		equip = data.search("Fartpilot, adaptiv");	
		if(equip != -1) { singleCarArray['speedPilotAdap'] = "Ja"; } else { singleCarArray['speedPilotAdap'] = "-"; }
		
		equip = data.search("Fjernlysassistent");	
		if(equip != -1) { singleCarArray['lightAssist'] = "Ja"; } else { singleCarArray['lightAssist'] = "-"; }
		
		equip = data.search("Fuld LED forlygter");	
		if(equip != -1) { singleCarArray['ledFront'] = "Ja"; } else { singleCarArray['ledFront'] = "-"; }
		
		equip = data.search("Head-up display");	
		if(equip != -1) { singleCarArray['headupDisplay'] = "Ja"; } else { singleCarArray['headupDisplay'] = "-"; }
		
		equip = data.search("Infocenter");	
		if(equip != -1) { singleCarArray['infocenter'] = "Ja"; } else { singleCarArray['infocenter'] = "-"; }
		
		equip = data.search("Internet");	
		if(equip != -1) { singleCarArray['internet'] = "Ja"; } else { singleCarArray['internet'] = "-"; }
		
		equip = data.search("Isofix");	
		if(equip != -1) { singleCarArray['isofix'] = "Ja"; } else { singleCarArray['isofix'] = "-"; }
		
		equip = data.search("Klimaanlæg, 4-zonet");	
		if(equip != -1) { singleCarArray['climate'] = "Ja"; } else { singleCarArray['climate'] = "-"; }
		
		equip = data.search("Kørecomputer");	
		if(equip != -1) { singleCarArray['driveComputer'] = "Ja"; } else { singleCarArray['driveComputer'] = "-"; }
		
		equip = data.search("Kurvelys");	
		if(equip != -1) { singleCarArray['curveLight'] = "Ja"; } else { singleCarArray['curveLight'] = "-"; }
		
		equip = data.search("Læderrat");	
		if(equip != -1) { singleCarArray['leatherWheel'] = "Ja"; } else { singleCarArray['leatherWheel'] = "-"; }
		
		equip = data.search("LED Kørelys");	
		if(equip != -1) { singleCarArray['ledDriveLight'] = "Ja"; } else { singleCarArray['ledDriveLight'] = "-"; }
		
		equip = data.search("Lygtevasker");	
		if(equip != -1) { singleCarArray['lightWashing'] = "Ja"; } else { singleCarArray['lightWashing'] = "-"; }
		
		equip = data.search("Musikstreaming via bluetooth");	
		if(equip != -1) { singleCarArray['bluetoothMusic'] = "Ja"; } else { singleCarArray['bluetoothMusic'] = "-"; }
		
		equip = data.search("Navigation");	
		if(equip != -1) { singleCarArray['navigation'] = "Ja"; } else { singleCarArray['navigation'] = "-"; }
		
		equip = data.search("Nøglefri betjening");	
		if(equip != -1) { singleCarArray['keylessRemote'] = "Ja"; } else { singleCarArray['keylessRemote'] = "-"; }
		
		equip = data.search("Panoramatag");	
		if(equip != -1) { singleCarArray['panoramaRoof'] = "Ja"; } else { singleCarArray['panoramaRoof'] = "-"; }
		
		equip = data.search("Parkeringssensor (bag)");	
		if(equip != -1) { singleCarArray['parkSensorBack'] = "Ja"; } else { singleCarArray['parkSensorBack'] = "-"; }
		
		equip = data.search("Parkeringssensor (for)");	
		if(equip != -1) { singleCarArray['parkSensorFront'] = "Ja"; } else { singleCarArray['parkSensorFront'] = "-"; }
		
		equip = data.search("Regnsensor");	
		if(equip != -1) { singleCarArray['rainSensor'] = "Ja"; } else { singleCarArray['rainSensor'] = "-"; }
		
		equip = data.search("Sædebetræk, dellæder");	
		if(equip != -1) { singleCarArray['seatCover'] = "Ja"; } else { singleCarArray['seatCover'] = "-"; }
		
		equip = data.search("Sædebetræk, læder");	
		if(equip != -1) { singleCarArray['seatCoverLeather'] = "Ja"; } else { singleCarArray['seatCoverLeather'] = "-"; }
		
		equip = data.search("Sædevarme");	
		if(equip != -1) { singleCarArray['seatWarm'] = "Ja"; } else { singleCarArray['seatWarm'] = "-"; }
		
		equip = data.search("SD kortlæser");	
		if(equip != -1) { singleCarArray['sdMap'] = "Ja"; } else { singleCarArray['sdMap'] = "-"; }
		
		equip = data.search("Servo");	
		if(equip != -1) { singleCarArray['servo'] = "Ja"; } else { singleCarArray['servo'] = "-"; }
		
		equip = data.search("Service ok");	
		if(equip != -1) { singleCarArray['okService'] = "Ja"; } else { singleCarArray['okService'] = "-"; }
		
		equip = data.search("Skiltegenkendelse");	
		if(equip != -1) { singleCarArray['signRecognition'] = "Ja"; } else { singleCarArray['signRecognition'] = "-"; }
		
		equip = data.search("Soltag, elektrisk");	
		if(equip != -1) { singleCarArray['sunRoofElec'] = "Ja"; } else { singleCarArray['sunRoofElec'] = "-"; }
		
		equip = data.search("Soltag, manuelt");	
		if(equip != -1) { singleCarArray['sunRoofManual'] = "Ja"; } else { singleCarArray['sunRoofManual'] = "-"; }
		
		equip = data.search("Splitbagsæde");	
		if(equip != -1) { singleCarArray['splitBackseat'] = "Ja"; } else { singleCarArray['splitBackseat'] = "-"; }
		
		equip = data.search("Sportssæder");	
		if(equip != -1) { singleCarArray['sportSeat'] = "Ja"; } else { singleCarArray['sportSeat'] = "-"; }
		
		equip = data.search("Startspærre");	
		if(equip != -1) { singleCarArray['immobilizer'] = "Ja"; } else { singleCarArray['immobilizer'] = "-"; }
		
		equip = data.search("Svingbart træk (elektrisk)");	
		if(equip != -1) { singleCarArray['swingDrawElec'] = "Ja"; } else { singleCarArray['swingDrawElec'] = "-"; }
		
		equip = data.search("Svingbart træk (manuelt)");	
		if(equip != -1) { singleCarArray['swingDrawManual'] = "Ja"; } else { singleCarArray['swingDrawManual'] = "-"; }
		
		equip = data.search("Tågelygter");	
		if(equip != -1) { singleCarArray['fogLight'] = "Ja"; } else { singleCarArray['fogLight'] = "-"; }
		
		equip = data.search("Tagræling");	
		if(equip != -1) { singleCarArray['roofRails'] = "Ja"; } else { singleCarArray['roofRails'] = "-"; }
		
		equip = data.search("Trådløs mobilopladning");	
		if(equip != -1) { singleCarArray['wirelessMobile'] = "Ja"; } else { singleCarArray['wirelessMobile'] = "-"; }
		
		equip = data.search("Træthedsregistrering");	
		if(equip != -1) { singleCarArray['fatigue'] = "Ja"; } else { singleCarArray['fatigue'] = "-"; }
		
		equip = data.search("Undervogn, sænket");	
		if(equip != -1) { singleCarArray['undercarriage'] = "Ja"; } else { singleCarArray['undercarriage'] = "-"; }
		
		equip = data.search("USB tilslutning");	
		if(equip != -1) { singleCarArray['usbAdding'] = "Ja"; } else { singleCarArray['usbAdding'] = "-"; }
		
		equip = data.search("Vognbaneassistent");	
		if(equip != -1) { singleCarArray['laneAssist'] = "Ja"; } else { singleCarArray['laneAssist'] = "-"; }
		
		equip = data.search("Xenonlygter");	
		if(equip != -1) { singleCarArray['xenonLight'] = "Ja"; } else { singleCarArray['xenonLight'] = "-"; }
		
	}









</script>