
<?php 
echo '<!DOCTYPE html>
		<html id="flexyderPage">
			<head>
				<title>
					Flexyder
				</title>
				<link rel="stylesheet" href="/Webpage-Lsn/view/cv/css/stuff.css" type="text/css">
			</head>
			<body>
			<div class="about-section">
				<h1 class="header">
					Her er lidt om hvad jeg har lavet og stadig arbejder med som it-udvikler
				</h1>
			</div>
			<div class="container" style="margin-left: 200px; margin-top: 10px;">
				<img src="/Webpage-Lsn/view/cv/img/developer.jpg" width="500" height="333">
				<div class="explanation" style="position: absolute; top: 120px; left: 730px; right: 600px;">
					Jeg har arbejdet mest med web udvikling. Det inkluderer lidt af f&#248;lgende:
					<ul>
						<li> Php </li>
						<li> Python </li>
						<li> Html </li>
						<li> Css </li>
						<li> Jquery/javascript </li>
					</ul>
					Har brugt f&#248;lgende v&#230;rkt&#248;jer gennem tiden
					<ul>
						<li> Php Storm</li>
						<li> Notepad++ </li>
						<li> Django </li>
						<li> Git </li>
						<li> Git Desktop </li>
					</ul>
					<form action="/Webpage-Lsn/view/cv/controller.php" method="post">
						<button type="submit" name="cvButton" value="sparetimeCv" id="backButton"> 
							Tilbage til fritid
						</button>
						<button type="submit" name="cvButton" value="cvPage" id="backButton"> 
							Tilbage til cv
						</button>
					</form>
				</div>
			</div>
		  </body>
		</html>';
?>
