<?php

$cvButton = isset($_POST['cvButton']) ? $_POST['cvButton'] : "";

if ($cvButton == "cvPage") {
	echo file_get_contents("../view/cv/cv.html");	
} elseif ($cvButton == "educationCv") {
	echo file_get_contents("../view/cv/education/educationCv.html");	
} elseif ($cvButton == "sparetimeCv") {
	echo file_get_contents("../view/cv/sparetime/sparetimeCv.html");	
} elseif ($cvButton == "qualificationCv") {
	echo file_get_contents("../view/cv/qualifications/qualificationsCv.html");	
} elseif ($cvButton == "languageCv") {
	echo file_get_contents("../view/cv/language/languageCv.html");		
} elseif ($cvButton == "otherCv") {
	echo file_get_contents("../view/cv/other/otherCv.html");	
} 
	
?>