
<center>
	<div id="kroner" style="width: 100%; height: 700px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "bigGraph");	
?>

<script>

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Dato', 'Kroner', 'Gennemsnit', 'Median'],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0]['kroner']),
				parseFloat(graphArray[0]['averageKr']),
				parseFloat(graphArray[0]['krMedian'])
			]
		]);

		var options = {
		  title: 'Kroner',
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
	