<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php echo "Hello"; ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="../amcharts/amcharts.js" type="text/javascript"></script>
<script src="../amcharts/gauge.js" type="text/javascript"></script>
        <script>
			console.log("lskdfjkfj");
			var chart;
			var arrow;
			var axisKM;
			var axisMiles;
			
			AmCharts.ready(function () {
				console.log("ldfjsdflkj");
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




	$(".deleteRow").click(function() {
		var row = $(this).closest('tr');
		var txt = row.text();
		var id = row.attr('id');
		var dato;
		var km;
		var liter;
		var kroner;
		var counter = 1;
		row.find('td').each(function() {
			var stuff = $(this).text();
			if (counter == 1) {
				dato = "Dato: " + stuff;
				counter++;
			} else if (counter == 2) {
				km = "Km: " + stuff;
				counter++;
			} else if (counter == 3) {
				kroner = "Kroner: " + stuff;
				counter++;
			} else if (counter == 4) {
				liter = "Liter: " + stuff;
				counter = 0;
			}
		});   
		
		txt = dato + km + kroner + liter;

		$(".dateToDelete").text(dato);
		$(".kmToDelete").text(km);
		$(".krToDelete").text(kroner);
		$(".literToDelete").text(liter);
		$("#hiddenField").val(id);
		$('.deleteDieselRow').show();
		$('.deleteDieselRowYes').click(function(){
			$("#deleteSpecificRow").submit();
		});
	});
    $('.deleteDieselRowPopupCloseButton').click(function(){
        $('.deleteDieselRow').hide();
    });
    $('.deleteDieselRowNo').click(function(){
        $('.deleteDieselRow').hide();
    });
    
	$('.wrongDieselInputButton').click(function(){
        $('.wrongDieselInput').hide();
    });
    $('.wrongDieselInputPopupCloseButton').click(function(){
        $('.wrongDieselInput').hide();
    });
	
	if($(".notDisplayingWrongInput").length){
		$(".notDisplayingWrongInput").css("display", "block");
	}
        </script>

