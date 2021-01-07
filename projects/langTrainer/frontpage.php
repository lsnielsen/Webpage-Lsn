

<html lang="en">
    <head>
        <script type="module" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <title>
            Sprog træner
        </title>
    </head>
    <body>
        <div style="box-sizing:border-box;display:flex;justify-content:center;align-items:center">
            <h1> Sentence Generator</h1>
            <button style="" onclick="sentence()">
                Refresh
                <i class="fa fa-refresh" aria-hidden="true"></i>
            </button>
        </div>
        <div class="container">
            <center>
                <p id="sentence"></p>
            </center>
        </div>
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

<?php include "style.php"; ?>
