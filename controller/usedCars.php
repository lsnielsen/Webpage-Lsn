
<?php

		$usedCarsButton = isset($_POST['usedCarsArray']) ? $_POST['usedCarsArray'] : ""; 

		if ($usedCarsButton != "") {
			
			$headerArray = ['Hk/Nm', "0-100 km/t", "Tophastighed", "Drivmiddel", 
							"Forbrug", "Euronorm", "Bredde", "Lasteevne", "Cylindre", 
							"ABS-bremser", "Airbags", "ESP", "Tank", "Gear", "Geartype", 
							"Registrerings dato", "Produktions år", "Sidste synsdato", "Farve", "Pris"];
			$dataArr;
			$counter = 0;
			$dataIndex;
			
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
			for($i=0; $i< sizeof($dataArr); $i++) {
				for($j=0; $j< sizeof($dataArr[$i]); $j++) {
					if($j == 0) {
						$dataIndex[$i]['Hk/Nm'] = $dataArr[$i][$j];
					} elseif($j == 1) {
						$dataIndex[$i]['0-100 km/t'] = $dataArr[$i][$j];
					} elseif($j == 2) {
						$dataIndex[$i]['Tophastighed'] = $dataArr[$i][$j];
					} elseif($j == 3) {
						$dataIndex[$i]['Drivmiddel'] = $dataArr[$i][$j];
					} elseif($j == 4) {
						$dataIndex[$i]['Forbrug'] = $dataArr[$i][$j] . "," . $dataArr[$i][$j+1];
					} elseif($j == 6) {
						$dataIndex[$i]['Euronorm'] = $dataArr[$i][$j];
					} elseif($j == 7) {
						$dataIndex[$i]['Bredde'] = $dataArr[$i][$j];
					} elseif($j == 8) {
						$dataIndex[$i]['Lasteevne'] = $dataArr[$i][$j];
					} elseif($j == 9) {
						$dataIndex[$i]['Cylindre'] = $dataArr[$i][$j];
					} elseif($j == 10) {
						$dataIndex[$i]['ABS-bremser'] = $dataArr[$i][$j];
					} elseif($j == 11) {
						$dataIndex[$i]['Airbags'] = $dataArr[$i][$j];
					} elseif($j == 12) {
						$dataIndex[$i]['ESP'] = $dataArr[$i][$j];
					} elseif($j == 13) {
						$dataIndex[$i]['Tank'] = $dataArr[$i][$j];
					} elseif($j == 14) {
						$dataIndex[$i]['Gear'] = $dataArr[$i][$j];
					} elseif($j == 15) {
						$dataIndex[$i]['Geartype'] = $dataArr[$i][$j];
					} elseif($j == 16) {
						$dataIndex[$i]['regDate'] = $dataArr[$i][$j];
					} elseif($j == 17) {
						$dataIndex[$i]['prodDate'] = $dataArr[$i][$j];
					} elseif($j == 18) {
						$dataIndex[$i]['modelDate'] = $dataArr[$i][$j];
					} elseif($j == 19) {
						$dataIndex[$i]['sightDate'] = $dataArr[$i][$j];
					} elseif($j == 20) {
						$dataIndex[$i]['color'] = $dataArr[$i][$j];
					} elseif($j == 21) {
						$dataIndex[$i]['price'] = $dataArr[$i][$j];
					}
				}
				$dataIndex[$i]['url'] = $dataArr[$i][sizeof($dataArr[$i])-1];
			}
			for($i=0; $i< sizeof($dataArr); $i++) {
				for($j=23; $j< sizeof($dataArr[$i])-2; $j++) {
					$dataIndex[$i]["extraEquipment"][] = $dataArr[$i][$j];
				}
			}
			
			
			echo '<pre>'; print_r($dataIndex); echo '</pre>';
			
			
			$fp = fopen('data.csv' , 'w');
			fputcsv($fp, $headerArray); 
			foreach ($dataIndex as $row) { 
				fputcsv($fp, $row); 
			} 
  
			fclose($fp);
			
		} else {
			include("../projects/usedCars/frontpage.php");	
		}



?>