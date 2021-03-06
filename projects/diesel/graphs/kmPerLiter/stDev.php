
<center>
	<div id="kmPerLiterStDev" style="width: 100%; height: 700px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "bigGraph");	
	$txtFile = include("../text/global.php");
?>

<script>
	stdevTitle = "<?php echo $txtFile['graphs']['kmlStdVar'] ?>";
	stdevxAxis = "<?php echo $txtFile['general']['date'] ?>";
	stdevyAxis = "<?php echo $txtFile['graphs']['stdev'] ?>";
	stdevyAxisII = "<?php echo $txtFile['graphs']['averVar'] ?>";

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			[stdevxAxis, stdevyAxis, stdevyAxisII],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0]['kmPerLiterStDev']),
				parseFloat(graphArray[0]['kmPerLiterVariance'])
			]
		]);

		var options = {
		  title: stdevTitle,
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};
		var arrayLength = graphArray.length;
		for (var i = 1; i < arrayLength; i++) {
			data.addRow([
				graphArray[i][1],
				parseFloat(graphArray[i]['kmPerLiterStDev']),
				parseFloat(graphArray[0]['kmPerLiterVariance'])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('kmPerLiterStDev'));

		chart.draw(data, options);
	}
</script>
	