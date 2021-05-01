<html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="/Webpage-Lsn/projects/stocks/css/table.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>
            Investering
        </title>
    </head>

    <body class="p-3 mb-2 bg-secondary text-dark" onload="getData()">
        <div class="jumbotron text-center">
            <h1>
                Her er en oversigt over min invistering
            </h1>
        </div>

        <?php
            include "danish/danishInclude.php";
            include "norwegian/norwegianInclude.php";
            include "usa/foreignInclude.php";
            include "funds/fundsInclude.php";
            include "totalResult.php";
        ?>

        <form action="/Webpage-Lsn/controller/frontpage.php" method="post">
            <button type="submit" class="btn btn-dark btn-lg active">
                Tilbage til forsiden
            </button>
        </form>
    </body>

</html>

<script>
    function getData()
    {
        getDanishData();
        getForeignData();
		getSwedishData();
        getFundsData();
        setTotalResultValues();
    }
</script>