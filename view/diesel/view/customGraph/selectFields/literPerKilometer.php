	<div class="headerliterPerKilometerField">
		Liter per Kilometer statistik: 
	</div>
	<div class="stdevLiterPerKilometerField">
		<div class="stdevliterPerKilometerTxt">
			Standard afvigelse for liter per Kilometer
		</div>
		<div class="stdevliterPerKilometerCross">
			&#10060;
		</div>
	</div>

	<div class="varLiterPerKilometerField">
		<div class="varliterPerKilometerTxt">
			Varians for liter per Kilometer
		</div>
		<div class="varliterPerKilometerCross">
			&#10060;
		</div>
	</div>

	<div class="medianLiterPerKilometerField">
		<div class="medianliterPerKilometerTxt">
			Median for liter per Kilometer
		</div>
		<div class="medianliterPerKilometerCross">
			&#10060;
		</div>
	</div>

<script>

	var stdevLPerKm = false;
	var varLPerKm = false;
	var medianLPerKm = false;
	
	$(".literPerKmStDev").click(function() {
		console.log("lafjkds");
		$(".stdevLiterPerKilometerField").show();
		stdevLPerKm = true;
		handleLiterPerKilometerFields();
	});
	$(".stdevliterPerKilometerCross").click(function() {
		$(".stdevLiterPerKilometerField").hide();
		stdevLPerKm = false;
		handleLiterPerKilometerFields();
	});
	
	$(".literPerKmVar").click(function() {
		$(".varLiterPerKilometerField").show();
		varLPerKm = true;
		handleLiterPerKilometerFields();
	});
	$(".varliterPerKilometerCross").click(function() {
		$(".varLiterPerKilometerField").hide();
		varLPerKm = false;
		handleLiterPerKilometerFields();
	});
	
	$(".literPerKmMedian").click(function() {
		$(".medianLiterPerKilometerField").show();
		medianLPerKm = true;
		handleLiterPerKilometerFields();
	});
	$(".medianliterPerKilometerCross").click(function() {
		$(".medianLiterPerKilometerField").hide();
		medianLPerKm = false;
		handleLiterPerKilometerFields();
	});
	
	function handleLiterPerKilometerFields()
	{
		if(stdevLPerKm && varLPerKm && medianLPerKm){
			$(".stdevLiterPerKilometerField").css("margin-left", "0px");
			$(".varLiterPerKilometerField").css("margin-left", "350px");
			$(".medianLiterPerKilometerField").css("margin-left", "650px");
		} else if (stdevLPerKm && varLPerKm) {
			$(".stdevLiterPerKilometerField").css("margin-left", "0px");
			$(".varLiterPerKilometerField").css("margin-left", "350px");
		} else if (stdevLPerKm && medianLPerKm) {
			$(".stdevLiterPerKilometerField").css("margin-left", "0px");
			$(".medianLiterPerKilometerField").css("margin-left", "350px");
		} else if (medianLPerKm && varLPerKm) {
			$(".varLiterPerKilometerField").css("margin-left", "0px");
			$(".medianLiterPerKilometerField").css("margin-left", "350px");
		} else if (varLPerKm) {
			$(".varLiterPerKilometerField").css("margin-left", "0px");
		} else if (medianLPerKm) {
			$(".medianLiterPerKilometerField").css("margin-left", "0px");
		} else if (stdevLPerKm) {
			$(".stdevLiterPerKilometerField").css("margin-left", "0px");
		} 
		
		if(stdevLPerKm || varLPerKm || medianLPerKm){
			$(".headerliterPerKilometerField").show();
		} else {
			$(".headerliterPerKilometerField").hide();
		}
	}
	
	
</script>