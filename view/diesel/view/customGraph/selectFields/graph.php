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
			animationEnabled: true,
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
					name:"Km var",
					type: "line",
					dataPoints: kilometerVarians
				}, {
					showInLegend: true,
					visible: false,
					name:"Km gen",
					type: "line",
					dataPoints: kilometerAverage
				}, {
					showInLegend: true,
					visible: false,
					name:"Km st dev",
					type: "line",
					dataPoints: kilometerStandardDev
				}, {
					showInLegend: true,
					visible: false,
					name:"Km st dev",
					type: "line",
					dataPoints: kilometerStDev
				}, { //KILOMETER PER LITER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Km/l",
					type: "line",
					dataPoints: kilometerPerLiter
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/l st dev",
					type: "line",
					dataPoints: kilometerPerLiterStDev
				},{
					showInLegend: true,
					visible: false,
					name:"Km/l gen.",
					type: "line",
					dataPoints: kilometerPerLiterAverage
				},{
					showInLegend: true,
					visible: false,
					name:"Km/l median",
					type: "line",
					dataPoints: kilometerPerLiterMedian
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/l var",
					type: "line",
					dataPoints: kilometerPerLiterVarians
				}, { // KILOMETER PER KRONER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Km/kr",
					type: "line",
					dataPoints: kilometerPerKroner
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/kr gen.",
					type: "line",
					dataPoints: kilometerPerKronerAverage
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/kr median",
					type: "line",
					dataPoints: kilometerPerKronerMedian
				}, {
					showInLegend: true,
					visible: false,
					name:"Km/kr st dev",
					type: "line",
					dataPoints: kilometerPerKronerStDev
				},{
					showInLegend: true,
					visible: false,
					name:"Km/kr var",
					type: "line",
					dataPoints: kilometerPerKronerVarians
				}, {	// HERE STARTS THE KRONER GRAPHS
					showInLegend: true,
					visible: false,
					type: "line",
					name:"Kroner",
					dataPoints: kroner
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr gen.",
					type: "line",
					dataPoints: kronerAverage
				},{
					showInLegend: true,
					visible: false,
					name:"Kr median",
					type: "line",
					dataPoints: kronerMedian
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr var",
					type: "line",
					dataPoints: kronerVarians
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr st dev",
					type: "line",
					dataPoints: kronerStandardDev
				}, { //KRONER PER LITER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Kr/l",
					type: "line",
					dataPoints: kronerPerLiter
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/l var",
					type: "line",
					dataPoints: kronerPerLiterVarians
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/l median",
					type: "line",
					dataPoints: kronerPerLiterMedian
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/l st dev",
					type: "line",
					dataPoints: kronerPerLiterStDev
				},{
					showInLegend: true,
					visible: false,
					name:"Kr/l gen.",
					type: "line",
					dataPoints: kronerPerLiterAverage
				},{ // KRONER PER KILOMETER GRAPHS
					showInLegend: true,
					visible: false,
					name:"Kr/km",
					type: "line",
					dataPoints: kronerPerKilometer
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/km median",
					type: "line",
					dataPoints: kronerPerKilometerMedian
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/km var",
					type: "line",
					dataPoints: kronerPerKilometerVarians
				}, {
					showInLegend: true,
					visible: false,
					name:"Kr/km gen.",
					type: "line",
					dataPoints: kronerPerKilometerAverage
				},{
					showInLegend: true,
					visible: false,
					name:"Kr/km st dev",
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
					name:"Liter gen.",
					type: "line",
					dataPoints: literAverage
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter median",
					type: "line",
					dataPoints: literMedian
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter st dev",
					type: "line",
					dataPoints: literStandardDev
				}, {
					showInLegend: true,
					visible: false,
					name:"Liter var",
					type: "line",
					dataPoints: literVarians
				}, { // LITER PER KRONER GRAPHS
					showInLegend: true,
					visible: false,
					name:"L/kr",
					type: "line",
					dataPoints: literPerKroner
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr gen.",
					type: "line",
					dataPoints: literPerKronerAverage
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr st dev",
					type: "line",
					dataPoints: literPerKronerStDev
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr median",
					type: "line",
					dataPoints: literPerKronerMedian
				}, {
					showInLegend: true,
					visible: false,
					name:"L/kr var",
					type: "line",
					dataPoints: literPerKronerVarians
				}, { // LITER PER KILOMETER GRAPHS
					showInLegend: true,
					visible: false,
					name:"L/km",
					type: "line",
					dataPoints: literPerKilometer
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km st dev",
					type: "line",
					dataPoints: literPerKilometerStDev
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km gen.",
					type: "line",
					dataPoints: literPerKilometerAverage
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km median",
					type: "line",
					dataPoints: literPerKilometerMedian
				}, {
					showInLegend: true,
					visible: false,
					name:"L/km var",
					type: "line",
					dataPoints: literPerKilometerVarians
				}]
		});

		chart.render();
	

	}
</script>

<div id="chartContainer" style="height: 1500px; width: 98%; margin: 0px auto;"> </div>












