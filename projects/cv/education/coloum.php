<center>
	<div class="tableCell education">
        <form action="/Webpage-Lsn/controller/cv.php" method="post">
    		<button class="educationCell" type="submit" value="masterProof" name="cvButton">
			<div class="tableHeader">
                    <?php echo $txtFile['general']['masterSchool']; ?>
                </div>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['au']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['14-16']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['masterSpecial']; ?>
                </li>
            </button>
        </form>
    </div>
	<div class="tableCell education">
        <form action="/Webpage-Lsn/controller/cv.php" method="post">
            <button class="educationCell" type="submit" value="gradProof" name="cvButton">
                <div class="tableHeader">
                    <?php echo $txtFile['general']['gradSchool']; ?>
                </div>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['au']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['11-14']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['gradElective']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['gradSpecial']; ?>
                </li>
            </button>
        </form>
	</div>
	<div class="tableCell education">
        <form action="/Webpage-Lsn/controller/cv.php" method="post">
            <button class="educationCell" type="submit" name="cvButton" value="gymProof">
                <div class="tableHeader">
                    <?php echo $txtFile['general']['gymSchool']; ?>
                </div>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['07-10']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['gymLine']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['gymSubject']; ?>
                </li>
            </button>
        </form>
	</div>
	<div class="tableCell education" style="height: 42px;">
		<a href="/Webpage-Lsn/projects/cv/education/groundSchool.php">
			<div class="tableHeader">
                <?php echo $txtFile['general']['pubSchool']; ?>
			</div>
		</a>
	</div>
</center>

<style>
	.education{
		width: 400px;
		margin-bottom: 10px;
	}
    .educationCell {
        background-color: #ffff66;
        border: none;
        cursor: pointer;
    }

</style>

	