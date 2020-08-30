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
			verticalAlign: "bottom",  // "top" , "bottom", "center"
			horizontalAlign: "center",  // "center" , "right", "left"
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
					markerType: "square",
					legendMarkerType: "square",
					markerColor: "#4dffdb",
					legendMarkerColor: "#4dffdb"
				}, {
					showInLegend: true,
					visible: false,
					name:"Km median",
					type: "line",
					dataPoints: kilometerMedian,
					cursor: "pointer",
					markerType: "square",
					legendMarkerType: "square",
					markerColor: "#66ff66",
					legendMarkerColor: "#66ff66"
				}, {
					showInLegend: true,
					visible: false,
					name:"Km var",
					type: "line",
					dataPoints: kilometerVarians,
					cursor: "pointer",
					markerType: "square",
					legendMarkerType: "square",
					markerColor: "#b34700",
					legendMarkerColor: "#b34700"
				}, {
					showInLegend: true,
					visible: false,
					name:"Km gen",
					type: "line",
					dataPoints: kilometerAverage,
					cursor: "pointer",
					markerType: "square",
					legendMarkerType: "square",
					markerColor: "#336600",
					legendMarkerColor: "#336600"
				}, {
					showInLegend: true,
					visible: false,
					name:"Km st dev",
					type: "line",
					dataPoints: kilometerStandardDev,
					cursor: "pointer",
					markerType: "square",
					legendMarkerType: "square",
					markerColor: "#002699",
					legendMarkerColor: "#002699"
				}, {
					showInLegend: true,
					visible: false,
					name:"Km st dev",
					type: "line",
					dataPoints: kilometerStDev,
					cursor: "pointer",
					markerType: "square",
					legendMarkerType: "square",
					markerColor: "#550080",
					legendMarkerColor: "#550080"
				}, { //KILOMETER PER LITER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Km/l",
					type: "line",
					dataPoints: kilometerPerLiter,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#7a7a52",
					legendMarkerColor: "#7a7a52" 
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/l st dev",
					type: "line",
					dataPoints: kilometerPerLiterStDev,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#994d00",
					legendMarkerColor: "#994d00"  
				},{
					showInLegend: true,
					visible: false,
					name:"Km/l gen.",
					type: "line",
					dataPoints: kilometerPerLiterAverage,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#99004d",
					legendMarkerColor: "#99004d"  
				},{
					showInLegend: true,
					visible: false,
					name:"Km/l median",
					type: "line",
					dataPoints: kilometerPerLiterMedian,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#4700b3",
					legendMarkerColor: "#4700b3"    
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/l var",
					type: "line",
					dataPoints: kilometerPerLiterVarians,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#00b300",
					legendMarkerColor: "#00b300" 
				}, { // KILOMETER PER KRONER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Km/kr",
					type: "line",
					dataPoints: kilometerPerKroner,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#b30000",
					legendMarkerColor: "#b30000"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/kr gen.",
					type: "line",
					dataPoints: kilometerPerKronerAverage,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#59b300",
					legendMarkerColor: "#59b300"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/kr median",
					type: "line",
					dataPoints: kilometerPerKronerMedian,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#3b00b3",
					legendMarkerColor: "#3b00b3" 
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/kr st dev",
					type: "line",
					dataPoints: kilometerPerKronerStDev,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#00b38f",
					legendMarkerColor: "#00b38f"  
				},{
					showInLegend: true,
					visible: false,
					name:"Km/kr var",
					type: "line",
					dataPoints: kilometerPerKronerVarians,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#b35900",
					legendMarkerColor: "#b35900"  
				}, {	// HERE STARTS THE KRONER GRAPHS
					showInLegend: true,
					visible: false,
					type: "line",
					name:"Kroner",
					dataPoints: kroner,
					cursor: "pointer",
					markerType: "circle",
					legendMarkerType: "circle",
					markerColor: "#0000b3",
					legendMarkerColor: "#0000b3"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr gen.",
					type: "line",
					dataPoints: kronerAverage,
					cursor: "pointer",
					markerType: "circle",
					legendMarkerType: "circle",
					markerColor: "#008000",
					legendMarkerColor: "#008000"   
				},{
					showInLegend: true,
					visible: false,
					name:"Kr median",
					type: "line",
					dataPoints: kronerMedian,
					cursor: "pointer",
					markerType: "circle",
					legendMarkerType: "circle",
					markerColor: "#002933",
					legendMarkerColor: "#002933"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr var",
					type: "line",
					dataPoints: kronerVarians,
					cursor: "pointer",
					markerType: "circle",
					legendMarkerType: "circle",
					markerColor: "#002080",
					legendMarkerColor: "#002080"   
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr st dev",
					type: "line",
					dataPoints: kronerStandardDev,
					cursor: "pointer",
					markerType: "circle",
					legendMarkerType: "circle",
					markerColor: "#394d00",
					legendMarkerColor: "#394d00" 
				}, { //KRONER PER LITER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Kr/l",
					type: "line",
					dataPoints: kronerPerLiter,
					cursor: "pointer",
					markerType: "square",
					legendMarkerType: "square",
					markerColor: "#660033",
					legendMarkerColor: "#660033"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/l var",
					type: "line",
					dataPoints: kronerPerLiterVarians,
					cursor: "pointer",
					markerType: "square",
					legendMarkerType: "square",
					markerColor: "#006666",
					legendMarkerColor: "#006666" 
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/l median",
					type: "line",
					dataPoints: kronerPerLiterMedian,
					cursor: "pointer",
					markerType: "square",
					legendMarkerType: "square",
					markerColor: "#330066",
					legendMarkerColor: "#330066" 
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/l st dev",
					type: "line",
					dataPoints: kronerPerLiterStDev,
					cursor: "pointer",
					markerType: "square",
					legendMarkerType: "square",
					markerColor: "#3d3d29",
					legendMarkerColor: "#3d3d29" 
				},{
					showInLegend: true,
					visible: false,
					name:"Kr/l gen.",
					type: "line",
					dataPoints: kronerPerLiterAverage,
					cursor: "pointer",
					markerType: "square",
					legendMarkerType: "square",
					markerColor: "#602040",
					legendMarkerColor: "#602040" 
				},{ // KRONER PER KILOMETER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Kr/km",
					type: "line",
					dataPoints: kronerPerKilometer,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#4dff4d",
					legendMarkerColor: "#4dff4d"   
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/km median",
					type: "line",
					dataPoints: kronerPerKilometerMedian,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#ff8080",
					legendMarkerColor: "#ff8080"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/km var",
					type: "line",
					dataPoints: kronerPerKilometerVarians,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#80ffe5",
					legendMarkerColor: "#80ffe5"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/km gen.",
					type: "line",
					dataPoints: kronerPerKilometerAverage,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#79ff4d",
					legendMarkerColor: "#79ff4d"  
				},{
					showInLegend: true,
					visible: false,
					name:"Kr/km st dev",
					type: "line",
					dataPoints: kronerPerKilometerStDev,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#df80ff",
					legendMarkerColor: "#df80ff"  
				}, { // LAST IS THE LITER GRAPHS
					showInLegend: true,
					visible: false,
					type: "line",
					name:"Liter",
					dataPoints: liter,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#ffb366",
					legendMarkerColor: "#ffb366" 
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter gen.",
					type: "line",
					dataPoints: literAverage,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#99ff99",
					legendMarkerColor: "#99ff99" 
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter median",
					type: "line",
					dataPoints: literMedian,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#e580ff",
					legendMarkerColor: "#e580ff"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter st dev",
					type: "line",
					dataPoints: literStandardDev,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#80ffdf",
					legendMarkerColor: "#80ffdf"    
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter var",
					type: "line",
					dataPoints: literVarians,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#ff80bf",
					legendMarkerColor: "#ff80bf" 
				}, { // LITER PER KRONER GRAPHS
					showInLegend: true,
					visible: false,
					name:"L/kr",
					type: "line",
					dataPoints: literPerKroner,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#99ff99",
					legendMarkerColor: "#99ff99" 
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr gen.",
					type: "line",
					dataPoints: literPerKronerAverage,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#b366ff",
					legendMarkerColor: "#b366ff"
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr st dev",
					type: "line",
					dataPoints: literPerKronerStDev,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#ff80df",
					legendMarkerColor: "#ff80df"
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr median",
					type: "line",
					dataPoints: literPerKronerMedian,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#b3ff1a",
					legendMarkerColor: "#b3ff1a" 
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr var",
					type: "line",
					dataPoints: literPerKronerVarians,
					cursor: "pointer",
					markerType: "cross",
					legendMarkerType: "cross",
					markerColor: "#ff80df",
					legendMarkerColor: "#ff80df"  
				}, { // LITER PER KILOMETER GRAPHS
					showInLegend: true,
					visible: false,
					name:"L/km",
					type: "line",
					dataPoints: literPerKilometer,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#80d4ff",
					legendMarkerColor: "#80d4ff" 
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km st dev",
					type: "line",
					dataPoints: literPerKilometerStDev,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#80ffdf",
					legendMarkerColor: "#80ffdf"   
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km gen.",
					type: "line",
					dataPoints: literPerKilometerAverage,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#ff80b3",
					legendMarkerColor: "#ff80b3"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km median",
					type: "line",
					dataPoints: literPerKilometerMedian,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#ddddbb",
					legendMarkerColor: "#ddddbb" 
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km var",
					type: "line",
					dataPoints: literPerKilometerVarians,
					cursor: "pointer",
					markerType: "triangle",
					legendMarkerType: "triangle",
					markerColor: "#ffff66",
					legendMarkerColor: "#ffff66"
				}]
		});

		chart.render();
	

	}
</script>

<div id="chartContainer" style="height: 1200px; width: 100%; margin: 0px auto;"> </div>












