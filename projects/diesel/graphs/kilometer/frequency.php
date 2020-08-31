
<center>
	<div id="kilometerFrequency" style="width: 100%; height: 700px;"></div>	
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
			['950 km -', graphArray[0]['kmFrequency']['950:'], 'color: #ff4d4d' ],
			['900 km - 950 km', graphArray[0]['kmFrequency']['900:950'], 'color: #e5e4e2' ], 
			['850 km - 900 km', graphArray[0]['kmFrequency']['850:900'], 'gold'],
			['800 km - 850 km', graphArray[0]['kmFrequency']['800:850'], 'silver'],            
			['0 km - 800 km', graphArray[0]['kmFrequency']['0:800'], '#b87333']
		]);

		var options = {
			title: 'Frekvens diagram over kilometer',
			vAxis: {title: 'Kilometer interval'},
			hAxis: {title: 'Procent'},
			chartArea: {width: '50%'},
			legend: 'none'
		};

		var chart = new google.visualization.BarChart(document.getElementById('kilometerFrequency'));

		chart.draw(data, options);
	}
</script>
	