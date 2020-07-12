<?php

$cvButton = isset($_POST['cvButton']) ? $_POST['cvButton'] : "";
$carButton = isset($_POST['carButton']) ? $_POST['carButton'] : "";
$tvButton = isset($_POST['tvButton']) ? $_POST['tvButton'] : "";
$newCvButton = isset($_POST['newCvButton']) ? $_POST['newCvButton'] : "";

if ($cvButton == "cvPage") {
	echo file_get_contents("view/cv.html");	
} elseif ($carButton == "carPage") {
	echo file_get_contents("view/car.html");
} elseif ($tvButton == "tvPage") {
	echo file_get_contents("view/tv.html");
} elseif ($newCvButton == "newCvPage") {
	echo file_get_contents("view/cv.html");
} else {
	echo file_get_contents("view/frontpage.html");
}

?>