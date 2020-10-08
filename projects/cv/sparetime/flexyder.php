<!DOCTYPE html>
<?php $txtFile = include("../text/global.php"); ?>
<html id="flexyderPage">
	<head>
		<title>
            <?php echo $txtFile['sparetimePage']['flexHeader']; ?>
		</title>
		<link rel="stylesheet" href="/Webpage-Lsn/projects/cv/css/stuff.css" type="text/css">
	</head>
	<body>
    <div class="about-section">
		<h1 class="header">
            <?php echo $txtFile['sparetimePage']['flexHeader']; ?>
		</h1>
	</div>
	<div class="container" style="margin-left: 200px; margin-top: 20px;">
		<img src="/Webpage-Lsn/projects/cv/img/ar.jpg" width="500" height="333">
		<div class="explanation" style="position: absolute; top: 130px; left: 730px; right: 600px;">
            <?php echo $txtFile['sparetimePage']['flexTxt']; ?>
			<form action="/Webpage-Lsn/controller/cv.php" method="post">
				<button type="submit" name="cvButton" value="cvPage" id="backButton">
                    <?php echo $txtFile['general']['backCv']; ?>
				</button>
			</form>
		</div>
	</div>
  </body>
</html>

