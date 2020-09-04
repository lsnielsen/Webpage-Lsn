
<?php

	$runButton = isset($_POST['runButton']) ? $_POST['runButton'] : "";
	
	if ($runButton == "runPage") {
		setRunningFrontpage();
	} elseif (is_numeric($runButton)) {
		deleteRunningRow($runButton);
		setRunningFrontpage();
	}

	function deleteRunningRow($id)
	{		
		$con = mysqli_connect('127.0.0.1','root','');  
		if(!$con) {  
			echo 'not connect to the server';  
		}  
		if(!mysqli_select_db($con,'lsnDb')) {  
			echo 'database not selected';  
		}  
		$query = "DELETE FROM running WHERE running.id = $id";
		mysqli_query($con, $query);
	}

	function setRunningFrontpage()
	{
		session_start();
		include "../projects/running/helper/frontPageHelper.php";
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

			$inputArray = checkRunningInput($date, $km, $time);
			//echo "km: " . $km . '<br>';
			$km = rewriteKilometer($km);
			//echo "km: " . $km . '<br>';
			if ($inputArray['returnStm']) {
				$wrongInput = true;
				$sql = "INSERT INTO running (date, kilometer, time) VALUES ('$date','$km', '$time')";  
				  
				if(!mysqli_query($con,$sql)) {  
					echo 'Not inserted';  
				}  
			} else {		
				setUpperRunningHtmlBox();
				setRunningErrorMessageBox($inputArray, $date, $km, $time);
				setLowerRunningHtmlBox();
			}
		} else {
			unset($_SESSION['km']); 
			unset($_SESSION['date']); 
			unset($_SESSION['time']); 
			unset($_POST['km']); 
			unset($_POST['date']); 
			unset($_POST['time']); 
		}
		
		include("../projects/running/run.php");
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
		
		$query = "SHOW TABLES LIKE 'running'";
		if(mysqli_num_rows(mysqli_query($con, $query))) {
			
		} else {
			$createRunningTable = "CREATE TABLE running(
									id INT AUTO_INCREMENT,
									date DATE NOT NULL,
									kilometer float NOT NULL,
									time time NOT NULL,
									primary key (id));";
			mysqli_query($con, $createRunningTable);
		}	
	}
?>