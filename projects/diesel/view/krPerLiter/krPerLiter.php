<?php
	include "../projects/diesel/helpFunctions/advancedHelper.php";
	$txtFile = include("../text/global.php");
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
			<?php echo $txtFile['stats']['krl']; ?>
        </title>  
	</head>  
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/advanced.css" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<body style="background-color: #d9ffb3;">  
		<h1>
			<?php echo $txtFile['stats']['krlHeader']; ?>
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
						<?php echo $txtFile['general']['back']; ?>
				</button>
			</form>
		
		<?php include "../projects/diesel/graphs/krPerLiter/krPerLiterAverage.php"; ?>
		<div class="spaceBetweenGraphs"> </div>
		<?php include "../projects/diesel/graphs/krPerLiter/stDev.php"; ?>
		<div class="spaceBetweenGraphs"> </div>
		<?php include "../projects/diesel/graphs/krPerLiter/frequency.php"; ?>
		
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











