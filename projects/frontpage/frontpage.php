
<html lang="da">
	<?php $txtFile = include("../text/global.php");  ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<head>
		<title>
            <?php echo $txtFile['tab']; ?>
		</title>
		<link rel="stylesheet" href="/../Webpage-Lsn/projects/frontpage/css/frontpage.css" type="text/css">	
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
			<form action="/Webpage-Lsn/controller/diesel.php" method="post">
				<button class="frontpageButton" id="dieselButton" type="submit" name="dieselButton" value="dieselPage">
                    <?php echo $txtFile['dieselProject']; ?>
				</button>
			</form>
			<form action="/Webpage-Lsn/controller/politics.php" method="post">
				<button class="frontpageButton" id="politicButton" type="submit" name="politicButton" value="politicPage">
                    <?php echo $txtFile['politicProject']; ?>
				</button>
			</form>
			<form action="/Webpage-Lsn/controller/usedCars.php" method="post">
				<button class="frontpageButton" id="usedCarsButton" type="submit" name="usedCarsButton" value="usedCarsPage">
                    <?php echo $txtFile['usedCarsProject']; ?>
				</button>
			</form>
			<form action="/Webpage-Lsn/controller/runAndBike.php" method="post">
				<button class="frontpageButton" id="runButton" type="submit" name="runButton" value="runPage">
                    <?php echo $txtFile['runProject']; ?>
				</button>
			</form>
			<form action="/Webpage-Lsn/controller/runAndBike.php" method="post">
				<button class="frontpageButton" id="bikeButton" type="submit" name="bikeButton" value="bikePage">
                    <?php echo $txtFile['bikeProject']; ?>
				</button>
			</form>
			<form action="/Webpage-Lsn/controller/stock.php" method="post">
				<button class="frontpageButton" id="stockButton" type="submit" name="stockButton" value="stockPage">
                    <?php echo $txtFile['stockMarket']; ?>
				</button>
			</form>
			<form action="/Webpage-Lsn/controller/priceCalculator.php" method="post">
				<button class="frontpageButton" id="priceButton" type="submit" name="priceCalculator" value="priceCalculatorPage">
                    <?php echo $txtFile['priceCalc']; ?>
				</button>
			</form>
			<form action="/Webpage-Lsn/controller/langTrainer.php" method="post">
				<button class="frontpageButton" id="langButton" type="submit" name="langTrainer" value="langTrainerPage">
                    <?php echo $txtFile['langTrainer']; ?>
				</button>
			</form>
			<form action="/Webpage-Lsn/controller/debt.php" method="post">
				<button class="frontpageButton" id="debtButton" type="submit" name="debt" value="debtPage">
                    Gælds side
				</button>
			</form>
			<div id="my-signin2"></div>
			<form class="frontpageButton" method="get" id="searchArea" action="https://www.google.com/search" target="_blank">
				<center>
					<input class="frontpageButton searchField" name="q" type="text" size="40" style="cursor: text;"
                           placeholder="<?php echo $txtFile['searchPlaceholder']; ?>"/>
					<input class="frontpageButton" type="submit" name="sa" value="<?php echo $txtFile['searchButton']; ?>" style="margin-top: 5px;" />
				</center>
			</form>
		</div>

	</body>

</html>

<script>

	$(document).ready(function() {
		if (getCookie("lang") == null || getCookie("langPlace") == null) {
		    document.cookie = "lang = danish";
		    document.cookie = "langPlace = frontpage";
            location.reload();
        }
	});
	$("#dieselButton").click(function() {
		document.cookie = "langPlace = diesel";
	});
	$("#politicButton").click(function() {
		document.cookie = "langPlace = politic";
	});
	$("#usedCarsButton").click(function() {
		document.cookie = "langPlace = usedCars";
	});
	$("#runButton").click(function() {
		document.cookie = "langPlace = run";
	});
	$("#bikeButton").click(function() {
		document.cookie = "langPlace = bike";
	});
	$("#cvButton").click(function() {
		document.cookie = "langPlace = cv";
	});
	$("#priceButton").click(function() {
		document.cookie = "langPlace = priceCalculator";
	});

	$("#danish").click(function() {
		document.cookie = "lang = danish";
        location.reload();
        $("#danish").css("width", "20px");
        $("#danish").css("height", "20px");
	});
	$("#english").click(function() {
		document.cookie = "lang = english";
        location.reload();
        $("#english").css("width", "20px");
        $("#english").css("height", "20px");
	});


    function getCookie(name) {
        const dc = document.cookie;
        const prefix = name + "=";
        let begin = dc.indexOf("; " + prefix);
        if (begin == -1) {
            begin = dc.indexOf(prefix);
            if (begin != 0) return null;
        }
        else
        {
            begin += 2;
            var end = document.cookie.indexOf(";", begin);
            if (end == -1) {
                end = dc.length;
            }
        }
        // because unescape has been deprecated, replaced with decodeURI
        //return unescape(dc.substring(begin + prefix.length, end));
        return decodeURI(dc.substring(begin + prefix.length, end));
    }


</script>










