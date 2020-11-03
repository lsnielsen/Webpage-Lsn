

<div class="input-group input-group-lg">
    <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-lg">
                Pris fra ny:
            </span>
    </div>
    <input type="text" class="form-control newPriceTxt" aria-label="Large" aria-describedby="inputGroup-sizing-lg" placeholder="fx: 299500">
</div>

<div class="newPriceValue" style="display: none;"></div>

<script>
    $(".newPriceTxt").on('input', function (e) {
        const value = $(this).val();
        $(".newPriceValue").text(value);
    });
</script>