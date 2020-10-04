<?php

    $stockButton = isset($_POST['stockButton']) ? $_POST['stockButton'] : null;
    $stockCookie = isset($_COOKIE['stockButton']) ? $_COOKIE['stockButton'] : null;

    if ($stockButton == "stockPage") {
        include "../projects/stocks/frontpage.php";
    } elseif ($stockCookie == "bitcoin") {
        include "../projects/stocks/assets/bitcoin/bitcoinDetails.php";
    } elseif ($stockCookie == "euro/usd") {
        include "../projects/stocks/assets/euroUsd/euroUsdDetails.php";
    }











?>