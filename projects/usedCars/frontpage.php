
<html lang="da">
<?php $txtFile = include "../text/global.php"; ?>
	<head>
		<title>
			<?php echo $txtFile['tabTitle']; ?>
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/Webpage-Lsn/diverse/amcharts/amcharts.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body class="p-3 mb-2 bg-success">
            <h1 class="jumbotron text-center">
                <?php echo $txtFile['linkTxt']; ?>
                <a href="https:\\www.bilbasen.dk" target="_blank" class="text-body">
                    <em>
                        <?php echo $txtFile['linkOne']; ?>
                    </em>
                </a>
                <?php echo $txtFile['oneMore']; ?>
                <a href="https:\\www.guloggratis.dk" target="_blank" class="text-body">
                    <em>
                        <?php echo $txtFile['linkTwo']; ?>
                    </em>
                </a>
                <?php echo $txtFile['resultTxt']; ?>
            </h1>
            <?php include "frontpage/searchInfo.php"; ?>

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

            <form method="post">
                <button type="submit"
                        id="arrayButton"
                        name="usedCarsArray"
                        style="display: none;"
                        action="/Webpage-Lsn/controller/usedCars.php">
                </button>
            </form>

	</body>

</html>

<?php
	include("getCars.php");
?>


