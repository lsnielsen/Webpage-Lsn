
<html style="background-color:grey;">
    <?php $txtFile = include("../text/global.php");  ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<head>
		<title>
			<?php echo $txtFile['frontpage']['tab']; ?>
		</title>
		<link rel="stylesheet" href="/Webpage-Lsn/projects/cv/css/cv.css" type="text/css">
	</head>
		<center>
			<h1 style="font-size:40px; margin-top:15px;">
                <?php echo $txtFile['frontpage']['cv']; ?>
			</h1>
			<div style="margin-top: -25px; font-style:italic;">
                <?php echo $txtFile['frontpage']['name']; ?>
			</div>	
		</center>

	<body>
		<center>
			<?php include "cvHeader.php" ?>

			<?php include "cvBody.php" ?>
        </center>
	</body>
	
	<form action="/Webpage-Lsn/controller/frontpage.php" method="post" style="margin-top: 15px;">
		<button type="submit" name="cvButton" id="backToStartButton" value="frontpage">
            <?php echo $txtFile['frontpage']['back']; ?>
		</button>
	</form>
</html>











