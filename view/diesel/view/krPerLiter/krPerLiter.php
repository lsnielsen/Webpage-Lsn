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
            Kroner/liter
        </title>  
	</head>  
	<link rel="stylesheet" href="/Webpage-Lsn/view/diesel/css/advanced.css" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<body style="background-color: #d9ffb3;">  
		<h1>
			Avanceret statistik for kroner per liter
		</h1>  
	
		<?php include "krPerLiterTable.php"; ?>
	
		<div class="spaceBetweenTables" style="margin-bottom: -5px;"> </div>
	
		<?php include "krPerLiterResult.php"; ?>
		
		<div class="spaceBetweenTables"> </div>
		
			<form action="/../Webpage-Lsn/controller/diesel.php" method="post">
				<button class="dieselButton" 
						value="advancedDieselPage"
						name="dieselButton"
						style="margin-left: 10px;">
					Tilbage
				</button>
			</form>
		
		<?php include "../view/diesel/graphs/krPerLiter/krPerLiterAverage.php"; ?>
		
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











