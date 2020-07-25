<?php

$carButton = isset($_POST['carButton']) ? $_POST['carButton'] : "";
$cvButton = isset($_POST['cvButton']) ? $_POST['cvButton'] : "";
$tvButton = isset($_POST['tvButton']) ? $_POST['tvButton'] : "";
$dieselButton = isset($_POST['dieselButton']) ? $_POST['dieselButton'] : "";

if ($cvButton == "cvPage") {
	echo file_get_contents("view/cv.html");	
} elseif ($carButton == "carPage") {
	echo file_get_contents("view/car.html");
} elseif ($tvButton == "tvPage") {
	echo file_get_contents("view/tv.html");
} elseif ($dieselButton == "dieselPage") {
	include("view/diesel/controller.php");
} elseif (is_numeric($dieselButton)) {
	
	
	$con = mysqli_connect('127.0.0.1','root','');  
	if(!$con) {  
		echo 'not connect to the server';  
	}  
	if(!mysqli_select_db($con,'lsnDb')) {  
		echo 'database not selected';  
	}  
	
    $id = $dieselButton;
	$query = "DELETE FROM diesel WHERE diesel.id = $id";
	mysqli_query($con, $query);
	
	include("view/diesel/controller.php");



} else {
	echo "Dette er dieselbutton: " . $dieselButton;
	echo file_get_contents("view/frontpage.html");
}

?>