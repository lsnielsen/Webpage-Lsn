
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
	<div class="row">
    <div class="col-sm-2 pt-3" id="backButton">
		<form action="/Webpage-Lsn/controller/frontpage.php" method="post">
			<button class="btn btn-info btn-lg active" type="submit">
				Tilbage til forsiden
			</button>
		</form>
    </div>
		<?php if (isset($downloadButton) && $downloadButton == "isset") {
			include "downloadButton.php";
		} ?>
	</div>
</div>



<div class="container searchInfo">
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
        <div class="col-">
            Vi har nu hentet alle links fra de to sider. Vi fandt
        </div>
        <div class="col-" id="bilbasenurls">  </div>
        <div class="col-">
            links hos bilbasen,
        </div>
        <div class="col-" id="guloggratisurls">  </div>
        <div class="col-">
            links ved guloggratis og
        </div>
        <div class="col-" id="biltorveturls">  </div>
        <div class="col-">
            links ved biltorvet.
        </div>
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
        font-size: 25px;
    }
    .theChoosenModel {
        margin-left: 5px;
        font-weight: bold;
    }
    #bilbasenurls, #guloggratisurls, #biltorveturls {
        padding: 0px 5px 0px 5px;
    }
</style>