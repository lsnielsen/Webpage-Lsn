<?php


    $priceButton = isset($_POST['priceCalculator']) ? $_POST['priceCalculator'] : "";

    if ($priceButton == 'priceCalculatorPage') {
        include "../projects/priceCalculator/frontpage.php";
    } elseif ($priceButton == "priceSubmitPage") {
        echo '<pre>'; print_r($_POST); echo '</pre>';
        include "../projects/priceCalculator/frontpage.php";
    }













?>