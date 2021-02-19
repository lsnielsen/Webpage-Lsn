



<div class="btn-group">
    <button class="btn btn-secondary btn-lg dropdown-toggle modelDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Mærke
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item modelItem" href="#">Audi A3</a>
        <a class="dropdown-item modelItem" href="#">Volvo V60</a>
        <a class="dropdown-item modelItem" href="#">Saab 9-5</a>
        <a class="dropdown-item modelItem" href="#">Ford Fiesta</a>
    </div>
</div>



<script>

    $(".modelItem").click(function () {
        $(".modelDropdown").text($(this).text());
    });



</script>