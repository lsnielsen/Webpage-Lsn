
<?php
	if (sizeof($graphArray) > 3) {
?>
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="advancedDieselPage"
						name="dieselButton"						
						style="margin-left: auto;">
					Klik her, for at se en mere avanceret statistik
				</button>
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="carDieselPage"
						name="dieselButton"						
						style="margin-left: 100px; position: relative;">
					Klik her, for at se hvilken bil det handler om
				</button>	
<?php
	} else {
?>	
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="advancedDieselPage"
						name="dieselButton"						
						style="margin-left: 200px; position: relative; top: 10px;">
					Klik her, for at se en mere avanceret statistik
				</button>
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="carDieselPage"
						name="dieselButton"						
						style="margin-left: 90px; position: relative; top: 10px;">
					Klik her, for at se hvilken bil det handler om
				</button>
<?php
	}
?>	