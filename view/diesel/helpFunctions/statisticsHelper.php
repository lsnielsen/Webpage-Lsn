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
		$averageKmPerLiter = $array[0]['averageKmPerLiter'];
		$averageKmPerKr = $array[0]['averageKmPerKr'];
		$averageKrPerLiter = $array[0]['averageKrPerLiter'];
		$averageKrPerKm = $array[0]['averageKrPerKm'];
		$averageLiterPerKm = $array[0]['averageLiterPerKm'];
		$averageLiterPerKr = $array[0]['averageLiterPerKr'];
		
		$krPerLiterTemp = 0;
		$krTemp = 0;
		$literTemp = 0;

		for ($i = 0; $i<sizeof($array); $i++) {
			$array[$i]['krPerLiterStDev'] = pow($array[$i]['kr/l'] - $averageKrPerLiter, 2);
			$krPerLiterTemp += pow($array[$i]['kr/l'] - $averageKrPerLiter, 2);

			$array[$i]['krStDev'] = pow($array[$i]['kroner'] - $averageKr, 2);
			$krTemp += pow($array[$i]['kroner'] - $averageKr, 2);

			$array[$i]['literStDev'] = pow($array[$i]['liter'] - $averageLiter, 2);
			$literTemp += pow($array[$i]['liter'] - $averageLiter, 2);
		}
			$array[0]['krPerLiterVariance'] = $krPerLiterTemp / $counter;
			$array[0]['krPerLiterStandardDev'] = sqrt($array[0]['krPerLiterVariance']);
			$array[0]['krPerLiterMedian'] = calculateMedian($krPerLiterArray, $counter);
			
			$array[0]['krVariance'] = $krTemp / $counter;
			$array[0]['krStDev'] = sqrt($array[0]['krVariance']);
			$array[0]['krMedian'] = calculateMedian($krArray, $counter);
			
			$array[0]['literVariance'] = $literTemp / $counter;
			$array[0]['literStDev'] = sqrt($array[0]['literVariance']);
			$array[0]['literMedian'] = calculateMedian($literArray, $counter);
			
		return $array;
	}
	
	
	
	function calculateMedian($array, $counter) {
		$counter;
		$middleval = floor(($counter-1)/2); // find the middle value, or the lowest middle value
		if($counter % 2) { // odd number, middle is the median
			$median = $array[$middleval];
		} else { // even number, calculate avg of 2 medians
			$low = $array[$middleval];
			$high = $array[$middleval+1];
			$median = (($low+$high)/2);
		}
    return $median;
}
	
?>