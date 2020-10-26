

<script>
    let model;

    $("#inputSubmit").click(function () {
        model = $(".modelDropdown").text();
        const year = $(".yearDropdown").text();
        const km = $(".kmTxtValue").text();
        const gearType = $(".gearTypeHolder").text();
        const startPrice = $(".newPriceValue").text();

        if (checkModel(model) && checkYear(year) && checkKm(km) && checkStartPrice(startPrice)) {
            $(".theModel").text(model);
            $(".theYear").text(year);
            $(".theKm").text(km);
            $(".theGeartype").text(gearType);
            $(".theStartPrice").text(startPrice);
            $(".choosenInput").show();
            carGetter();
        } else {
            $(".errorModal").show();
        }
    });

    function checkModel(modelVar) {
        if (modelVar == "Mærke") {
            return false;
        } else {
            return true;
        }
    }
    function checkYear(yearVar) {
        if (yearVar == "Årgang") {
            return false;
        } else {
            return true;
        }
    }
    function checkKm (kmVar) {
        return (/(^((?![\w\W]).)*[0-9]+((?![\w\W]).)*)/.test(kmVar));
    }
    function checkStartPrice(startPrice) {
        return (/(^((?![\w\W]).)*[0-9]((?![\w\W]).)*)/.test(startPrice));
    }

</script>

<center class="choosenInput" style="margin-top: 90px; display: none;">
    <h4>
        Valgte model:
        <span class="badge badge-secondary theModel"> </span>
    </h4>
    <h4>
        Valgte årgang:
        <span class="badge badge-secondary theYear"> </span>
    </h4>
    <h4>
        Valgte pris fra ny:
        <span class="badge badge-secondary theStartPrice"> </span>
    </h4>
    <h4>
        Valgte km:
        <span class="badge badge-secondary theKm"> </span>
    </h4>
    <ul class="list-group">
        <li class="list-group-item list-group-item-success">
            Vi vil nu søge på bilbasen efter biler, der har de valgte input, og finde gennemsnits prisen per kilometer for de biler med den valgte model og årgang.
        </li>
    </ul>
</center>

<center class="choosenInput" style="margin-top: 90px; display: none;">
    <h4>
        Valgte model:
        <span class="badge badge-secondary theModel"> </span>
    </h4>
    <ul class="list-group">
        <li class="list-group-item list-group-item-success">
            Vi vil nu søge på bilbasen efter biler, der har de valgte input, og finde gennemsnits prisen per kilometer for de biler med den valgte model og årgang.
        </li>
    </ul>
</center>








