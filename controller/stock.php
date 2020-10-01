<?php

    $stockButton = isset($_POST['stockButton']) ? $_POST['stockButton'] : null;

    if ($stockButton == "stockPage") {
        include "../projects/stocks/frontpage.php";
    }











?>