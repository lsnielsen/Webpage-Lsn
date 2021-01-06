

<div style="box-sizing:border-box;display:flex;justify-content:center;align-items:center">
    <h1> Sentence Generator</h1>
    <button style="" onclick="sentence()">Refresh<i class="fa fa-refresh" aria-hidden="true"></i></button>
</div>
<div class="container">
    <p id="sentence"></p>
</div>


<script>
    let verbs, nouns, adjectives, adverbs, preposition;
    nouns = ["bird", "clock", "boy", "plastic", "duck", "teacher", "old lady", "professor", "hamster", "dog"];
    verbs = ["kicked", "ran", "flew", "dodged", "sliced", "rolled", "died", "breathed", "slept", "killed"];
    adjectives = ["beautiful", "lazy", "professional", "lovely", "dumb", "rough", "soft", "hot", "vibrating", "slimy"];
    adverbs = ["slowly", "elegantly", "precisely", "quickly", "sadly", "humbly", "proudly", "shockingly", "calmly", "passionately"];
    preposition = ["down", "into", "up", "on", "upon", "below", "above", "through", "across", "towards"];

    function randGen() {
        return Math.floor(Math.random() * 5);
    }

    function sentence() {
        const rand1 = Math.floor(Math.random() * 10);
        const rand2 = Math.floor(Math.random() * 10);
        const rand3 = Math.floor(Math.random() * 10);
        const rand4 = Math.floor(Math.random() * 10);
        const rand5 = Math.floor(Math.random() * 10);
        const rand6 = Math.floor(Math.random() * 10);
//                var randCol = [rand1,rand2,rand3,rand4,rand5];
//                var i = randGen();
        const content = "The " + adjectives[rand1] + " " + nouns[rand2] + " " + adverbs[rand3] + " " + verbs[rand4] + " because some " + nouns[rand1] + " " + adverbs[rand1] + " " + verbs[rand1] + " " + preposition[rand1] + " a " + adjectives[rand2] + " " + nouns[rand5] + " which, became a " + adjectives[rand3] + ", " + adjectives[rand4] + " " + nouns[rand6] + ".";

        document.getElementById('sentence').innerHTML = "&quot;" + content + "&quot;";
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
        width: 73px;
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
        position: relative;
        padding: 10px;
        width: 120px;
        left: 100vh;
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

    .container:first-child {
        height: 30vh !important;
    }

    @media screen and (max-width: 565px) {
        .container p {
            font-size: 17px;
        }
        div:first-child {
            height: 2vh;
        }
    }

    @media screen and (min-width: 565px) {
        body {
            text-align: center;
        }
    }
</style>
