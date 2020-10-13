




    <div class="input-group input-group-lg">
        <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg">
                Motor:
            </span>
        </div>
        <input type="text" class="form-control engineTxt" aria-label="Large" aria-describedby="inputGroup-sizing-lg">
    </div>

    <div class="engineTxtValue" style="display: none;"></div>

    <script>
        $(".engineTxt").on('input', function (e) {
            const value = $(this).val();
            $(".engineTxtValue").text(value);
        });
    </script>