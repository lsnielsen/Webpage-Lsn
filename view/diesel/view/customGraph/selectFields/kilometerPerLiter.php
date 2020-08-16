	<div class="headerKilometerPerLiterField">
		Liter per Kilometer statistik: 
	</div>
	<div class="stdevKilometerPerLiterField">
		<div class="stdevKilometerPerLiterTxt">
			Standard afvigelse for Liter per Kilometer
		</div>
		<div class="stdevKilometerPerLiterCross">
			&#10060;
		</div>
	</div>

	<div class="varKilometerPerLiterField">
		<div class="varKilometerPerLiterTxt">
			Varians for Liter per Kilometer
		</div>
		<div class="varKilometerPerLiterCross">
			&#10060;
		</div>
	</div>

	<div class="medianKilometerPerLiterField">
		<div class="medianKilometerPerLiterTxt">
			Median for Liter per Kilometer
		</div>
		<div class="medianKilometerPerLiterCross">
			&#10060;
		</div>
	</div>

	<div class="averageKilometerPerLiterField">
		<div class="averageKilometerPerLiterTxt">
			Gennemsnit for Liter per Kilometer
		</div>
		<div class="averageKilometerPerLiterCross">
			&#10060;
		</div>
	</div>

<script>

	var stdevKmPerL = false;
	var varKmPerL = false;
	var medianKmPerL = false;
	var averageKmPerL = false;
	
	$(".kmPerLiterStDev").click(function() {
		$(".stdevKilometerPerLiterField").show();
		stdevKmPerL = true;
		handleKilometerPerLiterFields();
	});
	$(".stdevKilometerPerLiterCross").click(function() {
		$(".stdevKilometerPerLiterField").hide();
		stdevKmPerL = false;
		handleKilometerPerLiterFields();
	});
	
	$(".kmPerLiterVar").click(function() {
		$(".varKilometerPerLiterField").show();
		varKmPerL = true;
		handleKilometerPerLiterFields();
	});
	$(".varKilometerPerLiterCross").click(function() {
		$(".varKilometerPerLiterField").hide();
		varKmPerL = false;
		handleKilometerPerLiterFields();
	});
	
	$(".kmPerLiterMedian").click(function() {
		$(".medianKilometerPerLiterField").show();
		medianKmPerL = true;
		handleKilometerPerLiterFields();
	});
	$(".medianKilometerPerLiterCross").click(function() {
		$(".medianKilometerPerLiterField").hide();
		medianKmPerL = false;
		handleKilometerPerLiterFields();
	});
	
	$(".kmPerLiterAverage").click(function() {
		$(".averageKilometerPerLiterField").show();
		averageKmPerL = true;
		handleKilometerPerLiterFields();
	});
	$(".averageKilometerPerLiterCross").click(function() {
		$(".averageKilometerPerLiterField").hide();
		averageKmPerL = false;
		handleKilometerPerLiterFields();
	});
	
	function handleKilometerPerLiterFields()
	{
		if(stdevKmPerL && varKmPerL && medianKmPerL && averageKmPerL){
			$(".averageKilometerPerLiterField").css("margin-left", "10px");
			$(".stdevKilometerPerLiterField").css("margin-left", "330px");
			$(".varKilometerPerLiterField").css("margin-left", "660px");
			$(".medianKilometerPerLiterField").css("margin-left", "930px");
		} else if (stdevKmPerL && varKmPerL && medianKmPerL) {
			$(".stdevKilometerPerLiterField").css("margin-left", "10px");
			$(".varKilometerPerLiterField").css("margin-left", "350px");
			$(".medianKilometerPerLiterField").css("margin-left", "660px");
		} else if (stdevKmPerL && medianKmPerL && averageKmPerL) {
			$(".stdevKilometerPerLiterField").css("margin-left", "0px");
			$(".medianKilometerPerLiterField").css("margin-left", "350px");
			$(".averageKilometerPerLiterField").css("margin-left", "660px");
		} else if (medianKmPerL && varKmPerL && averageKmPerL) {
			$(".varKilometerPerLiterField").css("margin-left", "10px");
			$(".medianKilometerPerLiterField").css("margin-left", "350px");
			$(".averageKilometerPerLiterField").css("margin-left", "660px");
		} else if (stdevKmPerL && varKmPerL && averageKmPerL) {
			$(".stdevKilometerPerLiterField").css("margin-left", "10px");
			$(".medianKilometerPerLiterField").css("margin-left", "350px");
			$(".averageKilometerPerLiterField").css("margin-left", "660px");
		} else if (stdevKmPerL && varKmPerL) {
			$(".stdevKilometerPerLiterField").css("margin-left", "0px");
			$(".varKilometerPerLiterField").css("margin-left", "330px");
		} else if (stdevKmPerL && medianKmPerL) {
			$(".stdevKilometerPerLiterField").css("margin-left", "10px");
			$(".medianKilometerPerLiterField").css("margin-left", "330px");
		} else if (stdevKmPerL && averageKmPerL) {
			$(".stdevKilometerPerLiterField").css("margin-left", "10px");
			$(".averageKilometerPerLiterField").css("margin-left", "330px");
		} else if (medianKmPerL && varKmPerL) {
			$(".medianKilometerPerLiterField").css("margin-left", "10px");
			$(".varKilometerPerLiterField").css("margin-left", "330px");
		} else if (medianKmPerL && averageKmPerL) {
			$(".medianKilometerPerLiterField").css("margin-left", "10px");
			$(".averageKilometerPerLiterField").css("margin-left", "330px");
		} else if (varKmPerL && averageKmPerL) {
			$(".averageKilometerPerLiterField").css("margin-left", "10px");
			$(".varKilometerPerLiterField").css("margin-left", "330px");
		} else if (varKmPerL) {
			$(".varKilometerPerLiterField").css("margin-left", "10px");
		} else if (medianKmPerL) {
			$(".medianKilometerPerLiterField").css("margin-left", "10px");
		} else if (stdevKmPerL) {
			$(".stdevKilometerPerLiterField").css("margin-left", "10px");
		} else if (averageKmPerL) {
			$(".averageKilometerPerLiterField").css("margin-left", "10px");
		} 
		
		if(stdevKmPerL || varKmPerL || medianKmPerL){
			$(".headerKilometerPerLiterField").show();
		} else {
			$(".headerKilometerPerLiterField").hide();
		}
	}
	
	
</script>