
<center>
	<div id="combinedGraphs" style="width: 2100px; height: 700px; margin-left: -110px;"></div>	
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
			['Dato', 'Liter / kilometer', 'Liter / krone', 'Kroner / kilometer'],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0]['l/km']),
				parseFloat(graphArray[0]['l/kr']),
				parseFloat(graphArray[0]['kr/km'])
			]
		]);

		var options = {
		  title: 'Liter per kilometer, liter per krone og kroner per kilometer',
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};
		var arrayLength = graphArray.length;
		for (var i = 1; i < arrayLength; i++) {
			data.addRow([
				graphArray[i][1],
				parseFloat(graphArray[i]['l/km']),
				parseFloat(graphArray[i]['l/kr']),
				parseFloat(graphArray[i]['kr/km'])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('combinedGraphs'));

		chart.draw(data, options);
	}
</script>
	