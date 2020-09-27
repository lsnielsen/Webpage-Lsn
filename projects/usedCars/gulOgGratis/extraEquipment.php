

<script>


	function setExtraGogEquipment(data)
	{
		//console.log(data);
		equip = data.search(/abs/);	
		if(equip != -1) { gogAbsBreaks = "Ja"; } else { gogAbsBreaks = "-"; }
		
		equip = data.search("alufælge");	
		if(equip != -1) { gogAlloyWheels = "Ja"; } else { gogAlloyWheels = "-"; }
		
		equip = data.search("android auto");	
		if(equip != -1) { gogAutoAndroid = "Ja"; } else { gogAutoAndroid = "-"; }
		
		equip = data.search("anhængertræk");	
		if(equip != -1) { gogTowbar = "Ja"; } else { gogTowbar = "-"; }
		
		equip = data.search("anhængertræk, aftagl.");	
		if(equip != -1) { gogTowbarDetachable = "Ja"; } else { gogTowbarDetachable = "-"; }
		
		equip = data.search("antispin");	
		//console.log("antispin: " + equip);
		if(equip != -1) { gogAntispin = "Ja"; } else { gogAntispin = "-"; }
		
		equip = data.search("apple carplay");	
		if(equip != -1) { gogCarplayApple = "Ja"; } else { gogCarplayApple = "-"; }
		
		equip = data.search("armlæn");	
		if(equip != -1) { gogArmRelax = "Ja"; } else { gogArmRelax = "-"; }
		
		equip = data.search("auto. nødbremse");	
		if(equip != -1) { gogAutoEmergencyBreak = "Ja"; } else { gogAutoEmergencyBreak = "-"; }
		
		equip = data.search("auto. parkering");	
		if(equip != -1) { gogAutoParking = "Ja"; } else { gogAutoParking = "-"; }
		
		equip = data.search("auto. start/stop");	
		if(equip != -1) { gogAutoStartStop = "Ja"; } else { gogAutoStartStop = "-"; }
		
		//equip = data.search("Automatgear");	
		//if(equip != -1) { autoGear = "Ja"; } else { autoGear = "-"; }
		
		equip = data.search("automatisk lys");	
		if(equip != -1) { gogAutoLight = "Ja"; } else { gogAutoLight = "-"; }
		
		equip = data.search("aux  tilslutning");	
		if(equip != -1) { gogAuxAdding = "Ja"; } else { gogAuxAdding = "-"; }
		
		equip = data.search("bakkamera");	
		if(equip != -1) { gogRearCamera = "Ja"; } else { gogRearCamera = "-"; }
		
		equip = data.search("bakspejl m. nedbl.");	
		if(equip != -1) { gogRearMirrorLessLight = "Ja"; } else { gogRearMirrorLessLight = "-"; }
		
		equip = data.search("bi-xenon");	
		if(equip != -1) { gogBiXenon = "Ja"; } else { gogBiXenon = "-"; }
		
		equip = data.search("blindvinkelassistent");	
		if(equip != -1) { gogBlindAngelassistent = "Ja"; } else { gogBlindAngelassistent = "-"; }
		
		equip = data.search("bluetooth");	
		if(equip != -1) { gogBluetooth = "Ja"; } else { gogBluetooth = "-"; }
		
		equip = data.search("brugtbilsattest");	
		if(equip != -1) { gogUsedCarAttest = "Ja"; } else { gogUsedCarAttest = "-"; }
		
		equip = data.search("centrallås fjernb.");	
		equipII = data.search("Fjernbetjent Centrallås");	
		if(equip != -1 || equipII != -1) { gogCentralLockRemote = "Ja"; } else { gogCentralLockRemote = "-"; }
		
		equip = data.search("dAB radio");	
		if(equip != -1) { gogDabRadio = "Ja"; } else { gogDabRadio = "-"; }
		
		equip = data.search("dæktryksmåler");	
		if(equip != -1) { gogwheelAirMeassure = "Ja"; } else { gogwheelAirMeassure = "-"; }
		
		equip = data.search("digitalt cockpit");	
		if(equip != -1) { gogCockpitDigital = "Ja"; } else { gogCockpitDigital = "-"; }
		
		equip = data.search("el indst. førersæde m. memory");	
		if(equip != -1) { gogFrontseatElInstall = "Ja"; } else { gogFrontseatElInstall = "-"; }
		
		equip = data.search("elektrisk kabinevarmer");	
		if(equip != -1) { gogCabinWarmEl = "Ja"; } else { gogCabinWarmEl = "-"; }
		
		equip = data.search("elektrisk parkeringsbremse");	
		if(equip != -1) { gogParkingBreakEl = "Ja"; } else { gogParkingBreakEl = "-"; }
		
		equip = data.search("elektriske komfortsæder");	
		if(equip != -1) { gogElectricComfortableSeats = "Ja"; } else { gogElectricComfortableSeats = "-"; }
		
		equip = data.search("elektronisk bagklap");	
		if(equip != -1) { gogElectricBackDoor = "Ja"; } else { gogElectricBackDoor = "-"; }
		
		equip = data.search("el-klapbare sidespejle m. varme");	
		if(equip != -1) { gogElectricSideMirrorWarm = "Ja"; } else { gogElectricSideMirrorWarm = "-"; }
		
		equip = data.search("elektriske vinduer");	
		if(equip != -1) { gogElectricWindowsTimesFour = "Ja"; } else { gogElectricWindowsTimesFour = "-"; }
		
		equip = data.match(/Fartpilot/i);	
		if(equip != -1) { gogSpeedPilot = "Ja"; } else { gogSpeedPilot = "-"; }
		
		equip = data.search("fartpilot, adaptiv");	
		if(equip != -1) { gogSpeedPilotAdaptive = "Ja"; } else { gogSpeedPilotAdaptive = "-"; }
		
		equip = data.search("fjernlysassistent");	
		if(equip != -1) { gogRemoteLightAssistant = "Ja"; } else { gogRemoteLightAssistant = "-"; }
		
		equip = data.search("fuld LED forlygter");	
		if(equip != -1) { gogCompleteLedFrontLight = "Ja"; } else { gogCompleteLedFrontLight = "-"; }
		
		equip = data.search("head-up display");	
		if(equip != -1) { gogHeadUpDisplay = "Ja"; } else { gogHeadUpDisplay = "-"; }
		
		equip = data.search("infocenter");	
		if(equip != -1) { gogInfoCenter = "Ja"; } else { gogInfoCenter = "-"; }
		
		equip = data.search("internet");	
		if(equip != -1) { gogInternet = "Ja"; } else { gogInternet = "-"; }
		
		equip = data.search("isofix");	
		if(equip != -1) { gogIsofix = "Ja"; } else { gogIsofix = "-"; }
		
		equip = data.search("klimaanlæg, 4-zonet");	
		if(equip != -1) { gogClimateCenterFourZone = "Ja"; } else { gogClimateCenterFourZone = "-"; }
		
		equip = data.search("kørecomputer");	
		if(equip != -1) { gogDrivingComputer = "Ja"; } else { gogDrivingComputer = "-"; }
		
		equip = data.search("kurvelys");	
		if(equip != -1) { gogCurvingLight = "Ja"; } else { gogCurvingLight = "-"; }
		
		equip = data.search("læderrat");	
		if(equip != -1) { gogLeatherWheel = "Ja"; } else { gogLeatherWheel = "-"; }
		
		equip = data.search("led Kørelys");	
		if(equip != -1) { gogLedDrivingLight = "Ja"; } else { gogLedDrivingLight = "-"; }
		
		equip = data.search("lygtevasker");	
		if(equip != -1) { gogLightWashers = "Ja"; } else { gogLightWashers = "-"; }
		
		equip = data.search("musikstreaming via bluetooth");	
		if(equip != -1) { gogMusicViaBluetooth = "Ja"; } else { gogMusicViaBluetooth = "-"; }
		
		equip = data.search("navigation");	
		if(equip != -1) { gogNavigation = "Ja"; } else { gogNavigation = "-"; }
		
		equip = data.search("nøglefri betjening");	
		if(equip != -1) { gogKeylessOperation = "Ja"; } else { gogKeylessOperation = "-"; }
		
		equip = data.search("panoramatag");	
		if(equip != -1) { gogPanoramaRoof = "Ja"; } else { gogPanoramaRoof = "-"; }
		
		equip = data.search("parkeringssensor (bag)");	
		if(equip != -1) { gogParkingSensorBack = "Ja"; } else { gogParkingSensorBack = "-"; }
		
		equip = data.search("parkeringssensor (for)");	
		if(equip != -1) { gogParkingSensorFront = "Ja"; } else { gogParkingSensorFront = "-"; }
		
		equip = data.search("regnsensor");	
		if(equip != -1) { gogRainSensor = "Ja"; } else { gogRainSensor = "-"; }
		
		equip = data.search("sædebetræk, dellæder");	
		if(equip != -1) { gogSeatCoversPartlyLeather = "Ja"; } else { gogSeatCoversPartlyLeather = "-"; }
		
		equip = data.search("sædebetræk, læder");	
		if(equip != -1) { gogSeatCoverLeather = "Ja"; } else { gogSeatCoverLeather = "-"; }
		
		equip = data.search("sædevarme");	
		if(equip != -1) { gogSeatWarming = "Ja"; } else { gogSeatWarming = "-"; }
		
		equip = data.search("sd kortlæser");	
		if(equip != -1) { gogSdMapReader = "Ja"; } else { gogSdMapReader = "-"; }
		
		equip = data.search("service ok");	
		if(equip != -1) { gogOkService = "Ja"; } else { gogOkService = "-"; }
		
		equip = data.search("servo");	
		if(equip != -1) { gogServo = "Ja"; } else { gogServo = "-"; }
		
		equip = data.search("skiltegenkendelse");	
		if(equip != -1) { gogSignRecognition = "Ja"; } else { gogSignRecognition = "-"; }
		
		equip = data.search("soltag, elektrisk");	
		if(equip != -1) { gogSunRoofElectric = "Ja"; } else { gogSunRoofElectric = "-"; }
		
		equip = data.search("soltag, manuelt");	
		if(equip != -1) { gogSunRoofManual = "Ja"; } else { gogSunRoofManual = "-"; }
		
		equip = data.search("splitbagsæde");	
		if(equip != -1) { gogBackSeatSplit = "Ja"; } else { gogBackSeatSplit = "-"; }
		
		equip = data.search("sportssæder");	
		if(equip != -1) { gogSportSeats = "Ja"; } else { gogSportSeats = "-"; }
		
		equip = data.search("startspærre");	
		if(equip != -1) { gogStartingLight = "Ja"; } else { gogStartingLight = "-"; }
		
		equip = data.search("svingbart træk (elektrisk)");	
		if(equip != -1) { gogPivotableTractionElectric = "Ja"; } else { gogPivotableTractionElectric = "-"; }
		
		equip = data.search("svingbart træk (manuelt)");	
		if(equip != -1) { gogPivotableTractionManual = "Ja"; } else { gogPivotableTractionManual = "-"; }
		
		equip = data.search("tågelygter");	
		if(equip != -1) { gogFogLights = "Ja"; } else { gogFogLights = "-"; }
		
		equip = data.search("tagræling");	
		if(equip != -1) { gogRoofRails = "Ja"; } else { gogRoofRails = "-"; }
		
		equip = data.search("trådløs mobilopladning");	
		if(equip != -1) { gogwirelessMobileRecharge = "Ja"; } else { gogwirelessMobileRecharge = "-"; }
		
		equip = data.search("træthedsregistrering");	
		if(equip != -1) { gogRegistrationOfTired = "Ja"; } else { gogRegistrationOfTired = "-"; }
		
		equip = data.search("undervogn, sænket");	
		if(equip != -1) { gogUnderCarLowered = "Ja"; } else { gogUnderCarLowered = "-"; }
		
		equip = data.search("usb tilslutning");	
		if(equip != -1) { gogUsbConnection = "Ja"; } else { gogUsbConnection = "-"; }
		
		equip = data.search("vognbaneassistent");	
		if(equip != -1) { gogLaneAssistant = "Ja"; } else { gogLaneAssistant = "-"; }
		
		equip = data.search("xenonlygter");	
		if(equip != -1) { gogxenonLights = "Ja"; } else { gogxenonLights = "-"; }
		
	}









</script>