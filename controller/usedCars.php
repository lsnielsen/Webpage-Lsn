
<?php

		$usedCarsButton = isset($_POST['usedCarsArray']) ? $_POST['usedCarsArray'] : ""; 

		if ($usedCarsButton != "") {
			
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
						$dataIndex['Hk/Nm'] = $dataArr[$i][$j];
					} elseif($j == 2) {
						$dataIndex[$i]['0-100 km/t'] = $dataArr[$i][$j];
					} elseif($j == 3) {
						$dataIndex[$i]['Tophastighed'] = $dataArr[$i][$j];
					} elseif($j == 4) {
						$dataIndex[$i]['Drivmiddel'] = $dataArr[$i][$j];
					} elseif($j == 5) {
						$dataIndex[$i]['Forbrug'] = $dataArr[$i][$j] . "," . $dataArr[$i][$j+1];
					} elseif($j == 7) {
						$dataIndex[$i]['Euronorm'] = $dataArr[$i][$j];
					} elseif($j == 8) {
						$dataIndex[$i]['Bredde'] = $dataArr[$i][$j];
					} elseif($j == 9) {
						$dataIndex[$i]['Lasteevne'] = $dataArr[$i][$j];
					} elseif($j == 10) {
						$dataIndex[$i]['Cylindre'] = $dataArr[$i][$j];
					} elseif($j == 11) {
						$dataIndex[$i]['ABS-bremser'] = $dataArr[$i][$j];
					} elseif($j == 12) {
						$dataIndex[$i]['Airbags'] = $dataArr[$i][$j];
					} elseif($j == 13) {
						$dataIndex[$i]['ESP'] = $dataArr[$i][$j];
					} elseif($j == 14) {
						$dataIndex[$i]['Tank'] = $dataArr[$i][$j];
					} elseif($j == 15) {
						$dataIndex[$i]['Gear'] = $dataArr[$i][$j];
					} elseif($j == 16) {
						$dataIndex[$i]['Geartype'] = $dataArr[$i][$j];
					} elseif($j == 17) {
						$dataIndex[$i]['regDate'] = $dataArr[$i][$j];
					} elseif($j == 18) {
						$dataIndex[$i]['prodDate'] = $dataArr[$i][$j];
					} elseif($j == 19) {
						$dataIndex[$i]['modelDate'] = $dataArr[$i][$j];
					} elseif($j == 20) {
						$dataIndex[$i]['sightDate'] = $dataArr[$i][$j];
					} elseif($j == 21) {
						$dataIndex[$i]['color'] = $dataArr[$i][$j];
					} elseif($j == 22) {
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
			foreach ($dataIndex as $row) { 
				fputcsv($fp, $row); 
			} 
  
			fclose($fp);
			
		} else {
			include("../projects/usedCars/frontpage.php");	
		}



?>