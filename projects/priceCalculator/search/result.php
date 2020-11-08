

<script>

    function calculateTheResult()
    {
        let pricePerKilometer = 0;
        let starterPrice;
        let drivenKilometer;
        let finalResult;
        for (let i = 0; i < kmArray.length; i++) {
            let tableCounter = i + 1;
            let temp = (startPriceArray[i] - priceArray[i]) / kmArray[i];
            pricePerKilometerArray.push(temp);
            $(".dataTable").append("<tr>" +
                "<td>" + tableCounter + "</td>" +
                "<td><a href=\"" + secondLinkArray[i] + "\" target='_blank'> Virker ikke <a></td>" +
                "<td>" + yearArray[i] + "</td>" +
                "<td>" + startPriceArray[i] + "</td>" +
                "<td>" + priceArray[i] + "</td>" +
                "<td>" + kmArray[i] + "</td>" +
                "<td>" + temp.toFixed(2) + "</td>" +
                "</tr>");
            pricePerKilometer = pricePerKilometer + temp;
        }
        pricePerKilometer = (pricePerKilometer / kmArray.length).toFixed(2);
        $(".theAveragePricePerKm").text(pricePerKilometer);
        starterPrice = $(".theStartPrice").text();
        drivenKilometer = $(".theKm").text();
        finalResult = (starterPrice - (drivenKilometer * pricePerKilometer)).toFixed(2);
        $(".theResultPrice").text(finalResult);

        let lossPerKm = linearRegression(kmArray, pricePerKilometerArray, drivenKilometer);

        //console.log("pris/km: " + pricePerKilometer);
        //console.log("start pris: " + starterPrice);
        //console.log("Antal km: " + drivenKilometer);
        //console.log("Resultat: " + finalResult);

        $(".theResults").show();
    }


    function linearRegression(x,y, km){
        console.log("x: " + x);
        console.log("y: " + y);

        let n = y.length;
        let sum_x = 0;
        let sum_y = 0;
        let sum_xy = 0;
        let sum_xx = 0;
        let sum_yy = 0;

        for (let i = 0; i < n; i++) {
            let x_i = x[i].replace(".", "");
            sum_x += x_i;
            sum_y += y[i];
            sum_xy += (x_i*y[i]);
            sum_xx += (x_i*x_i);
            sum_yy += (y[i]*y[i]);
            console.log(" ");
        }

        let slope = (n * sum_xy - sum_x * sum_y) / (n*sum_xx - sum_x * sum_x);
        let intercept = (sum_y - slope * sum_x)/n;
        //let r2 = Math.pow((n*sum_xy - sum_x*sum_y)/Math.sqrt((n*sum_xx-sum_x*sum_x)*(n*sum_yy-sum_y*sum_y)),2);

        console.log("Funktion slope: \n" + slope);
        console.log("Funktion intercept: \n" + intercept);
        console.log("Funktion: \n" + "y=" + slope + "x + " + intercept);
        return 0;
    }


</script>