
<html lang="da">
	<head>
		<title>
			Brugte biler
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/Webpage-Lsn/diverse/amcharts/amcharts.js" type="text/javascript"></script>
		<link rel="stylesheet" href="/Webpage-Lsn/projects/usedCars/usedCars.css" type="text/css">	
	</head>
	<body style="background-color: #ccff99;">
		<h1>
			Her kan du downloade en excel fil med brugte biler fra bilbasen.dk. Resultatet vil også blive vist i tabellen nedenfor.
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
					
					
				<form class="modelDropdown">
					<label>Her kan du vælge hvilken bilmodel du vil se i din excel fil:</label>
					<select class="carModel frontpageStyle">
						<option style="font-size: 20px;"> Vælg bilmodel </option>
						<option class="carModelOptions" value="volvo v60">Volvo V60</option>
						<option class="carModelOptions" value="volvo xc40">Volvo XC40</option>
						<option class="carModelOptions" value="Audi A3">Audi A3</option>
						<option class="carModelOptions" value="Saab 9-3">Saab 9-3</option>
					</select>
				</form>

		<div>
			<form action="/Webpage-Lsn/controller/frontpage.php" method="post">
				<button class="frontpageStyle" style="width: 160px;" id="backButton" type="submit"> 
					Tilbage
				</button>
			</form>

		</div>
	</body>

</html>

<?php
	include("getCars.php");
?>

<style>
	.carModelOptions {
		font-size: 25px;
	}

	.frontpageStyle {
		color: #fff !important;
		text-transform: uppercase;
		text-decoration: none;
		background: #ed3330;
		padding: 20px;
		border-radius: 5px;
		display: inline-block;
		border: none;
		transition: all 0.4s ease 0s;
		margin-left: 100px;
		width: 210px;
	}
	.frontpageStyle:hover {
		background: #434343;
		letter-spacing: 1px;
		-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
		-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
		box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
		transition: all 0.4s ease 0s;
	}
</style>






















