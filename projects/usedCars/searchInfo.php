
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2 pt-3"></div>
        <div class="col-sm-4 text-center">
            <h3 class="pt-3">
                Her kan du vælge hvilken bilmodel du gerne vil se nærmere på:
            </h3>
        </div>
        <?php include "dropdown.php"; ?>
    </div>
    <div class="col-sm-2 pt-3">
        <h3>
            <form action="/Webpage-Lsn/controller/frontpage.php" method="post">
                <button class="btn btn-info btn-lg active" type="submit">
                    <?php echo $txtFile['back']; ?>
                </button>
            </form>
        </h3>
    </div>
</div>

<div class="startSearch searchTxt infoTxt">
    <?php echo $txtFile['searchOne']; ?>  <center class="theChoosenModel"> </center>
    <?php echo $txtFile['searchTwo']; ?>
</div>
<div class="middleSearch searchTxt infoTxt">
    <?php echo $txtFile['searchThree']; ?>
    <div id="bilbasenurls" style="margin-left: 500px; margin-top: -25px;"> </div>
    <?php echo $txtFile['searchFour']; ?>
    <div id="guloggratisurls" style="margin-left: 220px; margin-top: -25px;"> </div>
    <?php echo $txtFile['searchFive']; ?>
</div>
<div class="endSearch searchTxt infoTxt">
    <?php echo $txtFile['searchFinish']; ?>
</div>


<style>
    .theChoosenModel {
        margin-top: -25px;
        margin-left: -25px;
    }

    .infoTxt {
        font-size: 25px;
    }
    .searchTxt {
        display: none;
    }
</style>