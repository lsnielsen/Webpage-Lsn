
<?php

		$usedCarsArray = isset($_POST['usedCarsArray']) ? $_POST['usedCarsArray'] : ""; 

		if ($usedCarsArray != "") {
			
			$headerArray = ['Link', 'Kontakt info', 'Bilmærke', 'Motor', 'Pris',
							'Hk/Nm', "0-100 km/t", "Tophastighed", "Drivmiddel", 
							"Forbrug", "Euronorm", "Bredde", "Længde", "Højde", 
							"Lasteevne", "Trækhjul", "Cylindre", 
							"ABS-bremser", "Max påhæng", "Airbags", "ESP", "Tank", 
							"Gear", "Geartype", "Vægt", "Døre", 
							"Registrerings dato", "Produktions år", "Modelår", 
							"Synet", "Farve", "Alufælge", "Andriod auto", 
							"Anhængertræk", "Anhængertræk aftagl.", "Antispin", "Apple carplay", 
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
			$dataArr;
			$counter = 0;
			$usedCarsArray = explode(",", $usedCarsArray);
			
			for($i=0; $i< sizeof($usedCarsArray); $i++) {
				if($usedCarsArray[$i] != "") {
					$tempValue = trim(preg_replace('/\n/', ' ', $usedCarsArray[$i]));
					$dataArr[$counter][] = $tempValue;
				}
				if (isset($usedCarsArray[$i+1]) && preg_match("/https:\/\/www.bilbasen.dk\/brugt\//", $usedCarsArray[$i+1])) {
					$counter++;
				}					
			}
			
			$tempArr = removeBlankColoums($dataArr, $headerArray);
			$dataArr = $tempArr[0];
			$headerArray = $tempArr[1];
			
			
			$fileName = $dataArr[0][2];
			
			$fp = fopen('Brugte biler - ' . $fileName . '.csv' , 'w');
			fputcsv($fp, $headerArray); 
			foreach ($dataArr as $row) { 
				fputcsv($fp, $row); 
			} 
  
			fclose($fp);
			
			include("../projects/usedCars/frontpage.php");	
			include("../projects/usedCars/usedCarTable.php");	
			
			
			//echo '<pre>'; print_r($dataArr); echo '</pre>';
		} else {
			include("../projects/usedCars/frontpage.php");	
		}



		function removeBlankColoums($array, $titleArray)
		{
			//echo '<pre>'; print_r($titleArray); echo '</pre>';
			//echo '<pre>'; print_r($array[0]); echo '</pre>';
			$blankTester;
			for ($i=0; $i<sizeof($array); $i++) {
				for ($j=31; $j<sizeof($array[$i]); $j++) {
					if ($array[$i][$j] == "-") {
						$blankTester[$j] = true;
					} else {
						$blankTester[$j] = false;
						continue;
					}
				}
			}
			
			
			$keys = array_keys($blankTester); 
			for ($i=0; $i<sizeof($array); $i++) {
				$columnCounter = 0;
				for ($j=0; $j<sizeof($keys); $j++) {
					if($blankTester[$keys[$j]] == true) {
						//echo "columnCounter: " . $columnCounter . ", and j = " . $j . "<br>";
						array_splice($array[$i], $keys[$j - $columnCounter], 1);
						$columnCounter++;
					}
				}
			}
			$columnCounter = 0;

			for ($j=0; $j<sizeof($keys); $j++) {
				if($blankTester[$keys[$j]] == true) {
					//echo "About to splice titleArray with j = " . $j . ", and keys[j] = " . $keys[$j] . " <br>";
					array_splice($titleArray, $keys[$j-$columnCounter], 1);
						$columnCounter++;
				}
			}
		
			


			//echo '<pre>'; print_r($blankTester); echo '</pre>';
			//echo '<pre>'; print_r($keys); echo '</pre>';
			//echo '<pre>'; print_r($titleArray); echo '</pre>';

			return [$array, $titleArray];
		}
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
?>