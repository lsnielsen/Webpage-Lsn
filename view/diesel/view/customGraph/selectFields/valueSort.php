<script>

	var userInput = false;
	var simpleCalc = false;
	var kilometer = false;
	var liter = false;
	var kroner = false;
	var krPerL = false;
	var krPerKm = false;
	var lPerKm = false;
	var lPerKr = false;
	var kmPerKr = false;
	var kmPerL = false;
	
	function alignValues() {
		if (userInput || simpleCalc || kilometer || liter || kroner) {
			$(".kilometerValues").css("top", "0px");
			$(".kronerValues").css("top", "80px");
			$(".literValues").css("top", "160px");
			$(".kronerPerLiterValues").css("top", "240px");
			$(".kilometerPerLiterValues").css("top", "320px");
			$(".kilometerPerKronerValues").css("top", "400px");
			$(".kronerPerKilometerValues").css("top", "480px");
			$(".literPerKilometerValues").css("top", "560px");
			$(".literPerKronerValues").css("top", "640px");
		} else if (krPerL || krPerKm || lPerKm || lPerKr || kmPerKr || kmPerL) {
			$(".kronerPerLiterValues").css("top", "0px");
			$(".kilometerPerLiterValues").css("top", "80px");
			$(".kilometerPerKronerValues").css("top", "160px");
			$(".kronerPerKilometerValues").css("top", "240px");
			$(".literPerKilometerValues").css("top", "320px");
			$(".literPerKronerValues").css("top", "400px");
			$(".kilometerValues").css("top", "480px");
			$(".kronerValues").css("top", "560px");
			$(".literValues").css("top", "640px");
		}
	}










</script>