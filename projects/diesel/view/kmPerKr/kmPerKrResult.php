<table class="advancedTable bottomTable">
		<tr>
			<th class="dieselHeader" style="cursor: default"> </th>
			<th class="dieselHeader" style="cursor: default">Kilometer</th>
			<th class="dieselHeader" style="cursor: default">Kroner</th>
			<th class="dieselHeader" style="cursor: default">Km/kr</th>
		</tr>	<tr class="bottomRows">
		<?php
			echo "<td class=dieselTableCell> Gennemsnit </td>";
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
			echo "<td class=dieselTableCell> Standard afvigelse </td>";
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
			echo "<td class=dieselTableCell> Varians </td>";
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
			echo "<td class=dieselTableCell> Median </td>";
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
			echo "<td class=dieselTableCell> Samlet </td>";
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