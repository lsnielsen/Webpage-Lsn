
<html lang="da">
	<?php $txtFile = include("../text/global.php");  ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<head>
		<title>
			LSN
		</title>
		<link rel="stylesheet" href="/../Webpage-Lsn/projects/frontpage/css/frontpage.css" type="text/css">	
	</head>
	<body>
		<h1>
			Velkommen til hjemmesiden - Lsn
			<?php echo $txtFile['general']['tabHeader']; ?>
		</h1>
		<div id="languages">
			<img src="/Webpage-Lsn/projects/frontpage/image/dk.png" id="danish">
			<img src="/Webpage-Lsn/projects/frontpage/image/en.png" id="english">
		</div>
		
		<form action="/Webpage-Lsn/controller/cv.php" method="post">
			<button id="cvButton" type="submit" name="cvButton" value="cvPage"> Mit CV </button>
		</form>
		<div class="projectTxt">
			Jeg har startet forskellige projekter, som der er link til her: <br> <br>
			<form action="/Webpage-Lsn/controller/diesel.php" method="post">
				<button class="frontpageButton" id="dieselButton" type="submit" name="dieselButton" value="dieselPage"> 
					Diesel regnskab 
				</button>
			</form>
			<form action="/Webpage-Lsn/controller/politics.php" method="post">
				<button class="frontpageButton" id="politicButton" type="submit" name="politicButton" value="politicPage"> 
					Politik 
				</button>
			</form>
			<form action="/Webpage-Lsn/controller/usedCars.php" method="post">
				<button class="frontpageButton" id="usedCarsButton" type="submit" name="usedCarsButton" value="usedCarsPage"> 
					Brugte biler 
				</button>
			</form>
			<form action="/Webpage-Lsn/controller/runAndBike.php" method="post">
				<button class="frontpageButton" id="runButton" type="submit" name="runButton" value="runPage"> 
					Løb 
				</button>
			</form>
			<form action="/Webpage-Lsn/controller/runAndBike.php" method="post">
				<button class="frontpageButton" id="bikeButton" type="submit" name="bikeButton" value="bikePage"> 
					Cykling 
				</button>
			</form>
			<div id="my-signin2"></div>
			<form class="frontpageButton" method="get" id="searchArea" action="https://www.google.com/search" target="_blank">
				<center>
					<input class="frontpageButton searchField" name="q" type="text" size="40" placeholder="Indtast søgeformular"/>
					<input class="frontpageButton" type="submit" name="sa" value="Klik for at søge vha google" style="margin-top: 5px;" />
				</center>
			</form>
		</div>

	</body>

</html>

<script>


	$("#danish").click(function() {
		document.cookie = "language = danish";
	});
	
	$("#english").click(function() {
		document.cookie = "language = english";
	});





</script>









