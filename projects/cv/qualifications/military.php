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
        <?php echo $txtFile['qual']['miliProof']; ?>
	</h1>
	<iframe id="frame" src="/Webpage-Lsn/projects/cv/pdf/military.pdf"> </iframe>
	<div id="explanation">
		<div id="header">
            <?php echo $txtFile['qual']['miliNote']; ?>
		</div>
		<div id="body">
            <?php echo $txtFile['qual']['miliTxt']; ?>
		</div>
		<form action="/Webpage-Lsn/controller/cv.php" method="post">
			<button type="submit" name="cvButton" value="qualificationCv" id="button">
                <?php echo $txtFile['general']['back']; ?>
            </button>
		</form>
	</div>
  </body>
</html>
