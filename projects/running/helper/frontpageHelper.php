
<?php



	function setRunningErrorMessageBox($inputArray, $date, $km, $time) {	
		if ($inputArray['wrongDate'] == false) {
			echo "<div class='errorMessage'> Dato formattet er ikke korrekt. "; 
			if (!empty($date)) {
				echo "Du har skrevet: ";
				echo " \"" . $date . "\" ";
			} else { 
				echo " Du har ikke skrevet noget. "; 
			}
			echo "Formattet skal være på formen yyyy-mm-dd</div>";
			echo "<br><br>";
		} elseif ($inputArray['wrongKm'] == false) {
			echo "<div class='errorMessage'> Kilometer formattet er ikke korrekt. ";
			if (!empty($km)) {
				echo "Du har skrevet: ";
				echo " \"" . $km . "\" ";
			} else { 
				echo " Du har ikke skrevet noget. "; 
			}
			echo "Formattet skal være på formen xxx,yy </div>";
			echo "<br><br>";
		} elseif ($inputArray['wrongTime'] == false) {
			echo "<div class='errorMessage'> Tids formattet er ikke korrekt. ";
			if (!empty($time)) {
				echo "Du har skrevet: ";
				echo " \"" . $time. "\" ";
			} else { 
				echo " Du har ikke skrevet noget. "; 
			}
			echo "Formattet skal være på formen hh:mm:ss eller mm:ss </div>";
			echo "<br><br>";
		}
	}
	
	function setUpperRunningHtmlBox()
	{
		?>
			<div class="notDisplayingWrongInput wrongRunningInput" style="display: none;">
				<span class="helper"></span>
				<div style="max-width: 530;">
					<div class="wrongRunningInputPopupCloseButton popupCloseButton">
						&times;
					</div>
					<div style="font-size: 25; margin-bottom: 20px;"> 
						Dit input passer ikke med det korrekte input format 
					</div>
		<?php 
	}
		
	function setLowerRunningHtmlBox()
	{
		?>
					<div>
						<div class="wrongRunningInputButton runningPopupButton">Ok</div>
						<div class="wrongRunningInputButton runningPopupButton">Fortryd</div>
					</div>
				</div>
			</div>
		<?php
	}
	
	function checkRunningInput($date, $km, $time) {
		
		$returnStm = true;
		$dateTestVar = true;
		$kmTestVar = true;
		$timeTestVar = true;
		
		if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
			$dateTestVar = false;
			$returnStm = false;
		}	
		
		if(!intChecker($km)) {
			$kmTestVar = false;
			$returnStm = false;
		}
		
		if(!validTime($time)) {
			$timeTestVar = false;
			$returnStm = false;
		}
		return ['returnStm' => $returnStm, 'wrongKm' => $kmTestVar, 'wrongDate' => $dateTestVar, 'wrongTime' => $timeTestVar];
	}
	
	function formatTime($time)
	{
		$length = strlen($time);
		if ($length == 8 && $time[2] == ":" && $time[5] == ":") {
			return $time;
		} elseif ($length == 5 && $time[2] == ":") {
			return "00:" . $time;
		} else {
			return "Bullshitting";
		}
	}
	
	function intChecker($variable) {
		if (strlen($variable) == 0) {
			return false;
		}
		
		for ($i = 0; $i < strlen($variable); $i++){
			$char = $variable[$i];
			if(!is_numeric($char) && $char !== ",") {
				return false;
			} elseif ($char == ",") {
				$variable[$i] = ".";
			}
		}
		return true;
	}

	function validTime($time) {
		$length = strlen($time);
		if ($length == 8 && $time[2] == ":" && $time[5] == ":") {
			return true;
		} elseif ($length == 5 && $time[2] == ":") {
			return true;
		} else {
			return false;
		}
//		03:13:24
	//	15:30
	}






?>