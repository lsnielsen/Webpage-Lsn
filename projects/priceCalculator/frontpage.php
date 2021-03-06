
<!doctype html>
<?php include "search/getCars.php"; ?>
<?php include "search/result.php"; ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <title>Pris beregner</title>
    </head>
    <body class="p-3 mb-2 bg-warning text-dark">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">
                    Her kan du beregne prisen på din brugte bil
                </h1>
                <p class="lead" style="text-align: center">
                    Indtast værdierne for din bil nedenfor, og klik på beregn.
                </p>
            </div>
        </div>

        <?php include "input/errorModal.php"; ?>

        <div class="form-inline">
            <div class="makeSpace" style="margin-left: 90px;"> </div>

            <?php include "input/model.php"; ?>

            <div class="makeSpace"> </div>

            <?php include "input/year.php"; ?>

            <div class="makeSpace"> </div>

            <?php include "input/startPrice.php"; ?>

            <div class="makeSpace"> </div>

            <?php include "input/kilometers.php"; ?>

            <div class="makeSpace"> </div>

            <button type="submit" class="btn btn-lg btn-success" id="inputSubmit" name="priceCalculator" value="priceSubmitPage">
                Beregn
            </button>
        </div>

        <div class="makeSpace"> </div>

        <?php include "input/inputHandler.php"; ?>

        <form class="form-inline" action="../controller/priceCalculator.php" method="post">
            <button type="submit" style="display: none;" id="submitValues" name="priceCalculator" value="priceSubmitPage">

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




