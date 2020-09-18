<?php
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
            Advanced
        </title>  
	</head>  
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/advanced.css" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<body style="background-color: #d9ffb3;">  
		<h1>
			Avanceret statistik for diesel forbrug
		</h1>  
	
		<?php include "dataTable.php"; ?>
		

		<?php include "advancedButtons.php"; ?>

		
		<?php include "../projects/diesel/graphs/krPerLiter.php"; ?>
		<div class="spaceBetweenGraphs"> </div>
		<?php include "../projects/diesel/graphs/kmPerLiter.php"; ?>
		<div class="spaceBetweenGraphs"> </div>
		<?php include "../projects/diesel/graphs/kmPerKroner.php"; ?>
		<div class="spaceBetweenGraphs"> </div>
		<?php include "../projects/diesel/graphs/combinedGraph.php"; ?>
		
		<?php //include "../projects/diesel/graphs/krPerKm.php"; ?>
		<?php //include "../projects/diesel/graphs/literPerKm.php"; ?>
		<?php //include "../projects/diesel/graphs/literPerKroner.php"; ?>
		

		<?php include "advancedButtons.php"; ?>
		
	
	</body>
</html>

<?php include "../projects/diesel/helpFunctions/tableSort.php" ?>











