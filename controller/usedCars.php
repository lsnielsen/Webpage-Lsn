
<?php

		$usedCarsButton = isset($_POST['usedCarsArray']) ? $_POST['usedCarsArray'] : ""; 
		//echo "used car button: " . $usedCarsButton;
		if ($usedCarsButton != "") {
			echo "do get here? <br>";
			echo '<pre>'; print_r($usedCarsButton); echo '</pre>';

			echo $usedCarsButton;

			echo $usedCarsButton[0];
			//$array=json_decode($_POST['arrayButton'], true);
		} else {
			include("../projects/usedCars/frontpage.php");	
		}



?>