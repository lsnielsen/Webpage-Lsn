


<div class="container-sm">
    <div class="page-header text-center" style="color: #ff884d;">
        <h2>
            Norske aktier:
        </h2>
    </div>
</div>

<?php
    include "bitcoinGroup.php";
    include "norwegianStockTable.php";
    include "norwegianResult.php";
?>

<script>

    function getNorwegianData()
    {
        getKahootData();
    }
    function assetsPage(page) {
        const form = document.createElement("form");
        form.action = "/Webpage-Lsn/controller/stock.php";
        document.cookie = "stockButton=" + page;
        $(document.body).append(form);
        form.submit();
    }
</script>



