	
<div class="inputValues">
	<div class="headerInputField">
		Simple beregninger: 
	</div>
	<div class="kronerPerLiterField">
		<div class="kronerPerLiterTxt">
			Kroner per liter
		</div>
		<div class="kronerPerLiterCross">
			&#10060;
		</div>
	</div>
	<script>	
		$(".krPerLiter").click(function() {
			$(".kronerPerLiterField").show();
			krPerLiter = true;
			handleCalculationFields();
		});
		$(".kronerPerLiterCross").click(function() {
			$(".kronerPerLiterField").hide();
			krPerLiter = false;
			handleCalculationFields();
		});
	</script>

	<div class="kilometerPerLiterField">
		<div class="kilometerPerLiterTxt">
			Kilometer Per liter
		</div>
		<div class="kilometerPerLiterCross">
			&#10060;
		</div>
	</div>
	<script>
		$(".kmPerLiter").click(function() {
			$(".kilometerPerLiterField").show();
			kmPerLiter = true;
			handleCalculationFields();
		});
		$(".kilometerPerLiterCross").click(function() {
			$(".kilometerPerLiterField").hide();
			kmPerLiter = false;
			handleCalculationFields();
		});
	</script>

	<div class="kilometerPerKronerField">
		<div class="kilometerPerKronerTxt">
			Kilometer per kroner
		</div>
		<div class="kilometerPerKronerCross">
			&#10060;
		</div>
	</div>
	<script>	
		$(".kmPerKr").click(function() {
			$(".kilometerPerKronerField").show();
			kmPerKr = true;
			handleCalculationFields();
		});
		$(".kilometerPerKronerCross").click(function() {
			$(".kilometerPerKronerField").hide();
			kmPerKr = false;
			handleCalculationFields();
		});
	</script>
	

	<div class="kronerPerKilometerField">
		<div class="kronerPerKilometerTxt">
			Kroner per kilometer
		</div>
		<div class="kronerPerKilometerCross">
			&#10060;
		</div>
	</div>
	<script>	
		$(".krPerkm").click(function() {
			$(".kronerPerKilometerField").show();
			krPerKm = true;
			handleCalculationFields();
		});
		$(".kronerPerKilometerCross").click(function() {
			$(".kronerPerKilometerField").hide();
			krPerKm = false;
			handleCalculationFields();
		});	
	</script>

	<div class="literPerKilometerField">
		<div class="literPerKilometerTxt">
			Liter per kilometer
		</div>
		<div class="literPerKilometerCross">
			&#10060;
		</div>
	</div>
	<script>	
		$(".literPerKm").click(function() {
			$(".literPerKilometerField").show();
			literPerKm = true;
			handleCalculationFields();
		});
		$(".literPerKilometerCross").click(function() {
			$(".literPerKilometerField").hide();
			literPerKm = false;
			handleCalculationFields();
		});	
	</script>

	<div class="literPerKronerField">
		<div class="literPerKronerTxt">
			Liter per kroner
		</div>
		<div class="literPerKronerCross">
			&#10060;
		</div>
	</div>
	<script>	
		$(".literPerKr").click(function() {
			$(".literPerKronerField").show();
			literPerKr = true;
			handleCalculationFields();
		});
		$(".literPerKronerCross").click(function() {
			$(".literPerKronerField").hide();
			literPerKr = false;
			handleCalculationFields();
		});	
	</script>
<script>

	var krPerLiter = false;
	var kmPerLiter = false;
	var kmPerKr = false;
	var krPerKm = false;
	var literPerKm = false;
	var literPerKr = false;
	
	function handleCalculationFields()
	{
		if(krPerLiter || kmPerLiter || kmPerKr || krPerKm || literPerKm || literPerKr){
			$(".kronerPerLiterField").css("margin-left", "10px");
			$(".kilometerPerLiterField").css("margin-left", "330px");
			$(".kilometerPerKronerField").css("margin-left", "660px");
			$(".kronerPerKilometerField").css("margin-left", "930px");
			$(".literPerKilometerField").css("margin-left", "1230px");
			$(".literPerKronerField").css("margin-left", "1530px");
		} 
		
		if(krPerLiter || kmPerLiter || kmPerKr || krPerKm || literPerKm || literPerKr){
			userInput = true;
			$(".headerInputField").show();
		} else {
			userInput = false;
			$(".headerInputField").hide();
		}
		alignValues()
	}
	
	
</script>
</div>