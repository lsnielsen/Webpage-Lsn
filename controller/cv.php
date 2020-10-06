<?php

$cvButton = isset($_POST['cvButton']) ? $_POST['cvButton'] : "";

if ($cvButton == "cvPage") {
	include "../projects/cv/cv.php";
} elseif ($cvButton == "educationCv") {
	include "../projects/cv/education/educationCv.html";
} elseif ($cvButton == "sparetimeCv") {
    include "../projects/cv/sparetime/sparetimeCv.html";
} elseif ($cvButton == "qualificationCv") {
    include "../projects/cv/qualifications/qualificationsCv.html";
} elseif ($cvButton == "languageCv") {
    include "../projects/cv/language/languageCv.html";
} elseif ($cvButton == "otherCv") {
    include "../projects/cv/other/otherCv.html";
} 
	
?>