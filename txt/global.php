

<script>
	var globalLanguageVariable = "danish";
	document.cookie = "language " + " = " + globalLanguageVariable;

</script>



<?php

	$languageVar = $_COOKIE["language"];

	if ($languageVar == "danish") {
		return include("../txt/diesel/txt.php");
	}
	
?>