
<html lang="da">
	<head>
		<title>
			Brugte biler
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/Webpage-Lsn/diverse/amcharts/amcharts.js" type="text/javascript"></script>
	</head>
	<body>
		<h1>
			Forsøger her at downloade en excel fil med brugte biler
		</h1>
				<button id="webscraper" style="display: none;"> </button>

				<form action="/Webpage-Lsn/controller/usedCars.php" method="post">
					<button id="arrayButton" type="submit" style="display: none;" value="usedCarsDownload" name="usedCarsButton"> 
					</button>
				</form>
		
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
	include("myfileNew.php");
?>


























