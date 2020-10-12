
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


        <form class="form-inline" action="/action_page.php">

            <div class="makeSpace"> </div>

            <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mærke
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

            <div class="makeSpace"> </div>

            <div class="btn-group">
                <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Årgang
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
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
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

            <div class="makeSpace"> </div>

            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-secondary active">
                    <input type="radio" name="options" id="option1" autocomplete="off" checked> Active
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option2" autocomplete="off"> Radio
                </label>
                <label class="btn btn-secondary">
                    <input type="radio" name="options" id="option3" autocomplete="off"> Radio
                </label>
            </div>

            <div class="makeSpace"> </div>

            <button type="submit" class="btn btn-lg btn-success">
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






























