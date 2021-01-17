<script>

	let theLink;
	let theCarModel;
	let theEngine;
	let thePrice;
	let horsePowerAndNm;
	let fromZeroToHundred;
	let theTopSpeed;
	let energyToUse;
	let energyUsage;
	let theEuronorm;
	let theWidth;
	let theLength;
	let theHeight;
	let loadAbility;
	let drivingWheels;
	let theCylinders;
	let absBreaks;
	let theMaxLoad;
	let numberOfAirbags;
	let doesEsp;
	let theGasTank;
	let theGears;
	let theGearType;
	let theWeight;
	let countOfDoors;
	let theRegistrationDate;
	let theProductionDate;
	let yearOfTheModel;
	let lastDateOfSight;
	let theColor;
	let towbar;
	let alloyWheels;
	let autoAndroid;
	let towbarDetachable;
	let antispin;
	let carplayApple;
	let armRelax;
	let autoEmergencyBreak;
	let autoParking;
	let autoStartStop;
	let autoLight;
	let auxAdding;
	let rearCamera;
	let rearMirrorLessLight;
	let biXenon;
	let blindAngelassistent;
	let bluetooth;
	let usedCarAttest;
	let centralLockRemote;
	let dabRadio;
	let wheelAirMeassure;
	let cockpitDigital;
	let frontseatElInstall;
	let cabinWarmEl;
	let parkingBreakEl;
	let electricComfortableSeats;
	let electricBackDoor;
	let electricSideMirrorWarm;
	let electricWindowsTimesFour;
	let speedPilot;
	let speedPilotAdaptive;
	let remoteLightAssistant;
	let completeLedFrontLight;
	let headUpDisplay;
	let infoCenter;
	let internet;
	let isofix;
	let climateCenterFourZone;
	let drivingComputer;
	let curvingLight;
	let leatherWheel;
	let ledDrivingLight;
	let lightWashers;
	let musicViaBluetooth;
	let navigation;
	let keylessOperation;
	let panoramaRoof;
	let parkingSensorBack;
	let parkingSensorFront;
	let rainSensor;
	let seatCoversPartlyLeather;
	let seatCoverLeather;
	let seatWarming;
	let sdMapReader;
	let okService;
	let servo;
	let signRecognition;
	let sunRoofElectric;
	let sunRoofManual;
	let backSeatSplit;
	let sportSeats;
	let startingLight;
	let pivotableTractionElectric;
	let pivotableTractionManual;
	let fogLights;
	let roofRails;
	let wirelessMobileRecharge;
    let registrationOfTired;
    let underCarLowered;
    let usbConnection;
    let laneAssistant;
    let xenonLights;
    let contactInfo;
    let theKilometers;
    let theStarterPrice;
    let priceDiff;

    function setDiffPrice()
    {
        let priceCheck = (!isNaN(thePrice) && typeof(thePrice) !== "undefined");
        let starterCheck = (!isNaN(theStarterPrice) && typeof theStarterPrice !== "undefined");
        if (priceCheck && starterCheck) {
            priceDiff = (theStarterPrice - thePrice).toFixed(3);
        } else {
            //console.log(priceCheck + ", " + starterCheck);
            priceDiff = "-";
        }
    }

    function setTheFirstArray(singleCarArray)
    {
        setDiffPrice();
        singleCarArray.push(theLink);
        singleCarArray.push(contactInfo);
        singleCarArray.push(theCarModel);
        singleCarArray.push(theEngine);
        singleCarArray.push(thePrice);
        singleCarArray.push(theStarterPrice);
        singleCarArray.push(priceDiff);
        singleCarArray.push(theKilometers);
        singleCarArray.push(horsePowerAndNm);
        singleCarArray.push(theRegistrationDate);
        singleCarArray.push(theGearType);
        singleCarArray.push(fromZeroToHundred);
        singleCarArray.push(theTopSpeed);
        singleCarArray.push(energyToUse);
        singleCarArray.push(energyUsage);
        singleCarArray.push(loadAbility);
        singleCarArray.push(drivingWheels);
        singleCarArray.push(theCylinders);
        singleCarArray.push(absBreaks);
        singleCarArray.push(theMaxLoad);
        singleCarArray.push(numberOfAirbags);
        singleCarArray.push(doesEsp);
        singleCarArray.push(theGasTank);
        singleCarArray.push(theGears);
        singleCarArray.push(theWeight);
        singleCarArray.push(countOfDoors);
        singleCarArray.push(theProductionDate);
        singleCarArray.push(yearOfTheModel);
        singleCarArray.push(lastDateOfSight);
        singleCarArray.push(theColor);
        singleCarArray.push(alloyWheels);
        singleCarArray.push(towbar);
        singleCarArray.push(towbarDetachable);
        singleCarArray.push(autoAndroid);
        singleCarArray.push(antispin);
        singleCarArray.push(carplayApple);
        singleCarArray.push(theEuronorm);
        singleCarArray.push(theWidth);
        singleCarArray.push(theLength);
        singleCarArray.push(theHeight);
        singleCarArray.push(armRelax);
        singleCarArray.push(autoEmergencyBreak);
        singleCarArray.push(autoParking);
        singleCarArray.push(autoStartStop);
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

		dataArray.push(singleCarArray);

    }
</script>