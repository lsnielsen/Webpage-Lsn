




<?php
	
	$languageVar = isset($_COOKIE["lang"]) ? $_COOKIE["lang"] : "";
	if ($languageVar == "english") {
		return include("../text/english/diesel.php");
	} else {
		return include("../text/danish/diesel.php");
	}
	
	
?>