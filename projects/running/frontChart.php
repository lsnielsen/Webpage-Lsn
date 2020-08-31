<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>amCharts examples</title>
        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="../amcharts/amcharts.js" type="text/javascript"></script>
        <script src="../amcharts/gauge.js" type="text/javascript"></script>

        <script>
			var chart;
			var arrow;
			var axisKM;
			var axisMiles;

			AmCharts.ready(function () {

				// create angular gauge
				chart = new AmCharts.AmAngularGauge();
				chart.radius = "45%";

				// kilometers axis
				axisKM = new AmCharts.GaugeAxis();
				axisKM.startValue = 0;
				axisKM.endValue = 240;
				axisKM.radius = "100%";
				axisKM.inside = false;
				axisKM.gridInside = false;
				axisKM.axisColor = "#94dca0";
				axisKM.tickColor = "#94dca0";
				axisKM.axisThickness = 3;
				axisKM.valueInterval = 20;
				chart.addAxis(axisKM);

				// miles axis
				axisMiles = new AmCharts.GaugeAxis();
				axisMiles.startValue = 0;
				axisMiles.endValue = 160;
				axisMiles.radius = "80%";
				axisMiles.axisColor = "#bebd61";
				axisMiles.tickColor = "#bebd61";
				axisMiles.axisThickness = 3;
				axisMiles.valueInterval = 20;
				chart.addAxis(axisMiles);

				// arrow
				arrow = new AmCharts.GaugeArrow();
				arrow.radius = "85%";
				arrow.color = "#8ec487";
				arrow.innerRadius = 50;
				arrow.nailRadius = 0;
				chart.addArrow(arrow);

				chart.write("chartdiv");
				// update value every 2 seconds
				setInterval(randomValue, 2000);
			});

			// set random value
			function randomValue() {
				var value = Math.round(Math.random() * 240);
				arrow.setValue(value);
			}


        </script>
    </head>

    <body>
    </body>

</html>