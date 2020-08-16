	
<div class="kronerPerKilometerValues">
	<div class="headerKronerPerKilometerField">
		Kroner per kilometer statistik: 
	</div>
	<div class="stdevKronerPerKilometerField">
		<div class="stdevKronerPerKilometerTxt">
			Standard afvigelse for kroner per kilometer
		</div>
		<div class="stdevKronerPerKilometerCross">
			&#10060;
		</div>
	</div>

	<div class="varKronerPerKilometerField">
		<div class="varKronerPerKilometerTxt">
			Varians for kroner per kilometer
		</div>
		<div class="varKronerPerKilometerCross">
			&#10060;
		</div>
	</div>

	<div class="medianKronerPerKilometerField">
		<div class="medianKronerPerKilometerTxt">
			Median for kroner per kilometer
		</div>
		<div class="medianKronerPerKilometerCross">
			&#10060;
		</div>
	</div>

	<div class="averageKronerPerKilometerField">
		<div class="averageKronerPerKilometerTxt">
			Gennemsnit for kroner per kilometer
		</div>
		<div class="averageKronerPerKilometerCross">
			&#10060;
		</div>
	</div>
</div>
<script>

	var stdevKrPerKm = false;
	var varKrPerKm = false;
	var medianKrPerKm = false;
	var averageKrPerKm = false;
	
	$(".kronerPerKmStDev").click(function() {
		$(".stdevKronerPerKilometerField").show();
		stdevKrPerKm = true;
		handleKronerPerKilometerFields();
	});
	$(".stdevKronerPerKilometerCross").click(function() {
		$(".stdevKronerPerKilometerField").hide();
		stdevKrPerKm = false;
		handleKronerPerKilometerFields();
	});
	
	$(".kronerPerKmVar").click(function() {
		$(".varKronerPerKilometerField").show();
		varKrPerKm = true;
		handleKronerPerKilometerFields();
	});
	$(".varKronerPerKilometerCross").click(function() {
		$(".varKronerPerKilometerField").hide();
		varKrPerKm = false;
		handleKronerPerKilometerFields();
	});
	
	$(".kronerPerKmMedian").click(function() {
		$(".medianKronerPerKilometerField").show();
		medianKrPerKm = true;
		handleKronerPerKilometerFields();
	});
	$(".medianKronerPerKilometerCross").click(function() {
		$(".medianKronerPerKilometerField").hide();
		medianKrPerKm = false;
		handleKronerPerKilometerFields();
	});
	
	$(".kronerPerKmAverage").click(function() {
		$(".averageKronerPerKilometerField").show();
		averageKrPerKm = true;
		handleKronerPerKilometerFields();
	});
	$(".averageKronerPerKilometerCross").click(function() {
		$(".averageKronerPerKilometerField").hide();
		averageKrPerKm = false;
		handleKronerPerKilometerFields();
	});
	
	function handleKronerPerKilometerFields()
	{
		if(stdevKrPerKm && varKrPerKm && medianKrPerKm && averageKrPerKm){
			$(".averageKronerPerKilometerField").css("margin-left", "10px");
			$(".stdevKronerPerKilometerField").css("margin-left", "330px");
			$(".varKronerPerKilometerField").css("margin-left", "660px");
			$(".medianKronerPerKilometerField").css("margin-left", "930px");
		} else if (stdevKrPerKm && varKrPerKm && medianKrPerKm) {
			$(".stdevKronerPerKilometerField").css("margin-left", "10px");
			$(".varKronerPerKilometerField").css("margin-left", "350px");
			$(".medianKronerPerKilometerField").css("margin-left", "660px");
		} else if (stdevKrPerKm && medianKrPerKm && averageKrPerKm) {
			$(".stdevKronerPerKilometerField").css("margin-left", "0px");
			$(".medianKronerPerKilometerField").css("margin-left", "350px");
			$(".averageKronerPerKilometerField").css("margin-left", "660px");
		} else if (medianKrPerKm && varKrPerKm && averageKrPerKm) {
			$(".varKronerPerKilometerField").css("margin-left", "10px");
			$(".medianKronerPerKilometerField").css("margin-left", "350px");
			$(".averageKronerPerKilometerField").css("margin-left", "660px");
		} else if (stdevKrPerKm && varKrPerKm && averageKrPerKm) {
			$(".stdevKronerPerKilometerField").css("margin-left", "10px");
			$(".medianKronerPerKilometerField").css("margin-left", "350px");
			$(".averageKronerPerKilometerField").css("margin-left", "660px");
		} else if (stdevKrPerKm && varKrPerKm) {
			$(".stdevKronerPerKilometerField").css("margin-left", "0px");
			$(".varKronerPerKilometerField").css("margin-left", "330px");
		} else if (stdevKrPerKm && medianKrPerKm) {
			$(".stdevKronerPerKilometerField").css("margin-left", "10px");
			$(".medianKronerPerKilometerField").css("margin-left", "330px");
		} else if (stdevKrPerKm && averageKrPerKm) {
			$(".stdevKronerPerKilometerField").css("margin-left", "10px");
			$(".averageKronerPerKilometerField").css("margin-left", "330px");
		} else if (medianKrPerKm && varKrPerKm) {
			$(".medianKronerPerKilometerField").css("margin-left", "10px");
			$(".varKronerPerKilometerField").css("margin-left", "330px");
		} else if (medianKrPerKm && averageKrPerKm) {
			$(".medianKronerPerKilometerField").css("margin-left", "10px");
			$(".averageKronerPerKilometerField").css("margin-left", "330px");
		} else if (varKrPerKm && averageKrPerKm) {
			$(".averageKronerPerKilometerField").css("margin-left", "10px");
			$(".varKronerPerKilometerField").css("margin-left", "330px");
		} else if (varKrPerKm) {
			$(".varKronerPerKilometerField").css("margin-left", "10px");
		} else if (medianKrPerKm) {
			$(".medianKronerPerKilometerField").css("margin-left", "10px");
		} else if (stdevKrPerKm) {
			$(".stdevKronerPerKilometerField").css("margin-left", "10px");
		} else if (averageKrPerKm) {
			$(".averageKronerPerKilometerField").css("margin-left", "10px");
		} 
		
		if(stdevKrPerKm || varKrPerKm || medianKrPerKm || averageKrPerKm){
			krPerKm = true;
			$(".headerKronerPerKilometerField").show();
		} else {
			krPerKm = false;
			$(".headerKronerPerKilometerField").hide();
		}
		alignValues()
	}
	
	
</script>