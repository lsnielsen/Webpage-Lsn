
<html>  
    <head>  
        <title>  
            Advanced
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
	
		<h1> Setup din egen graf, ved at vælge fra felterne nederst på siden</h1>		
<!--T
		<?php //include("dropdowns.html"); ?>
		
		<center>
				<h2>
					Valgte værdier:
				</h2>
			<div  class="selectedVariables">
					<?php //include "../projects/diesel/projects/customGraph/selectFields/kilometer.php" ?>
					<?php //include "../projects/diesel/projects/customGraph/selectFields/liter.php" ?>
					<?php //include "../projects/diesel/projects/customGraph/selectFields/kroner.php" ?>
					<?php //include "../projects/diesel/projects/customGraph/selectFields/kronerPerLiter.php" ?>
					<?php //include "../projects/diesel/projects/customGraph/selectFields/kilometerPerLiter.php" ?>
					<?php //include "../projects/diesel/projects/customGraph/selectFields/kilometerPerKroner.php" ?>
					<?php //include "../projects/diesel/projects/customGraph/selectFields/kronerPerKilometer.php" ?>
					<?php //include "../projects/diesel/projects/customGraph/selectFields/literPerKilometer.php" ?>
					<?php //include "../projects/diesel/projects/customGraph/selectFields/literPerKroner.php" ?>
					<?php //include "../projects/diesel/projects/customGraph/selectFields/valueSort.php" ?>
					<?php //include "../projects/diesel/projects/customGraph/selectFields/simpleCalc.php" ?>
					<?php //include "../projects/diesel/projects/customGraph/selectFields/userInput.php" ?>
			</div>		
		</center>
-->
		<?php include "../projects/diesel/projects/customGraph/selectFields/graph.php" ?>
		
		<div class="statisticExplanation">
			<h1> Kort forklaring </h1>
			<div class="explanationTxt">
				St dev står for standard deviation, som oversat er standard afvigelse. Den værdi er et udtryk
				for hvor meget alle værdierne fordeler sig omkring deres middelværdi. <br>
				Gen. er en forkortelse for gennemsnittet. <br>
				Median er den midterste værdi af alle værdierne. <br>
				Var står for variansen. Det er en værdi der angiver der angiver variabiliteten af alle værdierne.	
			</div>
			<div class="coloumnOrFunction">
				Her kan du vælge om du vil have et søjle diagram, eller en almindelig kurve:
			</div>
			<label class="switch">
				<input class="testers" type="checkbox">
				<span class="slider round"></span>
			</label>
			<div class="functionGraphType">
				Almindelig funktion
			</div>
			<div class="coloumnGraphType">
				Søjlediagram
			</div>
			<p class="informTxt">
				(Det virker ikke endnu)
			</p>
		</div>
	
		<form action="/../Webpage-Lsn/controller/diesel.php"  method="post">
			<button class="dieselButton" 
					value="advancedDieselPage"
					name="dieselButton"
					style="margin-left: auto; margin-top: 100px;">
				Tilbage
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
