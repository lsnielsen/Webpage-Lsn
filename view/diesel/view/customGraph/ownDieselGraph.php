
<html>  
    <head>  
        <title>  
            Advanced
        </title>  
	</head>  
	<link rel="stylesheet" href="/Webpage-Lsn/view/diesel/css/advanced.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/view/diesel/css/ownGraph.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/view/diesel/css/literPerKroner.css" type="text/css">
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<body style="background-color: #d9ffb3;">  
	
		<h1> Setup din egen graf, ved at vælge fra listerne nedenfor </h1>		

		<?php include("dropdowns.html"); ?>
		
		<center>
			<h2>
				Valgte værdier:
			</h2>
			<div class="selectedVariables"> 
				<?php include("choosenGraphs.php"); ?>			
			</div>		
		</center>
		
	
		<form action="/../Webpage-Lsn/controller/diesel.php"  method="post">
			<button class="dieselButton" 
					value="advancedDieselPage"
					name="dieselButton"
					style="margin-left: auto;">
				Tilbage
			</button>
		</form>
	</body>
</html>

<?php include "../view/diesel/view/customGraph/selectFields/literPerKroner.php" ?>
<?php include "graphChooser.php" ?>

