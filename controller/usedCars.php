
<?php

		$usedCarsArray = isset($_POST['usedCarsArray']) ? $_POST['usedCarsArray'] : ""; 

		if ($usedCarsArray == "") {
			include("../projects/usedCars/frontpage.php");	
		} else {
			
			$headerArray = ['Link', 'Kontakt info', 'Bilmærke', 'Motor', 'Pris', 'Kørte kilometer',
							'Hk/Nm', "Registrerings dato", "0-100 km/t", "Tophastighed", "Drivmiddel", 
							"Forbrug", "Lasteevne", "Trækhjul", "Cylindre", 
							"ABS-bremser", "Max påhæng", "Airbags", "ESP", "Tank", 
							"Gear", "Geartype", "Vægt", "Døre", 
							"Produktions år", "Modelår", 
							"Synet", "Farve", "Alufælge", "Andriod auto", 
							"Anhængertræk", "Anhængertræk aftagl.", "Antispin", "Apple carplay", 
							"Euronorm", "Bredde", "Længde", "Højde", 
							"Armlæn", "Auto. nødbremse", "Auto parkering", "Auto start/stop", 
							"Automatisk lys", "AUX tilslutning", "Bakkamera", 
							"Bakspejl m. nedbl.", "Bi-xenon", "Blindvinkelassistent", "Bluetooth", 
							"Brugtbilsattest", "Centrallås fjernb.", "Dab radio", "Dæktryksmåler", 
							"Digitalt cockpit", "El inst. førersæde m. memory", "Elektrisk kabinevarmer", 
							"Elektrisk parkeringsbremse", "Elektrisk komfortsæder", "Elektriskbagklap", 
							"El-klapbare sidespejle m. varme", "Elruder, 4x", "Fartpilot", "Fartpilot adaptiv", 
							"Fjernlysassistent", "Fuld LED forlygter", "Head-up display", "Infocenter", 
							"Internet", "Isofix", "Klimaanlæg, 4-zonet", "Kørecomputer", "Kurvelys", 
							"Læderrat", "LED kørelys", "Lygtevasker", "Musik via bluetooth", "Navigation", 
							"Nøglefri betjening", "Panoramatag", "Parkeringssensor (bag)", 
							"Parkeringssensor (for)", "Regnsensor", "Sædebetræk, dellæder", 
							"Sædebetræk, læder", "Sædevarme", "SD kortlæser", "Service ok", "Servo", 
							"Skiltegenkendelse", "Soltag, elektrisk", "Soltag, manuelt", "Splitbagsæde", 
							"Sportssæder", "Startspærre", "Svingbart træk (elektrisk)", "Svingbart træk (manuelt", 
							"Tågelygter", "Tagræling", "Trådløs mobilopladning", "Træthedsregistrering", 
							"Undervogn sænket", "USB tilslutning", "Vognbaneassistent", "Xenonlygter"];
	

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
			for ($j=31; $j<sizeof($array[$i]); $j++) {
				if ($array[$i][$j] == "-" || !isset($blankTest[$j])) {
					$blankTest[$j] = true;
				} else {
					$blankTest[$j] = false;
				}
			}
		}
		
		
		$keys = array_keys($blankTest); 
		for ($i=0; $i<sizeof($array); $i++) {
			$columnCounter = 0;
			for ($j=0; $j<sizeof($keys); $j++) {
				if($blankTest[$keys[$j]] == true) {
					//echo "columnCounter: " . $columnCounter . ", and j = " . $j . "<br>";
					array_splice($array[$i], $keys[$j - $columnCounter], 1);
					$columnCounter++;
				}
			}
		}
		$columnCounter = 0;

		for ($j=0; $j<sizeof($keys); $j++) {
			if($blankTest[$keys[$j]] == true) {
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