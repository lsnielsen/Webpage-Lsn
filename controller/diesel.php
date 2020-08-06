<?php

	$dieselButton = isset($_POST['dieselButton']) ? $_POST['dieselButton'] : "";

	if ($dieselButton == "dieselPage") {
		setDieselFrontpage();
	} elseif (is_numeric($dieselButton)) {
		deleteDieselRow($dieselButton);
		setDieselFrontpage();
	} elseif ($dieselButton == "advancedDieselPage") {
		include("../view/diesel/view/advanced.php");
	} elseif ($dieselButton == "carDieselPage") {
		include("../view/diesel/view/car.html");
	} elseif ($dieselButton == "krPerLiter") {
		include("../view/diesel/view/krPerLiter/krPerLiter.php");
	} elseif ($dieselButton == "kmPerLiter") {
		include("../view/diesel/view/kmPerLiter/kmPerLiter.php");
	} elseif ($dieselButton == "kmPerKroner") {
		include("../view/diesel/view/kmPerKr/kmPerKr.php");
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
		include "../view/diesel/helpFunctions/frontPageHelper.php";
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
		
		include ("../view/diesel/view/dieselPage.html");
	}
		
?>



