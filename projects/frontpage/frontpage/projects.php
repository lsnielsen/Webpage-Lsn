
<div class="row projectTxt" style="top: 45%;">
    <div class="col-sm-3">
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
    </div>
    <div class="col-sm-3">
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
    </div>
    <div class="col-sm-3">

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
    </div>
    <div class="col-sm-3">
        <form action="/Webpage-Lsn/controller/newFrontpage.php" method="post">
            <button class="frontpageButton" id="newFrontpageButton" type="submit" name="newFrontpage" value="newFrontPage">
                Ide til ny forside
            </button>
        </form>
        <form action="/Webpage-Lsn/controller/invest.php" method="post">
            <button class="frontpageButton" id="investButton" type="submit" name="invest" value="investPage">
                Investering
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
    <div class="col-sm-3">
    	<form action="/Webpage-Lsn/controller/react.php" method="post">
	      <button class="frontpageButton" id="reactButton" type="submit" name="react" value="react">
	      	      React project
	      </button>
	</form>
    </div>
</div>


