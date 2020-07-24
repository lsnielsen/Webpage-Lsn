
<div id="curve_chart" style="width: 900px; height: 500px"></div>	
	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$i = 0;
	while($row = $result->fetch_array()){
		echo "<div display:none class=db"; 
		echo json_encode($i); 
		echo " value=";
		echo json_encode($row['date']);
		echo "> </div>";

		echo "<div display:none class=db"; 
		echo json_encode($i); 
		echo " value=";
		echo json_encode($row['kilometer']);
		echo "> </div>";

		echo "<div display:none class=db"; 
		echo json_encode($i); 
		echo " value=";
		echo json_encode($row['liter']);
		echo "> </div>";

		echo "<div display:none class=db"; 
		echo json_encode($i); 
		echo " value=";
		echo json_encode($row['kroner']);
		echo "> </div>";

		$i++;
	}
?>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var i = <?php echo $i ?>;
	var j = 0;

	function drawChart() {
		var data = google.visualization.arrayToDataTable([
		  ['Dato', 'kilometer', 'kroner', 'liter'],
		  ['2004',  1000, 400, 23],
		  ['2005',  1170, 460, 43],
		  ['2006',  660, 1120, 32],
		  ['2007',  1030, 540, 89]
		]);

		var options = {
		  title: 'Diesel regnskab',
		  curveType: 'function',
		  legend: { position: 'bottom' }
		};
		data.addRow([
			'2008',
			562,
			456,
			654
		]);

		var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

		chart.draw(data, options);
	}
</script>
	