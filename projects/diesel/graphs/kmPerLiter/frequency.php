
<center>
	<div id="kilometerPerLiterFrequency" style="width: 100%; height: 700px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "bigGraph");	
	$txtFile = include("../text/global.php");
?>

<script>
	freqTitle = "<?php echo $txtFile['graphs']['kmlHeader'] ?>";
	freqxAxis = "<?php echo $txtFile['graphs']['freqX'] ?>";
	freqyAxis = "<?php echo $txtFile['graphs']['kmlY'] ?>";

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			[' ', ' ', { role: 'style' }],
			['0 - 21 km/l', graphArray[0]['kilometerPerLiterFrequency']['0:21'], 'color: #ff4d4d' ],
			['21 - 22 km/l', graphArray[0]['kilometerPerLiterFrequency']['21:22'], 'color: #e5e4e2' ], 
			['22 - 23 km/l', graphArray[0]['kilometerPerLiterFrequency']['22:23'], 'gold'],
			['23 - 24 km/l', graphArray[0]['kilometerPerLiterFrequency']['23:24'], 'silver'],            
			['24 - 25 km/l', graphArray[0]['kilometerPerLiterFrequency']['24:25'], '#b87333'],
			['25 - 26 km/l', graphArray[0]['kilometerPerLiterFrequency']['25:26'], '#0040ff'],
			['26 km/l -', graphArray[0]['kilometerPerLiterFrequency']['26:'], '#0040ff']
		]);

		var options = {
			title: freqTitle,
			vAxis: {title: freqyAxis},
			hAxis: {title: freqxAxis},
			chartArea: {width: '50%'},
			legend: 'none'
		};

		var chart = new google.visualization.BarChart(document.getElementById('kilometerPerLiterFrequency'));

		chart.draw(data, options);
	}
</script>
	