	<div class="headerKronerField">
		Kroner statistik: 
	</div>
	<div class="stdevKronerField">
		<div class="stdevkronerTxt">
			Standard afvigelse for kroner
		</div>
		<div class="stdevKronerCross">
			&#10060;
		</div>
	</div>

	<div class="varKronerField">
		<div class="varKronerTxt">
			Varians for kroner
		</div>
		<div class="varKronerCross">
			&#10060;
		</div>
	</div>

	<div class="medianKronerField">
		<div class="medianKronerTxt">
			Median for kroner
		</div>
		<div class="medianKronerCross">
			&#10060;
		</div>
	</div>

	<div class="averageKronerField">
		<div class="averageKronerTxt">
			Gennemsnit for kroner
		</div>
		<div class="averageKronerCross">
			&#10060;
		</div>
	</div>

<script>

	var stdevkroner = false;
	var varkroner = false;
	var mediankroner = false;
	var averagekroner = false;
	
	$(".kronerStDev").click(function() {
		$(".stdevKronerField").show();
		stdevkroner = true;
		handlekronerFields();
	});
	$(".stdevkronerCross").click(function() {
		$(".stdevKronerField").hide();
		stdevkroner = false;
		handlekronerFields();
	});
	
	$(".kronerVar").click(function() {
		$(".varKronerField").show();
		varkroner = true;
		handlekronerFields();
	});
	$(".varkronerCross").click(function() {
		$(".varKronerField").hide();
		varkroner = false;
		handlekronerFields();
	});
	
	$(".kronerMedian").click(function() {
		$(".medianKronerField").show();
		mediankroner = true;
		handlekronerFields();
	});
	$(".mediankronerCross").click(function() {
		$(".medianKronerField").hide();
		mediankroner = false;
		handlekronerFields();
	});
	
	$(".kronerAverage").click(function() {
		$(".averageKronerField").show();
		averagekroner = true;
		handlekronerFields();
	});
	$(".averagekronerCross").click(function() {
		$(".averageKronerField").hide();
		averagekroner = false;
		handlekronerFields();
	});
	
	function handlekronerFields()
	{
		if(stdevkroner && varkroner && mediankroner && averagekroner){
			$(".averagekronerField").css("margin-left", "10px");
			$(".stdevkronerField").css("margin-left", "330px");
			$(".varkronerField").css("margin-left", "660px");
			$(".mediankronerField").css("margin-left", "930px");
		} else if (stdevkroner && varkroner && mediankroner) {
			$(".stdevkronerField").css("margin-left", "10px");
			$(".varkronerField").css("margin-left", "350px");
			$(".mediankronerField").css("margin-left", "660px");
		} else if (stdevkroner && mediankroner && averagekroner) {
			$(".stdevkronerField").css("margin-left", "0px");
			$(".mediankronerField").css("margin-left", "350px");
			$(".averagekronerField").css("margin-left", "660px");
		} else if (mediankroner && varkroner && averagekroner) {
			$(".varkronerField").css("margin-left", "10px");
			$(".mediankronerField").css("margin-left", "350px");
			$(".averagekronerField").css("margin-left", "660px");
		} else if (stdevkroner && varkroner && averagekroner) {
			$(".stdevkronerField").css("margin-left", "10px");
			$(".mediankronerField").css("margin-left", "350px");
			$(".averagekronerField").css("margin-left", "660px");
		} else if (stdevkroner && varkroner) {
			$(".stdevkronerField").css("margin-left", "0px");
			$(".varkronerField").css("margin-left", "330px");
		} else if (stdevkroner && mediankroner) {
			$(".stdevkronerField").css("margin-left", "10px");
			$(".mediankronerField").css("margin-left", "330px");
		} else if (stdevkroner && averagekroner) {
			$(".stdevkronerField").css("margin-left", "10px");
			$(".averagekronerField").css("margin-left", "330px");
		} else if (mediankroner && varkroner) {
			$(".mediankronerField").css("margin-left", "10px");
			$(".varkronerField").css("margin-left", "330px");
		} else if (mediankroner && averagekroner) {
			$(".mediankronerField").css("margin-left", "10px");
			$(".averagekronerField").css("margin-left", "330px");
		} else if (varkroner && averagekroner) {
			$(".averagekronerField").css("margin-left", "10px");
			$(".varkronerField").css("margin-left", "330px");
		} else if (varkroner) {
			$(".varkronerField").css("margin-left", "10px");
		} else if (mediankroner) {
			$(".mediankronerField").css("margin-left", "10px");
		} else if (stdevkroner) {
			$(".stdevkronerField").css("margin-left", "10px");
		} else if (averagekroner) {
			$(".averagekronerField").css("margin-left", "10px");
		} 
		
		if(stdevkroner || varkroner || mediankroner && averageKroner){
			$(".headerkronerField").show();
		} else {
			$(".headerkronerField").hide();
		}
	}
	
	
</script>