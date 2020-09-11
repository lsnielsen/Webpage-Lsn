
<?php

		$usedCarsButton = isset($_POST['usedCarsArray']) ? $_POST['usedCarsArray'] : ""; 

		if ($usedCarsButton != "") {
			
			$dataArr;
			$counter = 0;

			
			$tempArr = explode(",", $usedCarsButton);
			for($i=0; $i< sizeof($tempArr); $i++) {
				if($tempArr[$i] != "") {
					$tempValue = $tempArr[$i];
					$dataArr[$counter][] = $tempValue;
				}
				if (preg_match('/https:/', $tempValue)) {
					$counter++;
				}					
			}
			for($i=0; $i< sizeof($dataArr); $i++) {
				for($j=0; $j< sizeof($dataArr[$i]); $j++) {
					echo $dataArr[$i][$j] . '<br>';
				}
			}
			
			
			
			
		} else {
			include("../projects/usedCars/frontpage.php");	
		}



?>