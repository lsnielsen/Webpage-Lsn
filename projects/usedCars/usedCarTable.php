		<table id="usedCars">
						<tr>
							<th>Link</th>
							<th>Bilmærke</th>
							<th>Motor</th>
							<th>Pris</th>
							<th>Hk/Nm</th>
							<th>0-100 km/t</th>
							<th>Tophastighed</th>
							<th>Drivmiddel</th>
							<th>Forbrug</th>
							<th>Euronorm</th>
							<th>Bredde</th>
							<th>Længde</th>
							<th>Højde</th>
							<th>Lasteevne</th>
							<th>Trækhjul</th>
							<th>Cylindre</th>
							<th>ABS-bremser</th>
							<th>Max påhæng</th>
							<th>Airbags</th>
							<th>ESP</th>
							<th>Tank</th>
							<th>Gear</th>
							<th>Geartype</th>
							<th>Vægt</th>
							<th>Døre</th>
							<th>Registreringsdato</th>
							<th>Produktions år</th>
							<th>Model år</th>
							<th>Synet</th>
							<th>Farve</th>
							<th>Anhængertræk</th>
						</tr>
						<?php
						
							
							for($i=0; $i<sizeOf($dataArr); $i++) {
								echo "<tr>";
									for($j=0; $j<31; $j++) {
										if ($j == 0) {
											echo "<td>";
											echo "<a href='".$dataArr[$i][$j]."' target=\"_blank\">Link til bilbasen</a>";
											echo "</td>";
										} else {
											echo "<td>";
											echo $dataArr[$i][$j];
											echo "</td>";
										}
									}
								echo "</tr>";
							} ?>		
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


