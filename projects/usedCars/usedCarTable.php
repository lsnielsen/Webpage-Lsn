		<table id="usedCars">
						<tr>
						<?php 
							foreach($headerArray as $attribute) {
								echo "<th>" . $attribute . "</th>";
							}
						?>
						</tr>
						<?php
						
							if (isset($dataArr)) {
								for($i=0; $i<sizeOf($dataArr); $i++) {
									echo "<tr>";
										for($j=0; $j<sizeOf($dataArr[$i]); $j++) {
											if ($j == 0 && strpos($dataArr[$i][0], 'bilbasen') !== false) {
												echo "<td>";
												echo "<a href='".$dataArr[$i][$j]."' target=\"_blank\">Link til bilbasen</a>";
												echo "</td>";
											} elseif ($j == 0 && strpos($dataArr[$i][0], 'guloggratis') !== false) {
												echo "<td>";
												echo "<a href='".$dataArr[$i][$j]."' target=\"_blank\">Link til guloggratis</a>";
												echo "</td>";
											} else {
												echo "<td>";
												echo $dataArr[$i][$j];
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


