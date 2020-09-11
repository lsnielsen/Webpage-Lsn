
<?php

		$usedCarsButton = isset($_POST['usedCarsArray']) ? $_POST['usedCarsArray'] : ""; 
		//echo "used car button: " . $usedCarsButton;
		if ($usedCarsButton != "") {
			echo "do get here? <br>";
			//echo '<pre>'; print_r($usedCarsButton); echo '</pre>';

			//echo $usedCarsButton;

			$tempArr = explode(",", $usedCarsButton);
			for($i=0; $i< sizeof($tempArr); $i++) {
				if($tempArr[$i] != "") {
					echo $tempArr[$i] . '<br>';
				}
			}
			//echo '<pre>'; print_r($tempArr); echo '</pre>';
			//echo $tempArr[93];
			
		} else {
			include("../projects/usedCars/frontpage.php");	
		}



?>