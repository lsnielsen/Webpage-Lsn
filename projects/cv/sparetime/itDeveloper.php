
<!DOCTYPE html>
    <?php $txtFile = include("../text/global.php"); ?>
		<html id="flexyderPage">
			<head>
				<title>
                    <?php echo $txtFile['itHeader']; ?>
				</title>
				<link rel="stylesheet" href="/Webpage-Lsn/projects/cv/css/stuff.css" type="text/css">
			</head>
			<body>
			<div class="about-section">
				<h1 class="header">
                    <?php echo $txtFile['itWork']; ?>
				</h1>
			</div>
			<div class="container" style="margin-left: 200px; margin-top: 10px;">
				<img src="/Webpage-Lsn/projects/cv/img/developer.jpg" width="500" height="333">
				<div class="explanation" style="position: absolute; top: 120px; left: 730px; right: 600px;">
                    <?php echo $txtFile['itTxt']; ?>
					<ul>
						<li>
                            <?php echo $txtFile['php']; ?>
                        </li>
                        <li>
                            <?php echo $txtFile['py']; ?>
                        </li>
                        <li>
                            <?php echo $txtFile['html']; ?>
                        </li>
                        <li>
                            <?php echo $txtFile['css']; ?>
                        </li>
                        <li>
                            <?php echo $txtFile['js']; ?>
                        </li>
					</ul>
					<?php echo $txtFile['itTools']; ?>
					<ul>
                        <li>
                            <?php echo $txtFile['phpS']; ?>
                        </li>
                        <li>
                            <?php echo $txtFile['np++']; ?>
                        </li>
                        <li>
                            <?php echo $txtFile['dj']; ?>
                        </li>
                        <li>
                            <?php echo $txtFile['git']; ?>
                        </li>
                        <li>
                            <?php echo $txtFile['gitD']; ?>
                        </li>
					</ul>
					<form action="/Webpage-Lsn/controller/cv.php" method="post" id="workBackButton">
                        <button type="submit" name="cvButton" value="cvPage" id="backButton">
                            <?php echo $txtFile['general']['backCv']; ?>
                        </button>
					</form>
				</div>
			</div>
		  </body>
		</html>


		
		
		
		
		
		
		
		
		
		