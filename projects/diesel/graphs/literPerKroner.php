
<center>
	<div id="literPerKroner" style="width: 1000px; height: 400px; margin-left: -110px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "smallGraph");	
	$txtFile = include("../text/global.php");
?>

<script>
	lkrTitle = "<?php echo $txtFile['dropdown']['lkr'] ?>";
	lkrxAxis = "<?php echo $txtFile['general']['date'] ?>";
	lkryAxis = "<?php echo $txtFile['stats']['lkr'] ?>";
	lkryAxisII = "<?php echo $txtFile['dropdown']['average'] ?>";

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			[lkrxAxis, lkryAxis, lkryAxisII],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0]['l/kr']),
				parseFloat(graphArray[0]['averageLiterPerKr'])
			]
		]);

		var options = {
		  title: lkrTitle,
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};
		var arrayLength = graphArray.length;
		for (var i = 1; i < arrayLength; i++) {
			data.addRow([
				graphArray[i][1],
				parseFloat(graphArray[i]['l/kr']),
				parseFloat(graphArray[0]['averageLiterPerKr'])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('literPerKroner'));

		chart.draw(data, options);
	}
</script>
	