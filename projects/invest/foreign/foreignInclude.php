


<div class="container-sm">
    <div class="page-header text-center" style="color: #ff884d;">
        <h2>
            Udenlandske aktier:
        </h2>
    </div>
</div>

<?php
    include "ford.php";
    include "cocaCola.php";
	include "waltDisney.php";
	include "visa.php";
	include "mcDonald.php";
	include "generalMotors.php";
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
    }
</script>



