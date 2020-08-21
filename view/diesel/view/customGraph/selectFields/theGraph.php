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

<script>
window.onload = function () {
var dataPoints = [];

//Replace text file's path according to your requirement.
$.get("../view/diesel/view/customGraph/selectFields/data.txt", function(data) {
	var x = 0;
	var allLines = data.split('\n');
	if(allLines.length > 0) {
		for(var i=0; i< allLines.length; i++) {
			dataPoints.push({x: x , y: parseInt(allLines[i])});
			x += .25;
		}
	}
	var chart = new CanvasJS.Chart("chartContainer",{
		title :{
			text: "Chart using Text File Data"
		},
		data: [{
			type: "line",
			dataPoints : dataPoints,
		}]
	});
	chart.render();
});
}
</script>


<div id="chartContainer" style="height: 300px; width: 100%;"></div>














	
	
	