
<center>
	<div id="kmPerKroner" style="width: 2100px; height: 700px; margin-left: -110px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "graph");	
?>

<script>

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Dato', 'Kilometer / Kroner'],
			[
				graphArray[0][1], 
				parseInt(graphArray[0]['km/kr'])
			]
		]);

		var options = {
		  title: 'Kilometer per kroner',
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};
		var arrayLength = graphArray.length;
		for (var i = 1; i < arrayLength; i++) {
			data.addRow([
				graphArray[i][1],
				parseInt(graphArray[i]['km/kr'])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('kmPerKroner'));

		chart.draw(data, options);
	}
</script>
	