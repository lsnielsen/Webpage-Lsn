
<center>
	<div id="krPerKm" style="width: 1000px; height: 400px; margin-left: -110px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "smallGraph");	
	$txtFile = include("../text/global.php");
?>

<script>
	krkmTitle = "<?php echo $txtFile['dropdown']['krkm'] ?>";
	krkmxAxis = "<?php echo $txtFile['general']['date'] ?>";
	krkmyAxis = "<?php echo $txtFile['stats']['krkm'] ?>";
	krkmyAxisII = "<?php echo $txtFile['dropdown']['average'] ?>";

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			[krkmxAxis, krkmyAxis, krkmyAxisII],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0]['kr/km']),
				parseFloat(graphArray[0]['averageKrPerKm'])
			]
		]);

		var options = {
		  title: krkmTitle,
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};
		var arrayLength = graphArray.length;
		for (var i = 1; i < arrayLength; i++) {
			data.addRow([
				graphArray[i][1],
				parseFloat(graphArray[i]['kr/km']),
				parseFloat(graphArray[0]['averageKrPerKm'])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('krPerKm'));

		chart.draw(data, options);
	}
</script>
	