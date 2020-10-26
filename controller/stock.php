<?php

    $stockButton = isset($_POST['stockButton']) ? $_POST['stockButton'] : null;
    $stockCookie = isset($_COOKIE['stockButton']) ? $_COOKIE['stockButton'] : null;

    if ($stockButton == "stockPage") {
        include "../projects/stocks/frontpage.php";
    } elseif ($stockCookie == "bitcoin") {
        include "../projects/stocks/assets/bitcoin/bitcoinDetails.php";
    } elseif ($stockCookie == "euro/usd") {
        include "../projects/stocks/assets/euroUsd/euroUsdDetails.php";
    } elseif ($stockCookie == "gold") {
        include "../projects/stocks/assets/gold/goldDetails.php";
    } elseif ($stockCookie == "google") {
        include "../projects/stocks/assets/google/googleDetails.php";
    } elseif ($stockCookie == "oil") {
        include "../projects/stocks/assets/oil/oilDetails.php";
    } elseif ($stockCookie == "silver") {
        include "../projects/stocks/assets/silver/silverDetails.php";
    } elseif ($stockCookie == "astralis") {
        include "../projects/stocks/assets/astralis/astralisDetails.php";
    } elseif ($stockCookie == "vestjyskBank") {
        include "../projects/stocks/assets/vestjyskBank/vestjyskBankDetails.php";
    } elseif ($stockCookie == "danskeBank") {
        include "../projects/stocks/assets/danskeBank/danskeBankDetails.php";
    } elseif ($stockCookie == "swissFranc") {
        include "../projects/stocks/assets/swissFranc/swissFrancDetails.php";
    }











?>