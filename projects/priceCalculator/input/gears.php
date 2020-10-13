





    <div class="btn-group">
        <button class="btn btn-secondary btn-lg dropdown-toggle gearDropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Antal gear
        </button>
        <div class="dropdown-menu">
            <option class="dropdown-item gearItem">5</option>
            <option class="dropdown-item gearItem">6</option>
            <option class="dropdown-item gearItem">7</option>
            <option class="dropdown-item gearItem">8</option>
        </div>
    </div>



    <script>

        $(".gearItem").click(function () {
            $(".gearDropdown").text($(this).text());
        });



    </script>