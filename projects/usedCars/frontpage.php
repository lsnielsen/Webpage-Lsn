
<html lang="da">
<?php $txtFile = include "../text/global.php"; ?>
	<head>
		<title>
			<?php echo $txtFile['tabTitle']; ?>
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/Webpage-Lsn/diverse/amcharts/amcharts.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	</head>
	<body class="p-3 mb-2 bg-secondary">
            <h1 class="jumbotron text-center">
                <?php echo $txtFile['linkTxt']; ?>
                <a href="https:\\www.bilbasen.dk" target="_blank" class="text-body">
                    <u>
                        <?php echo $txtFile['linkOne']; ?>
                    </u>
                </a>
                <?php echo $txtFile['oneMore']; ?>
                <a href="https:\\www.guloggratis.dk" target="_blank" class="text-body">
                    <u>
                        <?php echo $txtFile['linkTwo']; ?>
                    </u>
                </a>
                <?php echo $txtFile['resultTxt']; ?>
            </h1>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                        <h3>Her kan du vælge hvilken bilmodel du gerne vil se nærmere på:</h3>
                    </div>
                    <div class="col-sm-2">
                        <h3>
                            <?php include "dropdownII.php"; ?>
                        </h3>
                    </div>
                    <div class="col-sm-2">
                        <h3>
                            <form action="/Webpage-Lsn/controller/frontpage.php" method="post">
                                <button class="frontpageStyle" style="width: 160px;" type="submit">
                                    <?php echo $txtFile['back']; ?>
                                </button>
                            </form>
                        </h3>
                    </div>
                </div>
            </div>
				
                <?php //include "dropdown.php"; ?>


        <?php
			if (isset($bilbasenCount) && isset($gulOgGratisCount)) {
				echo "<h3>";
				echo $txtFile['nrOfCars'];
				echo "<a href=\"https:\\www.bilbasen.dk\" target=\"_blank\">";
                echo $txtFile['bilbasenLink'];
                echo "</a> : $bilbasenCount </h3>";
				echo "<h3>";
                echo $txtFile['nrOfCars'];
                echo "<a href=\"https:\\www.guloggratis.dk\" target=\"_blank\">";
                echo $txtFile['guloggratisLink'];
                echo "</a>:  $gulOgGratisCount </h3>";
				$sum = $bilbasenCount + $gulOgGratisCount;
				echo "<h3> Samlet: $sum </h3>";
			}
		?>

	</body>

</html>

<?php
	include("getCars.php");
?>

<style>
	.theChoosenModel {
		margin-top: -25px;
		margin-left: -25px;
	}

	.infoTxt {
		font-size: 25px;
	}
	.searchTxt {
		display: none;
	}
	.carModelOptions {
		font-size: 25px;
	}

	.frontpageStyle {
		color: #fff !important;
		text-transform: uppercase;
		text-decoration: none;
		background: #ed3330;
		padding: 20px;
		border-radius: 5px;
		display: inline-block;
		border: none;
		transition: all 0.4s ease 0s;
		margin-left: 100px;
	}
	.frontpageStyle:hover {
		background: #434343;
		letter-spacing: 1px;
		-webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
		-moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
		box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
		transition: all 0.4s ease 0s;
	}
	#backButton {
		margin-left: 1100px;
		margin-top: -70px;
	}
</style>






















