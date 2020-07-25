
<div id="curve_chart" style="width: 900px; height: 500px"></div>	
	

<?php
	
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$resultII = mysqli_query($con,$graphData);
	$i = 0;
	while ($rowArray = $resultII->fetch_array()) {
		$array[] = $rowArray;
	}
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>

	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);

	var i = <?php echo $i ?>;
	var j = 0;
	

	var temp = jQuery.parseJSON('<?php echo json_encode($array) ?>');
	console.log(temp);

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
		<?php 
			echo "data.addRow([";
			echo " '2008',";
			echo "562,";
			echo "456,";
			echo "654";
			echo "]);";
		?>

		var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

		chart.draw(data, options);
	}
</script>
	