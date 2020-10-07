
<html style="background-color:grey;">
<?php $txtFile = include("../text/global.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<head>
		<title>
			Cv - fritid
		</title>
		<link rel="stylesheet" href="/Webpage-Lsn/projects/cv/css/cv.css" type="text/css">
	</head>
		<center>
			<h1 style="font-size:40px; margin-top:15px;">
				Curriculum Vitae
			</h1>
			<div style="margin-top: -25px; font-style:italic;">
				Af Lars S&#248;ndertoft Nielsen
			</div>	
		</center>

	<body>

    <?php
        include ("../../Webpage-Lsn/projects/cv/cvHeader.php");
    ?>
		<center>
			<form action="/Webpage-Lsn/controller/cv.php" method="post">
				<button type="submit" name="cvButton" value="cvPage" class="subheader" style="color: #ff00ff;">
					Fritidsinteresser
				</button>
			</form>
		</center>

        <?php include "coloum.php"; ?>
		
	</body>
	
	<form action="/Webpage-Lsn/controller/cv.php" method="post">
		<button type="submit" name="cvButton" id="backToStartButton" value="cvPage" style="margin-top: 20px;"> 
			Tilbage til cv 
		</button>
	</form>
</html>











