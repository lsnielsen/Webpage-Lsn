

<script>


	function setExtraGogEquipment(data)
	{
		//console.log(data);
		equip = data.search(/abs/);	
		if(equip != -1) { AbsBreaks = "Ja"; } else { AbsBreaks = "-"; }
		
		equip = data.search("alufælge");	
		if(equip != -1) { AlloyWheels = "Ja"; } else { AlloyWheels = "-"; }
		
		equip = data.search("android auto");	
		if(equip != -1) { AutoAndroid = "Ja"; } else { AutoAndroid = "-"; }
		
		equip = data.search("anhængertræk");	
		if(equip != -1) { Towbar = "Ja"; } else { Towbar = "-"; }
		
		equip = data.search("anhængertræk, aftagl.");	
		if(equip != -1) { TowbarDetachable = "Ja"; } else { TowbarDetachable = "-"; }
		
		equip = data.search("antispin");	
		//console.log("antispin: " + equip);
		if(equip != -1) { Antispin = "Ja"; } else { Antispin = "-"; }
		
		equip = data.search("apple carplay");	
		if(equip != -1) { CarplayApple = "Ja"; } else { CarplayApple = "-"; }
		
		equip = data.search("armlæn");	
		if(equip != -1) { ArmRelax = "Ja"; } else { ArmRelax = "-"; }
		
		equip = data.search("auto. nødbremse");	
		if(equip != -1) { AutoEmergencyBreak = "Ja"; } else { AutoEmergencyBreak = "-"; }
		
		equip = data.search("auto. parkering");	
		if(equip != -1) { AutoParking = "Ja"; } else { AutoParking = "-"; }
		
		equip = data.search("auto. start/stop");	
		if(equip != -1) { AutoStartStop = "Ja"; } else { AutoStartStop = "-"; }
		
		//equip = data.search("Automatgear");	
		//if(equip != -1) { autoGear = "Ja"; } else { autoGear = "-"; }
		
		equip = data.search("automatisk lys");	
		if(equip != -1) { AutoLight = "Ja"; } else { AutoLight = "-"; }
		
		equip = data.search("aux  tilslutning");	
		if(equip != -1) { AuxAdding = "Ja"; } else { AuxAdding = "-"; }
		
		equip = data.search("bakkamera");	
		if(equip != -1) { RearCamera = "Ja"; } else { RearCamera = "-"; }
		
		equip = data.search("bakspejl m. nedbl.");	
		if(equip != -1) { RearMirrorLessLight = "Ja"; } else { RearMirrorLessLight = "-"; }
		
		equip = data.search("bi-xenon");	
		if(equip != -1) { BiXenon = "Ja"; } else { BiXenon = "-"; }
		
		equip = data.search("blindvinkelassistent");	
		if(equip != -1) { BlindAngelassistent = "Ja"; } else { BlindAngelassistent = "-"; }
		
		equip = data.search("bluetooth");	
		if(equip != -1) { Bluetooth = "Ja"; } else { Bluetooth = "-"; }
		
		equip = data.search("brugtbilsattest");	
		if(equip != -1) { UsedCarAttest = "Ja"; } else { UsedCarAttest = "-"; }
		
		equip = data.search("centrallås fjernb.");	
		equipII = data.search("Fjernbetjent Centrallås");	
		if(equip != -1 || equipII != -1) { CentralLockRemote = "Ja"; } else { CentralLockRemote = "-"; }
		
		equip = data.search("dAB radio");	
		if(equip != -1) { DabRadio = "Ja"; } else { DabRadio = "-"; }
		
		equip = data.search("dæktryksmåler");	
		if(equip != -1) { wheelAirMeassure = "Ja"; } else { wheelAirMeassure = "-"; }
		
		equip = data.search("digitalt cockpit");	
		if(equip != -1) { CockpitDigital = "Ja"; } else { CockpitDigital = "-"; }
		
		equip = data.search("el indst. førersæde m. memory");	
		if(equip != -1) { FrontseatElInstall = "Ja"; } else { FrontseatElInstall = "-"; }
		
		equip = data.search("elektrisk kabinevarmer");	
		if(equip != -1) { CabinWarmEl = "Ja"; } else { CabinWarmEl = "-"; }
		
		equip = data.search("elektrisk parkeringsbremse");	
		if(equip != -1) { ParkingBreakEl = "Ja"; } else { ParkingBreakEl = "-"; }
		
		equip = data.search("elektriske komfortsæder");	
		if(equip != -1) { ElectricComfortableSeats = "Ja"; } else { ElectricComfortableSeats = "-"; }
		
		equip = data.search("elektronisk bagklap");	
		if(equip != -1) { ElectricBackDoor = "Ja"; } else { ElectricBackDoor = "-"; }
		
		equip = data.search("el-klapbare sidespejle m. varme");	
		if(equip != -1) { ElectricSideMirrorWarm = "Ja"; } else { ElectricSideMirrorWarm = "-"; }
		
		equip = data.search("elektriske vinduer");	
		if(equip != -1) { ElectricWindowsTimesFour = "Ja"; } else { ElectricWindowsTimesFour = "-"; }
		
		equip = data.match(/Fartpilot/i);	
		if(equip != -1) { SpeedPilot = "Ja"; } else { SpeedPilot = "-"; }
		
		equip = data.search("fartpilot, adaptiv");	
		if(equip != -1) { SpeedPilotAdaptive = "Ja"; } else { SpeedPilotAdaptive = "-"; }
		
		equip = data.search("fjernlysassistent");	
		if(equip != -1) { RemoteLightAssistant = "Ja"; } else { RemoteLightAssistant = "-"; }
		
		equip = data.search("fuld LED forlygter");	
		if(equip != -1) { CompleteLedFrontLight = "Ja"; } else { CompleteLedFrontLight = "-"; }
		
		equip = data.search("head-up display");	
		if(equip != -1) { HeadUpDisplay = "Ja"; } else { HeadUpDisplay = "-"; }
		
		equip = data.search("infocenter");	
		if(equip != -1) { InfoCenter = "Ja"; } else { InfoCenter = "-"; }
		
		equip = data.search("internet");	
		if(equip != -1) { Internet = "Ja"; } else { Internet = "-"; }
		
		equip = data.search("isofix");	
		if(equip != -1) { Isofix = "Ja"; } else { Isofix = "-"; }
		
		equip = data.search("klimaanlæg, 4-zonet");	
		if(equip != -1) { ClimateCenterFourZone = "Ja"; } else { ClimateCenterFourZone = "-"; }
		
		equip = data.search("kørecomputer");	
		if(equip != -1) { DrivingComputer = "Ja"; } else { DrivingComputer = "-"; }
		
		equip = data.search("kurvelys");	
		if(equip != -1) { CurvingLight = "Ja"; } else { CurvingLight = "-"; }
		
		equip = data.search("læderrat");	
		if(equip != -1) { LeatherWheel = "Ja"; } else { LeatherWheel = "-"; }
		
		equip = data.search("led Kørelys");	
		if(equip != -1) { LedDrivingLight = "Ja"; } else { LedDrivingLight = "-"; }
		
		equip = data.search("lygtevasker");	
		if(equip != -1) { LightWashers = "Ja"; } else { LightWashers = "-"; }
		
		equip = data.search("musikstreaming via bluetooth");	
		if(equip != -1) { MusicViaBluetooth = "Ja"; } else { MusicViaBluetooth = "-"; }
		
		equip = data.search("navigation");	
		if(equip != -1) { Navigation = "Ja"; } else { Navigation = "-"; }
		
		equip = data.search("nøglefri betjening");	
		if(equip != -1) { KeylessOperation = "Ja"; } else { KeylessOperation = "-"; }
		
		equip = data.search("panoramatag");	
		if(equip != -1) { PanoramaRoof = "Ja"; } else { PanoramaRoof = "-"; }
		
		equip = data.search("parkeringssensor (bag)");	
		if(equip != -1) { ParkingSensorBack = "Ja"; } else { ParkingSensorBack = "-"; }
		
		equip = data.search("parkeringssensor (for)");	
		if(equip != -1) { ParkingSensorFront = "Ja"; } else { ParkingSensorFront = "-"; }
		
		equip = data.search("regnsensor");	
		if(equip != -1) { RainSensor = "Ja"; } else { RainSensor = "-"; }
		
		equip = data.search("sædebetræk, dellæder");	
		if(equip != -1) { SeatCoversPartlyLeather = "Ja"; } else { SeatCoversPartlyLeather = "-"; }
		
		equip = data.search("sædebetræk, læder");	
		if(equip != -1) { SeatCoverLeather = "Ja"; } else { SeatCoverLeather = "-"; }
		
		equip = data.search("sædevarme");	
		if(equip != -1) { SeatWarming = "Ja"; } else { SeatWarming = "-"; }
		
		equip = data.search("sd kortlæser");	
		if(equip != -1) { SdMapReader = "Ja"; } else { SdMapReader = "-"; }
		
		equip = data.search("service ok");	
		if(equip != -1) { OkService = "Ja"; } else { OkService = "-"; }
		
		equip = data.search("servo");	
		if(equip != -1) { Servo = "Ja"; } else { Servo = "-"; }
		
		equip = data.search("skiltegenkendelse");	
		if(equip != -1) { SignRecognition = "Ja"; } else { SignRecognition = "-"; }
		
		equip = data.search("soltag, elektrisk");	
		if(equip != -1) { SunRoofElectric = "Ja"; } else { SunRoofElectric = "-"; }
		
		equip = data.search("soltag, manuelt");	
		if(equip != -1) { SunRoofManual = "Ja"; } else { SunRoofManual = "-"; }
		
		equip = data.search("splitbagsæde");	
		if(equip != -1) { BackSeatSplit = "Ja"; } else { BackSeatSplit = "-"; }
		
		equip = data.search("sportssæder");	
		if(equip != -1) { SportSeats = "Ja"; } else { SportSeats = "-"; }
		
		equip = data.search("startspærre");	
		if(equip != -1) { StartingLight = "Ja"; } else { StartingLight = "-"; }
		
		equip = data.search("svingbart træk (elektrisk)");	
		if(equip != -1) { PivotableTractionElectric = "Ja"; } else { PivotableTractionElectric = "-"; }
		
		equip = data.search("svingbart træk (manuelt)");	
		if(equip != -1) { PivotableTractionManual = "Ja"; } else { PivotableTractionManual = "-"; }
		
		equip = data.search("tågelygter");	
		if(equip != -1) { FogLights = "Ja"; } else { FogLights = "-"; }
		
		equip = data.search("tagræling");	
		if(equip != -1) { RoofRails = "Ja"; } else { RoofRails = "-"; }
		
		equip = data.search("trådløs mobilopladning");	
		if(equip != -1) { wirelessMobileRecharge = "Ja"; } else { wirelessMobileRecharge = "-"; }
		
		equip = data.search("træthedsregistrering");	
		if(equip != -1) { RegistrationOfTired = "Ja"; } else { RegistrationOfTired = "-"; }
		
		equip = data.search("undervogn, sænket");	
		if(equip != -1) { UnderCarLowered = "Ja"; } else { UnderCarLowered = "-"; }
		
		equip = data.search("usb tilslutning");	
		if(equip != -1) { UsbConnection = "Ja"; } else { UsbConnection = "-"; }
		
		equip = data.search("vognbaneassistent");	
		if(equip != -1) { LaneAssistant = "Ja"; } else { LaneAssistant = "-"; }
		
		equip = data.search("xenonlygter");	
		if(equip != -1) { xenonLights = "Ja"; } else { xenonLights = "-"; }
		
	}








</script>