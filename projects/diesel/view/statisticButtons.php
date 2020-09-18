
<?php
	$txtFile = include("../txt/global.php"); 
	if (sizeof($graphArray) > 3) {
?>
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="advancedDieselPage"
						name="dieselButton"						
						style="margin-left: auto;">
					<?php echo $txtFile['statButtons']['statistic']; ?>
				</button>
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="carDieselPage"
						name="dieselButton"						
						style="margin-left: 100px; position: relative;">
					<?php echo $txtFile['statButtons']['theCar']; ?>
				</button>	
<?php
	} else {
?>	
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="advancedDieselPage"
						name="dieselButton"						
						style="margin-left: 200px; position: relative; top: 10px;">
					<?php echo $txtFile['statButtons']['statistic']; ?>
				</button>
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="carDieselPage"
						name="dieselButton"						
						style="margin-left: 90px; position: relative; top: 10px;">
					<?php echo $txtFile['statButtons']['theCar']; ?>
				</button>
<?php
	}
?>	