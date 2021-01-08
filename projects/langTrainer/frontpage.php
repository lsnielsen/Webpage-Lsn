

<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="/Webpage-Lsn/projects/stocks/css/table.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <title>
            Sprog træner
        </title>
    </head>
    <body class="p-3 mb-2 bg-secondary">
        <h1 class="jumbotron text-center">
            Sentence Generator
        </h1>
        <div class="jumbotron bg-info">
            <h1>
                <small id="sentence" class="text-center text-body"></small>
            </h1>
            <div class="row" style="margin-top: 500px;">
                <div class="col-sm-5"></div>
                <button onclick="sentence()" class="btn btn-primary active col-sm-2">
                    Tryk her for at få en ny sætning
                </button>
            </div>
        </div>
        <form action="/Webpage-Lsn/controller/frontpage.php" method="post">
            <button type="submit" class="btn btn-dark btn-lg active">
                Tilbage til forsiden
            </button>
        </form>
    </body>
</html>

<?php include "words/adjectives.php"; ?>
<?php include "words/nouns.php"; ?>
<?php include "words/prepositions.php"; ?>
<?php include "words/verbs.php"; ?>
<?php include "words/adverbs.php"; ?>
<script>
    function randGen() {
        return Math.floor(Math.random() * 5);
    }

    let adjLength = adjectives.length;
    let nounLength = nouns.length;
    let prepLength = prepositions.length;
    let verbLength = verbs.length;
    let advLength = adverbs.length;

    function sentence() {
        const adj1 = Math.floor(Math.random() * adjLength);
        const adj2 = Math.floor(Math.random() * adjLength);
        const adj3 = Math.floor(Math.random() * adjLength);
        const adj4 = Math.floor(Math.random() * adjLength);
        const noun1 = Math.floor(Math.random() * nounLength);
        const noun2 = Math.floor(Math.random() * nounLength);
        const noun3 = Math.floor(Math.random() * nounLength);
        const noun4 = Math.floor(Math.random() * nounLength);
        const pre1 = Math.floor(Math.random() * prepLength);
        const adv1 = Math.floor(Math.random() * advLength);
        const adv2 = Math.floor(Math.random() * advLength);
        const ver1 = Math.floor(Math.random() * verbLength);
        const ver2 = Math.floor(Math.random() * verbLength);

        const content = "The " +
            adjectives[adj1] + " " +
            nouns[noun1] + " " +
            adverbs[adv1] + " " +
            verbs[ver1] + " because some " +
            nouns[noun2] + " " +
            adverbs[adv2] + " " +
            verbs[ver2] + " " +
            prepositions[pre1] + " a " +
            adjectives[adj2] + " " +
            nouns[noun3] + " which, became a " +
            adjectives[adj3] + ", " +
            adjectives[adj4] + " " +
            nouns[noun4] + ".";

        $("#sentence").text(content);
    }
    sentence();
</script>
