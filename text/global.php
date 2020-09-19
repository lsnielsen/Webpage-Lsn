




<?php
	
	$languageVar = $_COOKIE["language"];
	if ($languageVar == "english") {
		return include("../text/english/diesel.php");
	} else {
		return include("../text/danish/diesel.php");
	}
	
	
?>