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
	var arrayLength = array.length;

</script>

<?php	
	include "kilometerSetup.php";
	include "kronerSetup.php";
	include "literSetup.php";
?>

<script>
	
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
			data: [ { // FIRST WE HAVE THE KILOMETER GRAPHS
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
				name:"Kilometer per liter",
				type: "line",
				dataPoints: kilometerPerKroner
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
			}, {	// HERE STARTS THE KRONER GRAPHS
				showInLegend: true,
				visible: false,
				type: "line",
				name:"Kroner",
				dataPoints: kroner
			}, {
				showInLegend: true,
				visible: false,
				name:"Kroner median",
				type: "line",
				dataPoints: kronerMedian
			}, {
				showInLegend: true,
				visible: false,
				name:"Kroner per liter",
				type: "line",
				dataPoints: kronerPerLiter
			}, {
				showInLegend: true,
				visible: false,
				name:"Kroner per kilometer",
				type: "line",
				dataPoints: kronerPerKilometer
			}, {
				showInLegend: true,
				visible: false,
				name:"Kroner varians",
				type: "line",
				dataPoints: kronerVarians
			}, {
				showInLegend: true,
				visible: false,
				name:"Kroner standard deviation",
				type: "line",
				dataPoints: kronerStandardDev
			}, {
				showInLegend: true,
				visible: false,
				name:"Kroner gennemsnit",
				type: "line",
				dataPoints: kronerAverage
			}, { // LAST IS THE LITER GRAPHS
				showInLegend: true,
				visible: false,
				type: "line",
				name:"Liter",
				dataPoints: liter
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter median",
				type: "line",
				dataPoints: literMedian
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter per kroner",
				type: "line",
				dataPoints: literPerKroner
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter per kilometer",
				type: "line",
				dataPoints: literPerKilometer
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter varians",
				type: "line",
				dataPoints: literVarians
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter standard deviation",
				type: "line",
				dataPoints: literStandardDev
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter gennemsnit",
				type: "line",
				dataPoints: literAverage
			}]
		});

		chart.render();
	

	}
</script>

<div id="chartContainer" style="height: 300px; max-width: 920px; margin: 0px auto;"> </div>












