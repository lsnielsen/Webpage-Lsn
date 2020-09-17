
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
			Her kan du downloade en excel fil med brugte biler fra 
			<a href="https:\\www.bilbasen.dk" target="_blank">
				bilbasen.dk
			</a>	
			Resultatet vil også blive vist i tabellen nedenfor.
		</h1>
				<button id="webscraper" style="display: none;"> </button>

				<form method="post">
					<button type="submit" 
							id="arrayButton" 
							name="usedCarsArray"
							style="display: none;" 
							action="/Webpage-Lsn/controller/usedCars.php"> 
					</button>
				</form>
				
				<div class="startSearch searchTxt infoTxt">
					Du er nu gået igang med at søge efter biler på bilbasen, som har modellen  <center class="theChoosenModel"> </center>
					Du skal væbne dig med lidt tålmodighed, da det tager lidt tid.
				</div>
				<div class="middleSearch searchTxt infoTxt">
					Vi har nu hentet alle links til bilbasen, som er model <center class="theChoosenModel"> </center>
				</div>
				<div class="endSearch searchTxt infoTxt">
					Nu er alle bilerne hentet fra bilbasen, så nu bliver de vist for dig, om kort tid
				</div>
				
					
				<form class="modelDropdown">
					<label class="infoTxt">Her kan du vælge hvilken bilmodel du vil se i din excel fil:</label>
					<select class="carModel frontpageStyle">
						<option style="font-size: 20px;"> Vælg bilmodel </option>
						<option class="carModelOptions" value="Volvo V60">Volvo V60</option>
						<option class="carModelOptions" value="Volvo XC40">Volvo XC40</option>
						<option class="carModelOptions" value="Audi A3">Audi A3</option>
						<option class="carModelOptions" value="Audi A6">Audi A6</option>
						<option class="carModelOptions" value="Saab 9-3">Saab 9-3</option>
					</select>
				</form>

				<form action="/Webpage-Lsn/controller/frontpage.php" method="post">
					<button class="frontpageStyle" style="width: 160px;" id="backButton" type="submit"> 
						Tilbage
					</button>
				</form>

	</body>

</html>

<?php
	include("getCars.php");
?>

<style>
	.theChoosenModel {
		margin-top: -25px;
		margin-left: -25px;
	}

	.infoTxt {
		font-size: 25px;
	}
	.searchTxt {
		display: none;
	}
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
	}
	.frontpageStyle:hover {
		background: #434343;
		letter-spacing: 1px;
		-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
		-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
		box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
		transition: all 0.4s ease 0s;
	}
	#backButton {
		margin-left: 1100px;
		margin-top: -70px;
	}
</style>






















