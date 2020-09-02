<?php


	$graphData = "SELECT * FROM running";
	$query = mysqli_query($con,$graphData);
	while ($rowArray = $query->fetch_array()) {
		$graphArray[] = $rowArray;
	}
	//echo "Start <br>";
	//echo "size of graphArray: " . sizeof($graphArray) . '<br> <br>';
	for ($i=0; $i<sizeof($graphArray); $i++) {
	//	echo "i = " . $i . "<br>";
	//	echo "km: " . $graphArray[$i]['kilometer'] . '<br>';
	//	echo "date: " . $graphArray[$i]['date'] . '<br>';
	//	echo "time: " . $graphArray[$i]['time'] . '<br>';
	//	echo "<br> <br>";
		
		$hour = $graphArray[$i]['time'][0] . $graphArray[$i]['time'][1];
		$min = $graphArray[$i]['time'][3] . $graphArray[$i]['time'][4];
		$sec = $graphArray[$i]['time'][6] . $graphArray[$i]['time'][7];
		
	//	echo "timer: " . $hour . '<br>';
	//	echo "minutter: " . $min . '<br>';
	//	echo "sekunder: " . $sec . '<br>';
		
		$min = $min + ($sec/60);
		$hour = $hour + ($min/60);
		
	//	echo "timer: " . $hour . '<br>';

		$kmPerHour = $graphArray[$i]['kilometer'] / $hour;

	//	echo "km/t: " . $kmPerHour . '<br><br><br>';
		
		$kmPerHourArray[] = round($kmPerHour,2);
	}
	//echo "Done";
?>

        <script>
            var chart;
            var arrow;
            var axis;

            AmCharts.ready(function () {
                // create angular gauge
                chart = new AmCharts.AmAngularGauge();
                chart.addTitle("Speedometer");

                // create axis
                axis = new AmCharts.GaugeAxis();
                axis.startValue = 0;
				axis.axisThickness = 1;
                axis.valueInterval = 1;
                axis.endValue = 15;
                // color bands
                var band1 = new AmCharts.GaugeBand();
                band1.startValue = 0;
                band1.endValue = 5;
                band1.color = "#00CC00";

                var band2 = new AmCharts.GaugeBand();
                band2.startValue = 5;
                band2.endValue = 10;
                band2.color = "#ffac29";

                var band3 = new AmCharts.GaugeBand();
                band3.startValue = 10;
                band3.endValue = 15;
                band3.color = "#ea3838";

                axis.bands = [band1, band2, band3];

                // bottom text
                axis.bottomTextYOffset = -20;
                axis.setBottomText("0 km/h");
                chart.addAxis(axis);

                // gauge arrow
                arrow = new AmCharts.GaugeArrow();
                chart.addArrow(arrow);

                chart.write("chartdiv");
                // change value every 2 seconds
                setInterval(randomValue, 2000);
            });

            // set random value
            function randomValue() {
				var array = <?php echo json_encode($kmPerHourArray); ?>;
				var arrayLength = array.length;
                var value = Math.floor(Math.random() * (arrayLength-1));
                arrow.setValue(array[value]);
                axis.setBottomText(array[value] + " km/t");
            }

        </script>



