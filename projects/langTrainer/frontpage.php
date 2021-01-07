

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

<?php include "adjectives.php"; ?>
<?php include "nouns.php"; ?>
<?php include "prepositions.php"; ?>
<?php include "verbs.php"; ?>
<?php include "adverbs.php"; ?>
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
    };
    sentence();
</script>

<style>
    body {
        color: #2e2e2e;
        font-family: sans-serif;
        font-size: 21px;
        text-align: justify;
        margin: 0 auto;
    }

    .container {
        background-color: #3FABF2;
        color: whitesmoke;
        position: relative;
        /*                margin-top: 10vh;*/
        height: 89vh;
        padding-top: 14vh;
        box-sizing: border-box;
    }

    .container p {
        margin-top: 10vh;
        padding: 5px;
        line-height: 1.6;
        -webkit-hyphens: auto;
        -moz-hyphens: auto;
        -ms-hyphens: auto;
        hyphens: auto;
        width: 73cr;
       /*                top: 20vh;*/
    }

    h1 {
        font-size: 40px;
        text-align: center;
        font-family: 'Fira Sans Condensed', sans-serif;
        margin-right: 20px;
    }

    button {
        height: 60px;
        justify-content: right;
        outline: none;
        font-famiy: sans-serif;
        padding: 10px;
        width: 120px;
        border: none;
        background-color: #fff;
        border: 2px solid #1b1b1b;
        color: #1b1b1b;
        transition: 500ms ease-in;
        font-size: 18px;
        display: flex;
        justify-content: center;
    }
    button i {
        margin-left: 3px;
    }
    button:hover {
        color: #fff;
        background-color: #1b1b1b;
    }

</style>
