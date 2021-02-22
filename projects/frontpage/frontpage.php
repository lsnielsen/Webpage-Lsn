
<html lang="da">
	<?php $txtFile = include("../text/global.php");  ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<head>
		<title>
            <?php echo $txtFile['tab']; ?>
		</title>
		<link rel="stylesheet" href="/../Webpage-Lsn/projects/frontpage/css/frontpage.css" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	</head>
	<body>
		<h1>
            <?php echo $txtFile['frontHeader']; ?>
		</h1>
		
			<img class="langImage" src="/Webpage-Lsn/projects/frontpage/image/dk.png" id="danish">
			<img class="langImage" src="/Webpage-Lsn/projects/frontpage/image/en.png" id="english">
		
		
		<form action="/Webpage-Lsn/controller/cv.php" method="post">
			<button id="cvButton" type="submit" name="cvButton" value="cvPage">
                <?php echo $txtFile['cvTxt']; ?>
            </button>
		</form>
        <div class="projectTxt">
            <?php echo $txtFile['projectTxt']; ?> <br> <br>
        </div>

        <?php include "frontpage/projects.php"; ?>

	</body>

</html>


<?php include "frontpage/script.php"; ?>








