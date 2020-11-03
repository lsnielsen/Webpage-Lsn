
<?php

	$bikeButton = isset($_POST['bikeButton']) ? $_POST['bikeButton'] : "";
	$runButton = isset($_POST['runButton']) ? $_POST['runButton'] : "";
	
	if ($bikeButton == "bikePage") {
		setRunOrBikeFrontpage("bike");
	} elseif (is_numeric($bikeButton)) {
		deleteTableRow($bikeButton, "bike");
		setRunOrBikeFrontpage("bike");
	} elseif ($runButton == "runPage") {
		setRunOrBikeFrontpage("run");
	} elseif (is_numeric($runButton)) {
		deleteTableRow($runButton, "run");
		setRunOrBikeFrontpage("run");
	}
	
	function setRunOrBikeFrontpage($runOrBike)
	{
		session_start();
		include "../projects/runAndBike/helper/frontPageHelper.php";
		$con = mysqli_connect('127.0.0.1','root','');  
		
		checkDatabase($con, $runOrBike);
		
		$dateCheck = (isset($_SESSION['date']) && isset($_POST['date'])) ? $_SESSION['date'] != $_POST['date'] : true;
		$kmCheck = (isset($_SESSION['km']) && isset($_POST['km'])) ? $_SESSION['km'] != $_POST['km'] : true;
		$timeCheck = (isset($_SESSION['time']) && isset($_POST['time'])) ? $_SESSION['time'] != $_POST['time'] : true;
		
		if (isset($_POST['date']) && isset($_POST['km']) && isset($_POST['time']) && ($dateCheck || $kmCheck || $timeCheck)) {
			
			$_SESSION['date'] = $_POST['date'];
			$_SESSION['km'] = $_POST['km'];
			$_SESSION['time'] = $_POST['time'];
			
			$date = $_POST['date'];
			$km = $_POST['km'];
			$time = $_POST['time'];
			$time = formatTime($time);

			$inputArray = checkRunOrBikeInput($date, $km, $time);
			$km = rewriteKilometer($km);
			if ($inputArray['returnStm']) {
				$wrongInput = true;
				if($runOrBike == "run") {
					$sql = "INSERT INTO running (date, kilometer, time) VALUES ('$date','$km', '$time')";  
				} elseif ($runOrBike == "bike") {
					$sql = "INSERT INTO biking (date, kilometer, time) VALUES ('$date','$km', '$time')";  
				}
				if(!mysqli_query($con,$sql)) {  
					echo 'Not inserted';  
				}  
			} else {		
				setUpperRunAndBikeHtmlBox();
				setRunAndBikeErrorMessageBox($inputArray, $date, $km, $time);
				setLowerRunAndBikeHtmlBox();
			}
		} else {
			unset($_SESSION['km']); 
			unset($_SESSION['date']); 
			unset($_SESSION['time']); 
			unset($_POST['km']); 
			unset($_POST['date']); 
			unset($_POST['time']); 
		}
		if ($runOrBike == "run") {
			include("../projects/runAndBike/run.php");
		} elseif ($runOrBike == "bike") {
			include("../projects/runAndBike/bike.php");
		}
	}

	function deleteTableRow($id, $runOrBike)
	{		
		$con = mysqli_connect('127.0.0.1','root','');  
		if(!$con) {  
			echo 'not connect to the server';  
		}  
		if(!mysqli_select_db($con,'lsnDb')) {  
			echo 'database not selected';  
		}  
		if ($runOrBike == "bike") {
			$query = "DELETE FROM biking WHERE biking.id = $id";
		} elseif ($runOrBike == "run") {
			$query = "DELETE FROM running WHERE running.id = $id";
		}
		mysqli_query($con, $query);
	}
	
	function checkDatabase($con, $runOrBike)
	{
		if(!$con) {  
			echo 'not connect to the server';  
		}  
		if(!mysqli_select_db($con,'lsnDb')) {  
			echo 'database not selected';  
		}  
		
		$bikeQuery = "SHOW TABLES LIKE 'biking'";
		$runQuery = "SHOW TABLES LIKE 'running'";
		if((!mysqli_num_rows(mysqli_query($con, $bikeQuery))) && $runOrBike == "bike") {
			$createRunOrBikeTable = "CREATE TABLE biking(
									id INT AUTO_INCREMENT,
									date DATE NOT NULL,
									kilometer float NOT NULL,
									time time NOT NULL,
									primary key (id));";
		} elseif((!mysqli_num_rows(mysqli_query($con, $runQuery))) && $runOrBike == "run") {
			$createRunOrBikeTable = "CREATE TABLE running(
									id INT AUTO_INCREMENT,
									date DATE NOT NULL,
									kilometer float NOT NULL,
									time time NOT NULL,
									primary key (id));";
		}	
		isset($createRunOrBikeTable) ? mysqli_query($con, $createRunOrBikeTable) : "";
	}
	
	function rewriteKilometer($km)
	{
		for($i = 0; $i < strlen($km); $i++) {
			if($km[$i] == ",") {
				$km[$i] = ".";
			}
		}
		return $km;
	}

// File to be included in all controllers:
    include "allIncludes.php";
?>