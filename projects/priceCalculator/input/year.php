


<div class="btn-group">
    <button class="btn btn-secondary btn-lg dropdown-toggle yearDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Årgang
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item yearItem" href="#">2020</a>
        <a class="dropdown-item yearItem" href="#">2019</a>
        <a class="dropdown-item yearItem" href="#">2018</a>
        <a class="dropdown-item yearItem" href="#">2017</a>
        <a class="dropdown-item yearItem" href="#">2016</a>
        <a class="dropdown-item yearItem" href="#">2015</a>
        <a class="dropdown-item yearItem" href="#">2014</a>
        <a class="dropdown-item yearItem" href="#">2013</a>
        <a class="dropdown-item yearItem" href="#">2012</a>
        <a class="dropdown-item yearItem" href="#">2011</a>
        <a class="dropdown-item yearItem" href="#">2010</a>
        <a class="dropdown-item yearItem" href="#">2009</a>
        <a class="dropdown-item yearItem" href="#">2008</a>
        <a class="dropdown-item yearItem" href="#">2007</a>
        <a class="dropdown-item yearItem" href="#">2006</a>
        <a class="dropdown-item yearItem" href="#">2005</a>
        <a class="dropdown-item yearItem" href="#">2004</a>
        <a class="dropdown-item yearItem" href="#">2003</a>
        <a class="dropdown-item yearItem" href="#">2002</a>
        <a class="dropdown-item yearItem" href="#">2001</a>
        <a class="dropdown-item yearItem" href="#">2000</a>
    </div>
</div>



<script>

    $(".yearItem").click(function () {
        $(".yearDropdown").text($(this).text());
    });



</script>