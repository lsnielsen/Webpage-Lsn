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
            Advanced
        </title>  
	</head>  
	<link rel="stylesheet" href="/Webpage-Lsn/view/diesel/css/advanced.css" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<body style="background-color: #d9ffb3;">  
		<h1>
			Avanceret statistik for diesel forbrug
		</h1>  
	
		<?php include "dataTable.php"; ?>
	
		<div class="spaceBetweenTables" style="margin-bottom: -5px;"> </div>
	
		<?php include "bottumTable.php"; ?>
		
		<div class="spaceBetweenTables"> </div>
		<center>
			<form>
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="dieselPage"
						name="dieselButton"
						style="left: -400px;">
					Tilbage
				</button>

				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="krPerLiter"
						name="dieselButton"
						style="left: -200px;">
					Statistik for kr/l
				</button>

				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="kmPerLiter"
						name="dieselButton">
					Statistik for km/l
				</button>
				
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="kmPerKroner"
						name="dieselButton"
						style="left: 200px;">
					Statistik for km/kr
				</button>
				
				<button class="dieselButton" 
						action="/../Webpage-Lsn/controller/diesel.php" 
						value="ownTable"
						name="dieselButton"
						style="left: 400px;">
					Lav din egen tabel
				</button>
			</form>
		</center>
		<?php include "../view/diesel/graphs/krPerLiter.php"; ?>
		<?php include "../view/diesel/graphs/kmPerLiter.php"; ?>
		<?php include "../view/diesel/graphs/kmPerKroner.php"; ?>
		<?php //include "../view/diesel/graphs/krPerKm.php"; ?>
		<?php //include "../view/diesel/graphs/literPerKm.php"; ?>
		<?php //include "../view/diesel/graphs/literPerKroner.php"; ?>
		<?php include "../view/diesel/graphs/combinedGraph.php"; ?>
		
		<form>
			<button class="dieselButton" 
					action="/../Webpage-Lsn/controller/diesel.php" 
					value="dieselPage"
					name="dieselButton"
					style="margin-left: 10px;">
				Tilbage
			</button>
		</form>
	</body>
</html>

<?php include "../view/diesel/helpFunctions/tableSort.php" ?>











