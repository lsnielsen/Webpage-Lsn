<html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="/Webpage-Lsn/projects/stocks/css/table.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>
            Aktie kurser
        </title>
    </head>

    <body class="p-3 mb-2 bg-secondary text-dark" onload="getStockData()">
        <div class="jumbotron text-center">
            <h1>Her er en oversigt over kurserne på enkelte ting</h1>
            <p>
                Der er kurser og tilhørende statistik fra
                <a href="https://www.nyse.com/index" target="_blank">
                    New York Stock Exchange
                </a>. <br>
                Klik på det enkelte investerings element under "Aktiv", for at få en uddybbende specifikation
            </p>
        </div>

        <?php
            include "assets/oil/oil.php";
            include "assets/euroUsd/euroUsd.php";
            include "assets/gold/gold.php";
            include "assets/silver/silver.php";
            include "assets/google/google.php";
            include "assets/bitcoin/bitcoin.php";
            include "assets/astralis/astralis.php";
            include "assets/vestjyskBank/vestjyskBank.php";
            include "assets/danskeBank/danskeBank.php";
            include "stockTable.php";
        ?>

        <form action="/Webpage-Lsn/controller/frontpage.php" method="post">
            <button type="submit" class="btn btn-dark btn-lg active">
                Tilbage til forsiden
            </button>
        </form>
    </body>

</html>
