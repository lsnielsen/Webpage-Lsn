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


	if (fopen("../view/diesel/view/customGraph/selectFields/data.txt", "w")) {
		$myfile = fopen("../view/diesel/view/customGraph/selectFields/data.txt", "w");
	} else {
		echo "did not open file";
	}
	
	for ($i = 0; $i<sizeof($arr); $i++) {
		$txt = $arr[$i][1] . " " . $arr[$i]['kilometer'] . " " . $arr[$i]['kroner'] . " " . $arr[$i]['liter'] . " " 
		. $arr[$i]['kr/l'] . " " . $arr[$i]['km/l'] . " " . $arr[$i]['km/kr'] . " " . $arr[$i]['l/km'] . " " . $arr[$i]['l/kr'] . " " . $arr[$i]['kr/km'] 
		. " " . $arr[0]['kilometerMedian'] . " " . $arr[0]['kilometerVariance'] . " " . $arr[0]['kilometerStandardDev'] . " " . $arr[$i]['kilometerStDev']
		. " " . $arr[0]['literMedian'] . " " . $arr[0]['literVariance'] . " " . $arr[0]['literStandardDev'] . " " . $arr[$i]['literStDev']
		. " " . $arr[0]['krMedian'] . " " . $arr[0]['krVariance'] . " " . $arr[0]['krStandardDev'] . " " . $arr[$i]['krStDev']
		. " " . $arr[0]['krPerLiterMedian'] . " " . $arr[0]['krPerLiterVariance'] . " " . $arr[0]['krPerLiterStandardDev'] . " " . $arr[$i]['krPerLiterStDev']
		. " " . $arr[0]['kmPerLiterMedian'] . " " . $arr[0]['kmPerLiterVariance'] . " " . $arr[0]['kmPerLiterStandardDev'] . " " . $arr[$i]['kmPerLiterStDev']
		. " " . $arr[0]['kmPerKrMedian'] . " " . $arr[0]['kmPerKrVariance'] . " " . $arr[0]['kmPerKrStandardDev'] . " " . $arr[$i]['kmPerKrStDev']
		. " " . $arr[0]['krPerKmMedian'] . " " . $arr[0]['krPerKmVariance'] . " " . $arr[0]['krPerKmStandardDev'] . " " . $arr[$i]['krPerKmStDev']
		. " " . $arr[0]['literPerKmMedian'] . " " . $arr[0]['literPerKmVariance'] . " " . $arr[0]['literPerKmStandardDev'] . " " . $arr[$i]['literPerKmStDev']
		. " " . $arr[0]['literPerKrMedian'] . " " . $arr[0]['literPerKrVariance'] . " " . $arr[0]['literPerKrStandardDev'] . " " . $arr[$i]['literPerKrStDev']
		."\n";
		fwrite($myfile, $txt);
	}

	fclose($myfile);


?>

<div id="chartContainer" style="height: 700px; width: 100%;"></div>
<script>
	window.onload = function () {
		var dataPoints = [];


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
				  //snapToDataPoint: true
				}
			  },
			  data: data
			}],    
			rangeSelector: {
			  inputFields: {
				startValue: 4000,
				endValue: 6000,
				valueFormatString: "###0"
			  },
			  
			  buttons: [{
				label: "1000",
				range: 1000,
				rangeType: "number"
			  },{
				label: "2000",
				range: 2000,
				rangeType: "number"
			  },{
				label: "5000",
				range: 5000,
				rangeType: "number"
			  },{
				label: "All",        
				rangeType: "all"
			  }]
			}
		});

		stockChart.render();    
	}

	var array = <?php echo json_encode($arr); ?>;
	arrayLength = array.length;
	console.log("length of array: " + arrayLength);
	var limit = 10000;    //increase number of dataPoints by increasing this
	var y = 1000;
	var data = []; 
	var dataSeries = { type: "spline" };
	var dataPoints = [];
	for (var i = 0; i < arrayLength; i += 1) {
	  y += Math.round((Math.random() * 10 - 5));
	//  dataPoints.push({ x: array[i][1], y: array[i]['km/l'] });
	  dataPoints.push({ x: '06/06', y: array[i]['km/l'] });
	}
	dataSeries.dataPoints = dataPoints;
	data.push(dataSeries);
</script>
















	
	
	