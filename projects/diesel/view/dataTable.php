		<table class="advancedTable statisticTable">
						<tr>
							<th class="dieselHeader headerSortUp dateColumn">Dato</th>
							<th class="dieselHeader headerSortDown kmColumn">Km</th>
							<th class="dieselHeader headerSortDown literColumn">Liter</th>
							<th class="dieselHeader headerSortDown kronerColumn">Kroner</th>
							<th class="dieselHeader headerSortDown krlColumn">Kr/l</th>
							<th class="dieselHeader headerSortDown kmlColumn">Km/l</th>
							<th class="dieselHeader headerSortDown kmkrColumn">Km/kr</th>
							<th class="dieselHeader headerSortDown krkmColumn">Kr/km</th>
							<th class="dieselHeader headerSortDown lkmColumn">L/km</th>
							<th class="dieselHeader headerSortDown lkrColumn">L/kr</th>
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
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['liter'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell advancedDieselCell>";
											echo number_format($graphArray[$i]['kroner'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['kr/l'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['km/l'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['km/kr'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['kr/km'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['l/km'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['l/kr'], 2, ',', '.');
										echo "</td></tr>";
							} ?>		
		</table>