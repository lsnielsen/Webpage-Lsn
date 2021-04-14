


<div class="container-sm">
    <div class="page-header text-center" style="color: #ff884d;">
        <h2>
            Danske aktier:
        </h2>
    </div>
</div>

<?php
    include "astralis.php";
    include "afkastPlus.php";
    include "nordeaKlimaMiljo.php";
    include "novo.php";
    include "danishStockTable.php";
    include "danishResult.php";
?>

<script>

    function getDanishData()
    {
        getAstralisData();
        getNovoData();
		getAfkastPlusData();
		getNordeaKlimaMiljoData();
    }
    function assetsPage(page) {
        const form = document.createElement("form");
        form.action = "/Webpage-Lsn/controller/stock.php";
        document.cookie = "stockButton=" + page;
        $(document.body).append(form);
        form.submit();
    }
</script>



