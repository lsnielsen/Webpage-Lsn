<?php

	$dieselButton = isset($_POST['dieselButton']) ? $_POST['dieselButton'] : "";

	if ($dieselButton == "dieselPage") {
		setDieselFrontpage();
	} elseif (is_numeric($dieselButton)) {
		deleteDieselRow($dieselButton);
		setDieselFrontpage();
	} elseif ($dieselButton == "advancedDieselPage") {
		include("../projects/diesel/view/advanced.php");
	} elseif ($dieselButton == "carDieselPage") {
		include("../projects/diesel/view/car.html");
	} elseif ($dieselButton == "krPerLiter") {
		include("../projects/diesel/view/krPerLiter/krPerLiter.php");
	} elseif ($dieselButton == "kmPerLiter") {
		include("../projects/diesel/view/kmPerLiter/kmPerLiter.php");
	} elseif ($dieselButton == "kmPerKroner") {
		include("../projects/diesel/view/kmPerKr/kmPerKr.php");
	} elseif ($dieselButton == "ownDieselGraph") {
		include("../projects/diesel/view/customGraph/ownDieselGraph.php");
	} elseif ($dieselButton == "kilometerPage") {
		include("../projects/diesel/view/kilometer/kilometer.php");
	} elseif ($dieselButton == "literPage") {
		include("../projects/diesel/view/liter/liter.php");
	} elseif ($dieselButton == "kronerPage") {
		include("../projects/diesel/view/kroner/kroner.php");
	} elseif ($dieselButton == "datePage") {
		include("../projects/diesel/view/date/date.php");
	} elseif (isset($dieselButton)) {
		setDieselFrontpage();
	}
	
	function deleteDieselRow($id)
	{		
		$con = mysqli_connect('127.0.0.1','root','');  
		if(!$con) {  
			echo 'not connect to the server';  
		}  
		if(!mysqli_select_db($con,'lsnDb')) {  
			echo 'database not selected';  
		}  
		$query = "DELETE FROM diesel WHERE diesel.id = $id";
		mysqli_query($con, $query);
	}
		
	function setDieselFrontpage()
	{
		session_start();
		include "../projects/diesel/helpFunctions/frontPageHelper.php";
		$con = mysqli_connect('127.0.0.1','root','');  
		
		if(!$con) {  
			echo 'not connect to the server';  
		}  
		if(!mysqli_select_db($con,'lsnDb')) {  
			echo 'database not selected';  
		}  
		
		$fetchId = "SELECT * FROM diesel";
		$result = mysqli_query($con,$fetchId);
		$uniqueId = 0;
		while($row = $result->fetch_array()){
			$uniqueId = $row['id'];
		}

		$dateCheck = (isset($_SESSION['date']) && isset($_POST['date'])) ? $_SESSION['date'] != $_POST['date'] : true;
		$kmCheck = (isset($_SESSION['km']) && isset($_POST['km'])) ? $_SESSION['km'] != $_POST['km'] : true;
		$literCheck = (isset($_SESSION['liter']) && isset($_POST['liter'])) ? $_SESSION['liter'] != $_POST['liter'] : true;
		$krCheck = (isset($_SESSION['kr']) && isset($_POST['kr'])) ? $_SESSION['kr'] != $_POST['kr'] : true;
		
		if (isset($_POST['date']) && isset($_POST['km']) && isset($_POST['liter']) && isset($_POST['kr']) && $dateCheck && $kmCheck && $literCheck && $krCheck) {
			
			$_SESSION['date'] = $_POST['date'];
			$_SESSION['km'] = $_POST['km'];
			$_SESSION['liter'] = $_POST['liter'];
			$_SESSION['kr'] = $_POST['kr'];
			
			$date = $_POST['date'];
			$km = $_POST['km'];
			$liter = $_POST['liter'];
			$kr = $_POST['kr'];
			$inputArray = checkDieselInput($date, $km, $liter, $kr);
			if ($inputArray['returnStm']) {
				$wrongInput = true;
				$id = $uniqueId + 1;
				$sql = "INSERT INTO diesel (id, date, kilometer, liter, kroner) VALUES ('$id', '$date','$km', '$liter', '$kr')";  
				  
				if(!mysqli_query($con,$sql)) {  
					echo 'Not inserted';  
				}  
			} else {		
				setUpperHtmlBox();
				setErrorMessageBox($inputArray, $date, $km, $kr, $liter);
				setLowerHtmlBox();
			}
		}
		unset($_POST['date']);
		unset($_POST['km']);
		unset($_POST['liter']);
		unset($_POST['kr']);
		include ("../projects/diesel/view/dieselPage.php");
	}

// File to be included in all controllers:
	include "allIncludes.php";

?>



