

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
        <li class="list-group-item list-group-item-warning">
            Vi vil nu søge på bilbasen efter biler, der har de valgte input, og finde gennemsnits prisen per kilometer.
        </li>
    </ul>
</center>

<center class="theResults" style="margin-top: 90px; display: none;">
    <h4>
        Gennemsnitlige pris per kilometer:
        <span class="badge badge-secondary theAveragePricePerKm"> </span>
    </h4>
    <ul class="list-group">
        <li class="list-group-item list-group-item-success">
            Med den ovenstående pris, har vi beregnet, at din bil er følgende værd:
        </li>
    </ul>
    <h4 style="margin-top: 10px;">
        Prisen for din brugte bil:
        <span class="badge badge-secondary theResultPrice"> </span>
        DKK
    </h4>
    <h4 style="margin-top: 10px;">
        Her kan du se de modeller vi fandt på bilbasen:
    </h4>
    <table class="table table-striped table-dark dataTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Link</th>
                <th scope="col">Årgang</th>
                <th scope="col">Ny pris</th>
                <th scope="col">Brugt pris</th>
                <th scope="col">Km</th>
                <th scope="col">Tab/km</th>
            </tr>
        </thead>
        <tbody class="tableBody">
        </tbody>
    </table>
</center>








