
<html lang="da">
	<head>
		<title>
			Brugte biler
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/Webpage-Lsn/diverse/amcharts/amcharts.js" type="text/javascript"></script>
		<link rel="stylesheet" href="/Webpage-Lsn/projects/usedCars/usedCars.css" type="text/css">
	</head>
	<body>
		<h1>
			Forsøger her at downloade en excel fil med brugte biler
		</h1>
				<button id="webscraper" style="display: none;"> </button>

				<form method="post">
					<button type="submit" 
							id="arrayButton" 
							name="usedCarsArray"
							style="display: none; width: 200px; height: 200px;" 
							action="/Webpage-Lsn/controller/usedCars.php"> 
							Tryk her for at downloade din excel fil
					</button>
				</form>
			<div class="dropdown">
				<button onclick="myFunction()" class="dropbtn">Dropdown</button>
					<div id="myDropdown" class="dropdown-content">
						<a href="#">Link 1</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
					</div>
			</div>
		<div>
			<form action="/Webpage-Lsn/controller/frontpage.php" method="post">
				<button id="backButton" type="submit"> 
					Tilbage
				</button>
			</form>

		</div>
	</body>

</html>

<?php
	include("getCars.php");
?>


























