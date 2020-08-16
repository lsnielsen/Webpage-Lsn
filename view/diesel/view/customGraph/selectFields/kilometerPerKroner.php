	<div class="headerKilometerPerKronerField">
		Kroner per Kilometer statistik: 
	</div>
	<div class="stdevKilometerPerKronerField">
		<div class="stdevKilometerPerKronerTxt">
			Standard afvigelse for Kroner per Kilometer
		</div>
		<div class="stdevKilometerPerKronerCross">
			&#10060;
		</div>
	</div>

	<div class="varKilometerPerKronerField">
		<div class="varKilometerPerKronerTxt">
			Varians for Kroner per Kilometer
		</div>
		<div class="varKilometerPerKronerCross">
			&#10060;
		</div>
	</div>

	<div class="medianKilometerPerKronerField">
		<div class="medianKilometerPerKronerTxt">
			Median for Kroner per Kilometer
		</div>
		<div class="medianKilometerPerKronerCross">
			&#10060;
		</div>
	</div>

	<div class="averageKilometerPerKronerField">
		<div class="averageKilometerPerKronerTxt">
			Gennemsnit for Kroner per Kilometer
		</div>
		<div class="averageKilometerPerKronerCross">
			&#10060;
		</div>
	</div>

<script>

	var stdevKmPerKr = false;
	var varKmPerKr = false;
	var medianKmPerKr = false;
	var averageKmPerKr = false;
	
	$(".kmPerKronerStDev").click(function() {
		$(".stdevKilometerPerKronerField").show();
		stdevKmPerKr = true;
		handleKilometerPerKronerFields();
	});
	$(".stdevKilometerPerKronerCross").click(function() {
		$(".stdevKilometerPerKronerField").hide();
		stdevKmPerKr = false;
		handleKilometerPerKronerFields();
	});
	
	$(".kmPerKronerVar").click(function() {
		$(".varKilometerPerKronerField").show();
		varKmPerKr = true;
		handleKilometerPerKronerFields();
	});
	$(".varKilometerPerKronerCross").click(function() {
		$(".varKilometerPerKronerField").hide();
		varKmPerKr = false;
		handleKilometerPerKronerFields();
	});
	
	$(".kmPerKronerMedian").click(function() {
		$(".medianKilometerPerKronerField").show();
		medianKmPerKr = true;
		handleKilometerPerKronerFields();
	});
	$(".medianKilometerPerKronerCross").click(function() {
		$(".medianKilometerPerKronerField").hide();
		medianKmPerKr = false;
		handleKilometerPerKronerFields();
	});
	
	$(".kmPerKronerAverage").click(function() {
		$(".averageKilometerPerKronerField").show();
		averageKmPerKr = true;
		handleKilometerPerKronerFields();
	});
	$(".averageKilometerPerKronerCross").click(function() {
		$(".averageKilometerPerKronerField").hide();
		averageKmPerKr = false;
		handleKilometerPerKronerFields();
	});
	
	function handleKilometerPerKronerFields()
	{
		if(stdevKmPerKr && varKmPerKr && medianKmPerKr && averageKmPerKr){
			$(".averageKilometerPerKronerField").css("margin-left", "10px");
			$(".stdevKilometerPerKronerField").css("margin-left", "330px");
			$(".varKilometerPerKronerField").css("margin-left", "660px");
			$(".medianKilometerPerKronerField").css("margin-left", "930px");
		} else if (stdevKmPerKr && varKmPerKr && medianKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "10px");
			$(".varKilometerPerKronerField").css("margin-left", "350px");
			$(".medianKilometerPerKronerField").css("margin-left", "660px");
		} else if (stdevKmPerKr && medianKmPerKr && averageKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "0px");
			$(".medianKilometerPerKronerField").css("margin-left", "350px");
			$(".averageKilometerPerKronerField").css("margin-left", "660px");
		} else if (medianKmPerKr && varKmPerKr && averageKmPerKr) {
			$(".varKilometerPerKronerField").css("margin-left", "10px");
			$(".medianKilometerPerKronerField").css("margin-left", "350px");
			$(".averageKilometerPerKronerField").css("margin-left", "660px");
		} else if (stdevKmPerKr && varKmPerKr && averageKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "10px");
			$(".medianKilometerPerKronerField").css("margin-left", "350px");
			$(".averageKilometerPerKronerField").css("margin-left", "660px");
		} else if (stdevKmPerKr && varKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "0px");
			$(".varKilometerPerKronerField").css("margin-left", "330px");
		} else if (stdevKmPerKr && medianKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "10px");
			$(".medianKilometerPerKronerField").css("margin-left", "330px");
		} else if (stdevKmPerKr && averageKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "10px");
			$(".averageKilometerPerKronerField").css("margin-left", "330px");
		} else if (medianKmPerKr && varKmPerKr) {
			$(".medianKilometerPerKronerField").css("margin-left", "10px");
			$(".varKilometerPerKronerField").css("margin-left", "330px");
		} else if (medianKmPerKr && averageKmPerKr) {
			$(".medianKilometerPerKronerField").css("margin-left", "10px");
			$(".averageKilometerPerKronerField").css("margin-left", "330px");
		} else if (varKmPerKr && averageKmPerKr) {
			$(".averageKilometerPerKronerField").css("margin-left", "10px");
			$(".varKilometerPerKronerField").css("margin-left", "330px");
		} else if (varKmPerKr) {
			$(".varKilometerPerKronerField").css("margin-left", "10px");
		} else if (medianKmPerKr) {
			$(".medianKilometerPerKronerField").css("margin-left", "10px");
		} else if (stdevKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "10px");
		} else if (averageKmPerKr) {
			$(".averageKilometerPerKronerField").css("margin-left", "10px");
		} 
		
		if(stdevKmPerKr || varKmPerKr || medianKmPerKr){
			$(".headerKilometerPerKronerField").show();
		} else {
			$(".headerKilometerPerKronerField").hide();
		}
	}
	
	
</script>