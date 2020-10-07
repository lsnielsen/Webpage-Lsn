<!DOCTYPE html>
<?php $txtFile = include("../../../../Webpage-Lsn/text/global.php");  ?>
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
			
			</form>
		</div>
	</div>
  </body>
</html>



<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script>
    $(document).ready(function() {
        const queryString = window.location.search;
		const urlParams = new URLSearchParams(queryString);
		const cv = urlParams.get("cv")
		
		if (cv=="true") {
			$("#masterBackButton").html("<button type=\"submit\" name=\"cvButton\" value=\"cvPage\" id=\"button\"> <?php echo $txtFile['general']['backCv']; ?> </button>");
		} else if (cv=="false") {
			$("#masterBackButton").html("<button type=\"submit\" name=\"cvButton\" value=\"educationCv\" id=\"button\"> <?php echo $txtFile['general']['back']; ?> </button>");
		}
	}); 
 
</script>



