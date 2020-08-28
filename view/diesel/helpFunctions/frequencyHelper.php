<?php
	function kmFrequency($array)
	{
		$arr['0:800'] = 0;
		$arr['800:850'] = 0;
		$arr['850:900'] = 0;
		$arr['900:950'] = 0;
		$arr['950:'] = 0;
		$length = sizeof($array);
		
		for($i=0; $i<$length; $i++) {
			$kmValue = $array[$i]['kilometer'];
			if ($kmValue > 0 && $kmValue <= 800) {
				$arr['0:800'] += 1;
			} elseif ($kmValue > 800 && $kmValue <= 850) {
				$arr['800:850'] += 1;
			} elseif ($kmValue > 850 && $kmValue <= 900) {
				$arr['850:900'] += 1;
			} elseif ($kmValue > 900 && $kmValue <= 950) {
				$arr['900:950'] += 1;
			} elseif ($kmValue > 950) {
				$arr['950:'] += 1;
			}
		}
		$arr['0:800'] = $arr['0:800'] / $length * 100;
		$arr['800:850'] = $arr['800:850'] / $length * 100;
		$arr['850:900'] = $arr['850:900'] / $length * 100;
		$arr['900:950'] = $arr['900:950'] / $length * 100;
		$arr['950:'] = $arr['950:'] / $length * 100;
	
		return $arr;
	}
	
	function literFrequency($array)
	{
		$arr['0:20'] = 0;
		$arr['20:25'] = 0;
		$arr['25:30'] = 0;
		$arr['30:35'] = 0;
		$arr['35:40'] = 0;
		$arr['40:'] = 0;
		$length = sizeof($array);
		
		for($i=0; $i<$length; $i++) {
			$literValue = $array[$i]['liter'];
			if ($literValue > 0 && $literValue <= 20) {
				$arr['0:20'] += 1;
			} elseif ($literValue > 20 && $literValue <= 25) {
				$arr['20:25'] += 1;
			} elseif ($literValue > 25 && $literValue <= 30) {
				$arr['25:30'] += 1;
			} elseif ($literValue > 30 && $literValue <= 35) {
				$arr['30:35'] += 1;
			} elseif ($literValue > 35 && $literValue <= 40) {
				$arr['35:40'] += 1;
			} elseif ($literValue > 40) {
				$arr['40:'] += 1;
			}
		}
		$arr['0:20'] = $arr['0:20'] / $length * 100;
		$arr['20:25'] = $arr['20:25'] / $length * 100;
		$arr['25:30'] = $arr['25:30'] / $length * 100;
		$arr['30:35'] = $arr['30:35'] / $length * 100;
		$arr['35:40'] = $arr['35:40'] / $length * 100;
		$arr['40:'] = $arr['40:'] / $length * 100;
	
		return $arr;
	}
	
	function kronerFrequency($array)
	{
		$arr['0:150'] = 0;
		$arr['150:200'] = 0;
		$arr['200:250'] = 0;
		$arr['250:300'] = 0;
		$arr['300:350'] = 0;
		$arr['350:'] = 0;
		$length = sizeof($array);
		
		for($i=0; $i<$length; $i++) {
			$value = $array[$i]['kroner'];
			if ($value > 0 && $value <= 150) {
				$arr['0:150'] += 1;
			} elseif ($value > 150 && $value <= 200) {
				$arr['150:200'] += 1;
			} elseif ($value > 200 && $value <= 250) {
				$arr['200:250'] += 1;
			} elseif ($value > 250 && $value <= 300) {
				$arr['250:300'] += 1;
			} elseif ($value > 300 && $value <= 350) {
				$arr['300:350'] += 1;
			} elseif ($value > 350) {
				$arr['350:'] += 1;
			}
		}
		$arr['0:150'] = $arr['0:150'] / $length * 100;
		$arr['150:200'] = $arr['150:200'] / $length * 100;
		$arr['200:250'] = $arr['200:250'] / $length * 100;
		$arr['250:300'] = $arr['250:300'] / $length * 100;
		$arr['300:350'] = $arr['300:350'] / $length * 100;
		$arr['350:'] = $arr['350:'] / $length * 100;
	
		return $arr;
	}
	
	function kronerPerLiterFrequency($array)
	{
		$arr['0:8'] = 0;
		$arr['8:8,5'] = 0;
		$arr['8,5:9'] = 0;
		$arr['9:9,5'] = 0;
		$arr['9,5:'] = 0;

		$length = sizeof($array);
		
		for($i=0; $i<$length; $i++) {
			$value = $array[$i]['kr/l'];
			if ($value > 0 && $value <= 8) {
				$arr['0:8'] += 1;
			} elseif ($value > 8 && $value <= 8.5) {
				$arr['8:8,5'] += 1;
			} elseif ($value > 8.5 && $value <= 9) {
				$arr['8,5:9'] += 1;
			} elseif ($value > 9 && $value <= 9.5) {
				$arr['9:9,5'] += 1;
			} elseif ($value > 9.5) {
				$arr['9,5:'] += 1;
			}
		}
		
		$arr['0:8'] = $arr['0:8'] / $length * 100;
		$arr['8:8,5'] = $arr['8:8,5'] / $length * 100;
		$arr['8,5:9'] = $arr['8,5:9'] / $length * 100;
		$arr['9:9,5'] = $arr['9:9,5'] / $length * 100;
		$arr['9,5:'] = $arr['9,5:'] / $length * 100;
	
		return $arr;
	}
	
	function kilometerPerLiterFrequency($array)
	{
		$arr['0:21'] = 0;
		$arr['21:22'] = 0;
		$arr['22:23'] = 0;
		$arr['23:24'] = 0;
		$arr['24:25'] = 0;
		$arr['25:26'] = 0;
		$arr['26:'] = 0;

		$length = sizeof($array);
		
		for($i=0; $i<$length; $i++) {
			$value = $array[$i]['km/l'];
			if ($value > 0 && $value <= 21) {
				$arr['0:21'] += 1;
			} elseif ($value > 21 && $value <= 22) {
				$arr['21:22'] += 1;
			} elseif ($value > 22 && $value <= 23) {
				$arr['22:23'] += 1;
			} elseif ($value > 23 && $value <= 24) {
				$arr['23:24'] += 1;
			} elseif ($value > 24 && $value <= 25) {
				$arr['24:25'] += 1;
			} elseif ($value > 25 && $value <= 26) {
				$arr['25:26'] += 1;
			} elseif ($value > 26) {
				$arr['26:'] += 1;
			}
		}
		
		$arr['0:21'] = $arr['0:21'] / $length * 100;
		$arr['21:22'] = $arr['21:22'] / $length * 100;
		$arr['22:23'] = $arr['22:23'] / $length * 100;
		$arr['23:24'] = $arr['23:24'] / $length * 100;
		$arr['24:25'] = $arr['24:25'] / $length * 100;
		$arr['25:26'] = $arr['25:26'] / $length * 100;
		$arr['26:'] = $arr['26:'] / $length * 100;
	
		return $arr;
	}
	
	
	
	
	
	
	
?>