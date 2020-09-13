
<?php

		$usedCarsArray = isset($_POST['usedCarsArray']) ? $_POST['usedCarsArray'] : ""; 

		if ($usedCarsArray != "") {
			
			$headerArray = ['Link', 'Bilmærke', 'Motor', 'Pris',
							'Hk/Nm', "0-100 km/t", "Tophastighed", "Drivmiddel", 
							"Forbrug", "Euronorm", "Bredde", "Lasteevne", "Cylindre", 
							"ABS-bremser", "Airbags", "ESP", "Tank", "Gear", "Geartype", 
							"Registrerings dato", "Produktions år", "Modelår", 
							"Synet", "Farve"];
			$dataArr;
			$counter = 0;
			$usedCarsArray = explode(",", $usedCarsArray);
			
			
			//echo '<pre>'; print_r($usedCarsArray); echo '</pre>';
			
			
			
			for($i=0; $i< sizeof($usedCarsArray); $i++) {
				if($usedCarsArray[$i] != "") {
					$tempValue = trim(preg_replace('/\n/', ' ', $usedCarsArray[$i]));
					//$tempValue = str_replace(' ', '', $tempValue);
					$dataArr[$counter][] = $tempValue;
				}
				if (isset($usedCarsArray[$i+1]) && preg_match("/https:\/\/www.bilbasen.dk\/brugt\//", $usedCarsArray[$i+1])) {
					$counter++;
				}					
			}
			echo '<pre>'; print_r($dataArr); echo '</pre>';
			
			$fp = fopen('data.csv' , 'w');
			fputcsv($fp, $headerArray); 
			foreach ($dataArr as $row) { 
				fputcsv($fp, $row); 
			} 
  
			fclose($fp);
			
		} else {
			include("../projects/usedCars/frontpage.php");	
		}



?>