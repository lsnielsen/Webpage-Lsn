
<center>
	<div id="krPerKrStDev" style="width: 2100px; height: 700px; margin-left: -110px;"></div>	
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
			['Dato', 'Standard afvigelse', 'Gennemsnit, varians'],
			[
				graphArray[0][1], 
				parseFloat(graphArray[0]['kmPerKrStDev']),
				parseFloat(graphArray[0]['kmPerKrVariance'])
			]
		]);

		var options = {
		  title: 'Kilometer per kroner - standard afvigelse og varians',
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};
		var arrayLength = graphArray.length;
		for (var i = 1; i < arrayLength; i++) {
			data.addRow([
				graphArray[i][1],
				parseFloat(graphArray[i]['kmPerKrStDev']),
				parseFloat(graphArray[0]['kmPerKrVariance'])
			]);
		}

		var chart = new google.visualization.LineChart(document.getElementById('krPerKrStDev'));

		chart.draw(data, options);
	}
</script>
	