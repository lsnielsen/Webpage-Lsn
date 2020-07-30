<?php

	function makeQueryToArray($query, $pageType) 
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

		for ($i = 0; $i<sizeof($sortedArray); $i++) {
			$sortedArray[$i][1] = changeDateFormat($sortedArray[$i][1], $pageType);	
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
			if ($charSix == 0 && $charNine == 0) {
				return $charTen . "/" . $charSeven . " - " . $charThree . $charFour;
			} elseif ($charSix !== 0 && $charNine == 0) {
				return $charTen . "/" . $charSix . $charSeven . " - " . $charThree . $charFour;			
			} elseif ($charSix == 0 && $charNine !== 0) {
				return $charNine . $charTen . "/" . $charSeven . " - " . $charThree . $charFour;			
			} elseif ($charSix !== 0 && $charNine !== 0) {
				return $charNine . $charTen . "/" . $charSix . $charSeven . " - " . $charThree . $charFour;
			}
		}
	}
	
	function setErrorMessageBox($inputArray, $date, $km, $kr, $liter) {	
		if ($inputArray['wrongDate'] == false) {
			echo "<div class='errorMessage'> Dato formattet er ikke korrekt. 
			Du har skrevet: ";
			if (!empty($date)) {
				echo " \"" . $date . "\" ";
			} else { 
				echo "<br>"; 
			}
			echo "Formattet skal være på formen yyyy-mm-dd</div>";
			echo "<br><br>";
		} elseif ($inputArray['wrongKm'] == false) {
			echo "<div class='errorMessage'> Kilometer formattet er ikke korrekt. 
			Du har skrevet: ";
			if (!empty($km)) {
				echo " \"" . $km . "\" ";
			} else { 
				echo "<br>"; 
			}
			echo "Formattet skal være på formen xxx.yy </div>";
			echo "<br><br>";
		} elseif ($inputArray['wrongLiter'] == false) {
			echo "<div class='errorMessage'> Liter formattet er ikke korrekt. 
			Du har skrevet: ";
			if (!empty($liter)) {
				echo " \"" . $liter . "\" ";
			} else { 
				echo "<br>"; 
			}
			echo "Formattet skal være på formen xxx.yy </div>";
			echo "<br><br>";
		} elseif ($inputArray['wrongKroner'] == false) {
			echo "<div class='errorMessage'> Kroner formattet er ikke korrekt. 
			Du har skrevet: ";
			if (!empty($kr)) {
				echo " \"" . $kr . "\" ";
			} else { 
				echo "<br>"; 
			}
			echo "Formattet skal være på formen xxx.yy </div>";
			echo "<br><br>";
		}
	}
	
	function setUpperHtmlBox()
	{
		?>
			<div class="notDisplayingWrongInput wrongDieselInput" style="display: none;">
				<span class="helper"></span>
				<div style="max-width: 530;">
					<div class="wrongDieselInputPopupCloseButton popupCloseButton">
						&times;
					</div>
					<div style="font-size: 25; margin-bottom: 20px;"> 
						Dit input passer ikke med det korrekte input format 
					</div>
		<?php 
	}
		
	function setLowerHtmlBox()
	{
		?>
					<div>
						<div class="wrongDieselInputButton dieselPopupButton">Ok</div>
						<div class="wrongDieselInputButton dieselPopupButton">Fortryd</div>
					</div>
				</div>
			</div>
		<?php
	}
	
	function checkDieselInput($date, $km, $liter, $kr) {
		
		$returnStm = true;
		$dateTestVar = true;
		$literTestVar = true;
		$kmTestVar = true;
		$krTestVar = true;
		
		if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
			$dateTestVar = false;
			$returnStm = false;
		}	
		$kmBool = intChecker($km);
		$literBool = intChecker($liter);
		$krBool = intChecker($kr);
		
		if(!intChecker($km)) {
			$kmTestVar = false;
			$returnStm = false;
		}
		if(!intChecker($kr)) {
			$krTestVar = false;
			$returnStm = false;
		}
		if(!intChecker($liter)) {
			$literTestVar = false;
			$returnStm = false;
		}
		return ['returnStm' => $returnStm, 'wrongKm' => $kmTestVar, 'wrongDate' => $dateTestVar, 
					'wrongKroner' => $krTestVar, 'wrongLiter' => $literTestVar];
	}
	
	function intChecker($variable) {
		if (strlen($variable) == 0) {
			return false;
		}
		
		for ($i = 0; $i < strlen($variable); $i++){
			$char = $variable[$i];
			if(!is_numeric($char) && $char !== ".") {
				return false;
			}
		}
		return true;
	}


?>
