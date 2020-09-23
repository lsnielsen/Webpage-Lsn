<table class="advancedTable bottomTable">
	<?php $txtFile = include("../text/global.php");  ?>
		<tr>
			<th class="dieselHeader" style="cursor: default"> </th>
			<th class="dieselHeader" style="cursor: default">
				<?php echo $txtFile['stats']['kr']; ?>
			</th>
		</tr>	<tr class="bottomRows">
		<?php
			echo "<td class=dieselTableCell> " . $txtFile['dropdown']['average'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['averageKr'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> " . $txtFile['stats']['stdev'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krStandardDev'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> " . $txtFile['dropdown']['var'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krVariance'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell> " . $txtFile['dropdown']['median'] . " </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krMedian'], 2, ',', '.');
			echo "</td></tr>";
			
			echo "	<tr class=bottomRows>";
			echo "<td class=dieselTableCell>  " . $txtFile['stats']['sum'] . "  </td>";
			echo "<td class=dieselTableCell>";
			echo number_format($graphArray[0]['krSum'], 2, ',', '.');
			echo "</td></tr>";
	?>
</table>