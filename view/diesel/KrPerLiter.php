
<center>
	<div id="krPerLiter" style="width: 2100px; height: 700px; margin-left: -110px;"></div>	
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
			['Dato', 'Kroner / liter'],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0]['kr/l'])
			]
		]);

		var options = {
		  title: 'Kroner per liter',
		  legend: { position: 'bottom' }
		};
		var arrayLength = graphArray.length;
		for (var i = 1; i < arrayLength; i++) {
			data.addRow([
				graphArray[i][1],
				parseFloat(graphArray[i]['kr/l'])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('krPerLiter'));

		chart.draw(data, options);
	}
</script>
	