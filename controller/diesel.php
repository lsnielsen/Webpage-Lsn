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
		
		include ("../projects/diesel/view/dieselPage.html");
	}
		
?>



