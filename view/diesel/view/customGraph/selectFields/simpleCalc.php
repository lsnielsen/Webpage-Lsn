	
<div class="kilometerValues">
	<div class="headerKilometerField">
		Kilometer statistik: 
	</div>
	<div class="stdevKilometerField">
		<div class="stdevkilometerTxt">
			Standard afvigelse for kilometer
		</div>
		<div class="stdevKilometerCross">
			&#10060;
		</div>
	</div>

	<div class="varKilometerField">
		<div class="varKilometerTxt">
			Varians for kilometer
		</div>
		<div class="varKilometerCross">
			&#10060;
		</div>
	</div>

	<div class="medianKilometerField">
		<div class="medianKilometerTxt">
			Median for kilometer
		</div>
		<div class="medianKilometerCross">
			&#10060;
		</div>
	</div>

	<div class="averageKilometerField">
		<div class="averageKilometerTxt">
			Gennemsnit for kilometer
		</div>
		<div class="averageKilometerCross">
			&#10060;
		</div>
	</div>
</div>
<script>

	var stdevKm = false;
	var varKm = false;
	var medianKm = false;
	var averageKm = false;
	
	$(".kmStDev").click(function() {
		$(".stdevKilometerField").show();
		stdevKm = true;
		handlekilometerFields();
	});
	$(".stdevkilometerCross").click(function() {
		$(".stdevKilometerField").hide();
		stdevKm = false;
		handlekilometerFields();
	});
	
	$(".kmVar").click(function() {
		$(".varKilometerField").show();
		varKm = true;
		handlekilometerFields();
	});
	$(".varkilometerCross").click(function() {
		$(".varKilometerField").hide();
		varKm = false;
		handlekilometerFields();
	});
	
	$(".kmMedian").click(function() {
		$(".medianKilometerField").show();
		medianKm = true;
		handlekilometerFields();
	});
	$(".mediankilometerCross").click(function() {
		$(".medianKilometerField").hide();
		medianKm = false;
		handlekilometerFields();
	});
	
	$(".kmAverage").click(function() {
		$(".averageKilometerField").show();
		averageKm = true;
		handlekilometerFields();
	});
	$(".averagekilometerCross").click(function() {
		$(".averageKilometerField").hide();
		averageKm = false;
		handlekilometerFields();
	});
	
	function handlekilometerFields()
	{
		if(stdevKm && varKm && medianKm && averageKm){
			$(".averagekilometerField").css("margin-left", "10px");
			$(".stdevkilometerField").css("margin-left", "330px");
			$(".varkilometerField").css("margin-left", "660px");
			$(".mediankilometerField").css("margin-left", "930px");
		} else if (stdevKm && varKm && medianKm) {
			$(".stdevkilometerField").css("margin-left", "10px");
			$(".varkilometerField").css("margin-left", "350px");
			$(".mediankilometerField").css("margin-left", "660px");
		} else if (stdevKm && medianKm && averageKm) {
			$(".stdevkilometerField").css("margin-left", "0px");
			$(".mediankilometerField").css("margin-left", "350px");
			$(".averagekilometerField").css("margin-left", "660px");
		} else if (medianKm && varKm && averageKm) {
			$(".varkilometerField").css("margin-left", "10px");
			$(".mediankilometerField").css("margin-left", "350px");
			$(".averagekilometerField").css("margin-left", "660px");
		} else if (stdevKm && varKm && averageKm) {
			$(".stdevkilometerField").css("margin-left", "10px");
			$(".mediankilometerField").css("margin-left", "350px");
			$(".averagekilometerField").css("margin-left", "660px");
		} else if (stdevKm && varKm) {
			$(".stdevkilometerField").css("margin-left", "0px");
			$(".varkilometerField").css("margin-left", "330px");
		} else if (stdevKm && medianKm) {
			$(".stdevkilometerField").css("margin-left", "10px");
			$(".mediankilometerField").css("margin-left", "330px");
		} else if (stdevKm && averageKm) {
			$(".stdevkilometerField").css("margin-left", "10px");
			$(".averagekilometerField").css("margin-left", "330px");
		} else if (medianKm && varKm) {
			$(".mediankilometerField").css("margin-left", "10px");
			$(".varkilometerField").css("margin-left", "330px");
		} else if (medianKm && averageKm) {
			$(".mediankilometerField").css("margin-left", "10px");
			$(".averagekilometerField").css("margin-left", "330px");
		} else if (varKm && averageKm) {
			$(".averagekilometerField").css("margin-left", "10px");
			$(".varkilometerField").css("margin-left", "330px");
		} else if (varKm) {
			$(".varkilometerField").css("margin-left", "10px");
		} else if (medianKm) {
			$(".mediankilometerField").css("margin-left", "10px");
		} else if (stdevKm) {
			$(".stdevkilometerField").css("margin-left", "10px");
		} else if (averageKm) {
			$(".averagekilometerField").css("margin-left", "10px");
		} 
		
		if(stdevKm || varKm || medianKm || averageKm){
			kilometer = true;
			$(".headerkilometerField").show();
		} else {
			kilometer = false;
			$(".headerkilometerField").hide();
		}
		alignValues()
	}
	
	
</script>