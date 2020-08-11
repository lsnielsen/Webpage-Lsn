
<html>  
    <head>  
        <title>  
            Advanced
        </title>  
	</head>  
	<link rel="stylesheet" href="/Webpage-Lsn/view/diesel/css/advanced.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/view/diesel/css/ownGraph.css" type="text/css">
	<body style="background-color: #d9ffb3;">  
	
		<h1> Setup din egen graf, ved at vælge fra listerne nedenfor </h1>
		
		<?php include("dropdowns.php"); ?>
		
		<center>
			<h2>
				Valgte værdier:
			</h2>
			<div class="selectedVariables"> </div>		
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