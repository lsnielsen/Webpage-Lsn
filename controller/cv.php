<?php

    $cvButton = isset($_POST['cvButton']) ? $_POST['cvButton'] : "";

    if ($cvButton == "cvPage") {
        include "../projects/cv/cv.php";
    } elseif ($cvButton == "educationCv") {
        include "../projects/cv/education/educationCv.php";
    } elseif ($cvButton == "sparetimeCv") {
        include "../projects/cv/sparetime/sparetimeCv.php";
    } elseif ($cvButton == "qualificationCv") {
        include "../projects/cv/qualifications/qualificationsCv.php";
    } elseif ($cvButton == "languageCv") {
        include "../projects/cv/language/languageCv.php";
    } elseif ($cvButton == "otherCv") {
        include "../projects/cv/other/otherCv.php";
    }  elseif ($cvButton == "masterProof") {
        include "../projects/cv/education/master.php";
    }  elseif ($cvButton == "gradProof") {
        include "../projects/cv/education/bachelor.php";
    }  elseif ($cvButton == "gymProof") {
        include "../projects/cv/education/highSchool.php";
    }  elseif ($cvButton == "pubProof") {
        include "../projects/cv/education/groundSchool.php";
    }  elseif ($cvButton == "weightlifting") {
        include "../projects/cv/sparetime/weightlifting.php";
    }  elseif ($cvButton == "music") {
        include "../projects/cv/sparetime/music.php";
    }  elseif ($cvButton == "it") {
        include "../projects/cv/sparetime/itDeveloper.php";
    }  elseif ($cvButton == "math") {
        include "../projects/cv/other/argue.php";
    }  elseif ($cvButton == "statement") {
        include "../projects/cv/other/statement.php";
    }
	
?>