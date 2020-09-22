
<center>
	<div id="kroner" style="width: 100%; height: 700px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "bigGraph");	
	$txtFile = include("../text/global.php");
?>

<script>
	chartTitle = "<?php echo $txtFile['stats']['kr'] ?>";
	xAxis = "<?php echo $txtFile['general']['date'] ?>";
	yAxis = "<?php echo $txtFile['dropdown']['average'] ?>";
	yAxisII = "<?php echo $txtFile['dropdown']['median'] ?>";

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			[xAxis, chartTitle, yAxis, yAxisII],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0]['kroner']),
				parseFloat(graphArray[0]['averageKr']),
				parseFloat(graphArray[0]['krMedian'])
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
				parseFloat(graphArray[i]['kroner']),
				parseFloat(graphArray[0]['averageKr']),
				parseFloat(graphArray[0]['krMedian'])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('kroner'));

		chart.draw(data, options);
	}
</script>
	