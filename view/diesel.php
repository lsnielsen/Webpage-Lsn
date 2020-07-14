<?php
	$dbservername = "127.0.0.1";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "lsn-database";
	
	$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		echo "error";
	} 
	else{
		echo "conn successful";
	}
	//$sqlInsert = "INSERT INTO diesel (Kilometer, Liter, Kroner)
		//VALUES (25, 23, 43);";	
	$sqlGet = "SELECT * FROM 'diesel'";
	
	$result = $conn->query($sqlGet);
	echo "<br> And the result is: $result";
	echo $result;

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
		}
	} else {
		echo "0 results";
	}


	$conn-> close();
	
	//$name = "Bent Knudsen";
	//$varOne = isset($_POST['fname']) ? $_POST['fname'] : "";
	//$varTwo = isset($_POST['lname']) ? $_POST['lname'] : "";


?>

<html>
	<body>

		<center>
			<h1 style="font-size:40px; margin-top:15px;">
				Regnskab over mit diesel forbrug
			</h1>
		</center>


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