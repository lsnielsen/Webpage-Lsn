		<table id="usedCars">
						<tr>
						<?php 
							echo "<th>Nr: </th>";
							foreach($headerArray as $attribute) {
								echo "<th>" . $attribute . "</th>";
							}
						?>
						</tr>
						<?php
							$carCounter = 1;
							if (isset($autoArr)) {
								for($i=0; $i<sizeOf($autoArr); $i++) {
									echo "<tr>";
										echo "<td class=\"carCounterCell\"> $carCounter </td>";
										for($j=0; $j<sizeOf($autoArr[$i]); $j++) {
											if ($j == 0 && strpos($autoArr[$i][0], 'bilbasen') !== false) {
												echo "<td class=\"carCell\">";
												echo "<a href='".$autoArr[$i][$j]."' target=\"_blank\">Link til bilbasen</a>";
												echo "</td>";
											} elseif ($j == 0 && strpos($autoArr[$i][0], 'guloggratis') !== false) {
												echo "<td class=\"carCell\">";
												echo "<a href='".$autoArr[$i][$j]."' target=\"_blank\">Link til guloggratis</a>";
												echo "</td>";
											} else {
												echo "<td class=\"carCell\">";
												echo $autoArr[$i][$j];
												echo "</td>";
											}
										}
									echo "</tr>";
									$carCounter++;
								} 
							}
						
							if (isset($manuelArr)) {
								for($i=0; $i<sizeOf($manuelArr); $i++) {
									echo "<tr>";
										echo "<td class=\"carCounterCell\"> $carCounter </td>";
										for($j=0; $j<sizeOf($manuelArr[$i]); $j++) {
											if ($j == 0 && strpos($manuelArr[$i][0], 'bilbasen') !== false) {
												echo "<td class=\"carCell\">";
												echo "<a href='".$manuelArr[$i][$j]."' target=\"_blank\">Link til bilbasen</a>";
												echo "</td>";
											} elseif ($j == 0 && strpos($manuelArr[$i][0], 'guloggratis') !== false) {
												echo "<td class=\"carCell\">";
												echo "<a href='".$manuelArr[$i][$j]."' target=\"_blank\">Link til guloggratis</a>";
												echo "</td class=\"carCell\">";
											} else {
												echo "<td class=\"carCell\">";
												echo $manuelArr[$i][$j];
												echo "</td>";
											}
										}
									echo "</tr>";
									$carCounter++;
								} 
							}
							?>		
		</table>
		
		
<style>		
	#usedCars {
	  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	  border-collapse: collapse;
	  width: 90%;
	}

	#usedCars .carCounterCell {
		border: 1px solid #ddd;
		padding: 8px;
		min-width: 20px;
		text-align: center;
	}
	
	#usedCars .carCell {
		border: 1px solid #ddd;
		padding: 8px;
		min-width: 120px;
		text-align: center;
	}

	#usedCars tr:nth-child(even){background-color: #f2f2f2;}

	#usedCars tr:hover {background-color: #ddd;}

	#usedCars th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  background-color: #4CAF50;
	  color: white;
	}
</style>


