
<?php

	$bikeButton = isset($_POST['bikeButton']) ? $_POST['bikeButton'] : "";
	
	if ($bikeButton == "bikePage") {
		setBikeFrontpage();
	} elseif (is_numeric($bikeButton)) {
		deleteBikeRow($bikeButton);
		setBikeFrontpage();
	}

	function deleteBikeRow($id)
	{		
		$con = mysqli_connect('127.0.0.1','root','');  
		if(!$con) {  
			echo 'not connect to the server';  
		}  
		if(!mysqli_select_db($con,'lsnDb')) {  
			echo 'database not selected';  
		}  
		$query = "DELETE FROM biking WHERE biking.id = $id";
		mysqli_query($con, $query);
	}

	function setBikeFrontpage()
	{
		session_start();
		include "../projects/biking/helper/frontPageHelper.php";
		$con = mysqli_connect('127.0.0.1','root','');  
		
		checkDatabase($con);
		
		$dateCheck = (isset($_SESSION['date']) && isset($_POST['date'])) ? $_SESSION['date'] != $_POST['date'] : true;
		$kmCheck = (isset($_SESSION['km']) && isset($_POST['km'])) ? $_SESSION['km'] != $_POST['km'] : true;
		$timeCheck = (isset($_SESSION['time']) && isset($_POST['time'])) ? $_SESSION['time'] != $_POST['time'] : true;
		//echo "before isset check <br> <br>";
		
		//echo "dateCheck: " . $dateCheck . ", date post: " . $_POST['date'] . ", date session: " . $_SESSION['date'] . "<br>";
		//echo "kmCheck: " . $kmCheck . ", km post: " . $_POST['km'] . ", km session: " . $_SESSION['km'] . "<br>";
		//echo "timeCheck: " . $timeCheck . ", time post: " . $_POST['time'] . ", time session: " . $_SESSION['time'] . "<br> <br>";
		
		if (isset($_POST['date']) && isset($_POST['km']) && isset($_POST['time']) && ($dateCheck || $kmCheck || $timeCheck)) {
		//echo "after isset check <br>";
			
			$_SESSION['date'] = $_POST['date'];
			$_SESSION['km'] = $_POST['km'];
			$_SESSION['time'] = $_POST['time'];
			
			$date = $_POST['date'];
			$km = $_POST['km'];
			$time = $_POST['time'];
			$time = formatTime($time);

			$inputArray = checkBikeInput($date, $km, $time);
			//echo "km: " . $km . '<br>';
			$km = rewriteKilometer($km);
			//echo "km: " . $km . '<br>';
			if ($inputArray['returnStm']) {
				$wrongInput = true;
				$sql = "INSERT INTO biking (date, kilometer, time) VALUES ('$date','$km', '$time')";  
				  
				if(!mysqli_query($con,$sql)) {  
					echo 'Not inserted';  
				}  
			} else {		
				setUpperBikeHtmlBox();
				setBikeErrorMessageBox($inputArray, $date, $km, $time);
				setLowerBikeHtmlBox();
			}
		} else {
			unset($_SESSION['km']); 
			unset($_SESSION['date']); 
			unset($_SESSION['time']); 
			unset($_POST['km']); 
			unset($_POST['date']); 
			unset($_POST['time']); 
		}
		
		include("../projects/biking/bike.php");
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
	
	function checkDatabase($con)
	{
		if(!$con) {  
			echo 'not connect to the server';  
		}  
		if(!mysqli_select_db($con,'lsnDb')) {  
			echo 'database not selected';  
		}  
		
		$query = "SHOW TABLES LIKE 'biking'";
		if(mysqli_num_rows(mysqli_query($con, $query))) {
			
		} else {
			$createBikeTable = "CREATE TABLE biking(
									id INT AUTO_INCREMENT,
									date DATE NOT NULL,
									kilometer float NOT NULL,
									time time NOT NULL,
									primary key (id));";
			mysqli_query($con, $createBikeTable);
		}	
	}
?>