<?php
	include "../view/diesel/helpFunctions/advancedHelper.php";
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
<script>
	var array = <?php echo json_encode($arr); ?>;
	arrayLength = array.length;
	
	var literPerKroner = [];
	var literPerKroner = [];
	var literPerKilometer = [];
	var kilometerPerLiter = [];
	var kilometerPerKroner = [];
	var kronerPerKilometer = [];
	var kronerPerLiter = [];
	var kroner = [];
	var liter = [];
	var kilometer = [];
	var kilometerMedian = [];
	var kilometerVarians = [];
	var kilometerStandardDev = [];
	var kilometerAverage = [];
	
	console.log("kilometer");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometer.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['kilometer'] 
		});
		console.log(array[i]['kilometer']);
	}
	console.log("kilometer per liter:");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerPerLiter.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['km/l'] 
		});
		console.log(array[i]['km/l']);
	}
	console.log("kilometer median");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerMedian.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['kilometerMedian'] 
		});
		console.log(array[0]['kilometerMedian']);
	}
	console.log("kilometer varians");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerVarians.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['kilometerVariance'] 
		});
		console.log(array[0]['kilometerVariance']);
	}
	console.log("kilometer standard Dev");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerStandardDev.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['kilometerStandardDev'] 
		});
		console.log(array[0]['kilometerStandardDev']);
	}
	console.log("kilometer average");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerAverage.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageKm'] 
		});
		console.log(array[0]['averageKm']);
	}
	
	
	window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
			title: {
			  text: "Custom graf"
			},
			legend: {
				cursor: "pointer",
				itemclick: function (e) {
					if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
						e.dataSeries.visible = false;
					} else {
						e.dataSeries.visible = true;
					}

					e.chart.render();
				}
			},
			data: [ {
				showInLegend: true,
				visible: false,
				type: "line",
				name:"Kilometer",
				dataPoints: kilometer
			}, {
				showInLegend: true,
				visible: false,
				name:"Kilometer median",
				type: "line",
				dataPoints: kilometerMedian
			}, {
				showInLegend: true,
				visible: false,
				name:"Kilometer per liter",
				type: "line",
				dataPoints: kilometerPerLiter
			}, {
				showInLegend: true,
				visible: false,
				name:"Kilometer varians",
				type: "line",
				dataPoints: kilometerVarians
			}, {
				showInLegend: true,
				visible: false,
				name:"Kilometer standard deviation",
				type: "line",
				dataPoints: kilometerStandardDev
			}, {
				showInLegend: true,
				visible: false,
				name:"Kilometer gennemsnit",
				type: "line",
				dataPoints: kilometerAverage
			}]
		});

		chart.render();
	

	}
</script>

<div id="chartContainer" style="height: 300px; max-width: 920px; margin: 0px auto;"> </div>












