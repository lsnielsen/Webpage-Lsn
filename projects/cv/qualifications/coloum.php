<center>
	<div class="tableCell qualifications">
        <form action="/Webpage-Lsn/controller/cv.php" method="post">
            <button class="qualCell" name="cvButton" type="submit" value="firebrand">
                <div class="tableHeader">
                    <?php echo $txtFile['qual']['fireCourse']; ?>
                </div>
                <li class="bulletTxt">
                    <?php echo $txtFile['qual']['16']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['qual']['micNav']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['qual']['fireLocation']; ?>
                </li>
            </button>
        </form>
	</div>
	<div class="tableCell qualifications">
        <form action="/Webpage-Lsn/controller/cv.php" method="post">
            <button class="qualCell" name="cvButton" type="submit" value="highschool">
                <div class="tableHeader">
                    <?php echo $txtFile['general']['highSchool']; ?>
                </div>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['2011']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['crossJoin']; ?>
                </li>
            </button>
        </form>
	</div>
	<div class="tableCell qualifications">
        <form action="/Webpage-Lsn/controller/cv.php" method="post">
            <button class="qualCell" name="cvButton" type="submit" value="climbing">
                <div class="tableHeader">
                    <?php echo $txtFile['qual']['climbProof']; ?>
                </div>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['2011']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['highSchool']; ?>
                </li>
            </button>
        </form>
	</div>
	<div class="tableCell qualifications">
        <form action="/Webpage-Lsn/controller/cv.php" method="post">
            <button class="qualCell" name="cvButton" type="submit" value="mili">
                <div class="tableHeader">
                    <?php echo $txtFile['general']['miliHeader']; ?>
                </div>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['10-11']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['miliJob']; ?>
                </li>
            </button>
        </form>
	</div>
	<div class="tableCell qualifications">
        <form action="/Webpage-Lsn/controller/cv.php" method="post">
            <button class="qualCell" name="cvButton" type="submit" value="inovation">
                <div class="tableHeader">
                    <?php echo $txtFile['general']['inoHeader']; ?>
                </div>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['2010']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['gymSchool']; ?>
                </li>
            </button>
        </form>
	</div>
	<div class="tableCell qualifications">
        <form action="/Webpage-Lsn/controller/cv.php" method="post">
            <button class="qualCell" name="cvButton" type="submit" value="venoe">
                <div class="tableHeader">
                    <?php echo $txtFile['general']['afterSchoolHeader']; ?>
                </div>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['06-07']; ?>
                </li>
                <li class="bulletTxt">
                    <?php echo $txtFile['general']['afterSchoolLine']; ?>
                </li>
            </button>
        </form>
	</div>
</center>

<style>
	.qualifications{
		width: 400px;
		margin-bottom: 10px;
	}
    .qualCell {
        border: none;
        background-color: #9999ff;
        cursor: pointer;
    }

</style>

	