
<?php

		$usedCarsButton = isset($_POST['usedCarsArray']) ? $_POST['usedCarsArray'] : ""; 

		if ($usedCarsButton != "") {
			
			$dataArr;
			$counter = 0;

			
			$tempArr = explode(",", $usedCarsButton);
			for($i=0; $i< sizeof($tempArr); $i++) {
				if($tempArr[$i] != "") {
					$tempValue = trim(preg_replace('/\s\s+/', ' ', $tempArr[$i]));
					$tempValue = str_replace(' ', '', $tempValue);
					$dataArr[$counter][] = $tempValue;
				}
				if (preg_match("/https:\/\/www.bilbasen.dk\/brugt\//", $tempValue)) {
					$counter++;
				}					
			}
			//for($i=0; $i< sizeof($dataArr); $i++) {
			//	for($j=0; $j< sizeof($dataArr[$i]); $j++) {
			//		echo $dataArr[$i][$j] . '<br>';
			//	}
			//}
			echo '<pre>'; print_r($dataArr); echo '</pre>';
			
			
			$f = fopen('data.csv' , 'wb');
			fwrite($f , " sadfdsf");
			fclose($f);
			
		} else {
			include("../projects/usedCars/frontpage.php");	
		}



?>