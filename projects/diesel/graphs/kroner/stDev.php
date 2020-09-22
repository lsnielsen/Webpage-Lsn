
<center>
	<div id="kronerStDev" style="width: 100%; height: 700px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "bigGraph");	
	$txtFile = include("../text/global.php");
?>

<script>
	chartTitle = "<?php echo $txtFile['graphs']['krStdVar'] ?>";
	xAxis = "<?php echo $txtFile['general']['date'] ?>";
	yAxis = "<?php echo $txtFile['graphs']['stdev'] ?>";
	yAxisII = "<?php echo $txtFile['graphs']['averVar'] ?>";

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			[xAxis, yAxis, yAxisII],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0]['krStDev']),
				parseFloat(graphArray[0]['krVariance'])
			]
		]);

		var options = {
		  title: 'Kroner - standard afvigelse og varians',
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};
		var arrayLength = graphArray.length;
		for (var i = 1; i < arrayLength; i++) {
			data.addRow([
				graphArray[i][1],
				parseFloat(graphArray[i]['krStDev']),
				parseFloat(graphArray[0]['krVariance'])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('kronerStDev'));

		chart.draw(data, options);
	}
</script>
	