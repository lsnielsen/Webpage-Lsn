<table class="advancedTable bottomTable">
		<?php txtFile = include("../text/global.php"); ?>
		<tr>
			<th class="dieselHeader" style="cursor: default"> </th>
			<th class="dieselHeader" style="cursor: default">									
				<?php $txtFile['dataTable']['liter']; ?>
			</th>
		</tr>	<tr class="bottomRows">
		<?php
			echo "<td class=dieselTableCell> Gennemsnit </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageLiter'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> Standard afvigelse </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literStandardDev'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> Varians </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literVariance'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> Median </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literMedian'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> Sum </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literSum'], 2, ',', '.');
			echo "</td></tr>";
	?>
</table>