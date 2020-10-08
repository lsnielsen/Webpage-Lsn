<table id="bodyTable" cellspacing="30px"> 
	<link rel="stylesheet" href="/Webpage-Lsn/projects/cv/css/speechBubble.css" type="text/css">
	<tr>
		<div class="container">
			<th>
				<div class="infobox educationBox">
					<div class="emptyBox"> </div>
                    <?php echo $txtFile['frontpage']['educationBubble']; ?>
				</div>
				<form action="/Webpage-Lsn/controller/cv.php" method="post">
					<button type="submit" name="cvButton" value="educationCv" class="cvHeadline education" style="color: #ffff66;">
                        <?php echo $txtFile['frontpage']['edu']; ?>
					</button>
				</form>
			</th>
		</div>
		<div class="container">
			<th>
				<div class="infobox sparetimeBox">
					<div class="emptyBox"> </div>
                    <?php echo $txtFile['frontpage']['sparetimeBubble']; ?>
				</div>
                <form action="/Webpage-Lsn/controller/cv.php" method="post">
					<button type="submit" name="cvButton" value="sparetimeCv" class="cvHeadline sparetime" style="color: #ff00ff;">
                        <?php echo $txtFile['frontpage']['sparetimeHeader']; ?>
					</button>
				</form>
			</th>
		</div>
		<div class="container">
			<th>
				<div class="infobox qualificationsBox">
					<div class="emptyBox"> </div>
                    <?php echo $txtFile['frontpage']['qualBubble']; ?>
				</div>
				<form action="/Webpage-Lsn/controller/cv.php" method="post">
					<button type="submit" name="cvButton" value="qualificationCv" class="cvHeadline qualifications" style="color: #9999ff;">
                        <?php echo $txtFile['frontpage']['qualHeader']; ?>
					</button>
				</form>
			</th>
		</div>
		<div class="container">
			<th>
				<div class="infobox languageBox">
					<div class="emptyBox"> </div>
                    <?php echo $txtFile['frontpage']['langBubble']; ?>
				</div>
				<form action="/Webpage-Lsn/controller/cv.php" method="post">
					<button type="submit" name="cvButton" value="languageCv" class="cvHeadline language" style="color: #ff9900;">
                        <?php echo $txtFile['frontpage']['langHeader']; ?>
					</button>
				</form>
			</th>
		</div>
		<div class="container">
			<th>
				<div class="infobox otherBox">
					<div class="emptyBox"> </div>
                    <?php echo $txtFile['frontpage']['otherBubble']; ?>
				</div>
				<form action="/Webpage-Lsn/controller/cv.php" method="post">
					<button type="submit" name="cvButton" value="otherCv" class="cvHeadline other" style="color: #993399;">
						<nobr>
                            <?php echo $txtFile['frontpage']['otherHeader']; ?>
                        </nobr>
					</button>
				</form>
			</th>
		</div>
	</tr>

    <tr class="bodyTableInfo" align="middle">
        <?php include "coloums/colOne.php"; ?>
    </tr>
    <tr class="bodyTableInfo" align="middle">
        <?php include "coloums/colTwo.php"; ?>
    </tr>
    <tr class="bodyTableInfo" align="middle">
        <?php include "coloums/colThree.php"; ?>
    </tr>
    <tr class="bodyTableInfo" align="middle">
        <?php include "coloums/colFour.php"; ?>
    </tr>

</table>

<script type="text/javascript">
	
	$('.other').mouseenter(function(e) {
		$('.otherBox').show(200);
	});
	$('.other').mouseleave(function(e){
		$('.otherBox').hide(200);
	});
	
	$('.language').mouseenter(function(e) {
		$('.languageBox').show(200);
	});
	$('.language').mouseleave(function(e){
		$('.languageBox').hide(200);
	});
	
	$('.qualifications').mouseenter(function(e) {
		$('.qualificationsBox').show(200);
	});
	$('.qualifications').mouseleave(function(e){
		$('.qualificationsBox').hide(200);
	});
	
	$('.sparetime').mouseenter(function(e) {
		$('.sparetimeBox').show(200);
	});
	$('.sparetime').mouseleave(function(e){
		$('.sparetimeBox').hide(200);
	});
	
	$('.education').mouseenter(function(e) {
		$('.educationBox').show(200);
	});
	$('.education').mouseleave(function(e){
		$('.educationBox').hide(200);
	});

</script>



	
	
	