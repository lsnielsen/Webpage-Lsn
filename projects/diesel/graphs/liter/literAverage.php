
<center>
	<div id="liter" style="width: 100%; height: 700px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "bigGraph");
	$txtFile = include("../text/global.php");
?>

<script>
	chartTitle = "<?php echo $txtFile['stats']['liter'] ?>";
	xAxis = "<?php echo $txtFile['average']['date'] ?>";
	yAxis = "<?php echo $txtFile['stats']['liter'] ?>";
	yAxisII = "<?php echo $txtFile['dropdown']['average'] ?>";
	yAxisIII = "<?php echo $txtFile['dropdown']['median'] ?>";

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			[xAxis yAxis, yAxisII, yAxisIII],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0]['liter']),
				parseFloat(graphArray[0]['averageLiter']),
				parseFloat(graphArray[0]['literMedian'])
			]
		]);

		var options = {
		  title: chartTitle,
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};
		var arrayLength = graphArray.length;
		for (var i = 1; i < arrayLength; i++) {
			data.addRow([
				graphArray[i][1],
				parseFloat(graphArray[i]['liter']),
				parseFloat(graphArray[0]['averageLiter']),
				parseFloat(graphArray[0]['literMedian'])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('liter'));

		chart.draw(data, options);
	}
</script>
	