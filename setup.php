<?php

$carButton = isset($_POST['carButton']) ? $_POST['carButton'] : "";
$tvButton = isset($_POST['tvButton']) ? $_POST['tvButton'] : "";

if ($carButton == "carPage") {
	echo file_get_contents("view/car.html");
} elseif ($tvButton == "tvPage") {
	echo file_get_contents("view/tv.html");
} else {
	echo file_get_contents("view/frontpage.html");
}

?>