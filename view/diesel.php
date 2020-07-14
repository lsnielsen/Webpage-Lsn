<?php

	$name = "Bent Knudsen";
	$varOne = isset($_POST['fname']) ? $_POST['fname'] : "";
	$varTwo = isset($_POST['lname']) ? $_POST['lname'] : "";

?>

<html>
	<body>

		<center>
			<h1 style="font-size:40px; margin-top:15px;">
				Mit regnskab over mit diesel forbrug
			</h1>
		</center>

		<div>
			<?php echo $name ?>
			<?php echo $varOne ?>
			<?php echo $varTwo ?>			
		</div>

		<form action="setup.php" method="post">
			<label for="fname">First name:</label>
			<input type="text" id="fname" name="fname"><br><br>
			<label for="lname">Last name:</label>
			<input type="text" id="lname" name="lname"><br><br>
			<input type="submit" name="dieselButton" value="dieselPage">
		</form>

		<form action="setup.php" method="post">
			<button id="dieselButton" type="submit"> Tilbage til forsiden </button>
		</form>

	</body>
</html>