




    <div class="btn-group btn-group-toggle gearToggle" data-toggle="buttons">
        <label class="btn btn-secondary active btn-lg gearType">
            <input type="radio" name="options" id="option1" autocomplete="off"> Automatgear
        </label>
        <label class="btn btn-secondary btn-lg gearType">
            <input type="radio" name="options" id="option2" autocomplete="off"> Manuel gear
        </label>
    </div>

    <div class="gearTypeHolder" style="display: none"> </div>

    <script>
        $(".gearTypeHolder").text("Automatgear");

        $(".gearType").click(function () {
            gearType = $(this).text().trim();
            $(".gearTypeHolder").text(gearType);
        });


    </script>



