
<script>

    $("#inputSubmit").click(function () {
        const model = $(".modelDropdown").text();
        const year = $(".yearDropdown").text();
        const km = $(".kmTxtValue").text();
        const engine = $(".engineTxtValue").text();
        const gears = $(".gearDropdown").text();
        const gearType = $(".gearTypeHolder").text();
        console.log("input handling");
        if (checkModel(model) && checkYear(year) && checkKm(km) && checkEngine(engine) && checkGear(gears)) {
            $(".theModel").text(model);
            $(".theYear").text(year);
            $(".theKm").text(km);
            $(".theEngine").text(engine);
            $(".theGears").text(gears);
            $(".theGeartype").text(gearType);
            $(".choosenInput").show();
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
        return (/(^((?![\w\W]).)*[0-9]+((?![\w\W]).)*)/.test(kmVar))
    }
    function checkEngine (engineVar) {
        return (/(^((?![\w\W]).)*[0-9a-zA-Z,]((?![\w\W]).)*)/.test(engineVar))
    }
    function checkGear (gearVar) {
        return (/(^((?![\w\W]).)*[0-9]((?![\w\W]).)*)/.test(gearVar))
    }

</script>

<center class="choosenInput" style="margin-top: 90px; display: none;">
    <h4>
        Valgte model:
        <span class="badge badge-secondary theModel">
        </span>
    </h4>
    <h4>
        Valgte årgang:
        <span class="badge badge-secondary theYear">
        </span>
    </h4>
    <h4>
        Valgte km:
        <span class="badge badge-secondary theKm">
        </span>
    </h4>
    <h4>
        Valgte motor:
        <span class="badge badge-secondary theEngine">
        </span>
    </h4>
    <h4>
        Valgte gear:
        <span class="badge badge-secondary theGears">
        </span>
    </h4>
    <h4>
        Valgte gear type:
        <span class="badge badge-secondary theGeartype">
        </span>
    </h4>
    <ul class="list-group">
        <li class="list-group-item list-group-item-success">
            Vi vil nu søge på bilbasen efter biler, der har de valgte input, og finde gennemsnits prisen for de biler
        </li>
    </ul>
</center>








