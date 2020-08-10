
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
		
		<center>
		
						<h2>
							Bruger input
								&nbsp;	&nbsp;	&nbsp;	&nbsp;
							Simple beregninger
								&nbsp;	&nbsp;	&nbsp;	&nbsp;
							Avancerede beregninger
						</h2>
						
						<div class="dropdown" style="position: relative; right: 110px;">
							<button class="dropbtn"> Indtastet værdier</button>
							<div class="dropdown-content">
								<a href="#">Kilometer</a>
								<a href="#">Liter</a>
								<a href="#">Kroner</a>
							</div>
						</div>
						
						<div class="dropdown" style="position: relative; right: 50px;">
							<button class="dropbtn"> Beregnede værdier</button>
							<div class="dropdown-content">
								<a href="#">Kroner per liter</a>
								<a href="#">Kilometer per liter</a>
								<a href="#">Kilometer per kroner</a>
								<a href="#">Liter per kilometer</a>
								<a href="#">Liter per kroner</a>
								<a href="#">Kroner per kilometer</a>
							</div>
						</div>
						
						<div class="dropdown" style="position: relative; left: 50px;">
							<button class="dropbtn"> Statistiske værdier</button>
							<div class="dropdown-content">
								<a href="#">Kroner per liter</a>
								<a href="#">Kilometer per liter</a>
								<a href="#">Kilometer per kroner</a>
								<a href="#">Liter per kilometer</a>
								<a href="#">Liter per kroner</a>
								<a href="#">Kroner per kilometer</a>
							</div>
						</div>
						
		</center>
	
		<form action="/../Webpage-Lsn/controller/diesel.php"  method="post">
			<button class="dieselButton" 
					value="advancedDieselPage"
					name="dieselButton"
					style="left: 400px;">
				Tilbage
			</button>
		</form>
	</body>
</html>