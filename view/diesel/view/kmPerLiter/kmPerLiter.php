<?php
	include "../view/diesel/helpFunctions/advancedHelper.php";
	$con = mysqli_connect('127.0.0.1','root','');
	if(!$con) {  
		echo 'not connect to the server';  
	}  
	if(!mysqli_select_db($con,'lsnDb')) {  
		echo 'database not selected';  
	}    
?>
<html>  
    <head>  
        <title>  
            Kilometer/liter
        </title>  
	</head>  
	<link rel="stylesheet" href="/Webpage-Lsn/view/diesel/css/advanced.css" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<body style="background-color: #d9ffb3;">  
		<h1>
			Avanceret statistik for kilometer per liter
		</h1>  
	
		<?php include "kmPerLiterTable.php"; ?>
	
		<div class="spaceBetweenTables" style="margin-bottom: -5px;"> </div>
	
		<?php include "kmPerLiterResult.php"; ?>
		
		<div class="spaceBetweenTables"> </div>
		
			<form action="/../Webpage-Lsn/controller/diesel.php" method="post">
				<button class="dieselButton" 
						value="advancedDieselPage"
						name="dieselButton"
						style="margin-left: 10px;">
					Tilbage
				</button>
			</form>
		
		<?php include "../view/diesel/graphs/kmPerLiter/kmPerLiterAverage.php"; ?>
		<div class="spaceBetweenGraphs"> </div>
		<?php include "../view/diesel/graphs/kmPerLiter/stDev.php"; ?>
		<div class="spaceBetweenGraphs"> </div>
		<?php include "../view/diesel/graphs/kmPerLiter/frequency.php"; ?>
		
		<form action="/../Webpage-Lsn/controller/diesel.php" method="post">
			<button class="dieselButton" 
					value="advancedDieselPage"
					name="dieselButton"
					style="margin-left: 10px;">
				Tilbage
			</button>
		</form>
	</body>
</html>

<?php include "../view/diesel/helpFunctions/tableSort.php" ?>











