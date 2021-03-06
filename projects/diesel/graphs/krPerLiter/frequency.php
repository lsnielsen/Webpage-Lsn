
<center>
	<div id="kronerPerLiterFrequency" style="width: 100%; height: 700px;"></div>	
</center>	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$graphArray = handleAdvancedArray($result, "bigGraph");	
	$txtFile = include("../text/global.php");
?>

<script>
	freqTitle = "<?php echo $txtFile['graphs']['krlHeader'] ?>";
	freqxAxis = "<?php echo $txtFile['graphs']['freqX'] ?>";
	freqyAxis = "<?php echo $txtFile['graphs']['krlY'] ?>";
	
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var graphArray = jQuery.parseJSON('<?php echo json_encode($graphArray) ?>');

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			[' ', ' ', { role: 'style' }],
			['9,50 kr - ', graphArray[0]['kronerPerLiterFrequency']['9,5:'], 'silver'],       
			['9,00 kr - 9,50 kr', graphArray[0]['kronerPerLiterFrequency']['9:9,5'], 'gold'],
			['8,50 kr - 9,00 kr', graphArray[0]['kronerPerLiterFrequency']['8,5:9'], 'color: #e5e4e2' ], 
			['8,00 kr - 8,50 kr', graphArray[0]['kronerPerLiterFrequency']['8:8,5'], 'color: #ff4d4d' ],
			['0,00 kr - 8,00 kr', graphArray[0]['kronerPerLiterFrequency']['0:8'], 'color: #00e600' ]
		]);

		var options = {
			title: freqTitle,
			vAxis: {title: freqyAxis},
			hAxis: {title: freqxAxis},
			chartArea: {width: '50%'},
			legend: 'none'
		};

		var chart = new google.visualization.BarChart(document.getElementById('kronerPerLiterFrequency'));

		chart.draw(data, options);
	}
</script>
	