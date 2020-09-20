
<html>  
	<?php $txtFile = include("../text/global.php");  ?>
    <head>  
        <title>  
			<?php echo $txtFile['general']['tab']; ?>
        </title>  
	</head>  
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/advanced.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/ownGraph.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/customGraph/literPerKroner.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/customGraph/literPerKilometer.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/customGraph/kronerPerKilometer.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/customGraph/kilometerPerKroner.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/customGraph/kilometerPerLiter.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/customGraph/kronerPerLiter.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/customGraph/kilometer.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/customGraph/kroner.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/customGraph/liter.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/customGraph/userInput.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/customGraph/simpleCalc.css" type="text/css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="http://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="https://canvasjs.com/assets/script/canvasjs.stock.min.js"></script>
	
	<body style="background-color: #d9ffb3;">  
	
		<h1> 
			<?php echo $txtFile['dropdown']['header']; ?>
		</h1>		
<!--T
		<?php //include("dropdowns.html"); ?>
		
		<center>
				<h2>
					Valgte værdier:
				</h2>
			<div  class="selectedVariables">
					<?php //include "../projects/diesel/view/customGraph/selectFields/kilometer.php" ?>
					<?php //include "../projects/diesel/view/customGraph/selectFields/liter.php" ?>
					<?php //include "../projects/diesel/view/customGraph/selectFields/kroner.php" ?>
					<?php //include "../projects/diesel/view/customGraph/selectFields/kronerPerLiter.php" ?>
					<?php //include "../projects/diesel/view/customGraph/selectFields/kilometerPerLiter.php" ?>
					<?php //include "../projects/diesel/view/customGraph/selectFields/kilometerPerKroner.php" ?>
					<?php //include "../projects/diesel/view/customGraph/selectFields/kronerPerKilometer.php" ?>
					<?php //include "../projects/diesel/view/customGraph/selectFields/literPerKilometer.php" ?>
					<?php //include "../projects/diesel/view/customGraph/selectFields/literPerKroner.php" ?>
					<?php //include "../projects/diesel/view/customGraph/selectFields/valueSort.php" ?>
					<?php //include "../projects/diesel/view/customGraph/selectFields/simpleCalc.php" ?>
					<?php //include "../projects/diesel/view/customGraph/selectFields/userInput.php" ?>
			</div>		
		</center>
-->
		<?php include "../projects/diesel/view/customGraph/selectFields/graph.php" ?>
		
		<div class="statisticExplanation">
			<h1> 
				<?php echo $txtFile['dropdown']['short']; ?>
			</h1>
			<div class="explanationTxt">
				<?php echo $txtFile['dropdown']['explanation']; ?>
			</div>
			<div class="coloumnOrFunction">
				<?php echo $txtFile['dropdown']['curveType']; ?>
			</div>
			<label class="switch">
				<input class="testers" type="checkbox">
				<span class="slider round"></span>
			</label>
			<div class="functionGraphType">
				<?php echo $txtFile['dropdown']['normalType']; ?>
			</div>
			<div class="coloumnGraphType">
				<?php echo $txtFile['dropdown']['columnType']; ?>
			</div>
			<p class="informTxt">
				<?php echo $txtFile['dropdown']['note']; ?>
			</p>
		</div>
	
		<form action="/../Webpage-Lsn/controller/diesel.php"  method="post">
			<button class="dieselButton" 
					value="advancedDieselPage"
					name="dieselButton"
					style="margin-left: auto; margin-top: 100px;">
				<?php echo $txtFile['general']['back']; ?>
			</button>
		</form>
	</body>
</html>

		
	


<script>
	$(".slider").click(function() {
		result = $('.testers').is(':checked');
		if (result == true) {
			console.log("result: " + result + ", its true, and showing the function");
			$(".functionGraphType").show();
			$(".coloumnGraphType").hide();	
		} else if (result == false) {
			console.log("result: " + result + ", its false and showing the coloumn");
			$(".functionGraphType").hide();
			$(".coloumnGraphType").show();
		}
	});
</script>
