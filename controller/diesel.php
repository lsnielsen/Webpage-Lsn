<?php

	$dieselButton = isset($_POST['dieselButton']) ? $_POST['dieselButton'] : "";

	if ($dieselButton == "dieselPage") {
		setDieselFrontpage();
	} elseif (is_numeric($dieselButton)) {
		deleteDieselRow($dieselButton);
		setDieselFrontpage();
	} elseif ($dieselButton == "advancedDieselPage") {
		include("../projects/diesel/projects/advanced.php");
	} elseif ($dieselButton == "carDieselPage") {
		include("../projects/diesel/projects/car.html");
	} elseif ($dieselButton == "krPerLiter") {
		include("../projects/diesel/projects/krPerLiter/krPerLiter.php");
	} elseif ($dieselButton == "kmPerLiter") {
		include("../projects/diesel/projects/kmPerLiter/kmPerLiter.php");
	} elseif ($dieselButton == "kmPerKroner") {
		include("../projects/diesel/projects/kmPerKr/kmPerKr.php");
	} elseif ($dieselButton == "ownDieselGraph") {
		include("../projects/diesel/projects/customGraph/ownDieselGraph.php");
	} elseif ($dieselButton == "kilometerPage") {
		include("../projects/diesel/projects/kilometer/kilometer.php");
	} elseif ($dieselButton == "literPage") {
		include("../projects/diesel/projects/liter/liter.php");
	} elseif ($dieselButton == "kronerPage") {
		include("../projects/diesel/projects/kroner/kroner.php");
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

		if (isset($_POST['date']) && isset($_POST['km']) && isset($_POST['liter']) && isset($_POST['kr'])) {
			
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
		
		include ("../projects/diesel/projects/dieselPage.html");
	}
		
?>



