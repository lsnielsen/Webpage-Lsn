
<center>
	<div id="literFrequency" style="width: 100%; height: 700px;"></div>	
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
			['40 liter -', graphArray[0]['literFrequency']['40:'], 'color: #00e600' ],
			['35 - 40 liter', graphArray[0]['literFrequency']['35:40'], 'color: #ff4d4d' ],
			['30 - 35 liter', graphArray[0]['literFrequency']['30:35'], 'color: #e5e4e2' ], 
			['25 - 30 liter', graphArray[0]['literFrequency']['25:30'], 'gold'],
			['20 - 25 liter', graphArray[0]['literFrequency']['20:25'], 'silver'],            
			['0 - 20 liter', graphArray[0]['literFrequency']['0:20'], '#b87333']
		]);

		var options = {
			title: 'Frekvens diagram over liter',
			vAxis: {title: 'Liter interval'},
			hAxis: {title: 'Procent'},
			chartArea: {width: '50%'},
			legend: 'none'
		};

		var chart = new google.visualization.BarChart(document.getElementById('literFrequency'));

		chart.draw(data, options);
	}
</script>
	