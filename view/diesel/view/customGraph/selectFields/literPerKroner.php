
<div>
	<div class="headerliterPerKronerField">
		Liter per kroner statistik: 
	</div>
	<div class="stdevLiterPerKronerField">
		<div class="stdevliterPerKronerTxt">
			Standard afvigelse for liter per kroner
		</div>
		<div class="stdevliterPerKronerCross">
			&#10060;
		</div>
	</div>

	<div class="varLiterPerKronerField">
		<div class="varliterPerKronerTxt">
			Varians for liter per kroner
		</div>
		<div class="varliterPerKronerCross">
			&#10060;
		</div>
	</div>

	<div class="medianLiterPerKronerField">
		<div class="medianliterPerKronerTxt">
			Median for liter per kroner
		</div>
		<div class="medianliterPerKronerCross">
			&#10060;
		</div>
	</div>

	<div class="averageLiterPerKronerField">
		<div class="averageliterPerKronerTxt">
			Gennemsnit for liter per kroner
		</div>
		<div class="averageliterPerKronerCross">
			&#10060;
		</div>
	</div>
	

</div>

<script>

	var stdevLPerKr = false;
	var varLPerKr = false;
	var medianLPerKr = false;
	var averageLPerKr = false;
	
	$(".literPerKrStDev").click(function() {
		$(".stdevLiterPerKronerField").show();
		stdevLPerKr = true;
		handleLiterPerKronerFields();
	});
	$(".stdevliterPerKronerCross").click(function() {
		$(".stdevLiterPerKronerField").hide();
		stdevLPerKr = false;
		handleLiterPerKronerFields();
	});
	
	$(".literPerKrVar").click(function() {
		$(".varLiterPerKronerField").show();
		varLPerKr = true;
		handleLiterPerKronerFields();
	});
	$(".varliterPerKronerCross").click(function() {
		$(".varLiterPerKronerField").hide();
		varLPerKr = false;
		handleLiterPerKronerFields();
	});
	
	$(".literPerKrMedian").click(function() {
		$(".medianLiterPerKronerField").show();
		medianLPerKr = true;
		handleLiterPerKronerFields();
	});
	$(".medianliterPerKronerCross").click(function() {
		$(".medianLiterPerKronerField").hide();
		medianLPerKr = false;
		handleLiterPerKronerFields();
	});
	
	$(".literPerKrAverage").click(function() {
		$(".averageLiterPerKronerField").show();
		medianLPerKr = true;
		handleLiterPerKronerFields();
	});
	$(".averageliterPerKronerCross").click(function() {
		$(".averageLiterPerKronerField").hide();
		averageLPerKr = false;
		handleLiterPerKronerFields();
	});
	
	function handleLiterPerKronerFields()
	{
		if(stdevLPerKr && varLPerKr && medianLPerKr && averageLPerKr){
			$(".stdevLiterPerKronerField").css("margin-left", "0px");
			$(".varLiterPerKronerField").css("margin-left", "350px");
			$(".medianLiterPerKronerField").css("margin-left", "650px");
		} else if (stdevLPerKr && varLPerKr) {
			$(".stdevLiterPerKronerField").css("margin-left", "0px");
			$(".varLiterPerKronerField").css("margin-left", "350px");
		} else if (stdevLPerKr && medianLPerKr) {
			$(".stdevLiterPerKronerField").css("margin-left", "0px");
			$(".medianLiterPerKronerField").css("margin-left", "350px");
		} else if (medianLPerKr && varLPerKr) {
			$(".varLiterPerKronerField").css("margin-left", "0px");
			$(".medianLiterPerKronerField").css("margin-left", "350px");
		} else if (varLPerKr) {
			$(".varLiterPerKronerField").css("margin-left", "0px");
		} else if (medianLPerKr) {
			$(".medianLiterPerKronerField").css("margin-left", "0px");
		} else if (stdevLPerKr) {
			$(".stdevLiterPerKronerField").css("margin-left", "0px");
		} 
		
		if(stdevLPerKr || varLPerKr || medianLPerKr || averageLPerKr){
			$(".headerliterPerKronerField").show();
		} else {
			$(".headerliterPerKronerField").hide();
		}
	}
	
	
</script>