


<div class="container-sm">
    <div class="page-header text-center" style="color: #ff884d;">
        <h2>
            Fonds invisteringer:
        </h2>
    </div>
</div>

<?php
    include "nordea.php";
    include "fundsStockTable.php";
    include "fundsResult.php";
?>

<script>

    function getForeignData()
    {
        getNordeaData();
    }
</script>



