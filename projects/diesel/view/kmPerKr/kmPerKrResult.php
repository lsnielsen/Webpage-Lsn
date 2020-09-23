<table class="advancedTable bottomTable">
		<tr>
			<th class="dieselHeader" style="cursor: default"> </th>
			<th class="dieselHeader" style="cursor: default">
				<?php echo $txtFile['stats']['km']; ?>
			</th>
			<th class="dieselHeader" style="cursor: default">
				<?php echo $txtFile['stats']['kr']; ?>
			</th>
			<th class="dieselHeader" style="cursor: default">
				<?php echo $txtFile['stats']['kmKr']; ?>
			</th>
		</tr>	<tr class="bottomRows">
		<?php
			echo "<td class=dieselTableCell> " . $txtFile['dropdown']['average'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKm'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKr'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKmPerKr'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> " . $txtFile['stats']['stdev'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kilometerStandardDev'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krStandardDev'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kmPerKrStandardDev'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> " . $txtFile['dropdown']['var'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kilometerVariance'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krVariance'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kmPerKrVariance'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> " . $txtFile['dropdown']['median'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kilometerMedian'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krMedian'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kmPerKrMedian'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> " . $txtFile['stats']['sum'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kmSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kmPerKrSum'], 2, ',', '.');
			echo "</td></tr>";
	?>
</table>