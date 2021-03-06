<?php


	$graphData = "SELECT * FROM running";
	$query = mysqli_query($con,$graphData);
	while ($rowArray = $query->fetch_array()) {
		$graphArray[] = $rowArray;
	}
	
	for ($i=0; $i<sizeof($graphArray); $i++) {
		$hour = $graphArray[$i]['time'][0] . $graphArray[$i]['time'][1];
		$min = $graphArray[$i]['time'][3] . $graphArray[$i]['time'][4];
		$sec = $graphArray[$i]['time'][6] . $graphArray[$i]['time'][7];
		$min = $min + ($sec/60);
		$hour = $hour + ($min/60);
		$kmPerHour = $graphArray[$i]['kilometer'] / $hour;
		$kmPerHourArray[] = round($kmPerHour,2);
	}
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
                // change value every 3 seconds
                setInterval(randomValue, 3000);
            });
			
			var oldColor;
			var oldId;
			var oldValue;
			var value;
			var arrayLength;
			var array;

            // set random value
            function randomValue(rowId = null) 
			{
				array = <?php echo json_encode($kmPerHourArray); ?>;
				if (rowId == null) {
					value = newValue();
				} else {
					value = rowId;
				}
                arrow.setValue(array[value]);
                axis.setBottomText(array[value] + " km/t");
				
				if (typeof(oldId) != "undefined" && oldId != null && typeof(oldColor) != "undefined" && oldColor != null) {
					$("#" + oldId).css("background-color", oldColor);
				}

				oldColor = $('#' + value).css("background-color");
				$("#" + value).css("background-color", "#ff4d4d");
				oldId = value;
            }
			
			function newValue()
			{
				arrayLength = array.length/2;
                value = Math.floor(Math.random() * arrayLength);
				while (typeof(oldValue) != "undefined" && oldValue != null && oldValue == value) {
					value = Math.floor(Math.random() * arrayLength);				
				}
				oldValue = value;
				return value;
			}
			
			$("tr").click(function() {
				rowId = $(this).attr('id');
				randomValue(rowId);
			});

        </script>







