
<?php

    $languageButton = isset($_POST['langTrainer']) ? $_POST['langTrainer'] : "";

    if ($languageButton == "langTrainerPage") {
        include "../projects/langTrainer/frontpage.php";
    }

// File to be included in all controllers:
    include "allIncludes.php";

?>