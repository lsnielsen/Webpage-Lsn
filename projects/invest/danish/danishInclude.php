
<html>

<div class="container-sm">
    <div class="page-header text-center" style="color: #ff884d;">
        <h2>
            Danske aktier:
        </h2>
    </div>
</div>

</html>

<?php
    include "stocks/astralis.php";
    include "stocks/afkastPlus.php";
    include "stocks/nordeaKlimaMiljo.php";
    include "stocks/nigai.php";
    include "stocks/novo.php";
    include "stocks/skagen.php";
    include "stocks/afkastPlus.php";
    include "stocks/nina.php";
    include "stocks/bioteknologi.php";
    include "danishStockTable.php";
    include "danishResult.php";
?>

<script>

    function getDanishData()
    {
        getNinaData();
	getAfkastPlusData();
        getAstralisData();
        getNovoData();
	getAfkastPlusData();
	getNordeaKlimaMiljoData();
	getNigaiData();
	getSkagenData();
	getBioteknologiData();
    }
    function assetsPage(page) {
        const form = document.createElement("form");
        form.action = "/Webpage-Lsn/controller/stock.php";
        document.cookie = "stockButton=" + page;
        $(document.body).append(form);
        form.submit();
    }
    function danishTextColor(value, field)
    {
        if (value < 0) {
            $(field).css("color", "red");
        } else {
            $(field).css("color", "green");
        }
    }

</script>


