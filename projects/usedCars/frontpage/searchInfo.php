
<div class="container-fluid">
    <div class="row" id="headerInfo">
        <div class="col-sm-2 pt-3"></div>
        <div class="col-sm-4 text-center">
            <h3 class="pt-3">
                Her kan du vælge hvilken bilmodel du gerne vil se nærmere på:
            </h3>
        </div>
        <?php include "dropdown.php"; ?>
    </div>
    <div class="col-sm-2 pt-3" id="backButton">
        <h3>
            <form action="/Webpage-Lsn/controller/frontpage.php" method="post">
                <button class="btn btn-info btn-lg active" type="submit">
                    Tilbage til forsiden
                </button>
            </form>
        </h3>
    </div>
</div>



<div class="container searchInfo" style="font-size: 25px;">
    <div class="row startSearch">
        <div class="col-">
            Du er nu gået igang med at søge efter biler på bilbasen og guloggratis, som har modellen
        </div>
        <div class="col- theChoosenModel">  </div>
    </div>
    <div class="row startSearch" style="margin-top: -10px;">
        <div class="col-md-">
            Du skal væbne dig med lidt tålmodighed, da det tager lidt tid. Mellem 1 og 2 minutter, alt afhængig af antallet af biler.
        </div>
    </div>
    <div class="row middleSearch">
        Vi har nu hentet alle links til bilbasen. Vi fandt
        <div id="bilbasenurls"> 2 </div>
        biler og
        <div id="guloggratisurls"> 4 </div>
        biler ved guloggratis.
    </div>
    <div class="row endSearch">
        Nu er alle bilerne hentet fra bilbasen, så nu bliver de vist for dig, om cirka 2 sek.
    </div>
</div>

<style>
    .searchInfo {
        max-width: 1400px;
        width: 100%;
        display: none;
    }
    .theChoosenModel {
        margin-left: 5px;
        font-weight: bold;
    }
    .startSearch, .middleSearch, .endSearch {

    }
</style>