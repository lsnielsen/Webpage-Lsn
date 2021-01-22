

<script>


	function setExtraEquipment(data)
	{
		absEquip = data.search("ABS-bremser");	
		if(absEquip != -1) { absBreaks = "Ja"; } else { absBreaks = "-"; }
		
		aluEquip = data.search("Aluf&#230;lge");	
		if(aluEquip != -1) { alloyWheels = "Ja"; } else { alloyWheels = "-"; }
		
		androidEquip = data.search("Android auto");	
		if(androidEquip != -1) { autoAndroid = "Ja"; } else { autoAndroid = "-"; }
		
		towEquip = data.search("Anh&#230;ngertr&#230;k");	
		if(towEquip != -1) { towbar = "Ja"; } else { towbar = "-"; }
		
		towDetachEquip = data.search("Anh&#230;ngertr&#230;k, aftagl.");	
		if(towDetachEquip != -1) { towbarDetachable = "Ja"; } else { towbarDetachable = "-"; }
		
		spinEquip = data.search("Antispin");
		if(spinEquip != -1) { antispin = "Ja"; } else { antispin = "-"; }
		
		appleEquip = data.search("Apple carplay");	
		if(appleEquip != -1) { carplayApple = "Ja"; } else { carplayApple = "-"; }
		
		armEquip = data.search("Arml&#230;n");	
		if(armEquip != -1) { armRelax = "Ja"; } else { armRelax = "-"; }
		
		breakEquip = data.search("Auto. n&#248;dbremse");	
		if(breakEquip != -1) { autoEmergencyBreak = "Ja"; } else { autoEmergencyBreak = "-"; }
		
		parkEquip = data.search("Auto. parkering");	
		if(parkEquip != -1) { autoParking = "Ja"; } else { autoParking = "-"; }
		
		autoEquip = data.search("Auto. start/stop");	
		if(autoEquip != -1) { autoStartStop = "Ja"; } else { autoStartStop = "-"; }
		
		lightEquip = data.search("Automatisk lys");	
		if(lightEquip != -1) { autoLight = "Ja"; } else { autoLight = "-"; }
		
		auxEquip = data.search("AUX tilslutning");	
		if(auxEquip != -1) { auxAdding = "Ja"; } else { auxAdding = "-"; }
		
		rearEquip = data.search("Bakkamera");	
		if(rearEquip != -1) { rearCamera = "Ja"; } else { rearCamera = "-"; }
		
		rearMirrorEquip = data.search("Bakspejl m. nedbl.");	
		if(rearMirrorEquip != -1) { rearMirrorLessLight = "Ja"; } else { rearMirrorLessLight = "-"; }
		
		xenonEquip = data.search("Bi-xenon");	
		if(xenonEquip != -1) { biXenon = "Ja"; } else { biXenon = "-"; }
		
		angelEquip = data.search("Blindvinkelassistent");	
		if(angelEquip != -1) { blindAngelassistent = "Ja"; } else { blindAngelassistent = "-"; }
		
		bluetoothEquip = data.search("Bluetooth");	
		if(bluetoothEquip != -1) { bluetooth = "Ja"; } else { bluetooth = "-"; }
		
		attestEquip = data.search("Brugtbilsattest");	
		if(attestEquip != -1) { usedCarAttest = "Ja"; } else { usedCarAttest = "-"; }
		
		remoteEquip = data.search("Centrall&#229;s fjernb.");	
		remoteEquipII = data.search("Fjernbetjent Centrall&#229;s");	
		if(remoteEquip != -1 || remoteEquipII != -1) { centralLockRemote = "Ja"; } else { centralLockRemote = "-"; }
		
		dabEquip = data.search("DAB radio");	
		if(dabEquip != -1) { dabRadio = "Ja"; } else { dabRadio = "-"; }
		
		airEquip = data.search(/<li>d.+ktryksm.+ler<\/li>/i);	
		if(airEquip != -1) { wheelAirMeassure = "Ja"; } else { wheelAirMeassure = "-"; }
		
		cockpitEquip = data.search("Digitalt cockpit");	
		if(cockpitEquip != -1) { cockpitDigital = "Ja"; } else { cockpitDigital = "-"; }
		
		seatEquip = data.search("El indst. f&#248;rers&#230;de m. memory");	
		if(seatEquip != -1) { frontseatElInstall = "Ja"; } else { frontseatElInstall = "-"; }
		
		warmEquip = data.search("Elektrisk kabinevarmer");	
		if(warmEquip != -1) { cabinWarmEl = "Ja"; } else { cabinWarmEl = "-"; }
		
		parkingEquip = data.search("Elektrisk parkeringsbremse");	
		if(parkingEquip != -1) { parkingBreakEl = "Ja"; } else { parkingBreakEl = "-"; }
		
		elSeatEquip = data.search("Elektriske komforts&#230;der");	
		if(elSeatEquip != -1) { electricComfortableSeats = "Ja"; } else { electricComfortableSeats = "-"; }
		
		backDoorEquip = data.search("Elektronisk bagklap");	
		if(backDoorEquip != -1) { electricBackDoor = "Ja"; } else { electricBackDoor = "-"; }
		
		varmMirrorEquip = data.search("El-klapbare sidespejle m. varme");	
		if(varmMirrorEquip != -1) { electricSideMirrorWarm = "Ja"; } else { electricSideMirrorWarm = "-"; }
		
		elWindowEquip = data.search("Elektriske vinduer");	
		if(elWindowEquip != -1) { electricWindowsTimesFour = "Ja"; } else { electricWindowsTimesFour = "-"; }
		
		speedEquip = data.search("Fartpilot");	
		if(speedEquip != -1) { speedPilot = "Ja"; } else { speedPilot = "-"; }
		
		speedAdapEquip = data.search("Fartpilot, adaptiv");	
		if(speedAdapEquip != -1) { speedPilotAdaptive = "Ja"; } else { speedPilotAdaptive = "-"; }
		
		remoteLightEquip = data.search("Fjernlysassistent");	
		if(remoteLightEquip != -1) { remoteLightAssistant = "Ja"; } else { remoteLightAssistant = "-"; }
		
		ledEquip = data.search("Fuld LED forlygter");	
		if(ledEquip != -1) { completeLedFrontLight = "Ja"; } else { completeLedFrontLight = "-"; }
		
		headUpEquip = data.search("Head-up display");	
		if(headUpEquip != -1) { headUpDisplay = "Ja"; } else { headUpDisplay = "-"; }
		
		infoEquip = data.search("Infocenter");	
		if(infoEquip != -1) { infoCenter = "Ja"; } else { infoCenter = "-"; }
		
		internetEquip = data.search("Internet");	
		if(internetEquip != -1) { internet = "Ja"; } else { internet = "-"; }
		
		isofixEquip = data.search("Isofix");	
		if(isofixEquip != -1) { isofix = "Ja"; } else { isofix = "-"; }
		
		fourZoneEquip = data.search("Klimaanl&#230;g, 4-zonet");	
		if(fourZoneEquip != -1) { climateCenterFourZone = "Ja"; } else { climateCenterFourZone = "-"; }
		
		computerEquip = data.search("K&#248;recomputer");	
		if(computerEquip != -1) { drivingComputer = "Ja"; } else { drivingComputer = "-"; }
		
		curveEquip = data.search("Kurvelys");	
		if(curveEquip != -1) { curvingLight = "Ja"; } else { curvingLight = "-"; }
		
		leatherEquip = data.search("L&#230;derrat");	
		if(leatherEquip != -1) { leatherWheel = "Ja"; } else { leatherWheel = "-"; }
		
		ledDriveEquip = data.search("LED K&#248;relys");	
		if(ledDriveEquip != -1) { ledDrivingLight = "Ja"; } else { ledDrivingLight = "-"; }
		
		washEquip = data.search("Lygtevasker");	
		if(washEquip != -1) { lightWashers = "Ja"; } else { lightWashers = "-"; }
		
		musicEquip = data.search("Musikstreaming via bluetooth");	
		if(musicEquip != -1) { musicViaBluetooth = "Ja"; } else { musicViaBluetooth = "-"; }
		
		navEquip = data.search("Navigation");	
		if(navEquip != -1) { navigation = "Ja"; } else { navigation = "-"; }
		
		keylessEquip = data.search("N&#248;glefri betjening");	
		if(keylessEquip != -1) { keylessOperation = "Ja"; } else { keylessOperation = "-"; }
		
		panoramaEquip = data.search("Panoramatag");	
		if(panoramaEquip != -1) { panoramaRoof = "Ja"; } else { panoramaRoof = "-"; }
		
		rearParkEquip = data.search("Parkeringssensor (bag)");	
		if(rearParkEquip != -1) { parkingSensorBack = "Ja"; } else { parkingSensorBack = "-"; }
		
		frontParkEquip = data.search("Parkeringssensor (for)");	
		if(frontParkEquip != -1) { parkingSensorFront = "Ja"; } else { parkingSensorFront = "-"; }
		
		rainEquip = data.search("Regnsensor");	
		if(rainEquip != -1) { rainSensor = "Ja"; } else { rainSensor = "-"; }
		
		partLeatherEquip = data.search("S&#230;debetr&#230;k, dell&#230;der");	
		if(partLeatherEquip != -1) { seatCoversPartlyLeather = "Ja"; } else { seatCoversPartlyLeather = "-"; }
		
		fullLeatherEquip = data.search("S&#230;debetr&#230;k, l&#230;der");	
		if(fullLeatherEquip != -1) { seatCoverLeather = "Ja"; } else { seatCoverLeather = "-"; }
		
		seatWarmingEquip = data.search("S&#230;devarme");	
		if(seatWarmingEquip != -1) { seatWarming = "Ja"; } else { seatWarming = "-"; }
		
		sdEquip = data.search("SD kortl&#230;ser");	
		if(sdEquip != -1) { sdMapReader = "Ja"; } else { sdMapReader = "-"; }
		
		serviceEquip = data.search("Service ok");	
		if(serviceEquip != -1) { okService = "Ja"; } else { okService = "-"; }
		
		servoEquip = data.search("Servo");	
		if(servoEquip != -1) { servo = "Ja"; } else { servo = "-"; }
		
		signEquip = data.search("<li>Skiltegenkendelse</li>");	
		if(signEquip != -1) { signRecognition = "Ja"; } else { signRecognition = "-"; }
		
		elSunEquip = data.search("Soltag, elektrisk");	
		if(elSunEquip != -1) { sunRoofElectric = "Ja"; } else { sunRoofElectric = "-"; }
		
		manSunEquip = data.search("Soltag, manuelt");	
		if(manSunEquip != -1) { sunRoofManual = "Ja"; } else { sunRoofManual = "-"; }
		
		seatSplit = data.search("Splitbags&#230;de");	
		if(seatSplit != -1) { backSeatSplit = "Ja"; } else { backSeatSplit = "-"; }
		
		sportSeat = data.search("Sportss&#230;der");	
		if(sportSeat != -1) { sportSeats = "Ja"; } else { sportSeats = "-"; }
		
		startEquip = data.search("Startsp&#230;rre");	
		if(startEquip != -1) { startingLight = "Ja"; } else { startingLight = "-"; }
		
		elSwing = data.search("Svingbart tr&#230;k (elektrisk)");	
		if(elSwing != -1) { pivotableTractionElectric = "Ja"; } else { pivotableTractionElectric = "-"; }
		
		manSwing = data.search("Svingbart tr&#230;k (manuelt)");	
		if(manSwing != -1) { pivotableTractionManual = "Ja"; } else { pivotableTractionManual = "-"; }
		
		fogEquip = data.search("T&#229;gelygter");	
		if(fogEquip != -1) { fogLights = "Ja"; } else { fogLights = "-"; }
		
		roofEquip = data.search("Tagr&#230;ling");	
		if(roofEquip != -1) { roofRails = "Ja"; } else { roofRails = "-"; }
		
		mobileEquip = data.search("Tr&#229;dl&#248;s mobilopladning");	
		if(mobileEquip != -1) { wirelessMobileRecharge = "Ja"; } else { wirelessMobileRecharge = "-"; }
		
		tiredEquip = data.search("Tr&#230;thedsregistrering");	
		if(tiredEquip != -1) { registrationOfTired = "Ja"; } else { registrationOfTired = "-"; }
		
		underCarEquip = data.search("Undervogn, s&#230;nket");	
		if(underCarEquip != -1) { underCarLowered = "Ja"; } else { underCarLowered = "-"; }
		
		usbEquip = data.search("USB tilslutning");	
		if(usbEquip != -1) { usbConnection = "Ja"; } else { usbConnection = "-"; }
		
		laneEquip = data.search("Vognbaneassistent");	
		if(laneEquip != -1) { laneAssistant = "Ja"; } else { laneAssistant = "-"; }
		
		xenonLightEquip = data.search("Xenonlygter");	
		if(xenonLightEquip != -1) { xenonLights = "Ja"; } else { xenonLights = "-"; }
		
	}





</script>