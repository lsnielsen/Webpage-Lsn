
<?php

		$usedCarsButton = isset($_POST['usedCarsButton']) ? $_POST['usedCarsButton'] : ""; 

		if ($usedCarsButton == "usedCarsDownload") {
			$array=json_decode($_POST['jsondata']);
		} else {
			include("../projects/usedCars/frontpage.php");	
		}



?>