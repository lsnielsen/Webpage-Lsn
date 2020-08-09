<table class="advancedTable bottomTable">
		<tr>
			<th class="dieselHeader" style="cursor: default"> </th>
			<th class="dieselHeader" style="cursor: default">Kroner</th>
			<th class="dieselHeader" style="cursor: default">Liter</th>
			<th class="dieselHeader" style="cursor: default">Kr/l</th>
		</tr>	<tr class="bottomRows">
		<?php
			echo "<td class=dieselTableCell> Gennemsnit </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKr'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageLiter'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKrPerLiter'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> Standard afvigelse </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krStDev'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literStDev'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krPerLiterStandardDev'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> Varians </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krVariance'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literVariance'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krPerLiterVariance'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> Median </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krMedian'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literMedian'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krPerLiterMedian'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> Sum </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krPerLiterSum'], 2, ',', '.');
			echo "</td></tr>";
	?>
</table>