
<center>
	<div id="kilometer" style="width: 100%; height: 700px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "bigGraph");	
	$txtFile = include("../text/global.php");
?>

<script>
	chartTitle = "<?php echo $txtFile['stats']['km'] ?>";
	xAxis = "<?php echo $txtFile['general']['date'] ?>";
	yAxis = "<?php echo $txtFile['stats']['km'] ?>";
	yAxisII = "<?php echo $txtFile['dropdown']['average'] ?>";
	yAxisIII = "<?php echo $txtFile['dropdown']['median'] ?>";

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			[xAxis, yAxis, yAxisII, yAxisIII],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0]['kilometer']),
				parseFloat(graphArray[0]['averageKm']),
				parseFloat(graphArray[0]['kilometerMedian'])
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
				parseFloat(graphArray[i]['kilometer']),
				parseFloat(graphArray[0]['averageKm']),
				parseFloat(graphArray[0]['kilometerMedian'])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('kilometer'));

		chart.draw(data, options);
	}
</script>
	