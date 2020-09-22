




<?php
	
	$langPlace = isset($_COOKIE["langPlace"]) ? $_COOKIE["langPlace"] : "";
	$langVar = isset($_COOKIE["lang"]) ? $_COOKIE["lang"] : "";
	if ($langVar == "english") {
		return include("../text/english/diesel.php");
	} else {
		return include("../text/danish/diesel.php");
	}
	
	
?>