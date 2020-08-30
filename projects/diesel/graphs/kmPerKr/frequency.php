
<center>
	<div id="kilometerPerKronerFrequency" style="width: 100%; height: 700px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "bigGraph");	
?>

<script>

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			[' ', ' ', { role: 'style' }],
			['3,5 km/kr -', graphArray[0]['kilometerPerKronerFrequency']['3,5:'], 'color: #ff4d4d' ],
			['3 - 3,5 km/kr', graphArray[0]['kilometerPerKronerFrequency']['3:3,5'], 'color: #e5e4e2' ], 
			['2,5 - 3 km/kr', graphArray[0]['kilometerPerKronerFrequency']['2,5:3'], 'gold'],
			['2 - 2,5 km/kr', graphArray[0]['kilometerPerKronerFrequency']['2:2,5'], 'silver'],            
			['0 - 2 km/kr', graphArray[0]['kilometerPerKronerFrequency']['0:2'], '#b87333']
		]);

		var options = {
			title: 'Frekvens diagram over kilometer per kroner',
			vAxis: {title: 'Kilometer per kroner interval'},
			hAxis: {title: 'Procent'},
			chartArea: {width: '50%'},
			legend: 'none'
		};

		var chart = new google.visualization.BarChart(document.getElementById('kilometerPerKronerFrequency'));

		chart.draw(data, options);
	}
</script>
	