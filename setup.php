<?php

$carButton = isset($_POST['carButton']) ? $_POST['carButton'] : "";
$tvButton = isset($_POST['tvButton']) ? $_POST['tvButton'] : "";
$cvButton = isset($_POST['cvButton']) ? $_POST['cvButton'] : "";

if ($cvButton == "cvPage") {
	echo file_get_contents("view/cv/cv.html");	
} elseif ($cvButton == "educationCv") {
	echo file_get_contents("view/cv/html/education/educationCv.html");	
} elseif ($cvButton == "sparetimeCv") {
	echo file_get_contents("view/cv/sparetime/sparetimeCv.html");	
} elseif ($cvButton == "qualificationCv") {
	echo file_get_contents("view/cv/qualifications/qualificationsCv.html");	
} elseif ($cvButton == "languageCv") {
	echo file_get_contents("view/cv/language/languageCv.html");		
} elseif ($cvButton == "otherCv") {
	echo file_get_contents("view/cv/html/other/otherCv.html");	
} elseif ($carButton == "carPage") {
	echo file_get_contents("view/car.html");
} elseif ($tvButton == "tvPage") {
	echo file_get_contents("view/tv.html");
} else {
	echo file_get_contents("view/frontpage.html");
}

?>