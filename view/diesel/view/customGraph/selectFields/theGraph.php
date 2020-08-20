<?php

	if (fopen("../view/diesel/view/customGraph/selectFields/data.txt", "w")) {
		$myfile = fopen("../view/diesel/view/customGraph/selectFields/data.txt", "w");
	} else {
		echo "did not open file";
	}
	$txt = "0.000              0              0\n";
	fwrite($myfile, $txt);
	$txt = "0.001            104             51\n";
	fwrite($myfile, $txt);
	$txt = "0.002            202   			101\n"; 
	fwrite($myfile, $txt);
	$txt = "0.003            298            148\n"; 
	fwrite($myfile, $txt);
	$txt = "0.0031           290            149\n"; 
	fwrite($myfile, $txt);
	fclose($myfile);


?>