<html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="/Webpage-Lsn/projects/stocks/css/table.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script><script src="https://cdn.amcharts.com/lib/4/core.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
        <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
        <title>
            Schweiz Franc details
        </title>
    </head>

    <body class="p-3 mb-2 bg-secondary text-dark" onload="getDetailedStockData();">
        <div class="jumbotron text-center">
            <h1>Her er en oversigt over Schweizer Franc</h1>
            <p>
                Informationerne er taget fra
                <a href="https://www.marketwatch.com/investing/currency/usdchf" target="_blank">
                    MarketWatch
                </a>
                , hvorefter der er lavet yderligere beregning på dem.
            </p>
        </div>
        <table class="table table-hover table-dark table-bordered">
            <thead>
                <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Værdi CHF</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Pris/aktie 03/01-2006</th>
                    <td id="starterPrice"></td>
                </tr>
                <tr>
                    <th scope="row">Dagens pris</th>
                    <td id="priceToday"></td>
                </tr>
                <tr>
                    <th scope="row">Forskel siden dag 1</th>
                    <td id="totalDiff"></td>
                </tr>
            </tbody>
        </table>

        <div id="graphDiv"></div>

        <form action="/Webpage-Lsn/controller/stock.php" method="post">
            <button type="submit" class="btn btn-dark btn-lg active" name="stockButton" value="stockPage">
                Tilbage aktie siden
            </button>
        </form>
    </body>


</html>

<?php include "data.php"; ?>
<?php include "dailyGraph.php"; ?>

<style>

    #graphDiv {
        margin: auto;
        width: 100%;
        height: 450px;
        margin-bottom: 20px;
    }
</style>
