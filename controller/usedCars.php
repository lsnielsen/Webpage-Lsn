
<?php

		$usedCarsArray = isset($_POST['usedCarsArray']) ? $_POST['usedCarsArray'] : ""; 

		if ($usedCarsArray != "") {
			
			$headerArray = ['Link', 'Bilmærke', 'Motor', 'Pris',
							'Hk/Nm', "0-100 km/t", "Tophastighed", "Drivmiddel", 
							"Forbrug", "Euronorm", "Bredde", "Længde", "Højde", 
							"Lasteevne", "Trækhjul", "Cylindre", 
							"ABS-bremser", "Max påhæng", "Airbags", "ESP", "Tank", 
							"Gear", "Geartype", "Vægt", "Døre", 
							"Registrerings dato", "Produktions år", "Modelår", 
							"Synet", "Farve", "ABS-bremser", "Alufælge", "Andriod auto", 
							"Anhængertræk", "Anhængertræk aftagl.", "Antispin", "Apple carplay", 
							"Armlæn", "Auto. nødbremse", "Auto parkering", "Auto start/stop", 
							"Automatgear", "Automatisk lys", "AUX tilslutning", "Bakkamera", 
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
			
			include("../projects/usedCars/frontpage.php");	
		} else {
			include("../projects/usedCars/frontpage.php");	
		}



?>