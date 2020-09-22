
<center>
	<div id="kmPerLiter" style="width: 100%; height: 700px;"></div>	
</center>	

<?php
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "bigGraph");	
	$txtFile = include("../text/global.php");
?>

<script>
	chartTitle = "<?php echo $txtFile['graphs']['kmlHeader'] ?>";
	xAxis = "<?php echo $txtFile['graphs']['freqX'] ?>";
	yAxis = "<?php echo $txtFile['graphs']['kmlY'] ?>";

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Dato', 'Kilometer / liter', 'Gennemsnit', 'Median'],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0]['km/l']),
				parseFloat(graphArray[0]['averageKmPerLiter']),
				parseFloat(graphArray[0]['kmPerLiterMedian'])
			]
		]);

		var options = {
		  title: 'Kilometer per liter',
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};
		var arrayLength = graphArray.length;
		for (var i = 1; i < arrayLength; i++) {
			data.addRow([
				graphArray[i][1],
				parseFloat(graphArray[i]['km/l']),
				parseFloat(graphArray[0]['averageKmPerLiter']),
				parseFloat(graphArray[0]['kmPerLiterMedian'])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('kmPerLiter'));

		chart.draw(data, options);
	}
</script>
	