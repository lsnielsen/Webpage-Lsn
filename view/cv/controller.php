<?php

$cvButton = isset($_POST['cvButton']) ? $_POST['cvButton'] : "";

if ($cvButton == "cvPage") {
	echo file_get_contents("cv.html");	
} elseif ($cvButton == "educationCv") {
	echo file_get_contents("education/educationCv.html");	
} elseif ($cvButton == "sparetimeCv") {
	echo file_get_contents("sparetime/sparetimeCv.html");	
} elseif ($cvButton == "qualificationCv") {
	echo file_get_contents("qualifications/qualificationsCv.html");	
} elseif ($cvButton == "languageCv") {
	echo file_get_contents("language/languageCv.html");		
} elseif ($cvButton == "otherCv") {
	echo file_get_contents("other/otherCv.html");	
} elseif ($cvButton == "sparetimeWork") {
	echo file_get_contents("sparetime/itDeveloper.html");		
}
	
?>