

<script>

    $(document).ready(function() {
        if (getCookie("lang") == null || getCookie("langPlace") == null) {
            document.cookie = "lang = danish";
            document.cookie = "langPlace = frontpage";
            location.reload();
        }
    });
    $("#dieselButton").click(function() {
        document.cookie = "langPlace = diesel";
    });
    $("#politicButton").click(function() {
        document.cookie = "langPlace = politic";
    });
    $("#usedCarsButton").click(function() {
        document.cookie = "langPlace = usedCars";
    });
    $("#runButton").click(function() {
        document.cookie = "langPlace = run";
    });
    $("#bikeButton").click(function() {
        document.cookie = "langPlace = bike";
    });
    $("#cvButton").click(function() {
        document.cookie = "langPlace = cv";
    });
    $("#priceButton").click(function() {
        document.cookie = "langPlace = priceCalculator";
    });

    $("#danish").click(function() {
        document.cookie = "lang = danish";
        location.reload();
        $("#danish").css("width", "20px");
        $("#danish").css("height", "20px");
    });
    $("#english").click(function() {
        document.cookie = "lang = english";
        location.reload();
        $("#english").css("width", "20px");
        $("#english").css("height", "20px");
    });


    function getCookie(name) {
        const dc = document.cookie;
        const prefix = name + "=";
        let begin = dc.indexOf("; " + prefix);
        if (begin == -1) {
            begin = dc.indexOf(prefix);
            if (begin != 0) return null;
        }
        else
        {
            begin += 2;
            var end = document.cookie.indexOf(";", begin);
            if (end == -1) {
                end = dc.length;
            }
        }
        // because unescape has been deprecated, replaced with decodeURI
        //return unescape(dc.substring(begin + prefix.length, end));
        return decodeURI(dc.substring(begin + prefix.length, end));
    }


</script>

