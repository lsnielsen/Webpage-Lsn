
<?php

        include("../projects/usedCars/helper.php");
        $usedCarsArray = isset($_POST['usedCarsArray']) ? $_POST['usedCarsArray'] : "";

		if ($usedCarsArray == "") {
			include("../projects/usedCars/frontpage.php");	
		} else {
		    setFrontpageWithData($usedCarsArray);
		}





// File to be included in all controllers:
    include "allIncludes.php";

?>