
<center>
	<div id="yearInterval" style="width: 100%; height: 700px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "bigGraph");	
	$txtFile = include("../text/global.php");
?>

<script>
	dateTitle = "<?php echo $txtFile['graphs']['dateHeader'] ?>";
	datexAxis = "<?php echo $txtFile['graphs']['freqX'] ?>";
	dateyAxis = "<?php echo $txtFile['graphs']['freqY'] ?>";
	
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
			title: dateTitle,
			vAxis: {title: dateyAxis},
			hAxis: {title: datexAxis},
			chartArea: {width: '50%'},
			legend: 'none'
		};

		var chart = new google.visualization.BarChart(document.getElementById('yearInterval'));

		chart.draw(data, options);
	}
</script>
	