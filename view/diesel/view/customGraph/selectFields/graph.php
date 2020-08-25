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
        CanvasJS.addColorSet("graphColor",
			[//colorSet Array
				"#2F4F4F",
				"#008080",
				"#2E8B57",
				"#3CB371",
				"#90EE90",                
				"#ccff66",               
				"#88cc00",              
				"#558000",             
				"#223300",            
				"#ff80df",            
				"#ff1ac6",            
				"#cc0099",                
				"#fa3dc4",
				"#f547bd",
				"#f052b5",
				"#eb5cad",
				"#e666a6",
				"#ff4d4d",
				"#b2cc59",
				"#add652",
				"#a8e04a",
				"#a3eb42",
				"#9ef53b",        
				"#001a66",
				"#08f7c4",
				"#0ff0bd",
				"#17e8b5",
				"#1fe0ad",
				"#26d9a6",
				"#2ed19e",
				"#36c996",
				"#3dc28f",
				"#45ba87",
				"#4cb280",
				"#54ab78",
				"#5ca370",
				"#248f24",
				"#6b9461",
				"#738c59",
				"#7a8552",
				"#827d4a",
				"#8a7542",
				"#916e3b",
				"#b37700",          
				"#ff00bf"           
			]);
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
            colorSet: "graphColor",
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
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km median",
					type: "line",
					dataPoints: kilometerMedian,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km var",
					type: "line",
					dataPoints: kilometerVarians,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km gen",
					type: "line",
					dataPoints: kilometerAverage,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km st dev",
					type: "line",
					dataPoints: kilometerStandardDev,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km st dev",
					type: "line",
					dataPoints: kilometerStDev,
					cursor: "pointer"  
				}, { //KILOMETER PER LITER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Km/l",
					type: "line",
					dataPoints: kilometerPerLiter,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/l st dev",
					type: "line",
					dataPoints: kilometerPerLiterStDev,
					cursor: "pointer"  
				},{
					showInLegend: true,
					visible: false,
					name:"Km/l gen.",
					type: "line",
					dataPoints: kilometerPerLiterAverage,
					cursor: "pointer"  
				},{
					showInLegend: true,
					visible: false,
					name:"Km/l median",
					type: "line",
					dataPoints: kilometerPerLiterMedian,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/l var",
					type: "line",
					dataPoints: kilometerPerLiterVarians,
					cursor: "pointer"  
				}, { // KILOMETER PER KRONER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Km/kr",
					type: "line",
					dataPoints: kilometerPerKroner,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/kr gen.",
					type: "line",
					dataPoints: kilometerPerKronerAverage,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/kr median",
					type: "line",
					dataPoints: kilometerPerKronerMedian,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/kr st dev",
					type: "line",
					dataPoints: kilometerPerKronerStDev,
					cursor: "pointer"  
				},{
					showInLegend: true,
					visible: false,
					name:"Km/kr var",
					type: "line",
					dataPoints: kilometerPerKronerVarians,
					cursor: "pointer"  
				}, {	// HERE STARTS THE KRONER GRAPHS
					showInLegend: true,
					visible: false,
					type: "line",
					name:"Kroner",
					dataPoints: kroner,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr gen.",
					type: "line",
					dataPoints: kronerAverage,
					cursor: "pointer"  
				},{
					showInLegend: true,
					visible: false,
					name:"Kr median",
					type: "line",
					dataPoints: kronerMedian,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr var",
					type: "line",
					dataPoints: kronerVarians,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr st dev",
					type: "line",
					dataPoints: kronerStandardDev,
					cursor: "pointer"  
				}, { //KRONER PER LITER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Kr/l",
					type: "line",
					dataPoints: kronerPerLiter,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/l var",
					type: "line",
					dataPoints: kronerPerLiterVarians,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/l median",
					type: "line",
					dataPoints: kronerPerLiterMedian,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/l st dev",
					type: "line",
					dataPoints: kronerPerLiterStDev,
					cursor: "pointer"  
				},{
					showInLegend: true,
					visible: false,
					name:"Kr/l gen.",
					type: "line",
					dataPoints: kronerPerLiterAverage,
					cursor: "pointer"  
				},{ // KRONER PER KILOMETER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Kr/km",
					type: "line",
					dataPoints: kronerPerKilometer,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/km median",
					type: "line",
					dataPoints: kronerPerKilometerMedian,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/km var",
					type: "line",
					dataPoints: kronerPerKilometerVarians,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/km gen.",
					type: "line",
					dataPoints: kronerPerKilometerAverage,
					cursor: "pointer"  
				},{
					showInLegend: true,
					visible: false,
					name:"Kr/km st dev",
					type: "line",
					dataPoints: kronerPerKilometerStDev,
					cursor: "pointer"  
				}, { // LAST IS THE LITER GRAPHS
					showInLegend: true,
					visible: false,
					type: "line",
					name:"Liter",
					dataPoints: liter,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter gen.",
					type: "line",
					dataPoints: literAverage,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter median",
					type: "line",
					dataPoints: literMedian,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter st dev",
					type: "line",
					dataPoints: literStandardDev,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter var",
					type: "line",
					dataPoints: literVarians,
					cursor: "pointer"  
				}, { // LITER PER KRONER GRAPHS
					showInLegend: true,
					visible: false,
					name:"L/kr",
					type: "line",
					dataPoints: literPerKroner,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr gen.",
					type: "line",
					dataPoints: literPerKronerAverage,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr st dev",
					type: "line",
					dataPoints: literPerKronerStDev,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr median",
					type: "line",
					dataPoints: literPerKronerMedian,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr var",
					type: "line",
					dataPoints: literPerKronerVarians,
					cursor: "pointer"  
				}, { // LITER PER KILOMETER GRAPHS
					showInLegend: true,
					visible: false,
					name:"L/km",
					type: "line",
					dataPoints: literPerKilometer,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km st dev",
					type: "line",
					dataPoints: literPerKilometerStDev,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km gen.",
					type: "line",
					dataPoints: literPerKilometerAverage,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km median",
					type: "line",
					dataPoints: literPerKilometerMedian,
					cursor: "pointer"  
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km var",
					type: "line",
					dataPoints: literPerKilometerVarians,
					cursor: "pointer"  
				}]
		});

		chart.render();
	

	}
</script>

<div id="chartContainer" style="height: 1500px; width: 98%; margin: 0px auto;"> </div>












