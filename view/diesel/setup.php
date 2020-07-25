
<?php

	include "functions.php";
	$con = mysqli_connect('127.0.0.1','root','');  
	
	if(!$con) {  
		echo 'not connect to the server';  
	}  
	if(!mysqli_select_db($con,'lsnDb')) {  
		echo 'database not selected';  
	}  
	
	$fetchId = "SELECT * FROM diesel";
	$result = mysqli_query($con,$fetchId);
	$uniqueId = 0;
	while($row = $result->fetch_array()){
		$uniqueId = $row['id'];
	}

	if (isset($_POST['date']) && isset($_POST['km']) && isset($_POST['liter']) && isset($_POST['kr'])) {
		$date = $_POST['date'];
		$km = $_POST['km'];
		$liter = $_POST['liter'];
		$kr = $_POST['kr'];
		$id = $uniqueId + 1;
		$sql = "INSERT INTO diesel (id, date, kilometer, liter, kroner) VALUES ('$id', '$date','$km', '$liter', '$kr')";  
		  
		if(!mysqli_query($con,$sql)) {  
			echo 'Not inserted';  
		}  
		else {  
			echo 'Vent 3 sekunder og dine nye data vil blive vist i tabellen';  
		}  
		header("refresh:3; url=http://localhost/Webpage-Lsn/view/diesel/controller.php"); 
	}
	include ("dieselPage.html");
	
	
?>