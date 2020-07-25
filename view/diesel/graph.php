
<center>
	<div id="curve_chart" style="width: 2100px; height: 700px; margin-left: -110px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	while ($rowArray = $result->fetch_array()) {
		$graphArray[] = $rowArray;
	}
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
		  ['Dato', 'kilometer', 'kroner', 'liter'],
		  ['2018-07-25', 0, 0, 0]
		]);

		var options = {
		  title: 'Diesel regnskab',
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};
		var arrayLength = graphArray.length;
		for (var i = 0; i < arrayLength; i++) {
			data.addRow([
				graphArray[i][1],
				parseInt(graphArray[i][2]),
				parseInt(graphArray[i][3]),
				parseInt(graphArray[i][4])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

		chart.draw(data, options);
	}
</script>
	