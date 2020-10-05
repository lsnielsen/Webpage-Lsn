<html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="/Webpage-Lsn/projects/stocks/css/table.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>
            Google details
        </title>
    </head>

    <body class="p-3 mb-2 bg-secondary text-dark" onload="getDetailedStockData();">
        <div class="jumbotron text-center">
            <h1>Her er en oversigt over Google</h1>
            <p>
                Informationerne er taget fra
                <a href="https://www.marketwatch.com/investing/stock/googl" target="_blank">
                    MarketWatch
                </a>, hvorefter der er lavet yderligere beregning på dem.
            </p>
        </div>
        <table class="table table-hover table-dark table-bordered">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Værdi USD</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Åbning</th>
                    <td id="openValue"></td>
                </tr>
                <tr>
                    <th scope="row">Lukning</th>
                    <td id="closeValue"></td>
                </tr>
                <tr>
                    <th scope="row">Aktie værdi</th>
                    <td id="stockValue"></td>
                </tr>
                <tr>
                    <th scope="row">Ændring</th>
                    <td id="stockChange"></td>
                </tr>
                <tr>
                    <th scope="row">Ændring i %</th>
                    <td id="stockPercentage"></td>
                </tr>
                <tr>
                    <th scope="row">Dagens rækkevidde</th>
                    <td id="rangeValue"></td>
                </tr>
                <tr>
                    <th scope="row">Ugens rækkevidde</th>
                    <td id="weekRangeValue"></td>
                </tr>
                <tr>
                    <th scope="row">Markedsværdi</th>
                    <td id="marketCap"></td>
                </tr>
                <tr>
                    <th scope="row">Udestående</th>
                    <td id="outstanding"></td>
                </tr>
                <tr>
                    <th scope="row">Indtjening</th>
                    <td id="earnings"></td>
                </tr>
                <tr>
                    <th scope="row">Indtjening per aktie</th>
                    <td id="earningsPerShare"></td>
                </tr>
                <tr>
                    <th scope="row">P/E Ratio</th>
                    <td id="peRatio"></td>
                </tr>
                <tr>
                    <th scope="row">Sidste års vækst</th>
                    <td id="lastYearGrowth"></td>
                </tr>
                <tr>
                    <th scope="row">PEG Ratio</th>
                    <td id="pegRatio"></td>
                </tr>
            </tbody>
        </table>

        <form action="/Webpage-Lsn/controller/stock.php" method="post">
            <button type="submit" class="btn btn-dark btn-lg active" name="stockButton" value="stockPage">
                Tilbage aktie siden
            </button>
        </form>
    </body>


</html>

<?php include "data.php"; ?>