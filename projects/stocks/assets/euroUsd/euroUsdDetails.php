<html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>
            Bitcoin details
        </title>
    </head>

    <body class="p-3 mb-2 bg-secondary text-dark" onload="getStockData()">
    <div class="jumbotron text-center">
        <h1>Her er en oversigt over Euro / USD</h1>
        <p>
            Informationerne er taget fra
            <a href="https://www.marketwatch.com/investing/currency/eurusd" target="_blank">
                MarketWatch
            </a>, hvorefter der er lavet yderligere beregning på dem.
        </p>
    </div>


    <form action="/Webpage-Lsn/controller/stock.php" method="post">
        <button type="submit" class="btn btn-dark btn-lg active" name="stockButton" value="stockPage">
            Tilbage aktie siden
        </button>
    </form>
    </body>


</html>