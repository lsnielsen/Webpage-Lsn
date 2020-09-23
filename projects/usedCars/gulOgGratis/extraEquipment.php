

<script>


	function setExtraGogEquipment(data)
	{
		//console.log(data);
		equip = data.search("ABS-bremser");	
		if(equip != -1) { gogAbsBreaks = "Ja"; } else { gogAbsBreaks = "-"; }
		
		equip = data.search("Aluf&#230;lge");	
		if(equip != -1) { gogAlloyWheels = "Ja"; } else { gogAlloyWheels = "-"; }
		
		equip = data.search("Android auto");	
		if(equip != -1) { gogAutoAndroid = "Ja"; } else { gogAutoAndroid = "-"; }
		
		equip = data.search("Anh&#230;ngertr&#230;k");	
		if(equip != -1) { gogTowbar = "Ja"; } else { gogTowbar = "-"; }
		
		equip = data.search("Anh&#230;ngertr&#230;k, aftagl.");	
		if(equip != -1) { gogTowbarDetachable = "Ja"; } else { gogTowbarDetachable = "-"; }
		
		equip = data.search("Antispin");	
		//console.log("antispin: " + equip);
		if(equip != -1) { gogAntispin = "Ja"; } else { gogAntispin = "-"; }
		
		equip = data.search("Apple carplay");	
		if(equip != -1) { gogCarplayApple = "Ja"; } else { gogCarplayApple = "-"; }
		
		equip = data.search("Arml&#230;n");	
		if(equip != -1) { gogArmRelax = "Ja"; } else { gogArmRelax = "-"; }
		
		equip = data.search("Auto. n&#248;dbremse");	
		if(equip != -1) { gogAutoEmergencyBreak = "Ja"; } else { gogAutoEmergencyBreak = "-"; }
		
		equip = data.search("Auto. parkering");	
		if(equip != -1) { gogAutoParking = "Ja"; } else { gogAutoParking = "-"; }
		
		equip = data.search("Auto. start/stop");	
		if(equip != -1) { gogAutoStartStop = "Ja"; } else { gogAutoStartStop = "-"; }
		
		//equip = data.search("Automatgear");	
		//if(equip != -1) { autoGear = "Ja"; } else { autoGear = "-"; }
		
		equip = data.search("Automatisk lys");	
		if(equip != -1) { gogAutoLight = "Ja"; } else { gogAutoLight = "-"; }
		
		equip = data.search("AUX tilslutning");	
		if(equip != -1) { gogAuxAdding = "Ja"; } else { gogAuxAdding = "-"; }
		
		equip = data.search("Bakkamera");	
		if(equip != -1) { gogRearCamera = "Ja"; } else { gogRearCamera = "-"; }
		
		equip = data.search("Bakspejl m. nedbl.");	
		if(equip != -1) { gogRearMirrorLessLight = "Ja"; } else { gogRearMirrorLessLight = "-"; }
		
		equip = data.search("Bi-xenon");	
		if(equip != -1) { gogBiXenon = "Ja"; } else { gogBiXenon = "-"; }
		
		equip = data.search("Blindvinkelassistent");	
		if(equip != -1) { gogBlindAngelassistent = "Ja"; } else { gogBlindAngelassistent = "-"; }
		
		equip = data.search("Bluetooth");	
		if(equip != -1) { gogBluetooth = "Ja"; } else { gogBluetooth = "-"; }
		
		equip = data.search("Brugtbilsattest");	
		if(equip != -1) { gogUsedCarAttest = "Ja"; } else { gogUsedCarAttest = "-"; }
		
		equip = data.search("Centrall&#229;s fjernb.");	
		equipII = data.search("Fjernbetjent Centrall&#229;s");	
		if(equip != -1 || equipII != -1) { gogCentralLockRemote = "Ja"; } else { gogCentralLockRemote = "-"; }
		
		equip = data.search("DAB radio");	
		if(equip != -1) { gogDabRadio = "Ja"; } else { gogDabRadio = "-"; }
		
		equip = data.search("D&#230;ktryksm&#229;ler");	
		if(equip != -1) { gogwheelAirMeassure = "Ja"; } else { gogwheelAirMeassure = "-"; }
		
		equip = data.search("Digitalt cockpit");	
		if(equip != -1) { gogCockpitDigital = "Ja"; } else { gogCockpitDigital = "-"; }
		
		equip = data.search("El indst. f&#248;rers&#230;de m. memory");	
		if(equip != -1) { gogFrontseatElInstall = "Ja"; } else { gogFrontseatElInstall = "-"; }
		
		equip = data.search("Elektrisk kabinevarmer");	
		if(equip != -1) { gogCabinWarmEl = "Ja"; } else { gogCabinWarmEl = "-"; }
		
		equip = data.search("Elektrisk parkeringsbremse");	
		if(equip != -1) { gogParkingBreakEl = "Ja"; } else { gogParkingBreakEl = "-"; }
		
		equip = data.search("Elektriske komforts&#230;der");	
		if(equip != -1) { gogElectricComfortableSeats = "Ja"; } else { gogElectricComfortableSeats = "-"; }
		
		equip = data.search("Elektronisk bagklap");	
		if(equip != -1) { gogElectricBackDoor = "Ja"; } else { gogElectricBackDoor = "-"; }
		
		equip = data.search("El-klapbare sidespejle m. varme");	
		if(equip != -1) { gogElectricSideMirrorWarm = "Ja"; } else { gogElectricSideMirrorWarm = "-"; }
		
		equip = data.search("Elektriske vinduer");	
		if(equip != -1) { gogElectricWindowsTimesFour = "Ja"; } else { gogElectricWindowsTimesFour = "-"; }
		
		equip = data.search("Fartpilot");	
		if(equip != -1) { gogSpeedPilot = "Ja"; } else { gogSpeedPilot = "-"; }
		
		equip = data.search("Fartpilot, adaptiv");	
		if(equip != -1) { gogSpeedPilotAdaptive = "Ja"; } else { gogSpeedPilotAdaptive = "-"; }
		
		equip = data.search("Fjernlysassistent");	
		if(equip != -1) { gogRemoteLightAssistant = "Ja"; } else { gogRemoteLightAssistant = "-"; }
		
		equip = data.search("Fuld LED forlygter");	
		if(equip != -1) { gogCompleteLedFrontLight = "Ja"; } else { gogCompleteLedFrontLight = "-"; }
		
		equip = data.search("Head-up display");	
		if(equip != -1) { gogHeadUpDisplay = "Ja"; } else { gogHeadUpDisplay = "-"; }
		
		equip = data.search("Infocenter");	
		if(equip != -1) { gogInfoCenter = "Ja"; } else { gogInfoCenter = "-"; }
		
		equip = data.search("Internet");	
		if(equip != -1) { gogInternet = "Ja"; } else { gogInternet = "-"; }
		
		equip = data.search("Isofix");	
		if(equip != -1) { gogIsofix = "Ja"; } else { gogIsofix = "-"; }
		
		equip = data.search("Klimaanl&#230;g, 4-zonet");	
		if(equip != -1) { gogClimateCenterFourZone = "Ja"; } else { gogClimateCenterFourZone = "-"; }
		
		equip = data.search("K&#248;recomputer");	
		if(equip != -1) { gogDrivingComputer = "Ja"; } else { gogDrivingComputer = "-"; }
		
		equip = data.search("Kurvelys");	
		if(equip != -1) { gogCurvingLight = "Ja"; } else { gogCurvingLight = "-"; }
		
		equip = data.search("L&#230;derrat");	
		if(equip != -1) { gogLeatherWheel = "Ja"; } else { gogLeatherWheel = "-"; }
		
		equip = data.search("LED K&#248;relys");	
		if(equip != -1) { gogLedDrivingLight = "Ja"; } else { gogLedDrivingLight = "-"; }
		
		equip = data.search("Lygtevasker");	
		if(equip != -1) { gogLightWashers = "Ja"; } else { gogLightWashers = "-"; }
		
		equip = data.search("Musikstreaming via bluetooth");	
		if(equip != -1) { gogMusicViaBluetooth = "Ja"; } else { gogMusicViaBluetooth = "-"; }
		
		equip = data.search("Navigation");	
		if(equip != -1) { gogNavigation = "Ja"; } else { gogNavigation = "-"; }
		
		equip = data.search("N&#248;glefri betjening");	
		if(equip != -1) { gogKeylessOperation = "Ja"; } else { gogKeylessOperation = "-"; }
		
		equip = data.search("Panoramatag");	
		if(equip != -1) { gogPanoramaRoof = "Ja"; } else { gogPanoramaRoof = "-"; }
		
		equip = data.search("Parkeringssensor (bag)");	
		if(equip != -1) { gogParkingSensorBack = "Ja"; } else { gogParkingSensorBack = "-"; }
		
		equip = data.search("Parkeringssensor (for)");	
		if(equip != -1) { gogParkingSensorFront = "Ja"; } else { gogParkingSensorFront = "-"; }
		
		equip = data.search("Regnsensor");	
		if(equip != -1) { gogRainSensor = "Ja"; } else { gogRainSensor = "-"; }
		
		equip = data.search("S&#230;debetr&#230;k, dell&#230;der");	
		if(equip != -1) { gogSeatCoversPartlyLeather = "Ja"; } else { gogSeatCoversPartlyLeather = "-"; }
		
		equip = data.search("S&#230;debetr&#230;k, l&#230;der");	
		if(equip != -1) { gogSeatCoverLeather = "Ja"; } else { gogSeatCoverLeather = "-"; }
		
		equip = data.search("S&#230;devarme");	
		if(equip != -1) { gogSeatWarming = "Ja"; } else { gogSeatWarming = "-"; }
		
		equip = data.search("SD kortl&#230;ser");	
		if(equip != -1) { gogSdMapReader = "Ja"; } else { gogSdMapReader = "-"; }
		
		equip = data.search("Service ok");	
		if(equip != -1) { gogOkService = "Ja"; } else { gogOkService = "-"; }
		
		equip = data.search("Servo");	
		if(equip != -1) { gogServo = "Ja"; } else { gogServo = "-"; }
		
		equip = data.search("Skiltegenkendelse");	
		if(equip != -1) { gogSignRecognition = "Ja"; } else { gogSignRecognition = "-"; }
		
		equip = data.search("Soltag, elektrisk");	
		if(equip != -1) { gogSunRoofElectric = "Ja"; } else { gogSunRoofElectric = "-"; }
		
		equip = data.search("Soltag, manuelt");	
		if(equip != -1) { gogSunRoofManual = "Ja"; } else { gogSunRoofManual = "-"; }
		
		equip = data.search("Splitbags&#230;de");	
		if(equip != -1) { gogBackSeatSplit = "Ja"; } else { gogBackSeatSplit = "-"; }
		
		equip = data.search("Sportss&#230;der");	
		if(equip != -1) { gogSportSeats = "Ja"; } else { gogSportSeats = "-"; }
		
		equip = data.search("Startsp&#230;rre");	
		if(equip != -1) { gogStartingLight = "Ja"; } else { gogStartingLight = "-"; }
		
		equip = data.search("Svingbart tr&#230;k (elektrisk)");	
		if(equip != -1) { gogPivotableTractionElectric = "Ja"; } else { gogPivotableTractionElectric = "-"; }
		
		equip = data.search("Svingbart tr&#230;k (manuelt)");	
		if(equip != -1) { gogPivotableTractionManual = "Ja"; } else { gogPivotableTractionManual = "-"; }
		
		equip = data.search("T&#229;gelygter");	
		if(equip != -1) { gogFogLights = "Ja"; } else { gogFogLights = "-"; }
		
		equip = data.search("Tagr&#230;ling");	
		if(equip != -1) { gogRoofRails = "Ja"; } else { gogRoofRails = "-"; }
		
		equip = data.search("Tr&#229;dl&#248;s mobilopladning");	
		if(equip != -1) { gogwirelessMobileRecharge = "Ja"; } else { gogwirelessMobileRecharge = "-"; }
		
		equip = data.search("Tr&#230;thedsregistrering");	
		if(equip != -1) { gogRegistrationOfTired = "Ja"; } else { gogRegistrationOfTired = "-"; }
		
		equip = data.search("Undervogn, s&#230;nket");	
		if(equip != -1) { gogUnderCarLowered = "Ja"; } else { gogUnderCarLowered = "-"; }
		
		equip = data.search("USB tilslutning");	
		if(equip != -1) { gogUsbConnection = "Ja"; } else { gogUsbConnection = "-"; }
		
		equip = data.search("Vognbaneassistent");	
		if(equip != -1) { gogLaneAssistant = "Ja"; } else { gogLaneAssistant = "-"; }
		
		equip = data.search("Xenonlygter");	
		if(equip != -1) { gogxenonLights = "Ja"; } else { gogxenonLights = "-"; }
		
	}









</script>