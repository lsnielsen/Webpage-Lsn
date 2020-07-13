<?php

$carButton = isset($_POST['carButton']) ? $_POST['carButton'] : "";
$cvButton = isset($_POST['cvButton']) ? $_POST['cvButton'] : "";
$tvButton = isset($_POST['tvButton']) ? $_POST['tvButton'] : "";

if ($cvButton == "cvPage") {
	echo file_get_contents("view/cv.html");	
} elseif ($carButton == "carPage") {
	echo file_get_contents("view/car.html");
} elseif ($tvButton == "tvPage") {
	echo file_get_contents("view/tv.html");
} else {
	echo file_get_contents("view/frontpage.html");
}

?>