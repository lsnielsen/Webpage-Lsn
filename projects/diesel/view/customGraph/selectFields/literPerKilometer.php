<?php $txtFile = include("../text/global.php");  ?>	
<div class="literPerKilometerValues">
	<div class="headerLiterPerKilometerField">
		<?php echo $txtFile['ownGraph']['lkmHeader']; ?>
	</div>
	<div class="stdevLiterPerKilometerField">
		<div class="stdevLiterPerKilometerTxt">
			<?php echo $txtFile['ownGraph']['lkmStdev']; ?>
		</div>
		<div class="stdevLiterPerKilometerCross">
			&#10060;
		</div>
	</div>

	<div class="varLiterPerKilometerField">
		<div class="varLiterPerKilometerTxt">
			<?php echo $txtFile['ownGraph']['lkmVar']; ?>
		</div>
		<div class="varLiterPerKilometerCross">
			&#10060;
		</div>
	</div>

	<div class="medianLiterPerKilometerField">
		<div class="medianLiterPerKilometerTxt">
			<?php echo $txtFile['ownGraph']['lkmMedian']; ?>
		</div>
		<div class="medianLiterPerKilometerCross">
			&#10060;
		</div>
	</div>

	<div class="averageLiterPerKilometerField">
		<div class="averageLiterPerKilometerTxt">
			<?php echo $txtFile['ownGraph']['lkmAverage']; ?>
		</div>
		<div class="averageLiterPerKilometerCross">
			&#10060;
		</div>
	</div>
</div>
<script>

	var stdevLPerKm = false;
	var varLPerKm = false;
	var medianLPerKm = false;
	var averageLPerKm = false;
	
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
	
	$(".literPerKmAverage").click(function() {
		$(".averageLiterPerKilometerField").show();
		averageLPerKm = true;
		handleLiterPerKilometerFields();
	});
	$(".averageliterPerKilometerCross").click(function() {
		$(".averageLiterPerKilometerField").hide();
		averageLPerKm = false;
		handleLiterPerKilometerFields();
	});
	
	function handleLiterPerKilometerFields()
	{
		if(stdevLPerKm && varLPerKm && medianLPerKm && averageLPerKm){
			$(".averageLiterPerKilometerField").css("margin-left", "10px");
			$(".stdevLiterPerKilometerField").css("margin-left", "330px");
			$(".varLiterPerKilometerField").css("margin-left", "660px");
			$(".medianLiterPerKilometerField").css("margin-left", "930px");
		} else if (stdevLPerKm && varLPerKm && medianLPerKm) {
			$(".stdevLiterPerKilometerField").css("margin-left", "10px");
			$(".varLiterPerKilometerField").css("margin-left", "350px");
			$(".medianLiterPerKilometerField").css("margin-left", "660px");
		} else if (stdevLPerKm && medianLPerKm && averageLPerKm) {
			$(".stdevLiterPerKilometerField").css("margin-left", "0px");
			$(".medianLiterPerKilometerField").css("margin-left", "350px");
			$(".averageLiterPerKilometerField").css("margin-left", "660px");
		} else if (medianLPerKm && varLPerKm && averageLPerKm) {
			$(".varLiterPerKilometerField").css("margin-left", "10px");
			$(".medianLiterPerKilometerField").css("margin-left", "350px");
			$(".averageLiterPerKilometerField").css("margin-left", "660px");
		} else if (stdevLPerKm && varLPerKm && averageLPerKm) {
			$(".stdevLiterPerKilometerField").css("margin-left", "10px");
			$(".medianLiterPerKilometerField").css("margin-left", "350px");
			$(".averageLiterPerKilometerField").css("margin-left", "660px");
		} else if (stdevLPerKm && varLPerKm) {
			$(".stdevLiterPerKilometerField").css("margin-left", "0px");
			$(".varLiterPerKilometerField").css("margin-left", "330px");
		} else if (stdevLPerKm && medianLPerKm) {
			$(".stdevLiterPerKilometerField").css("margin-left", "10px");
			$(".medianLiterPerKilometerField").css("margin-left", "330px");
		} else if (stdevLPerKm && averageLPerKm) {
			$(".stdevLiterPerKilometerField").css("margin-left", "10px");
			$(".averageLiterPerKilometerField").css("margin-left", "330px");
		} else if (medianLPerKm && varLPerKm) {
			$(".medianLiterPerKilometerField").css("margin-left", "10px");
			$(".varLiterPerKilometerField").css("margin-left", "330px");
		} else if (medianLPerKm && averageLPerKm) {
			$(".medianLiterPerKilometerField").css("margin-left", "10px");
			$(".averageLiterPerKilometerField").css("margin-left", "330px");
		} else if (varLPerKm && averageLPerKm) {
			$(".averageLiterPerKilometerField").css("margin-left", "10px");
			$(".varLiterPerKilometerField").css("margin-left", "330px");
		} else if (varLPerKm) {
			$(".varLiterPerKilometerField").css("margin-left", "10px");
		} else if (medianLPerKm) {
			$(".medianLiterPerKilometerField").css("margin-left", "10px");
		} else if (stdevLPerKm) {
			$(".stdevLiterPerKilometerField").css("margin-left", "10px");
		} else if (averageLPerKm) {
			$(".averageLiterPerKilometerField").css("margin-left", "10px");
		} 
		
		if(stdevLPerKm || varLPerKm || medianLPerKm || averageLPerKm){
			lPerKm = true;
			$(".headerliterPerKilometerField").show();
		} else {
			lPerKm = false;
			$(".headerliterPerKilometerField").hide();
		}
		alignValues()
	}
	
	
</script>