<!DOCTYPE html>
<?php $txtFile = include("../text/global.php"); ?>
<html id="flexyderPage">
	<head>
		<title>
            <?php echo $txtFile['general']['weightLift']; ?>
		</title>
		<link rel="stylesheet" href="/Webpage-Lsn/projects/cv/css/stuff.css" type="text/css">
	</head>
	<body>
    <div class="about-section">
		<h1 class="header">
            <?php echo $txtFile['general']['weightLift']; ?>
		</h1>
	</div>
	<div class="container" style="margin-left: 200px; margin-top: 10px;">
		<video width="500" height="300" controls>
			<source src="/Webpage-Lsn/projects/cv/img/snatch.mp4" type="video/mp4">
            <?php echo $txtFile['errorMess']; ?>
		</video>
        <div id="imageTxt">
            <?php echo $txtFile['eventHeader']; ?>
        </div>
		<div class="explanation" style="position: absolute; top: 170px; left: 730px; right: 600px;font-size:18px">
            <?php echo $txtFile['liftTxt']; ?>
			<form action="/Webpage-Lsn/controller/cv.php" method="post">
				<button type="submit" name="cvButton" value="sparetimeCv" id="backButton">
                    <?php echo $txtFile['general']['back']; ?>
				</button>
			</form>
		</div>
	</div>
  </body>
</html>

