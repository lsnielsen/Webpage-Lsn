<table class="advancedTable bottomTable">
		<tr>
			<th class="dieselHeader" style="cursor: default"> </th>
			<th class="dieselHeader" style="cursor: default">
				<?php echo $txtFile['stats']['km']; ?>
			</th>
			<th class="dieselHeader" style="cursor: default">
				<?php echo $txtFile['stats']['liter']; ?>
			</th>
			<th class="dieselHeader" style="cursor: default">
				<?php echo $txtFile['stats']['kml']; ?>
			</th>
		</tr>	<tr class="bottomRows">
		<?php
			echo "<td class=dieselTableCell> " . $txtFile['dropdown']['average'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKm'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageLiter'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKmPerLiter'], 2, ',', '.');
			echo "</td></tr>";
			
						echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> " . $txtFile['stats']['stdev'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kilometerStDev'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literStDev'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kmPerLiterStDev'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> " . $txtFile['dropdown']['var'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kilometerVariance'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literVariance'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kmPerLiterVariance'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> " . $txtFile['dropdown']['median'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kilometerMedian'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literMedian'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kmPerLiterMedian'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell>  " . $txtFile['stats']['sum'] . "  </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kmSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kmPerLiterSum'], 2, ',', '.');
			echo "</td></tr>";
	?>
</table>