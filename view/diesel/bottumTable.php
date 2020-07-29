<table class="advancedTable" style="margin-top: 10px;">
		<tr>
			<th class="dieselHeader" style="cursor: default"> </th>
			<th class="dieselHeader" style="cursor: default">Km</th>
			<th class="dieselHeader" style="cursor: default">Liter</th>
			<th class="dieselHeader" style="cursor: default">Kroner</th>
			<th class="dieselHeader" style="cursor: default">Kr/l</th>
			<th class="dieselHeader" style="cursor: default">Km/l</th>
			<th class="dieselHeader" style="cursor: default">Km/kr</th>
			<th class="dieselHeader" style="cursor: default">Kr/km</th>
			<th class="dieselHeader" style="cursor: default">L/km</th>
			<th class="dieselHeader" style="cursor: default">L/kr</th>
		</tr>	<tr class="bottomRows">
		<?php
			echo "<td class=dieselTableCell> Gennemsnit </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKm'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageLiter'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKr'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKrPerLiter'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKmPerLiter'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKmPerKr'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKrPerKm'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageLiterPerKm'],2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageLiterPerKr'], 2, ',', '.');
			echo "</td></tr>";
	echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> Samlet </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kmSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krPerLiterSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kmPerLiterSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['kmPerKrSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krPerKmSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literPerKmSum'], 2, ',', '.');
			echo "</td>
			<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literPerKrSum'], 2, ',', '.');
			echo "</td></tr></table>";
	?>