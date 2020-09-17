

<script>


	function setExtraEquipment(data)
	{
		equip = data.search("ABS-bremser");	
		if(equip != -1) { absBreaks = "Ja"; } else { absBreaks = "-"; }
		
		equip = data.search("Alufælge");	
		if(equip != -1) { alloyWheels = "Ja"; } else { alloyWheels = "-"; }
		
		equip = data.search("Android auto");	
		if(equip != -1) { autoAndroid = "Ja"; } else { autoAndroid = "-"; }
		
		equip = data.search("Anhængertræk");	
		if(equip != -1) { towbar = "Ja"; } else { towbar = "-"; }
		
		equip = data.search("Anhængertræk, aftagl.");	
		if(equip != -1) { towbarDetachable = "Ja"; } else { towbarDetachable = "-"; }
		
		equip = data.search("Antispin");	
		if(equip != -1) { antispin = "Ja"; } else { antispin = "-"; }
		
		equip = data.search("Apple carplay");	
		if(equip != -1) { carplayApple = "Ja"; } else { carplayApple = "-"; }
		
		equip = data.search("Armlæn");	
		if(equip != -1) { armRelax = "Ja"; } else { armRelax = "-"; }
		
		equip = data.search("Auto. nødbremse");	
		if(equip != -1) { autoEmergencyBreak = "Ja"; } else { autoEmergencyBreak = "-"; }
		
		equip = data.search("Auto. parkering");	
		if(equip != -1) { autoParking = "Ja"; } else { autoParking = "-"; }
		
		equip = data.search("Auto. start/stop");	
		if(equip != -1) { autoStartStop = "Ja"; } else { autoStartStop = "-"; }
		
		//equip = data.search("Automatgear");	
		//if(equip != -1) { autoGear = "Ja"; } else { autoGear = "-"; }
		
		equip = data.search("Automatisk lys");	
		if(equip != -1) { autoLight = "Ja"; } else { autoLight = "-"; }
		
		equip = data.search("AUX tilslutning");	
		if(equip != -1) { auxAdding = "Ja"; } else { auxAdding = "-"; }
		
		equip = data.search("Bakkamera");	
		if(equip != -1) { rearCamera = "Ja"; } else { rearCamera = "-"; }
		
		equip = data.search("Bakspejl m. nedbl.");	
		if(equip != -1) { rearMirrorLessLight = "Ja"; } else { rearMirrorLessLight = "-"; }
		
		equip = data.search("Bi-xenon");	
		if(equip != -1) { biXenon = "Ja"; } else { biXenon = "-"; }
		
		equip = data.search("Blindvinkelassistent");	
		if(equip != -1) { blindAngelassistent = "Ja"; } else { blindAngelassistent = "-"; }
		
		equip = data.search("Bluetooth");	
		if(equip != -1) { bluetooth = "Ja"; } else { bluetooth = "-"; }
		
		equip = data.search("Brugtbilsattest");	
		if(equip != -1) { usedCarAttest = "Ja"; } else { usedCarAttest = "-"; }
		
		equip = data.search("Centrallås fjernb.");	
		if(equip != -1) { centralLockRemote = "Ja"; } else { centralLockRemote = "-"; }
		
		equip = data.search("DAB radio");	
		if(equip != -1) { dabRadio = "Ja"; } else { dabRadio = "-"; }
		
		equip = data.search("Dæktryksmåler");	
		if(equip != -1) { wheelAirMeassure = "Ja"; } else { wheelAirMeassure = "-"; }
		
		equip = data.search("Digitalt cockpit");	
		if(equip != -1) { cockpitDigital = "Ja"; } else { cockpitDigital = "-"; }
		
		equip = data.search("El indst. førersæde m. memory");	
		if(equip != -1) { frontseatElInstall = "Ja"; } else { frontseatElInstall = "-"; }
		
		equip = data.search("Elektrisk kabinevarmer");	
		if(equip != -1) { cabinWarmEl = "Ja"; } else { cabinWarmEl = "-"; }
		
		equip = data.search("Elektrisk parkeringsbremse");	
		if(equip != -1) { parkingBreakEl = "Ja"; } else { parkingBreakEl = "-"; }
		
		equip = data.search("Elektriske komfortsæder");	
		if(equip != -1) { electricComfortableSeats = "Ja"; } else { electricComfortableSeats = "-"; }
		
		equip = data.search("Elektronisk bagklap");	
		if(equip != -1) { electricBackDoor = "Ja"; } else { electricBackDoor = "-"; }
		
		equip = data.search("El-klapbare sidespejle m. varme");	
		if(equip != -1) { electricSideMirrorWarm = "Ja"; } else { electricSideMirrorWarm = "-"; }
		
		equip = data.search("Elektriske vinduer");	
		if(equip != -1) { electricWindowsTimesFour = "Ja"; } else { electricWindowsTimesFour = "-"; }
		
		equip = data.search("Fartpilot");	
		if(equip != -1) { speedPilot = "Ja"; } else { speedPilot = "-"; }
		
		equip = data.search("Fartpilot, adaptiv");	
		if(equip != -1) { speedPilotAdaptive = "Ja"; } else { speedPilotAdaptive = "-"; }
		
		equip = data.search("Fjernlysassistent");	
		if(equip != -1) { remoteLightAssistant = "Ja"; } else { remoteLightAssistant = "-"; }
		
		equip = data.search("Fuld LED forlygter");	
		if(equip != -1) { completeLedFrontLight = "Ja"; } else { completeLedFrontLight = "-"; }
		
		equip = data.search("Head-up display");	
		if(equip != -1) { headUpDisplay = "Ja"; } else { headUpDisplay = "-"; }
		
		equip = data.search("Infocenter");	
		if(equip != -1) { infoCenter = "Ja"; } else { infoCenter = "-"; }
		
		equip = data.search("Internet");	
		if(equip != -1) { internet = "Ja"; } else { internet = "-"; }
		
		equip = data.search("Isofix");	
		if(equip != -1) { isofix = "Ja"; } else { isofix = "-"; }
		
		equip = data.search("Klimaanlæg, 4-zonet");	
		if(equip != -1) { climateCenterFourZone = "Ja"; } else { climateCenterFourZone = "-"; }
		
		equip = data.search("Kørecomputer");	
		if(equip != -1) { drivingComputer = "Ja"; } else { drivingComputer = "-"; }
		
		equip = data.search("Kurvelys");	
		if(equip != -1) { curvingLight = "Ja"; } else { curvingLight = "-"; }
		
		equip = data.search("Læderrat");	
		if(equip != -1) { leatherWheel = "Ja"; } else { leatherWheel = "-"; }
		
		equip = data.search("LED Kørelys");	
		if(equip != -1) { ledDrivingLight = "Ja"; } else { ledDrivingLight = "-"; }
		
		equip = data.search("Lygtevasker");	
		if(equip != -1) { lightWashers = "Ja"; } else { lightWashers = "-"; }
		
		equip = data.search("Musikstreaming via bluetooth");	
		if(equip != -1) { musicViaBluetooth = "Ja"; } else { musicViaBluetooth = "-"; }
		
		equip = data.search("Navigation");	
		if(equip != -1) { navigation = "Ja"; } else { navigation = "-"; }
		
		equip = data.search("Nøglefri betjening");	
		if(equip != -1) { keylessOperation = "Ja"; } else { keylessOperation = "-"; }
		
		equip = data.search("Panoramatag");	
		if(equip != -1) { panoramaRoof = "Ja"; } else { panoramaRoof = "-"; }
		
		equip = data.search("Parkeringssensor (bag)");	
		if(equip != -1) { parkingSensorBack = "Ja"; } else { parkingSensorBack = "-"; }
		
		equip = data.search("Parkeringssensor (for)");	
		if(equip != -1) { parkingSensorFront = "Ja"; } else { parkingSensorFront = "-"; }
		
		equip = data.search("Regnsensor");	
		if(equip != -1) { rainSensor = "Ja"; } else { rainSensor = "-"; }
		
		equip = data.search("Sædebetræk, dellæder");	
		if(equip != -1) { seatCoversPartlyLeather = "Ja"; } else { seatCoversPartlyLeather = "-"; }
		
		equip = data.search("Sædebetræk, læder");	
		if(equip != -1) { seatCoverLeather = "Ja"; } else { seatCoverLeather = "-"; }
		
		equip = data.search("Sædevarme");	
		if(equip != -1) { seatWarming = "Ja"; } else { seatWarming = "-"; }
		
		equip = data.search("SD kortlæser");	
		if(equip != -1) { sdMapReader = "Ja"; } else { sdMapReader = "-"; }
		
		equip = data.search("Service ok");	
		if(equip != -1) { okService = "Ja"; } else { okService = "-"; }
		
		equip = data.search("Servo");	
		if(equip != -1) { servo = "Ja"; } else { servo = "-"; }
		
		equip = data.search("Skiltegenkendelse");	
		if(equip != -1) { signRecognition = "Ja"; } else { signRecognition = "-"; }
		
		equip = data.search("Soltag, elektrisk");	
		if(equip != -1) { sunRoofElectric = "Ja"; } else { sunRoofElectric = "-"; }
		
		equip = data.search("Soltag, manuelt");	
		if(equip != -1) { sunRoofManual = "Ja"; } else { sunRoofManual = "-"; }
		
		equip = data.search("Splitbagsæde");	
		if(equip != -1) { backSeatSplit = "Ja"; } else { backSeatSplit = "-"; }
		
		equip = data.search("Sportssæder");	
		if(equip != -1) { sportSeats = "Ja"; } else { sportSeats = "-"; }
		
		equip = data.search("Startspærre");	
		if(equip != -1) { startingLight = "Ja"; } else { startingLight = "-"; }
		
		equip = data.search("Svingbart træk (elektrisk)");	
		if(equip != -1) { pivotableTractionElectric = "Ja"; } else { pivotableTractionElectric = "-"; }
		
		equip = data.search("Svingbart træk (manuelt)");	
		if(equip != -1) { pivotableTractionManual = "Ja"; } else { pivotableTractionManual = "-"; }
		
		equip = data.search("Tågelygter");	
		if(equip != -1) { fogLights = "Ja"; } else { fogLights = "-"; }
		
		equip = data.search("Tagræling");	
		if(equip != -1) { roofRails = "Ja"; } else { roofRails = "-"; }
		
		equip = data.search("Trådløs mobilopladning");	
		if(equip != -1) { wirelessMobileRecharge = "Ja"; } else { wirelessMobileRecharge = "-"; }
		
		equip = data.search("Træthedsregistrering");	
		if(equip != -1) { registrationOfTired = "Ja"; } else { registrationOfTired = "-"; }
		
		equip = data.search("Undervogn, sænket");	
		if(equip != -1) { underCarLowered = "Ja"; } else { underCarLowered = "-"; }
		
		equip = data.search("USB tilslutning");	
		if(equip != -1) { usbConnection = "Ja"; } else { usbConnection = "-"; }
		
		equip = data.search("Vognbaneassistent");	
		if(equip != -1) { laneAssistant = "Ja"; } else { laneAssistant = "-"; }
		
		equip = data.search("Xenonlygter");	
		if(equip != -1) { xenonLights = "Ja"; } else { xenonLights = "-"; }
		
	}









</script>