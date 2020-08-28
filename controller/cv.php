<?php

$cvButton = isset($_POST['cvButton']) ? $_POST['cvButton'] : "";

if ($cvButton == "cvPage") {
	echo file_get_contents("../projects/cv/cv.html");	
} elseif ($cvButton == "educationCv") {
	echo file_get_contents("../projects/cv/education/educationCv.html");	
} elseif ($cvButton == "sparetimeCv") {
	echo file_get_contents("../projects/cv/sparetime/sparetimeCv.html");	
} elseif ($cvButton == "qualificationCv") {
	echo file_get_contents("../projects/cv/qualifications/qualificationsCv.html");	
} elseif ($cvButton == "languageCv") {
	echo file_get_contents("../projects/cv/language/languageCv.html");		
} elseif ($cvButton == "otherCv") {
	echo file_get_contents("../projects/cv/other/otherCv.html");	
} 
	
?>