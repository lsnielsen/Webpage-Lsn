


<div class="container-sm">
    <div class="page-header text-center" style="color: #ff884d;">
        <h2>
            Svenske aktier:
        </h2>
    </div>
</div>

<?php
    include "kahoot.php";
    include "swedishStockTable.php";
    include "swedishResult.php";
?>

<script>

    function getSwedishData()
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



