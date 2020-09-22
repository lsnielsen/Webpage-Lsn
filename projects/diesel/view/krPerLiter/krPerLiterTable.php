		<table class="advancedTable statisticTable">
			<?php $txtFile = include("../text/global.php");  ?>
						<tr>
							<th class="dieselHeader headerSortUp dateColumn">Dato</th>
							<th class="dieselHeader headerSortDown kronerColumn">Kroner</th>
							<th class="dieselHeader headerSortDown literColumn">Liter</th>
							<th class="dieselHeader headerSortDown krlColumn">Kr/l</th>
							<th class="dieselHeader headerSortDown krlColumn">Kr/l st. afvigelse</th>
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
											echo "</td>
											<td class=dieselTableCell advancedDieselCell>";
											echo number_format($graphArray[$i]['liter'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['kr/l'], 2, ',', '.');		
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['krPerLiterStDev'], 2, ',', '.');
											echo "</td></tr>";
							} 
						?>		
		</table>