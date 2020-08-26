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
				text: "Custom graf",
				fontColor: "brown",
				fontSize: 50
			},
			toolTip:{
				enabled: true,       //disable here
				animationEnabled: true //disable here
			},
			exportEnabled: true,
			zoomEnabled: true,
			legend: {
				cursor: "pointer",
				fontSize: 25,
				itemclick: function (e) {
					if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
						e.dataSeries.visible = false;
					} else {
						e.dataSeries.visible = true;
					}

					e.chart.render();
				}
			},
			axisX: [{
				title: "Dato",
				titleFontSize: 27,
				labelFontSize: 25,
				titleWrap: true,
				crosshair: {
					enabled: true,
					snapToDataPoint: true
				}
			}],
			axisY: [{
				labelFontSize: 25,
				titleWrap: true,
				crosshair: {
					enabled: true,
					snapToDataPoint: true
				}
			}],
				data: [{ // FIRST WE HAVE THE KILOMETER GRAPHS
					showInLegend: true,
					visible: false,
					type: "line",
					name:"Kilometer",
					dataPoints: kilometer,
					cursor: "pointer",
					legendMarkerType: "square"
				}, {
					showInLegend: true,
					visible: false,
					name:"Km median",
					type: "line",
					dataPoints: kilometerMedian,
					cursor: "pointer",
					legendMarkerType: "square",
					lineColor: "red",
					markerType: "square",
					markerColor: "green"
				}, {
					showInLegend: true,
					visible: false,
					name:"Km var",
					type: "line",
					dataPoints: kilometerVarians,
					cursor: "pointer",
					legendMarkerType: "square"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km gen",
					type: "line",
					dataPoints: kilometerAverage,
					cursor: "pointer",
					legendMarkerType: "square"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km st dev",
					type: "line",
					dataPoints: kilometerStandardDev,
					cursor: "pointer",
					legendMarkerType: "square"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km st dev",
					type: "line",
					dataPoints: kilometerStDev,
					cursor: "pointer",
					legendMarkerType: "square"  
				}, { //KILOMETER PER LITER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Km/l",
					type: "line",
					dataPoints: kilometerPerLiter,
					cursor: "pointer",
					legendMarkerType: "triangle"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/l st dev",
					type: "line",
					dataPoints: kilometerPerLiterStDev,
					cursor: "pointer",
					legendMarkerType: "triangle"  
				},{
					showInLegend: true,
					visible: false,
					name:"Km/l gen.",
					type: "line",
					dataPoints: kilometerPerLiterAverage,
					cursor: "pointer",
					legendMarkerType: "triangle"  
				},{
					showInLegend: true,
					visible: false,
					name:"Km/l median",
					type: "line",
					dataPoints: kilometerPerLiterMedian,
					cursor: "pointer",
					legendMarkerType: "triangle"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/l var",
					type: "line",
					dataPoints: kilometerPerLiterVarians,
					cursor: "pointer",
					legendMarkerType: "triangle"  
				}, { // KILOMETER PER KRONER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Km/kr",
					type: "line",
					dataPoints: kilometerPerKroner,
					cursor: "pointer",
					legendMarkerType: "cross"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/kr gen.",
					type: "line",
					dataPoints: kilometerPerKronerAverage,
					cursor: "pointer",
					legendMarkerType: "cross"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/kr median",
					type: "line",
					dataPoints: kilometerPerKronerMedian,
					cursor: "pointer",
					legendMarkerType: "cross"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/kr st dev",
					type: "line",
					dataPoints: kilometerPerKronerStDev,
					cursor: "pointer",
					legendMarkerType: "cross"  
				},{
					showInLegend: true,
					visible: false,
					name:"Km/kr var",
					type: "line",
					dataPoints: kilometerPerKronerVarians,
					cursor: "pointer",
					legendMarkerType: "cross"  
				}, {	// HERE STARTS THE KRONER GRAPHS
					showInLegend: true,
					visible: false,
					type: "line",
					name:"Kroner",
					dataPoints: kroner,
					cursor: "pointer",
					legendMarkerType: "circle"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr gen.",
					type: "line",
					dataPoints: kronerAverage,
					cursor: "pointer",
					legendMarkerType: "circle"  
				},{
					showInLegend: true,
					visible: false,
					name:"Kr median",
					type: "line",
					dataPoints: kronerMedian,
					cursor: "pointer",
					legendMarkerType: "circle"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr var",
					type: "line",
					dataPoints: kronerVarians,
					cursor: "pointer",
					legendMarkerType: "circle"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr st dev",
					type: "line",
					dataPoints: kronerStandardDev,
					cursor: "pointer",
					legendMarkerType: "circle"  
				}, { //KRONER PER LITER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Kr/l",
					type: "line",
					dataPoints: kronerPerLiter,
					cursor: "pointer",
					legendMarkerType: "square"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/l var",
					type: "line",
					dataPoints: kronerPerLiterVarians,
					cursor: "pointer",
					legendMarkerType: "square"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/l median",
					type: "line",
					dataPoints: kronerPerLiterMedian,
					cursor: "pointer",
					legendMarkerType: "square"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/l st dev",
					type: "line",
					dataPoints: kronerPerLiterStDev,
					cursor: "pointer",
					legendMarkerType: "square"  
				},{
					showInLegend: true,
					visible: false,
					name:"Kr/l gen.",
					type: "line",
					dataPoints: kronerPerLiterAverage,
					cursor: "pointer",
					legendMarkerType: "square"  
				},{ // KRONER PER KILOMETER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Kr/km",
					type: "line",
					dataPoints: kronerPerKilometer,
					cursor: "pointer",
					legendMarkerType: "triangle"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/km median",
					type: "line",
					dataPoints: kronerPerKilometerMedian,
					cursor: "pointer",
					legendMarkerType: "triangle"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/km var",
					type: "line",
					dataPoints: kronerPerKilometerVarians,
					cursor: "pointer",
					legendMarkerType: "triangle"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/km gen.",
					type: "line",
					dataPoints: kronerPerKilometerAverage,
					cursor: "pointer",
					legendMarkerType: "triangle"  
				},{
					showInLegend: true,
					visible: false,
					name:"Kr/km st dev",
					type: "line",
					dataPoints: kronerPerKilometerStDev,
					cursor: "pointer",
					legendMarkerType: "triangle"  
				}, { // LAST IS THE LITER GRAPHS
					showInLegend: true,
					visible: false,
					type: "line",
					name:"Liter",
					dataPoints: liter,
					cursor: "pointer",
					legendMarkerType: "cross"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter gen.",
					type: "line",
					dataPoints: literAverage,
					cursor: "pointer",
					legendMarkerType: "cross"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter median",
					type: "line",
					dataPoints: literMedian,
					cursor: "pointer",
					legendMarkerType: "cross"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter st dev",
					type: "line",
					dataPoints: literStandardDev,
					cursor: "pointer",
					legendMarkerType: "cross"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter var",
					type: "line",
					dataPoints: literVarians,
					cursor: "pointer",
					legendMarkerType: "cross"  
				}, { // LITER PER KRONER GRAPHS
					showInLegend: true,
					visible: false,
					name:"L/kr",
					type: "line",
					dataPoints: literPerKroner,
					cursor: "pointer",
					legendMarkerType: "square"
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr gen.",
					type: "line",
					dataPoints: literPerKronerAverage,
					cursor: "pointer",
					legendMarkerType: "square"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr st dev",
					type: "line",
					dataPoints: literPerKronerStDev,
					cursor: "pointer",
					legendMarkerType: "square"
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr median",
					type: "line",
					dataPoints: literPerKronerMedian,
					cursor: "pointer",
					legendMarkerType: "square"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr var",
					type: "line",
					dataPoints: literPerKronerVarians,
					cursor: "pointer",
					legendMarkerType: "square"  
				}, { // LITER PER KILOMETER GRAPHS
					showInLegend: true,
					visible: false,
					name:"L/km",
					type: "line",
					dataPoints: literPerKilometer,
					cursor: "pointer",
					legendMarkerType: "triangle"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km st dev",
					type: "line",
					dataPoints: literPerKilometerStDev,
					cursor: "pointer",
					legendMarkerType: "triangle"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km gen.",
					type: "line",
					dataPoints: literPerKilometerAverage,
					cursor: "pointer",
					legendMarkerType: "triangle"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km median",
					type: "line",
					dataPoints: literPerKilometerMedian,
					cursor: "pointer",
					legendMarkerType: "triangle" 
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km var",
					type: "line",
					dataPoints: literPerKilometerVarians,
					cursor: "pointer",
					legendMarkerType: "triangle"
				}]
		});

		chart.render();
	

	}
</script>

<div id="chartContainer" style="height: 1200px; width: 98%; margin: 0px auto;"> </div>












