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
	
	function alignValues() 
	{
		if (userInput || simpleCalc || kilometer || liter || kroner) {
			$(".kilometerValues").css("top", "0px");
			$(".inputValues").css("top", "80px");
			$(".userInputValues").css("top", "160px");
			$(".kronerValues").css("top", "240px");
			$(".literValues").css("top", "320px");
			$(".kronerPerLiterValues").css("top", "400px");
			$(".kilometerPerLiterValues").css("top", "480px");
			$(".kilometerPerKronerValues").css("top", "560px");
			$(".kronerPerKilometerValues").css("top", "640px");
			$(".literPerKilometerValues").css("top", "720px");
			$(".literPerKronerValues").css("top", "800px");
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
			$(".kilometerValues").css("top", "720px");
			$(".inputValues").css("top", "800px");
		}
	}










</script>