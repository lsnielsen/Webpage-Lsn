


<div class="container-sm">
    <div class="page-header text-center" style="color: #ff884d;">
        <h2>
            Udenlandske aktier:
        </h2>
    </div>
</div>

<?php
    include "stocks/ford.php";
    include "stocks/cocaCola.php";
	include "stocks/waltDisney.php";
	include "stocks/visa.php";
	include "stocks/mcDonald.php";
	include "stocks/generalMotors.php";
	//include "bitcoinGroup.php";
	include "stocks/lockheedMartin.php";
    include "stocks/equitransMidstream.php";
    include "foreignStockTable.php";
    include "foreignResult.php";
?>

<script>

    function getForeignData()
    {
        getDisneyData();
        getVisaData();
        getColaData();
        getMcDonaldData();
        getGmData();
        getFordData();
		//getBitcoinGroupData();
		getLockheedMartinData();
		getEMSteamData();
    }
</script>



