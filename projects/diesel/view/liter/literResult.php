<table class="advancedTable bottomTable">
		<?php $txtFile = include("../text/global.php"); ?>
		<tr>
			<th class="dieselHeader" style="cursor: default"> </th>
			<th class="dieselHeader" style="cursor: default">									
				<?php echo $txtFile['dataTable']['liter']; ?>
			</th>
		</tr>	<tr class="bottomRows">
		<?php
			echo "<td class=dieselTableCell> " . $txtFile['dropdown']['average'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageLiter'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> " . $txtFile['stats']['stdev'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literStandardDev'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> " . $txtFile['dropdown']['varians'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literVariance'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> " . $txtFile['dropdown']['median'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literMedian'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell>  " . $txtFile['stats']['sum'] . "  </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['literSum'], 2, ',', '.');
			echo "</td></tr>";
	?>
</table>