<center>
	<div class="tableCell sparetime">
        <form action="/Webpage-Lsn/controller/cv.php" method="post">
            <button class="sparetimeCell" name="cvButton" type="submit" value="weightlifting">
                <div class="tableHeader">
                    <?php echo $txtFile['general']['weightLift']; ?>
                </div>
                <li class="bulletTxt">
                    <?php echo $txtFile['sparetimePage']['weightEvent']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['sparetimePage']['weightEvent']; ?>
                </li>
            </button>
        </form>
	</div>
	<div class="tableCell sparetime">
        <form action="/Webpage-Lsn/controller/cv.php" method="post">
            <button class="sparetimeCell" name="cvButton" type="submit" value="music">
                <div class="tableHeader">
                    <?php echo $txtFile['general']['saxHeader']; ?>
                </div>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['barSax']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['saxQuartet']; ?>
                </li>
            </button>
        </form>
	</div>
	<div class="tableCell sparetime">
        <form action="/Webpage-Lsn/controller/cv.php" method="post">
            <button class="sparetimeCell" name="cvButton" type="submit" value="it">
                <div class="tableHeader">
                    <?php echo $txtFile['general']['itHeader']; ?>
                </div>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['itWeb']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['itLang']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['itGit']; ?>
                </li>
            </button>
        </form>
	</div>
	<div class="tableCell sparetime">
			<div class="tableHeader">
                <?php echo $txtFile['general']['comHeader']; ?>
			</div>
			<li class="bulletTxt">
                <?php echo $txtFile['general']['comBliz']; ?>
            </li>
			<li class="bulletTxt">
                <?php echo $txtFile['general']['comGames']; ?>
            </li>
	</div>
	<div class="tableCell sparetime">
			<div class="tableHeader">
                <?php echo $txtFile['sparetimePage']['polHeader']; ?>
			</div>
			<li class="bulletTxt">
                <?php echo $txtFile['sparetimePage']['polFollow']; ?>
            </li>
			<li class="bulletTxt">
                <?php echo $txtFile['sparetimePage']['polDiscuss']; ?>
            </li>
	</div>
	<div class="tableCell sparetime">
			<div class="tableHeader">
                <?php echo $txtFile['sparetimePage']['hisHeader']; ?>
			</div>
			<li class="bulletTxt">
                <?php echo $txtFile['sparetimePage']['hisDates']; ?>
            </li>
			<li class="bulletTxt">
                <?php echo $txtFile['sparetimePage']['hisEvent']; ?>
            </li>
	</div>
</center>

<style>
	.sparetime{
		width: 400px;
		margin-bottom: 10px;
	}
    .sparetimeCell {
        border: none;
        background-color: #ff00ff;
        cursor: pointer;
    }

</style>

	