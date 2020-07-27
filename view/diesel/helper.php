<?php
	//handleAdvancedArray is the function to be called outside.
	//It calls all the other functions in this file
	function handleAdvancedArray($query, $pageType) 
	{
		$sortedArray = sortSqlArray($query);
		
		for ($i = 0; $i<sizeof($sortedArray); $i++) {
			$sortedArray[$i][1] = changeDateFormat($sortedArray[$i][1], $pageType);	
		}
		$finalDataArray = getFinalData($sortedArray);
		$finalAverageArray = makeAverageData($finalDataArray);
		$finalArray = setCorrectKomma($finalAverageArray);
		
		return $finalArray;
	}
	
	function setCorrectKomma($array)
	{
		for ($i = 0; $i<sizeof($array); $i++) {
			$innerArray = $array[$i];
			for ($j = 0; $j<sizeof($innerArray); $j++) {
				if (isset($innerArray[$j])) {
					echo $innerArray[$j] . " <br>";
					$string = str_split($innerArray[$j]);
					foreach ($string as $key => $value) {
						if ($value == ".") {
							echo $value . "<br>";
							$temp = $array[$i][$j][$key];
							
							echo $temp . "<br>";
							$array[$i][$j][$key] = ",";
						}
					}
				}
			}
		}
		return $array;
	}
	
	function makeAverageData($array)
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
		$array[0]['kmSum'] = $kmSum;
		$array[0]['literSum'] = $literSum;
		$array[0]['krSum'] = $krSum;
		$array[0]['kmPerLiterSum'] = $kmSum / $literSum;
		$array[0]['kmPerKrSum'] = $kmSum / $krSum;
		$array[0]['krPerLiterSum'] = $krSum / $literSum;
		$array[0]['krPerKmSum'] = $krSum / $kmSum;
		$array[0]['literPerKmSum'] = $literSum / $kmSum;
		$array[0]['literPerKrSum'] = $literSum / $krSum;
	
		$array[0]['averageKm'] = $kmSum / $counter;
		$array[0]['averageLiter'] = $literSum / $counter;
		$array[0]['averageKr'] = $krSum / $counter;
		$array[0]['averageKmPerLiter'] = $kmPerLiterSum / $counter;
		$array[0]['averageKmPerKr'] = $kmPerKrSum / $counter;
		$array[0]['averageKrPerLiter'] = $krPerLiterSum / $counter;
		$array[0]['averageKrPerKm'] = $krPerKmSum / $counter;
		$array[0]['averageLiterPerKm'] = $literPerKmSum / $counter;
		$array[0]['averageLiterPerKr'] = $literPerKrSum / $counter;

		return $array;
	}
	
	function getFinalData($array)
	{
		for ($i = 0; $i<sizeof($array); $i++) {

			$km = $array[$i]['kilometer'];
			$liter = $array[$i]['liter'];
			$kr = $array[$i]['kroner'];

			$array[$i]['km/l'] = $km / $liter;
			$array[$i]['km/kr'] = $km / $kr;
			$array[$i]['l/km'] = $liter / $km;
			$array[$i]['l/kr'] = $liter / $kr;
			$array[$i]['kr/km'] = $kr / $km;
			$array[$i]['kr/l'] = $kr / $liter;
		}
		return $array;
	}
	
	function sortSqlArray($query)
	{
		while ($rowArray = $query->fetch_array()) {
			$graphArray[] = $rowArray;
		}
		for ($i = 0; $i<sizeof($graphArray); $i++) {
			$dateArray[] = $graphArray[$i][1];
		}	
		usort($dateArray, "compareByTimeStamp");
		
		for ($i = 0; $i<sizeof($dateArray); $i++) {
			for ($j = 0; $j<sizeof($graphArray); $j++) {
				if ($dateArray[$i] == $graphArray[$j][1]) {
					$sortedArray[] = $graphArray[$j];
					continue;
				}
			}
		}
		return $sortedArray;
	}
		 
	function compareByTimeStamp($time1, $time2) 
	{ 
		if (strtotime($time1) < strtotime($time2)) { 
			return -1; 
		} else if (strtotime($time1) > strtotime($time2)) { 
			return 1; 
		} else
			return 0; 
	} 
	function changeDateFormat($date, $page)
	{
		$charOne = $date[0];
		$charTwo = $date[1];
		$charThree = $date[2];
		$charFour = $date[3];
		$charFive = $date[4];
		$charSix = $date[5];
		$charSeven = $date[6];
		$charEight = $date[7];
		$charNine = $date[8];
		$charTen = $date[9];
		
		if ($page == "table") {
			return $charNine . $charTen . "/" . $charSix . $charSeven . " - " . $charOne . $charTwo . $charThree . $charFour;
		} elseif ($page == "graph") {
			if ($charSix == 0 && $charNine =! 0) {
				return $charNine . $charTen . "/" . $charSeven . " - " . $charThree . $charFour;
			} elseif ($charSix != 0 && $charNine == 0) {
				return $charTen . "/" . $charSix . $charSeven . " - " . $charThree . $charFour;
			} elseif ($charSix == 0 && $charNine == 0) {
				return $charNine . $charTen . "/" . $charSix . $charSeven . " - " . $charThree . $charFour;
			}
		}
	}
	
?>