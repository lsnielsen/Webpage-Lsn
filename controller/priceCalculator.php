<?php


    $priceButton = isset($_POST['priceCalculator']) ? $_POST['priceCalculator'] : "";

    if ($priceButton == 'priceCalculatorPage') {
        include "../projects/priceCalculator/frontpage.php";
    }













?>