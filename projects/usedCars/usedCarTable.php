		<table id="usedCars">
						<tr>
						<?php 
							foreach($headerArray as $attribute) {
								echo "<th>" . $attribute . "</th>";
							}
						?>
						</tr>
						<?php
						
							if (isset($autoArr)) {
								for($i=0; $i<sizeOf($autoArr); $i++) {
									echo "<tr>";
										for($j=0; $j<sizeOf($autoArr[$i]); $j++) {
											if ($j == 0 && strpos($autoArr[$i][0], 'bilbasen') !== false) {
												echo "<td>";
												echo "<a href='".$autoArr[$i][$j]."' target=\"_blank\">Link til bilbasen</a>";
												echo "</td>";
											} elseif ($j == 0 && strpos($autoArr[$i][0], 'guloggratis') !== false) {
												echo "<td>";
												echo "<a href='".$autoArr[$i][$j]."' target=\"_blank\">Link til guloggratis</a>";
												echo "</td>";
											} else {
												echo "<td>";
												echo $autoArr[$i][$j];
												echo "</td>";
											}
										}
									echo "</tr>";
								} 
							}
						
							if (isset($manuelArr)) {
								for($i=0; $i<sizeOf($manuelArr); $i++) {
									echo "<tr>";
										for($j=0; $j<sizeOf($manuelArr[$i]); $j++) {
											if ($j == 0 && strpos($manuelArr[$i][0], 'bilbasen') !== false) {
												echo "<td>";
												echo "<a href='".$manuelArr[$i][$j]."' target=\"_blank\">Link til bilbasen</a>";
												echo "</td>";
											} elseif ($j == 0 && strpos($manuelArr[$i][0], 'guloggratis') !== false) {
												echo "<td>";
												echo "<a href='".$manuelArr[$i][$j]."' target=\"_blank\">Link til guloggratis</a>";
												echo "</td>";
											} else {
												echo "<td>";
												echo $manuelArr[$i][$j];
												echo "</td>";
											}
										}
									echo "</tr>";
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

	#usedCars td, #usedCars th {
	  border: 1px solid #ddd;
	  padding: 8px;
	}

	#usedCars tr:nth-child(even){background-color: #f2f2f2;}

	#usedCars tr:hover {background-color: #ddd;}

	#usedCars th {
	  padding-top: 12px;
	  padding-bottom: 12px;
	  text-align: left;
	  background-color: #4CAF50;
	  color: white;
	}
</style>


