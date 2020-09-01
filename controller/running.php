
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
		include "../projects/running/helper/frontPageHelper.php";
		$con = mysqli_connect('127.0.0.1','root','');  
		
		checkDatabase($con);

		$fetchId = "SELECT * FROM running";
		$result = mysqli_query($con,$fetchId);
		$uniqueId = 0;
		while($row = $result->fetch_array()){
			$uniqueId = $row['id'];
		}

		if (isset($_POST['date']) && isset($_POST['km']) && isset($_POST['time'])) {
			
			$date = $_POST['date'];
			$km = $_POST['km'];
			$time = $_POST['time'];
			
			$inputArray = checkRunningInput($date, $km, $time);
			if ($inputArray['returnStm']) {
				$wrongInput = true;
				$id = $uniqueId + 1;
				$sql = "INSERT INTO running (date, kilometer, time) VALUES ('$date','$km', '$time')";  
				  
				if(!mysqli_query($con,$sql)) {  
					echo 'Not inserted';  
				}  
			} else {		
				setUpperRunningHtmlBox();
				setRunningErrorMessageBox($inputArray, $date, $km, $time);
				setLowerRunningHtmlBox();
			}
		}
		
		include("../projects/running/run.php");
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