<?php

	$dieselButton = isset($_POST['dieselButton']) ? $_POST['dieselButton'] : "";

	if ($dieselButton == "dieselPage") {
		include("helpFunctions/setup.php");
	} elseif (is_numeric($dieselButton)) {
		$con = mysqli_connect('127.0.0.1','root','');  
		if(!$con) {  
			echo 'not connect to the server';  
		}  
		if(!mysqli_select_db($con,'lsnDb')) {  
			echo 'database not selected';  
		}  
		$id = $dieselButton;
		$query = "DELETE FROM diesel WHERE diesel.id = $id";
		mysqli_query($con, $query);
		
		include("helpFunctions/setup.php");
	} elseif ($dieselButton == "advancedDieselPage") {
		include("view/advanced.php");
	} elseif ($dieselButton == "carDieselPage") {
		include("view/car.html");
	} elseif (isset($dieselButton)) {
		include("helpFunctions/setup.php");
	}
	
		
?>



