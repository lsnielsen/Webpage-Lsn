<?php

$carButton = isset($_POST['carButton']) ? $_POST['carButton'] : "";
$tvButton = isset($_POST['tvButton']) ? $_POST['tvButton'] : "";
$cvButton = isset($_POST['cvButton']) ? $_POST['cvButton'] : "";

if ($cvButton == "cvPage") {
	echo file_get_contents("view/cv/cv.html");	
} elseif ($cvButton == "educationCv") {
	echo file_get_contents("view/cv/html/education/educationCv.html");	
} elseif ($carButton == "carPage") {
	echo file_get_contents("view/car.html");
} elseif ($tvButton == "tvPage") {
	echo file_get_contents("view/tv.html");
} else {
	echo file_get_contents("view/frontpage.html");
}

?>