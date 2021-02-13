
<html lang="da">
<?php $txtFile = include "../text/global.php"; ?>
	<head>
		<title>
            Brugte biler
		</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/Webpage-Lsn/diverse/amcharts/amcharts.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</head>
	<body class="p-3 mb-2 bg-success">
            <h1 class="jumbotron text-center">
                Her kan du downloade en excel fil med brugte biler fra
                <a href="https:\\www.bilbasen.dk" target="_blank" class="text-body">
                    <em>
                        bilbasen.dk
                    </em>
                </a>
                og
                <a href="https:\\www.guloggratis.dk" target="_blank" class="text-body">
                    <em>
                        guloggratis.dk.
                    </em>
                </a>
                Resultatet vil også blive vist i en tabel nedenfor.
            </h1>
            <?php include "frontpage/searchInfo.php"; ?>

        <div class="container bg-success text-white pt-4 nrOfCarsDiv">
            <?php
                if (isset($fileName)) {
                    echo "<h1 class='text-center'> Resultat af søgning efter $fileName: </h1>";
                }
            ?>
        </div>

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


