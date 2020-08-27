<?php
	function calculateStatisticData($array)
	{
		$counter = 0;
		$kmSum = 0;
		$literSum = 0;
		$krSum = 0;
		$kmPerLiterSum = 0;
		$kmPerKrSum = 0;
		$krPerLiterSum = 0;
		$krPerKmSum = 0;
		$literPerKmSum = 0;
		$literPerKrSum= 0;
		
		for ($i = 0; $i<sizeof($array); $i++) {
			$kmArray[] = $array[$i]['kilometer'];
			$literArray[] = $array[$i]['liter'];
			$krArray[] = $array[$i]['kroner'];
			$kmPerLiterArray[] = $array[$i]['km/l'];
			$kmPerKrArray[] = $array[$i]['km/kr'];
			$krPerLiterArray[] = $array[$i]['kr/l'];
			$krPerKmArray[] = $array[$i]['kr/km'];
			$literPerKmArray[] = $array[$i]['l/km'];
			$literPerKrArray[] = $array[$i]['l/kr'];
		}


		for ($i = 0; $i<sizeof($array); $i++) {
			$kmSum += $array[$i]['kilometer'];
			$literSum += $array[$i]['liter'];
			$krSum += $array[$i]['kroner'];
			
			$kmPerLiterSum += $array[$i]['km/l'];
			$kmPerKrSum += $array[$i]['km/kr'];
			
			$krPerLiterSum += $array[$i]['kr/l'];
			$krPerKmSum += $array[$i]['kr/km'];
			
			$literPerKmSum += $array[$i]['l/km'];
			$literPerKrSum += $array[$i]['l/kr'];
			$counter += 1;
		}
		
		$averageKm = $array[0]['averageKm'];
		$averageLiter = $array[0]['averageLiter'];
		$averageKr = $array[0]['averageKr'];
		$averageKrPerLiter = $array[0]['averageKrPerLiter'];
		$averageKmPerLiter = $array[0]['averageKmPerLiter'];
		$averageKmPerKr = $array[0]['averageKmPerKr'];
		$averageKrPerKm = $array[0]['averageKrPerKm'];
		$averageLiterPerKm = $array[0]['averageLiterPerKm'];
		$averageLiterPerKr = $array[0]['averageLiterPerKr'];
		
		$kmTemp = 0;
		$krTemp = 0;
		$literTemp = 0;
		$krPerLiterTemp = 0;
		$kmPerLiterTemp = 0;
		$kmPerKrTemp = 0;
		$krPerKmTemp = 0;
		$literPerKmTemp = 0;
		$literPerKrTemp = 0;

		for ($i = 0; $i<sizeof($array); $i++) {
			$array[$i]['kilometerStDev'] = sqrt(pow(($array[$i]['kilometer'] - $averageKm), 2));
			$kmTemp += sqrt(pow(($array[$i]['kilometer'] - $averageKm), 2));

			$array[$i]['krStDev'] = sqrt(pow(($array[$i]['kroner'] - $averageKr), 2));
			$krTemp += sqrt(pow(($array[$i]['kroner'] - $averageKr), 2));

			$array[$i]['literStDev'] = sqrt(pow(($array[$i]['liter'] - $averageLiter), 2));
			$literTemp += sqrt(pow(($array[$i]['liter'] - $averageLiter), 2));

			$array[$i]['krPerLiterStDev'] = sqrt(pow(($array[$i]['kr/l'] - $averageKrPerLiter), 2));
			$krPerLiterTemp += sqrt(pow(($array[$i]['kr/l'] - $averageKrPerLiter), 2));

			$array[$i]['kmPerLiterStDev'] = sqrt(pow(($array[$i]['km/l'] - $averageKmPerLiter), 2));
			$kmPerLiterTemp += sqrt(pow(($array[$i]['km/l'] - $averageKmPerLiter), 2));

			$array[$i]['kmPerKrStDev'] = sqrt(pow(($array[$i]['km/kr'] - $averageKmPerKr), 2));
			$kmPerKrTemp += sqrt(pow(($array[$i]['km/kr'] - $averageKmPerKr), 2));
			//$kmPerKrTemporary = pow(($array[$i]['km/kr'] - $averageKmPerKr), 2);

			$array[$i]['krPerKmStDev'] = sqrt(pow(($array[$i]['kr/km'] - $averageKrPerKm), 2));
			$krPerKmTemp += sqrt(pow(($array[$i]['kr/km'] - $averageKrPerKm), 2));

			$array[$i]['literPerKmStDev'] = sqrt(pow(($array[$i]['l/km'] - $averageLiterPerKm), 2));
			$literPerKmTemp += sqrt(pow(($array[$i]['l/km'] - $averageLiterPerKm), 2));

			$array[$i]['literPerKrStDev'] = sqrt(pow(($array[$i]['l/kr'] - $averageLiterPerKr), 2));
			$literPerKrTemp += sqrt(pow(($array[$i]['l/kr'] - $averageLiterPerKr), 2));
		}
		
		$array[0]['kilometerVariance'] = $kmTemp / $counter;
		$array[0]['kilometerStandardDev'] = sqrt($array[0]['kilometerVariance']);
		$array[0]['kilometerMedian'] = calculateMedian($kmArray);
		
		$array[0]['krVariance'] = $krTemp / $counter;
		$array[0]['krStandardDev'] = sqrt($array[0]['krVariance']);
		$array[0]['krMedian'] = calculateMedian($krArray);
		
		$array[0]['literVariance'] = $literTemp / $counter;
		$array[0]['literStandardDev'] = sqrt($array[0]['literVariance']);
		$array[0]['literMedian'] = calculateMedian($literArray);
		
		$array[0]['krPerLiterVariance'] = $krPerLiterTemp / $counter;
		$array[0]['krPerLiterStandardDev'] = sqrt($array[0]['krPerLiterVariance']);
		$array[0]['krPerLiterMedian'] = calculateMedian($krPerLiterArray);
		
		$array[0]['kmPerLiterVariance'] = $kmPerLiterTemp / $counter;
		$array[0]['kmPerLiterStandardDev'] = sqrt($array[0]['kmPerLiterVariance']);
		$array[0]['kmPerLiterMedian'] = calculateMedian($kmPerLiterArray);
		
		$array[0]['kmPerKrVariance'] = $kmPerKrTemp / $counter;
		$array[0]['kmPerKrStandardDev'] = sqrt($array[0]['kmPerKrVariance']);
		$array[0]['kmPerKrMedian'] = calculateMedian($kmPerKrArray);
		
		$array[0]['krPerKmVariance'] = $krPerKmTemp / $counter;
		$array[0]['krPerKmStandardDev'] = sqrt($array[0]['krPerKmVariance']);
		$array[0]['krPerKmMedian'] = calculateMedian($krPerKmArray);
		
		$array[0]['literPerKmVariance'] = $literPerKmTemp / $counter;
		$array[0]['literPerKmStandardDev'] = sqrt($array[0]['literPerKmVariance']);
		$array[0]['literPerKmMedian'] = calculateMedian($literPerKmArray);
		
		$array[0]['literPerKrVariance'] = $literPerKrTemp / $counter;
		$array[0]['literPerKrStandardDev'] = sqrt($array[0]['literPerKrVariance']);
		$array[0]['literPerKrMedian'] = calculateMedian($literPerKrArray);
			
		$array[0]['kmFrequency'] = kmFrequency($array);

		return $array;
	}
	
	function kmFrequency($array)
	{
		$returnArray['0:800'] = 0;
		$returnArray['800:850'] = 0;
		$returnArray['850:900'] = 0;
		$returnArray['900:950'] = 0;
		$returnArray['950:1000'] = 0;
		$arrayLength = sizeof($array);
		
		for($i=0; $i<$arrayLength; $i++) {
			$kmValue = $array[$i]['kilometer'];
			if ($kmValue > 0 && $kmValue <= 800) {
				$returnArray['0:800'] += 1;
			} elseif ($kmValue > 800 && $kmValue <= 850) {
				$returnArray['800:850'] += 1;
			} elseif ($kmValue > 850 && $kmValue <= 900) {
				$returnArray['850:900'] += 1;
			} elseif ($kmValue > 900 && $kmValue <= 950) {
				$returnArray['900:950'] += 1;
			} elseif ($kmValue > 950 && $kmValue <= 1000) {
				$returnArray['950:1000'] += 1;
			}
		}
		$returnArray['0:800'] = $returnArray['0:800'] / $arrayLength * 100;
		$returnArray['800:850'] = $returnArray['800:850'] / $arrayLength * 100;
		$returnArray['850:900'] = $returnArray['850:900'] / $arrayLength * 100;
		$returnArray['900:950'] = $returnArray['900:950'] / $arrayLength * 100;
		$returnArray['950:1000'] = $returnArray['950:1000'] / $arrayLength * 100;
	
		return $returnArray;
	}
	
	
	
	function calculateMedian($array) {
		sort($array);
		$counter = count($array);
		$middleval = floor(($counter-1)/2);
		if($counter % 2) {
			$median = $array[$middleval];
		} else { 
			$low = $array[$middleval];
			$high = $array[$middleval+1];
			$median = ($low+$high)/2;
		}
    return $median;
}
	
?>