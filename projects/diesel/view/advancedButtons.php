
<?php
	$txtFile = include("../txt/diesel/txt.php"); 
?>
	<center>
		<form action="/../Webpage-Lsn/controller/diesel.php"  method="post">
			<button class="dieselButton" 
					value="dieselPage"
					name="dieselButton"
					style="left: -800px;">
				<?php echo $txtFile['advButs']['backButton']; ?>
			</button>
			
			<button class="dieselButton" 
					value="datePage"
					name="dieselButton"
					style="left: -600px;">
				<?php echo $txtFile['advButs']['dateStats']; ?>
			</button>

			<button class="dieselButton" 
					value="kilometerPage"
					name="dieselButton"
					style="left: -400px;">
				<?php echo $txtFile['advButs']['kmStats']; ?>
			</button>

			<button class="dieselButton" 
					value="literPage"
					name="dieselButton"
					style="left: -200px;">
				<?php echo $txtFile['advButs']['literStats']; ?>
			</button>

			<button class="dieselButton" 
					value="kronerPage"
					name="dieselButton">
				<?php echo $txtFile['advButs']['krStats']; ?>
			</button>

			<button class="dieselButton" 
					value="krPerLiter"
					name="dieselButton"
					style="left: 200px;">
				<?php echo $txtFile['advButs']['krlStats']; ?>
			</button>

			<button class="dieselButton" 
					value="kmPerLiter"
					name="dieselButton"
					style="left: 400px;">
				<?php echo $txtFile['advButs']['kmlStats']; ?>
			</button>
			
			<button class="dieselButton" 
					value="kmPerKroner"
					name="dieselButton"
					style="left: 600px;">
				<?php echo $txtFile['advButs']['kmKrStats']; ?>
			</button>
			
			<button class="dieselButton" 
					value="ownDieselGraph"
					name="dieselButton"
					style="left: 800px;">
				<?php echo $txtFile['advButs']['customStats']; ?>
			</button>
		</form>
	</center>





