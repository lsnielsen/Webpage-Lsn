
<?php

		$usedCarsArray = isset($_POST['usedCarsArray']) ? $_POST['usedCarsArray'] : ""; 

		if ($usedCarsArray == "") {
			include("../projects/usedCars/frontpage.php");	
		} else {
			include("../projects/usedCars/headerArray.php");

			$bilbasenCount = 0;
			$gulOgGratisCount = 0;
			$dataArr = prepareArray($usedCarsArray);			
			$tempArr = removeBlankColoums($dataArr, $headerArray);
			$dataArr = $tempArr[0];
			$headerArray = $tempArr[1];
			
			sleep(1);

			$fileName = $dataArr[0][2];
			
			$fp = fopen('../diverse/carFiles/Brugte biler - ' . $fileName . '.csv' , 'w');
			fputcsv($fp, $headerArray); 
			foreach ($dataArr as $row) { 
				fputcsv($fp, $row); 
			} 
  
			fclose($fp);
			
			include("../projects/usedCars/frontpage.php");	
			include("../projects/usedCars/usedCarTable.php");	
			
			
		}



	function prepareArray($input)
	{			
		$dataArr;
		$counter = 0;
		$input = explode(",", $input);

		//echo '<pre>'; print_r($input); echo '</pre>';
		
		for($i=0; $i< sizeof($input); $i++) {
			if($input[$i] != "") {
				$tempValue = trim(preg_replace('/\n/', ' ', $input[$i]));
				$dataArr[$counter][] = $tempValue;
			}
			if (isset($input[$i+1])) {
				$bilbasenUrl = preg_match("/https:\/\/www.bilbasen.dk\/brugt\//", $input[$i+1]);
				$gogUrl = preg_match("/https:\/\/www.guloggratis.dk\/biler\/personbiler\//", $input[$i+1]);
				if ($bilbasenUrl) {
					$GLOBALS['bilbasenCount']++; 
					$counter++;
				} elseif ($gogUrl) {
					$counter++;
					$GLOBALS['gulOgGratisCount']++;
				}
			}					
		}
		return $dataArr;
	}







	function removeBlankColoums($array, $titleArray)
	{
		//echo '<pre>'; print_r($titleArray); echo '</pre>';
		//echo '<pre>'; print_r($array[0]); echo '</pre>';
		
		$blankTest;
		
		for ($i=0; $i<sizeof($array); $i++) {
			for ($j=28; $j<sizeof($array[$i]); $j++) {
				if ($array[$i][$j] != "-") {
					$blankTest[$j] = true;
				} elseif ($array[$i][$j] == "-" && !isset($blankTest[$j])) {
					$blankTest[$j] = false;
				}
			}
		}
		
		
		$keys = array_keys($blankTest); 
		//echo '<pre>'; print_r($blankTest); echo '</pre>';
		//echo '<pre>'; print_r($keys); echo '</pre>';
		
		for ($i=0; $i<sizeof($array); $i++) {
			$columnCounter = 0;
			for ($j=0; $j<sizeof($keys); $j++) {
				if($blankTest[$keys[$j]] == false) {
					//echo "columnCounter: " . $columnCounter . ", and j = " . $j . "<br>";
					array_splice($array[$i], $keys[$j - $columnCounter], 1);
					$columnCounter++;
				}
			}
		}
		$columnCounter = 0;

		for ($j=0; $j<sizeof($keys); $j++) {
			if($blankTest[$keys[$j]] == false) {
				//echo "About to splice titleArray with j = " . $j . ", and keys[j] = " . $keys[$j] . " <br>";
				array_splice($titleArray, $keys[$j-$columnCounter], 1);
					$columnCounter++;
			}
		}
	
		


		//echo '<pre>'; print_r($blankTest); echo '</pre>';
		//echo '<pre>'; print_r($keys); echo '</pre>';
		//echo '<pre>'; print_r($titleArray); echo '</pre>';
		//echo '<pre>'; print_r($array[0]); echo '</pre>';

		return [$array, $titleArray];
	}
	
	
		
		
		
		
		
		
		
?>