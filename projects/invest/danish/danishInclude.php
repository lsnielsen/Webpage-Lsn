



<?php
    include "astralis.php";
    include "novo.php";
    include "danishStockTable.php";
    include "danishResult.php";
?>

<script>

    function getDanishData()
    {
        getAstralisData();
        getNovoData();
    }
    function assetsPage(page) {
        const form = document.createElement("form");
        form.action = "/Webpage-Lsn/controller/stock.php";
        document.cookie = "stockButton=" + page;
        $(document.body).append(form);
        form.submit();
    }
</script>



