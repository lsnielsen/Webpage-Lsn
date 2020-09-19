		<table class="advancedTable statisticTable">
			<?php txtFile = include("../text/global.php"); ?>
						<tr>
							<th class="dieselHeader headerSortUp dateColumn">
								<?php $txtFile['general']['date']; ?>
							</th>
							<th class="dieselHeader headerSortDown kronerColumn">									
								<?php $txtFile['dataTable']['liter']; ?>
							</th>
							<th class="dieselHeader headerSortDown kronerColumn">
								<?php $txtFile['stats']['stdev']; ?>
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
											echo number_format($graphArray[$i]['liter'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['literStDev'], 2, ',', '.');
											echo "</td>";
							} 
						?>		
		</table>