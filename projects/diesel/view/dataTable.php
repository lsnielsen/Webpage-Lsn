	<?php $txtFile = include("../txt/diesel/txt.php"); ?>
		<table class="advancedTable statisticTable">
						<tr>
							<th class="dieselHeader headerSortUp dateColumn">
								<?php echo $txtFile['general']['date']; ?>
							</th>
							<th class="dieselHeader headerSortDown kmColumn">
								<?php echo $txtFile['dataTable']['km']; ?>
							</th>
							<th class="dieselHeader headerSortDown literColumn">
								<?php echo $txtFile['dataTable']['liter']; ?>
							</th>
							<th class="dieselHeader headerSortDown kronerColumn">
								<?php echo $txtFile['dataTable']['kr']; ?>
							</th>
							<th class="dieselHeader headerSortDown krlColumn">
								<?php echo $txtFile['dataTable']['kr/l']; ?>
							</th>
							<th class="dieselHeader headerSortDown kmlColumn">
								<?php echo $txtFile['dataTable']['km/l']; ?>
							</th>
							<th class="dieselHeader headerSortDown kmkrColumn">
								<?php echo $txtFile['dataTable']['km/kr']; ?>
							</th>
							<th class="dieselHeader headerSortDown krkmColumn">
								<?php echo $txtFile['dataTable']['kr/km']; ?>
							</th>
							<th class="dieselHeader headerSortDown lkmColumn">
								<?php echo $txtFile['dataTable']['l/km']; ?>
							</th>
							<th class="dieselHeader headerSortDown lkrColumn">
								<?php echo $txtFile['dataTable']['l/kr']; ?>
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