
<?php

	include "functions.php";
	$con = mysqli_connect('127.0.0.1','root','');  
	
	if(!$con) {  
		echo 'not connect to the server';  
	}  
	if(!mysqli_select_db($con,'lsnDb')) {  
		echo 'database not selected';  
	}  
	
	$fetchId = "SELECT * FROM diesel";
	$result = mysqli_query($con,$fetchId);
	$uniqueId = 0;
	while($row = $result->fetch_array()){
		$uniqueId = $row['id'];
	}

	if (isset($_POST['date']) && isset($_POST['km']) && isset($_POST['liter']) && isset($_POST['kr'])) {
		$date = $_POST['date'];
		$km = $_POST['km'];
		$liter = $_POST['liter'];
		$kr = $_POST['kr'];
		if (checkDieselInput($date, $km, $liter, $kr)) {
			$wrongInput = true;
			$id = $uniqueId + 1;
			$sql = "INSERT INTO diesel (id, date, kilometer, liter, kroner) VALUES ('$id', '$date','$km', '$liter', '$kr')";  
			  
			if(!mysqli_query($con,$sql)) {  
				echo 'Not inserted';  
			}  
		} else {
			setHtmlBox();
		}
	}
	
	include ("dieselPage.html");
	
	
	
	function setHtmlBox() {			
		?>
			<div class="notDisplayingWrongInput wrongDieselInput" style="display: none;">
				<span class="helper"></span>
				<div>
					<div class="wrongDieselInputPopupCloseButton popupCloseButton">&times;</div>
					<p> Dit input passer ikke med det korrekte input format </p>
					<div>
						<div class="wrongDieselInputButton dieselPopupButton">Ok</div>
						<div class="wrongDieselInputButton dieselPopupButton">Fortryd</div>
					</div>
				</div>
			</div>
		<?php
	}
		
	
	
	function checkDieselInput($date, $km, $liter, $kr) {
		
		if (!preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/",$date)) {
			return false;
		}	
		$kmBool = intChecker($km);
		$literBool = intChecker($liter);
		$krBool = intChecker($kr);
		if($kmBool && $literBool && $krBool) {	
			return true;
		} else {
			return false;
		}
	}
	
	function intChecker($variable) {
		for ($i = 0; $i < strlen($variable); $i++){
			$char = $variable[$i];
			if(!is_numeric($char) && $char !== ".") {
				return false;
			}
		}
		return true;
	}
	
	
	
	
?>



