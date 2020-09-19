		<table class="advancedTable statisticTable">
						<tr>
							<th class="dieselHeader headerSortUp dateColumn">
								<?php echo $txtFile['general']['date']; ?>
							</th>
							<th class="dieselHeader headerSortDown kronerColumn">
								<?php echo $txtFile['stats']['km']; ?>
							</th>
							<th class="dieselHeader headerSortDown literColumn">
								<?php echo $txtFile['stats']['liter']; ?>
							</th>
							<th class="dieselHeader headerSortDown krlColumn">
								<?php echo $txtFile['stats']['kml']; ?>
							</th>
							<th class="dieselHeader headerSortDown krlColumn">
								<?php echo $txtFile['stats']['stdev']; ?>
							</th>
						</tr>
						<?php
							$tableData = "SELECT * FROM diesel";
							$result = mysqli_query($con,$tableData);
							$graphArray = handleAdvancedArray($result, "table");
							
							for($i=0; $i<sizeOf($graphArray); $i++) {
								echo "	<tr id="; echo $graphArray[$i]['id']; echo ">";
											echo "<td class=dieselTableCell>";
											echo $graphArray[$i][1];
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['kilometer'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell advancedDieselCell>";
											echo number_format($graphArray[$i]['liter'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['km/l'], 2, ',', '.');		
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['kmPerLiterStDev'], 2, ',', '.');
											echo "</td></tr>";
							} 
						?>		
		</table>