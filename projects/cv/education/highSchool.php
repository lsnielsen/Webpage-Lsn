<!DOCTYPE html>
<?php $txtFile = include("../../Webpage-Lsn/text/global.php");  ?>
<html id="certificatePage">
    <head>
        <title>
            <?php echo $txtFile['general']['docProof']; ?>
        </title>
        <link rel="stylesheet" href="/Webpage-Lsn/projects/cv/css/pdfStyle.css" type="text/css">
    </head>
    <body>
        <h1>
            <?php echo $txtFile['general']['gymProof']; ?>
        </h1>
        <iframe id="frame" src="/Webpage-Lsn/projects/cv/pdf/gymnasie.pdf"> </iframe>
        <div id="explanation">
            <div id="header">

            </div>
            <div id="body">
                <?php echo $txtFile['general']['gymSubjects']; ?>
            </div>
            <form action="/Webpage-Lsn/controller/cv.php" method="post">
                <button type="submit" name="cvButton" value="educationCv" id="button">
                    <?php echo $txtFile['general']['back']; ?>
                </button>
            </form>
        </div>
    </body>
</html>
