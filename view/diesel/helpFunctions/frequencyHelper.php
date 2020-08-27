<?php
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
	
	function literFrequency($array)
	{
		$returnArray['0:20'] = 0;
		$returnArray['20:25'] = 0;
		$returnArray['25:30'] = 0;
		$returnArray['30:35'] = 0;
		$returnArray['35:40'] = 0;
		$returnArray['40:45'] = 0;
		$arrayLength = sizeof($array);
		
		for($i=0; $i<$arrayLength; $i++) {
			$literValue = $array[$i]['liter'];
			if ($literValue > 0 && $literValue <= 20) {
				$returnArray['0:20'] += 1;
			} elseif ($literValue > 20 && $literValue <= 25) {
				$returnArray['20:25'] += 1;
			} elseif ($literValue > 25 && $literValue <= 30) {
				$returnArray['25:30'] += 1;
			} elseif ($literValue > 30 && $literValue <= 35) {
				$returnArray['30:35'] += 1;
			} elseif ($literValue > 35 && $literValue <= 40) {
				$returnArray['35:40'] += 1;
			} elseif ($literValue > 40 && $literValue <= 45) {
				$returnArray['40:45'] += 1;
			}
		}
		$returnArray['0:20'] = $returnArray['0:20'] / $arrayLength * 100;
		$returnArray['20:25'] = $returnArray['20:25'] / $arrayLength * 100;
		$returnArray['25:30'] = $returnArray['25:30'] / $arrayLength * 100;
		$returnArray['30:35'] = $returnArray['30:35'] / $arrayLength * 100;
		$returnArray['35:40'] = $returnArray['35:40'] / $arrayLength * 100;
		$returnArray['40:45'] = $returnArray['40:45'] / $arrayLength * 100;
	
		return $returnArray;
	}
	
	function kronerFrequency($array)
	{
		$returnArray['100:150'] = 0;
		$returnArray['150:200'] = 0;
		$returnArray['200:250'] = 0;
		$returnArray['250:300'] = 0;
		$returnArray['300:350'] = 0;
		$returnArray['350:400'] = 0;
		$arrayLength = sizeof($array);
		
		for($i=0; $i<$arrayLength; $i++) {
			$kronerValue = $array[$i]['kroner'];
			if ($kronerValue > 100 && $kronerValue <= 150) {
				$returnArray['100:150'] += 1;
			} elseif ($kronerValue > 150 && $kronerValue <= 200) {
				$returnArray['150:200'] += 1;
			} elseif ($kronerValue > 200 && $kronerValue <= 250) {
				$returnArray['200:250'] += 1;
			} elseif ($kronerValue > 250 && $kronerValue <= 300) {
				$returnArray['250:300'] += 1;
			} elseif ($kronerValue > 300 && $kronerValue <= 350) {
				$returnArray['300:350'] += 1;
			} elseif ($kronerValue > 350 && $kronerValue <= 400) {
				$returnArray['350:400'] += 1;
			}
		}
		$returnArray['100:150'] = $returnArray['100:150'] / $arrayLength * 100;
		$returnArray['150:200'] = $returnArray['150:200'] / $arrayLength * 100;
		$returnArray['200:250'] = $returnArray['200:250'] / $arrayLength * 100;
		$returnArray['250:300'] = $returnArray['250:300'] / $arrayLength * 100;
		$returnArray['300:350'] = $returnArray['300:350'] / $arrayLength * 100;
		$returnArray['350:400'] = $returnArray['350:400'] / $arrayLength * 100;
	
		return $returnArray;
	}
	
	
	
	
	
?>