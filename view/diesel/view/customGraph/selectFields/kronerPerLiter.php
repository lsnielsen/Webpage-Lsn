
<div class="kronerPerLiterValues">
	<div class="headerkronerPerLiterField">
		Kroner per liter statistik: 
	</div>
	<div class="stdevkronerPerLiterField">
		<div class="stdevkronerPerLiterTxt">
			Standard afvigelse for kroner per liter
		</div>
		<div class="stdevkronerPerLiterCross">
			&#10060;
		</div>
	</div>

	<div class="varkronerPerLiterField">
		<div class="varkronerPerLiterTxt">
			Varians for kroner per liter
		</div>
		<div class="varkronerPerLiterCross">
			&#10060;
		</div>
	</div>

	<div class="mediankronerPerLiterField">
		<div class="mediankronerPerLiterTxt">
			Median for kroner per liter
		</div>
		<div class="mediankronerPerLiterCross">
			&#10060;
		</div>
	</div>

	<div class="averagekronerPerLiterField">
		<div class="averagekronerPerLiterTxt">
			Gennemsnit for kroner per liter
		</div>
		<div class="averagekronerPerLiterCross">
			&#10060;
		</div>
	</div>
</div>
<script>

	var stdevKrPerL = false;
	var varKrPerL = false;
	var medianKrPerL = false;
	var averageKrPerL = false;
	
	$(".kronerPerLiterStDev").click(function() {
		$(".stdevkronerPerLiterField").show();
		stdevKrPerL = true;
		handlekronerPerLiterFields();
	});
	$(".stdevkronerPerLiterCross").click(function() {
		$(".stdevkronerPerLiterField").hide();
		stdevKrPerL = false;
		handlekronerPerLiterFields();
	});
	
	$(".kronerPerLiterVar").click(function() {
		$(".varkronerPerLiterField").show();
		varKrPerL = true;
		handlekronerPerLiterFields();
	});
	$(".varkronerPerLiterCross").click(function() {
		$(".varkronerPerLiterField").hide();
		varKrPerL = false;
		handlekronerPerLiterFields();
	});
	
	$(".kronerPerLiterMedian").click(function() {
		$(".mediankronerPerLiterField").show();
		medianKrPerL = true;
		handlekronerPerLiterFields();
	});
	$(".mediankronerPerLiterCross").click(function() {
		$(".mediankronerPerLiterField").hide();
		medianKrPerL = false;
		handlekronerPerLiterFields();
	});
	
	$(".kronerPerLiterAverage").click(function() {
		$(".averagekronerPerLiterField").show();
		averageKrPerL = true;
		handlekronerPerLiterFields();
	});
	$(".averagekronerPerLiterCross").click(function() {
		$(".averagekronerPerLiterField").hide();
		averageKrPerL = false;
		handlekronerPerLiterFields();
	});
	
	function handlekronerPerLiterFields()
	{
		if(stdevKrPerL && varKrPerL && medianKrPerL && averageKrPerL){
			$(".averagekronerPerLiterField").css("margin-left", "10px");
			$(".stdevkronerPerLiterField").css("margin-left", "330px");
			$(".varkronerPerLiterField").css("margin-left", "660px");
			$(".mediankronerPerLiterField").css("margin-left", "930px");
		} else if (stdevKrPerL && varKrPerL && medianKrPerL) {
			$(".stdevkronerPerLiterField").css("margin-left", "10px");
			$(".varkronerPerLiterField").css("margin-left", "350px");
			$(".mediankronerPerLiterField").css("margin-left", "660px");
		} else if (stdevKrPerL && medianKrPerL && averageKrPerL) {
			$(".stdevkronerPerLiterField").css("margin-left", "0px");
			$(".mediankronerPerLiterField").css("margin-left", "350px");
			$(".averagekronerPerLiterField").css("margin-left", "660px");
		} else if (medianKrPerL && varKrPerL && averageKrPerL) {
			$(".varkronerPerLiterField").css("margin-left", "10px");
			$(".mediankronerPerLiterField").css("margin-left", "350px");
			$(".averagekronerPerLiterField").css("margin-left", "660px");
		} else if (stdevKrPerL && varKrPerL && averageKrPerL) {
			$(".stdevkronerPerLiterField").css("margin-left", "10px");
			$(".mediankronerPerLiterField").css("margin-left", "350px");
			$(".averagekronerPerLiterField").css("margin-left", "660px");
		} else if (stdevKrPerL && varKrPerL) {
			$(".stdevkronerPerLiterField").css("margin-left", "0px");
			$(".varkronerPerLiterField").css("margin-left", "330px");
		} else if (stdevKrPerL && medianKrPerL) {
			$(".stdevkronerPerLiterField").css("margin-left", "10px");
			$(".mediankronerPerLiterField").css("margin-left", "330px");
		} else if (stdevKrPerL && averageKrPerL) {
			$(".stdevkronerPerLiterField").css("margin-left", "10px");
			$(".averagekronerPerLiterField").css("margin-left", "330px");
		} else if (medianKrPerL && varKrPerL) {
			$(".mediankronerPerLiterField").css("margin-left", "10px");
			$(".varkronerPerLiterField").css("margin-left", "330px");
		} else if (medianKrPerL && averageKrPerL) {
			$(".mediankronerPerLiterField").css("margin-left", "10px");
			$(".averagekronerPerLiterField").css("margin-left", "330px");
		} else if (varKrPerL && averageKrPerL) {
			$(".averagekronerPerLiterField").css("margin-left", "10px");
			$(".varkronerPerLiterField").css("margin-left", "330px");
		} else if (varKrPerL) {
			$(".varkronerPerLiterField").css("margin-left", "10px");
		} else if (medianKrPerL) {
			$(".mediankronerPerLiterField").css("margin-left", "10px");
		} else if (stdevKrPerL) {
			$(".stdevkronerPerLiterField").css("margin-left", "10px");
		} else if (averageKrPerL) {
			$(".averagekronerPerLiterField").css("margin-left", "10px");
		} 
		
		if(stdevKrPerL || varKrPerL || medianKrPerL || averageKrPerL){
			krPerL = true;
			$(".headerkronerPerLiterField").show();
		} else {
			krPerL = false;
			$(".headerkronerPerLiterField").hide();
		}
		alignValues()
	}
	
	
</script>