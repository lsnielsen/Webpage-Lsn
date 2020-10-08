<!DOCTYPE html>
<?php $txtFile = include "../text/global.php"?>
<html id="certificatePage">
  <head>
    <title>
        <?php echo $txtFile['general']['docProof']; ?>
	</title>
	<link rel="stylesheet" href="/Webpage-Lsn/projects/cv/css/pdfStyle.css" type="text/css">
  </head>
  <body>
    <h1>
        <?php echo $txtFile['qual']['highSchoolProof']; ?>
	</h1>
	<iframe id="frame" src="/Webpage-Lsn/projects/cv/pdf/hojskole.pdf"> </iframe>
	<div id="explanation">
		<div id="header">
		
		</div>
		<div id="body">
			<a href="https://www.sportshojskolen.dk/" target="_blank">
                <?php echo $txtFile['qual']['link']; ?>
			</a>
            <?php echo $txtFile['qual']['hsTxt']; ?>
		</div>
		<form action="/Webpage-Lsn/controller/cv.php" method="post">
			<button type="submit" name="cvButton" value="qualificationCv" id="button">
                <?php echo $txtFile['general']['back']; ?>
			</button>
		</form>
	</div>
  </body>
</html>
