
<center>
	<div id="kronerFrequency" style="width: 100%; height: 700px;"></div>	
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
			['100:150', graphArray[0]['kronerFrequency']['100:150'], '#b87333'],            
			['150:200', graphArray[0]['kronerFrequency']['150:200'], 'silver'],            
			['200:250', graphArray[0]['kronerFrequency']['200:250'], 'gold'],
			['250:300', graphArray[0]['kronerFrequency']['250:300'], 'color: #e5e4e2' ], 
			['300:350', graphArray[0]['kronerFrequency']['300:350'], 'color: #ff4d4d' ],
			['350:400', graphArray[0]['kronerFrequency']['350:400'], 'color: #00e600' ]
		]);

		var options = {
			title: 'Frekvens diagram over kroner',
			vAxis: {title: 'Kroner interval'},
			hAxis: {title: 'Procent'},
			chartArea: {width: '50%'},
			legend: 'none'
		};

		var chart = new google.visualization.BarChart(document.getElementById('kronerFrequency'));

		chart.draw(data, options);
	}
</script>
	