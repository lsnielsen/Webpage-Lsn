<!DOCTYPE html>
<?php $txtFile = include("../../Webpage-Lsn/text/global.php");  ?>
<html id="certificatePage">
  <head>
    <title>
        <?php echo $txtFile['general']['docProof']; ?>
	</title>
	<link rel="stylesheet" href="/Webpage-Lsn/projects/cv/css/pdfStyle.css" type="text/css">
  </head>
  <body>
    <h1>
        <?php echo $txtFile['general']['masterProof']; ?>
	</h1>
	<iframe id="frame" src="/Webpage-Lsn/projects/cv/pdf/master.pdf"> </iframe>
	<div id="explanation">
		<div id="header">
            <?php echo $txtFile['general']['masterHeader']; ?>
		</div>
		<div id="body">
			<div>
                <?php echo $txtFile['general']['masterTxtOne']; ?>
			</div>
			<div style="margin-top: 4px;">
                <?php echo $txtFile['general']['masterTxtTwo']; ?>
            </div>
			<div style="margin-top: 4px">
                <?php echo $txtFile['general']['masterTxtThree']; ?>
            </div>
			<form action="/Webpage-Lsn/controller/cv.php" method="post" id="masterBackButton">
                <button type="submit" name="cvButton" value="educationCv" id="button">
                    <?php echo $txtFile['general']['back']; ?>
                </button>
			</form>
		</div>
	</div>
  </body>
</html>






