<?php
	include "../projects/diesel/helpFunctions/advancedHelper.php";
	$con = mysqli_connect('127.0.0.1','root','');
	if(!$con) {  
		echo 'not connect to the server';  
	}  
	if(!mysqli_select_db($con,'lsnDb')) {  
		echo 'database not selected';  
	}  
	$graphData = "SELECT * FROM diesel";
	$result = mysqli_query($con,$graphData);
	$arr = handleAdvancedArray($result, "smallGraph");	

	for($i = 0; $i < sizeof($arr); $i++) {
		$date = $arr[$i][1];
		$first = $date[0];
		$second = $date[1];
		$third = $date[2];
		$fourth = $date[3];
		$fifth = $date[4];
		
		if ($second == "/" && $fourth == "-") {
			$newDate = $third . "/" . $first . "-" . $date[4] . $date[5];
		} elseif ($second == "/" && $fifth == "-") {
			$newDate = $third . $fourth . "/" . $first . "-" . $date[5] . $date[6];
		} elseif ($third == "/" && $fifth == "-") {
			$newDate = $fourth . "/" . $first . $second . "-" . $date[5] . $date[6];
		} elseif ($third == "/") {
			$newDate = $fourth . $fifth . "/" . $first . $second . "-" . $date[6] . $date[7];
		}
		$arr[$i][1] = $newDate;
	}


?>

<div id="chartContainer" style="height: 900px; width: 100%;"></div>
<script>
	var array = <?php echo json_encode($arr); ?>;
	arrayLength = array.length;

	var data = []; 
	var dataSeries = { type: "spline" };
	var dataPoints = [];
	window.onload = function () {

		var stockChart = new CanvasJS.StockChart("chartContainer",{
			title:{
				text:"Din custom graf"
			},
			animationEnabled: true,
			exportEnabled: true,
			charts: [{
				axisX: {
					crosshair: {
					enabled: true,
					snapToDataPoint: true
					}
				},
				axisY: {
					crosshair: {
					enabled: true,
					snapToDataPoint: true
					}
				},
				data: data
			}]
		});
		
		$(".kmPerLiter").click(function() {
			console.log("kmPerLiter");
			for (var i = 0; i < arrayLength; i += 1) {
				dataPoints.push({ 
					x: new Date(array[i][1]), 
					y: array[i]['km/l'] 
				});
			}
			dataSeries.dataPoints = dataPoints;
			data.push(dataSeries);
			stockChart.render();    
		});
		
		$(".krPerLiter").click(function() {
			console.log("krPerLiter");
			for (var i = 0; i < arrayLength; i += 1) {
				dataPoints.push({ 
					x: new Date(array[i][1]), 
					y: array[i]['kr/l'] 
				});
			}
			dataSeries.dataPoints = dataPoints;
			data.push(dataSeries);
			stockChart.render();    
		});
	}

</script>
















	
	
	