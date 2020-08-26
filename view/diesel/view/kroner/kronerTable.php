		<table class="advancedTable statisticTable">
						<tr>
							<th class="dieselHeader headerSortUp dateColumn">Dato</th>
							<th class="dieselHeader headerSortDown kronerColumn">Kroner</th>
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
											echo number_format($graphArray[$i]['kroner'], 2, ',', '.');
											echo "</td>";
							} 
						?>		
		</table>