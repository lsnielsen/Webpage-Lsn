
<?php
	$txtFile = include("../txt/diesel/txt.php"); 
	if (sizeof($graphArray) > 3) {
?>
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="advancedDieselPage"
						name="dieselButton"						
						style="margin-left: auto;">
					<?php $txtFile['statButtons']['statistic']; ?>
				</button>
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="carDieselPage"
						name="dieselButton"						
						style="margin-left: 100px; position: relative;">
					<?php $txtFile['statButtons']['theCar']; ?>
				</button>	
<?php
	} else {
?>	
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="advancedDieselPage"
						name="dieselButton"						
						style="margin-left: 200px; position: relative; top: 10px;">
					<?php $txtFile['statButtons']['statistic']; ?>
				</button>
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="carDieselPage"
						name="dieselButton"						
						style="margin-left: 90px; position: relative; top: 10px;">
					<?php $txtFile['statButtons']['theCar']; ?>
				</button>
<?php
	}
?>	