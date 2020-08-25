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
				name:"Km median",
				type: "line",
				dataPoints: kilometerMedian
			}, {
				showInLegend: true,
				visible: false,
				name:"Km/l",
				type: "line",
				dataPoints: kilometerPerLiter
			}, {
				showInLegend: true,
				visible: false,
				name:"Km/kr",
				type: "line",
				dataPoints: kilometerPerKroner
			}, {
				showInLegend: true,
				visible: false,
				name:"Km var",
				type: "line",
				dataPoints: kilometerVarians
			}, {
				showInLegend: true,
				visible: false,
				name:"Km st dev",
				type: "line",
				dataPoints: kilometerStandardDev
			}, {
				showInLegend: true,
				visible: false,
				name:"Km gen.",
				type: "line",
				dataPoints: kilometerAverage
			}, {
				showInLegend: true,
				visible: false,
				name:"Km st dev",
				type: "line",
				dataPoints: kilometerStDev
			}, {
				showInLegend: true,
				visible: false,
				name:"Km/l st dev",
				type: "line",
				dataPoints: kilometerPerLiterStDev
			},{
				showInLegend: true,
				visible: false,
				name:"Kilometer per kroner standard dev",
				type: "line",
				dataPoints: kilometerPerKronerStDev
			},{
				showInLegend: true,
				visible: false,
				name:"Kilometer per liter gennemsnit",
				type: "line",
				dataPoints: kilometerPerLiterAverage
			},{
				showInLegend: true,
				visible: false,
				name:"Kilometer per kroner gennemsnit",
				type: "line",
				dataPoints: kilometerPerKronerAverage
			}, {
				showInLegend: true,
				visible: false,
				name:"Kilometer per kroner varians",
				type: "line",
				dataPoints: kilometerPerKronerVarians
			}, {
				showInLegend: true,
				visible: false,
				name:"Kilometer per liter median",
				type: "line",
				dataPoints: kilometerPerLiterMedian
			}, {
				showInLegend: true,
				visible: false,
				name:"Kilometer per kroner median",
				type: "line",
				dataPoints: kilometerPerKronerMedian
			}, {
				showInLegend: true,
				visible: false,
				name:"Kilometer per liter varians",
				type: "line",
				dataPoints: kilometerPerLiterVarians
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
			},{
				showInLegend: true,
				visible: false,
				name:"Kroner per liter st dev",
				type: "line",
				dataPoints: kronerPerLiterStDev
			},{
				showInLegend: true,
				visible: false,
				name:"Kroner per kilometer gennemsnit",
				type: "line",
				dataPoints: kronerPerKilometerAverage
			},{
				showInLegend: true,
				visible: false,
				name:"Kroner per liter gennemsnit",
				type: "line",
				dataPoints: kronerPerLiterAverage
			},{
				showInLegend: true,
				visible: false,
				name:"Kroner per kilometer st dev",
				type: "line",
				dataPoints: kronerPerKilometerStDev
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
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter per kroner st dev",
				type: "line",
				dataPoints: literPerKilometerStDev
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter per kilometer st dev",
				type: "line",
				dataPoints: literPerKronerStDev
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter per kroner gennemsnit",
				type: "line",
				dataPoints: literPerKronerAverage
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter per kilometer gennemsnit",
				type: "line",
				dataPoints: literPerKilometerAverage
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter per kilometer Median",
				type: "line",
				dataPoints: literPerKilometerMedian
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter per kilometer Varians",
				type: "line",
				dataPoints: literPerKilometerVarians
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter per kroner median",
				type: "line",
				dataPoints: literPerKronerMedian
			}, {
				showInLegend: true,
				visible: false,
				name:"Liter per kroner Varians",
				type: "line",
				dataPoints: literPerKronerVarians
			}, {
				showInLegend: true,
				visible: false,
				name:"Kroner per liter median",
				type: "line",
				dataPoints: kronerPerLiterMedian
			}, {
				showInLegend: true,
				visible: false,
				name:"Kroner per liter Varians",
				type: "line",
				dataPoints: kronerPerLiterVarians
			}, {
				showInLegend: true,
				visible: false,
				name:"Kroner per kilometer median",
				type: "line",
				dataPoints: kronerPerKilometerMedian
			}, {
				showInLegend: true,
				visible: false,
				name:"Kroner per kilometer varians",
				type: "line",
				dataPoints: kronerPerKilometerVarians
			}]
		});

		chart.render();
	

	}
</script>

<div id="chartContainer" style="height: 1500px; width: 98%; margin: 0px auto;"> </div>












