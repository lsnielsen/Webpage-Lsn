<?php
	$txtFile = include("../text/global.php"); 
	include "../projects/diesel/helpFunctions/advancedHelper.php";
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
			<?php echo $txtFile['stats']['kmKr']; ?>
        </title>  
	</head>  
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/advanced.css" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<body style="background-color: #d9ffb3;">  
		<h1>
			<?php echo $txtFile['stats']['kmkrHeader']; ?>
		</h1>  
	
		<?php include "kmPerKrTable.php"; ?>
	
		<div class="spaceBetweenTables" style="margin-bottom: -5px;"> </div>
	
		<?php include "kmPerKrResult.php"; ?>
		
		<div class="spaceBetweenTables"> </div>
		
			<form action="/../Webpage-Lsn/controller/diesel.php" method="post">
				<button class="dieselButton" 
						value="advancedDieselPage"
						name="dieselButton"
						style="margin-left: 10px;">
					<?php echo $txtFile['general']['back']; ?>
				</button>
			</form>
		
		<?php include "../projects/diesel/graphs/kmPerKr/kmPerKronerAverage.php"; ?>
		<div class="spaceBetweenGraphs"> </div>
		<?php include "../projects/diesel/graphs/kmPerKr/stDev.php"; ?>
		<div class="spaceBetweenGraphs"> </div>
		<?php include "../projects/diesel/graphs/kmPerKr/frequency.php"; ?>
		
		<form action="/../Webpage-Lsn/controller/diesel.php" method="post">
			<button class="dieselButton" 
					value="advancedDieselPage"
					name="dieselButton"
					style="margin-left: 10px;">
				<?php echo $txtFile['general']['back']; ?>
			</button>
		</form>
	</body>
</html>

<?php include "../projects/diesel/helpFunctions/tableSort.php" ?>











