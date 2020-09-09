
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
				<button id="webscraperOne" type="submit" style="margin-left: 500px; margin-top: 200px; width: 200px; height: 200px;"> 
					Tryk her 1
				</button>
				<button id="webscraperTwo" type="submit" style="margin-left: 500px; margin-top: 200px; width: 200px; height: 200px;"> 
					Tryk her 2
				</button>
				<button id="webscraperThree" type="submit" style="margin-left: 500px; margin-top: 200px; width: 200px; height: 200px;"> 
					Tryk her 3
				</button>
		
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
	include("myfile.php");
?>


























