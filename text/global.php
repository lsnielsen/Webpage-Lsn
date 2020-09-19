




<?php
	
	$languageVar = $_COOKIE["language"];
	//echo "lang = " . $languageVar;
	if ($languageVar == "english") {
		return include("../text/english/diesel.php");
	} else {
		return include("../text/danish/diesel.php");
	}
	
	
?>