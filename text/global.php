




<?php
	
	$langPlace = isset($_COOKIE["langPlace"]) ? $_COOKIE["langPlace"] : "";
	$langVar = isset($_COOKIE["lang"]) ? $_COOKIE["lang"] : "";
    echo "place: " .$langPlace . ", var: " . $langVar;

    if ($langVar == "english" && $langPlace == "diesel") {
        return include("../text/english/diesel.php");
    } elseif ($langVar == "danish" && $langPlace == "diesel") {
        return include("../text/danish/diesel.php");
    } elseif ($langVar == "danish" && $langPlace == "frontpage") {
        return include("../text/danish/frontpage.php");
    } elseif ($langVar == "english" && $langPlace == "frontpage") {
		return include("../text/english/frontpage.php");
	} elseif ($langVar == "english" && $langPlace == "cv") {
		return include("../text/english/cv.php");
	} elseif ($langVar == "danish" && $langPlace == "cv") {
		return include("../text/danish/cv.php");
	}
	
	
?>