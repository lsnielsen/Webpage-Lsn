<script>

	var theLink;
	var theCarModel;
	var theEngine;
	var thePrice;
	var horsePowerAndNm;
	var fromZeroToHundred;
	var theTopSpeed;
	var energyToUse;
	var energyUsage;
	var theEuronorm;
	var theWidth;
	var theLength;
	var theHeight;
	var loadAbility;
	var drivingWheels;
	var theCylinders;
	var absBreaks;
	var theMaxLoad;
	var numberOfAirbags;
	var doesEsp;
	var theGasTank;
	var theGears;
	var theGearType;
	var theWeight;
	var countOfDoors;
	var theRegistrationDate;
	var theProductionDate;
	var yearOfTheModel;
	var lastDateOfSight;
	var theColor;
	var alloyWheels;
	var autoAndroid;
	var towbar;
	var towbarDetachable;
	var antispin;
	var carplayApple;
	var armRelax;
	var autoEmergencyBreak;
	var autoParking;
	var autoStartStop;
	var autoGear;
	var autoLight;
	var auxAdding;
	var rearCamera;
	var rearMirrorLessLight;
	var biXenon;
	var blindAngelassistent;
	var bluetooth;
	var usedCarAttest;
	var centralLockRemote;
	var dabRadio;
	var wheelAirMeassure;
	var cockpitDigital;
	var frontseatElInstall;
	var cabinWarmEl;
	var parkingBreakEl;
	var electricComfortableSeats;
	var electricBackDoor;
	var electricSideMirrorWarm;
	var electricWindowsTimesFour;
	var speedPilot;
	var speedPilotAdaptive;
	var remoteLightAssistant;
	var completeLedFrontLight;
	var headUpDisplay;
	var infoCenter;
	var internet;
	var isofix;
	var climateCenterFourZone;
	var drivingComputer;
	var curvingLight;
	var leatherWheel;
	var ledDrivingLight;
	var lightWashers;
	var musicViaBluetooth;
	var navigation;
	var keylessOperation;
	var panoramaRoof;
	var parkingSensorBack;
	var parkingSensorFront;
	var rainSensor;
	var seatCoversPartlyLeather;
	var seatCoverLeather;
	var seatWarming;
	var sdMapReader;
	var okService;
	var servo;
	var signRecognition;
	var sunRoofElectric;
	var sunRoofManual;
	var backSeatSplit;
	var sportSeats;
	var startingLight;
	var pivotableTractionElectric;
	var pivotableTractionManual;
	var fogLights;
	var roofRails;
	var wirelessMobileRecharge;
	var registrationOfTired;
	var underCarLowered;
	var usbConnection;
	var laneAssistant;
	var xenonLights;

	function setTheFirstArray(singleCarArray)
	{
		singleCarArray.push(theLink);
		singleCarArray.push(theCarModel);
		singleCarArray.push(theEngine);
		singleCarArray.push(thePrice);
		singleCarArray.push(horsePowerAndNm);
		singleCarArray.push(fromZeroToHundred);
		singleCarArray.push(theTopSpeed);
		singleCarArray.push(energyToUse);
		singleCarArray.push(energyUsage);
		singleCarArray.push(theEuronorm);
		singleCarArray.push(theWidth);
		singleCarArray.push(theLength);
		singleCarArray.push(theHeight);
		singleCarArray.push(loadAbility);
		singleCarArray.push(drivingWheels);
		singleCarArray.push(theCylinders);
		singleCarArray.push(absBreaks);
		singleCarArray.push(theMaxLoad);
		singleCarArray.push(numberOfAirbags);
		singleCarArray.push(doesEsp);
		singleCarArray.push(theGasTank);
		singleCarArray.push(theGears);
		singleCarArray.push(theGearType);
		singleCarArray.push(theWeight);
		singleCarArray.push(countOfDoors);
		singleCarArray.push(theRegistrationDate);
		singleCarArray.push(theProductionDate);
		singleCarArray.push(yearOfTheModel);
		singleCarArray.push(lastDateOfSight);
		singleCarArray.push(theColor);
		singleCarArray.push(alloyWheels);
		singleCarArray.push(autoAndroid);
		singleCarArray.push(towbar);
		singleCarArray.push(towbarDetachable);
		singleCarArray.push(antispin);
		singleCarArray.push(carplayApple);
		singleCarArray.push(armRelax);
		singleCarArray.push(autoEmergencyBreak);
		singleCarArray.push(autoParking);
		singleCarArray.push(autoStartStop);
		singleCarArray.push(autoGear);
		singleCarArray.push(autoLight);
		singleCarArray.push(auxAdding);
		singleCarArray.push(rearCamera);
		singleCarArray.push(rearMirrorLessLight);
		singleCarArray.push(biXenon);
		singleCarArray.push(blindAngelassistent);
		singleCarArray.push(bluetooth);
		singleCarArray.push(usedCarAttest);
		singleCarArray.push(centralLockRemote);
		singleCarArray.push(dabRadio);
		singleCarArray.push(wheelAirMeassure);
		singleCarArray.push(cockpitDigital);
		singleCarArray.push(frontseatElInstall);
		singleCarArray.push(cabinWarmEl);
		singleCarArray.push(parkingBreakEl);
		singleCarArray.push(electricComfortableSeats);
		singleCarArray.push(electricBackDoor);
		singleCarArray.push(electricSideMirrorWarm);
		singleCarArray.push(electricWindowsTimesFour);
		singleCarArray.push(speedPilot);
		singleCarArray.push(speedPilotAdaptive);
		singleCarArray.push(remoteLightAssistant);
		singleCarArray.push(completeLedFrontLight);
		singleCarArray.push(headUpDisplay);
		singleCarArray.push(infoCenter);
		singleCarArray.push(internet);
		singleCarArray.push(isofix);
		singleCarArray.push(climateCenterFourZone);
		singleCarArray.push(drivingComputer);
		singleCarArray.push(curvingLight);
		singleCarArray.push(leatherWheel);
		singleCarArray.push(ledDrivingLight);
		singleCarArray.push(lightWashers);
		singleCarArray.push(musicViaBluetooth);
		singleCarArray.push(navigation);
		singleCarArray.push(keylessOperation);
		singleCarArray.push(panoramaRoof);
		singleCarArray.push(parkingSensorBack);
		singleCarArray.push(parkingSensorFront);
		singleCarArray.push(rainSensor);
		singleCarArray.push(seatCoversPartlyLeather);
		singleCarArray.push(seatCoverLeather);
		singleCarArray.push(seatWarming);
		singleCarArray.push(sdMapReader);
		singleCarArray.push(okService);
		singleCarArray.push(servo);
		singleCarArray.push(signRecognition);
		singleCarArray.push(sunRoofElectric);
		singleCarArray.push(sunRoofManual);
		singleCarArray.push(backSeatSplit);
		singleCarArray.push(sportSeats);
		singleCarArray.push(startingLight);
		singleCarArray.push(pivotableTractionElectric);
		singleCarArray.push(pivotableTractionManual);
		singleCarArray.push(fogLights);
		singleCarArray.push(roofRails);
		singleCarArray.push(wirelessMobileRecharge);
		singleCarArray.push(registrationOfTired);
		singleCarArray.push(underCarLowered);
		singleCarArray.push(usbConnection);
		singleCarArray.push(laneAssistant);
		singleCarArray.push(xenonLights);
		
	}


</script>