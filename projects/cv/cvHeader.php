<div id="basicHeaderInfo">
	<div style="margin-left:35px"> <br>
		<div class="attribute">
			<img src="/Webpage-Lsn/projects/cv/img/portrait.jpg" id="profilePic">
			<div class="firstColumn columnTxt">
				<div style="margin-left:20px; display:inline-block;">
                    <?php echo $txtFile['frontpage']['nameHeader']; ?>
				</div>
				<span class="attributeText" style="margin-left:50px;">
                    <?php echo $txtFile['frontpage']['name']; ?>
				</span>
				<div style="margin-left:10px; display:inline-block;">
                    <?php echo $txtFile['frontpage']['adr']; ?>
				</div>
				<span class="attributeText" style="margin-left:15px;">
                    <?php echo $txtFile['frontpage']['adrTxt']; ?>
				</span>
				<div style="display:inline-block;">
                    <?php echo $txtFile['frontpage']['contactHeader']; ?>
				</div>
				<span class="attributeText" style="margin-left:10px;">
                    <?php echo $txtFile['frontpage']['phoneNr']; ?>
					<a href="mailto:lars.sondertoft@gmail.com" style="margin-left: 15px; font-size: 26px;">
                        <?php echo $txtFile['frontpage']['webMail']; ?>
					</a>
				</span>	

			</div>
			<div class="secondColumn columnTxt">
                <div class="pointHeader">
                    <?php echo $txtFile['frontpage']['edu']; ?>
                </div>
                <form action="/Webpage-Lsn/controller/cv.php" method="post">
                    <button class="headerLink attributeText" name="cvButton" value="masterPage" type="submit">
                        <?php echo $txtFile['general']['masterSchool']; ?>
                    </button>
                </form>
                <div class="pointHeader">
                    <?php echo $txtFile['frontpage']['workRelation']; ?>
                </div>
                <form action="/Webpage-Lsn/controller/cv.php" method="post">
                    <button class="headerLink attributeText" name="cvButton" value="flexyder" type="submit">
                        <?php echo $txtFile['frontpage']['flexWork']; ?>
                    </button>
                </form>
				<div class="pointHeader" style="margin-left:-170px; display:inline-block;">
                    <?php echo $txtFile['frontpage']['theJob']; ?>
				</div>
                <form action="/Webpage-Lsn/controller/cv.php" method="post">
                    <button class="headerLink attributeText" name="cvButton" value="workType" type="submit">
                        <?php echo $txtFile['frontpage']['theWork']; ?>
                    </button>
                </form>
			</div>
			<div class="thirdColumn columnTxt">
				<center>
				<a href="https://dk.linkedin.com/in/lars-sondertoft" target="_blank">
                    <?php echo $txtFile['frontpage']['linkedIn']; ?>
                </a> <br>
				<a href="mailto:lars.sondertoft@gmail.com">
                    <?php echo $txtFile['frontpage']['mailLink']; ?>
                </a> <br>
				<a href="/Webpage-Lsn/projects/cv/education/cvPdf.php">
                    <?php echo $txtFile['frontpage']['pdfCv']; ?>
                </a>
				</center>
			</div>
		</div><br>
	</div>
</div>

<style>
    .headerLink {
        border: none;
        background-color: inherit;
        margin-left: 150px;
        height: 5px;
        cursor: pointer;
    }
    .pointHeader {
        position: absolute;
    }
</style>



















