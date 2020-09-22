
<center>
	<div id="curve_chart" style="width: 2100px; height: 700px; margin-left: -110px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = makeQueryToArray($result, "bigGraph");	
	$txtFile = include("../text/global.php");
?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>

	graphTitle = "<?php echo $txtFile['graphs']['dieselHeader'] ?>";
	graphDate = "<?php echo $txtFile['general']['date'] ?>";
	graphKm = "<?php echo $txtFile['stats']['km'] ?>";
	graphKr = "<?php echo $txtFile['stats']['kr'] ?>";
	graphLiter = "<?php echo $txtFile['stats']['liter'] ?>";

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			[graphDate, graphKm, graphKr, graphLiter],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0][2]), 
				parseFloat(graphArray[0][3]), 
				parseFloat(graphArray[0][4])
			]
		]);

		var options = {
		  title: graphTitle,
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};
		var arrayLength = graphArray.length;
		for (var i = 1; i < arrayLength; i++) {
			data.addRow([
				graphArray[i][1],
				parseFloat(graphArray[i][2]),
				parseFloat(graphArray[i][3]),
				parseFloat(graphArray[i][4])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

		chart.draw(data, options);
	}
</script>
	