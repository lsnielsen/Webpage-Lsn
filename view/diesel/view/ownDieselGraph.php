
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
							<div style="position: relative; right: 540px; bottom: 10px;">
								Bruger input
							</div>
							<div style="position: relative; right: 310px; bottom: 35px;">
								Simple beregninger
							</div>
							<div style="position: relative; left: 170px; bottom: 60px;">
								Avancerede beregninger
							</div>
						</h2>
						<div style="position: relative; bottom: 60px;">
							<div class="dropdown" style="position: relative; right: 120px;">
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
								<button class="dropbtn"> Kilometer </button>
								<div class="dropdown-content">
									<a href="#">Median</a>
									<a href="#">Varians</a>
									<a href="#">St. dev</a>
								</div>
							</div>
							
							<div class="dropdown" style="position: relative; left: 50px;">
								<button class="dropbtn"> Liter </button>
								<div class="dropdown-content">
									<a href="#">Median</a>
									<a href="#">Varians</a>
									<a href="#">St. dev</a>
								</div>
							</div>
							
							<div class="dropdown" style="position: relative; left: 50px;">
								<button class="dropbtn"> Kroner </button>
								<div class="dropdown-content">
									<a href="#">Median</a>
									<a href="#">Varians</a>
									<a href="#">St. dev</a>
								</div>
							</div>
							
							<div class="dropdown" style="position: relative; left: 50px;">
								<button class="dropbtn"> Kr/l </button>
								<div class="dropdown-content">
									<a href="#">Median</a>
									<a href="#">Varians</a>
									<a href="#">St. dev</a>
								</div>
							</div>
							
							<div class="dropdown" style="position: relative; left: 50px;">
								<button class="dropbtn"> Km/l </button>
								<div class="dropdown-content">
									<a href="#">Median</a>
									<a href="#">Varians</a>
									<a href="#">St. dev</a>
								</div>
							</div>
							
							<div class="dropdown" style="position: relative; left: 50px;">
								<button class="dropbtn"> Km/kr </button>
								<div class="dropdown-content">
									<a href="#">Median</a>
									<a href="#">Varians</a>
									<a href="#">St. dev</a>
								</div>
							</div>
							
							<div class="dropdown" style="position: relative; left: 50px;">
								<button class="dropbtn"> Kr/km </button>
								<div class="dropdown-content">
									<a href="#">Median</a>
									<a href="#">Varians</a>
									<a href="#">St. dev</a>
								</div>
							</div>
							
							<div class="dropdown" style="position: relative; left: 50px;">
								<button class="dropbtn"> L/km </button>
								<div class="dropdown-content">
									<a href="#">Median</a>
									<a href="#">Varians</a>
									<a href="#">St. dev</a>
								</div>
							</div>
							
							<div class="dropdown" style="position: relative; left: 50px;">
								<button class="dropbtn"> L/kr </button>
								<div class="dropdown-content">
									<a href="#">Median</a>
									<a href="#">Varians</a>
									<a href="#">St. dev</a>
								</div>
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