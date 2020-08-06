<table class="advancedTable bottomTable">
		<tr>
			<th class="dieselHeader" style="cursor: default"> </th>
			<th class="dieselHeader" style="cursor: default">Liter</th>
			<th class="dieselHeader" style="cursor: default">Kroner</th>
			<th class="dieselHeader" style="cursor: default">Kr/l</th>
		</tr>	<tr class="bottomRows">
		<?php
			echo "<td class=dieselTableCell> Gennemsnit </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageLiter'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKr'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKrPerLiter'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> Samlet </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krPerLiterSum'], 2, ',', '.');
			echo "</td></tr>";
	?>
</table>