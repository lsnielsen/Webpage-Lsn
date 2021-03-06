
<center>
	<div id="kmPerLiter" style="width: 1000px; height: 400px; margin-left: -110px;"></div>	
</center>	

<?php
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "smallGraph");		
	$txtFile = include("../text/global.php");
?>
<script>

	kmlTitle = "<?php echo $txtFile['dropdown']['kml'] ?>";
	kmlxAxis = "<?php echo $txtFile['general']['date'] ?>";
	kmlyAxis = "<?php echo $txtFile['stats']['kml'] ?>";
	
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			[kmlxAxis, kmlyAxis],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0]['km/l'])
			]
		]);

		var options = {
		  title: kmlTitle,
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};
		var arrayLength = graphArray.length;
		for (var i = 1; i < arrayLength; i++) {
			data.addRow([
				graphArray[i][1],
				parseFloat(graphArray[i]['km/l'])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('kmPerLiter'));

		chart.draw(data, options);
	}
</script>
	