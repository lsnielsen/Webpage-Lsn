
<center>
	<div id="yearInterval" style="width: 100%; height: 700px;"></div>	
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
			['2018', graphArray[0]['dateFrequency']['2018'], 'color: #ff4d4d' ],
			['2019', graphArray[0]['dateFrequency']['2019'], 'color: #e5e4e2' ], 
			['2020', graphArray[0]['dateFrequency']['2020'], 'gold'],
			['2021', graphArray[0]['dateFrequency']['2021'], 'silver']
		]);

		var options = {
			title: 'Frekvens for dato',
			vAxis: {title: 'Årstal'},
			hAxis: {title: 'Procent'},
			chartArea: {width: '50%'},
			legend: 'none'
		};

		var chart = new google.visualization.BarChart(document.getElementById('yearInterval'));

		chart.draw(data, options);
	}
</script>
	