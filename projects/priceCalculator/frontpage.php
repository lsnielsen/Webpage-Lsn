
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Pris beregner</title>
    </head>
    <body class="p-3 mb-2 bg-warning text-dark">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">
                    Her kan du beregne prisen på din brugte bil
                </h1>
                <p class="lead">
                    Indtast værdierne for din bil nedenfor, og klik på beregn.
                </p>
            </div>
        </div>


        <form class="form-inline" action="../controller/priceCalculator.php" method="post">

            <div class="makeSpace"> </div>

            <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mærke
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Audi A3</a>
                    <a class="dropdown-item" href="#">Volvo V60</a>
                    <a class="dropdown-item" href="#">Saab 9-5</a>
                </div>
            </div>

            <div class="makeSpace"> </div>

            <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Årgang
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">2020</a>
                    <a class="dropdown-item" href="#">2019</a>
                    <a class="dropdown-item" href="#">2018</a>
                    <a class="dropdown-item" href="#">2017</a>
                    <a class="dropdown-item" href="#">2016</a>
                    <a class="dropdown-item" href="#">2015</a>
                    <a class="dropdown-item" href="#">2014</a>
                    <a class="dropdown-item" href="#">2013</a>
                    <a class="dropdown-item" href="#">2012</a>
                    <a class="dropdown-item" href="#">2011</a>
                    <a class="dropdown-item" href="#">2010</a>
                    <a class="dropdown-item" href="#">2009</a>
                    <a class="dropdown-item" href="#">2008</a>
                    <a class="dropdown-item" href="#">2007</a>
                    <a class="dropdown-item" href="#">2006</a>
                    <a class="dropdown-item" href="#">2005</a>
                    <a class="dropdown-item" href="#">2004</a>
                    <a class="dropdown-item" href="#">2003</a>
                    <a class="dropdown-item" href="#">2002</a>
                    <a class="dropdown-item" href="#">2001</a>
                    <a class="dropdown-item" href="#">2000</a>
                </div>
            </div>

            <div class="makeSpace"> </div>

            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">
                        Antal kilometer:
                    </span>
                </div>
                <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-lg">
            </div>

            <div class="makeSpace"> </div>

            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">
                        Motor:
                    </span>
                </div>
                <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-lg">
            </div>

            <div class="makeSpace"> </div>

            <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Antal gear
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">5</a>
                    <a class="dropdown-item" href="#">6</a>
                    <a class="dropdown-item" href="#">7</a>
                    <a class="dropdown-item" href="#">8</a>
                </div>
            </div>

            <div class="makeSpace"> </div>

            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active btn-lg">
                    <input type="radio" name="options" id="option1" autocomplete="off"> Automatgear
                </label>
                <label class="btn btn-secondary btn-lg">
                    <input type="radio" name="options" id="option2" autocomplete="off"> Manuel gear
                </label>
            </div>

            <div class="makeSpace"> </div>

            <button type="submit" class="btn btn-lg btn-success" name="priceCalculator" value="priceCalculatorPage">
                Beregn
            </button>

        </form>





        <form action="../controller/frontpage.php">
            <button type="submit" class="btn btn-info btn-lg backButton">
                Tilbage til forsiden
            </button>
        </form>


    </body>
</html>

<style>
    .makeSpace {
        width: 20px;
    }
    .backButton {
        margin-left: 20px;
        margin-top: 250px;
    }


</style>






























