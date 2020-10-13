




    <div class="input-group input-group-lg">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg">
                Antal kilometer:
            </span>
        </div>
        <input type="text" class="form-control kmTxt" aria-label="Large" aria-describedby="inputGroup-sizing-lg">
    </div>

    <div class="kmTxtValue" style="display: none;"></div>

    <script>
        $(".kmTxt").on('input', function (e) {
            const value = $(this).val();
            $(".kmTxtValue").text(value);
        });
    </script>