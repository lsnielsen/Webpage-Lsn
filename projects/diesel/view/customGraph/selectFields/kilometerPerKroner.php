	
<?php $txtFile = include("../text/global.php");  ?>
<div class="kilometerPerKronerValues">
	<div class="headerKilometerPerKronerField">
		<?php echo $txtFile['ownGraph']['kmkrHeader']; ?>
	</div>
	<div class="stdevKilometerPerKronerField">
		<div class="stdevKilometerPerKronerTxt">
			<?php echo $txtFile['ownGraph']['kmkrStdev']; ?>

		</div>
		<div class="stdevKilometerPerKronerCross">
			&#10060;
		</div>
	</div>

	<div class="varKilometerPerKronerField">
		<div class="varKilometerPerKronerTxt">
			<?php echo $txtFile['ownGraph']['kmkrVar']; ?>
		</div>
		<div class="varKilometerPerKronerCross">
			&#10060;
		</div>
	</div>

	<div class="medianKilometerPerKronerField">
		<div class="medianKilometerPerKronerTxt">
			<?php echo $txtFile['ownGraph']['kmkrMedian']; ?>
		</div>
		<div class="medianKilometerPerKronerCross">
			&#10060;
		</div>
	</div>

	<div class="averageKilometerPerKronerField">
		<div class="averageKilometerPerKronerTxt">
			<?php echo $txtFile['ownGraph']['kmkrAverage']; ?>
		</div>
		<div class="averageKilometerPerKronerCross">
			&#10060;
		</div>
	</div>
</div>
<script>

	var stdevKmPerKr = false;
	var varKmPerKr = false;
	var medianKmPerKr = false;
	var averageKmPerKr = false;
	
	$(".kmPerKronerStDev").click(function() {
		$(".stdevKilometerPerKronerField").show();
		stdevKmPerKr = true;
		handleKilometerPerKronerFields();
	});
	$(".stdevKilometerPerKronerCross").click(function() {
		$(".stdevKilometerPerKronerField").hide();
		stdevKmPerKr = false;
		handleKilometerPerKronerFields();
	});
	
	$(".kmPerKronerVar").click(function() {
		$(".varKilometerPerKronerField").show();
		varKmPerKr = true;
		handleKilometerPerKronerFields();
	});
	$(".varKilometerPerKronerCross").click(function() {
		$(".varKilometerPerKronerField").hide();
		varKmPerKr = false;
		handleKilometerPerKronerFields();
	});
	
	$(".kmPerKronerMedian").click(function() {
		$(".medianKilometerPerKronerField").show();
		medianKmPerKr = true;
		handleKilometerPerKronerFields();
	});
	$(".medianKilometerPerKronerCross").click(function() {
		$(".medianKilometerPerKronerField").hide();
		medianKmPerKr = false;
		handleKilometerPerKronerFields();
	});
	
	$(".kmPerKronerAverage").click(function() {
		$(".averageKilometerPerKronerField").show();
		averageKmPerKr = true;
		handleKilometerPerKronerFields();
	});
	$(".averageKilometerPerKronerCross").click(function() {
		$(".averageKilometerPerKronerField").hide();
		averageKmPerKr = false;
		handleKilometerPerKronerFields();
	});
	
	function handleKilometerPerKronerFields()
	{
		if(stdevKmPerKr && varKmPerKr && medianKmPerKr && averageKmPerKr){
			$(".averageKilometerPerKronerField").css("margin-left", "10px");
			$(".stdevKilometerPerKronerField").css("margin-left", "330px");
			$(".varKilometerPerKronerField").css("margin-left", "660px");
			$(".medianKilometerPerKronerField").css("margin-left", "930px");
		} else if (stdevKmPerKr && varKmPerKr && medianKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "10px");
			$(".varKilometerPerKronerField").css("margin-left", "350px");
			$(".medianKilometerPerKronerField").css("margin-left", "660px");
		} else if (stdevKmPerKr && medianKmPerKr && averageKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "0px");
			$(".medianKilometerPerKronerField").css("margin-left", "350px");
			$(".averageKilometerPerKronerField").css("margin-left", "660px");
		} else if (medianKmPerKr && varKmPerKr && averageKmPerKr) {
			$(".varKilometerPerKronerField").css("margin-left", "10px");
			$(".medianKilometerPerKronerField").css("margin-left", "350px");
			$(".averageKilometerPerKronerField").css("margin-left", "660px");
		} else if (stdevKmPerKr && varKmPerKr && averageKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "10px");
			$(".medianKilometerPerKronerField").css("margin-left", "350px");
			$(".averageKilometerPerKronerField").css("margin-left", "660px");
		} else if (stdevKmPerKr && varKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "0px");
			$(".varKilometerPerKronerField").css("margin-left", "330px");
		} else if (stdevKmPerKr && medianKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "10px");
			$(".medianKilometerPerKronerField").css("margin-left", "330px");
		} else if (stdevKmPerKr && averageKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "10px");
			$(".averageKilometerPerKronerField").css("margin-left", "330px");
		} else if (medianKmPerKr && varKmPerKr) {
			$(".medianKilometerPerKronerField").css("margin-left", "10px");
			$(".varKilometerPerKronerField").css("margin-left", "330px");
		} else if (medianKmPerKr && averageKmPerKr) {
			$(".medianKilometerPerKronerField").css("margin-left", "10px");
			$(".averageKilometerPerKronerField").css("margin-left", "330px");
		} else if (varKmPerKr && averageKmPerKr) {
			$(".averageKilometerPerKronerField").css("margin-left", "10px");
			$(".varKilometerPerKronerField").css("margin-left", "330px");
		} else if (varKmPerKr) {
			$(".varKilometerPerKronerField").css("margin-left", "10px");
		} else if (medianKmPerKr) {
			$(".medianKilometerPerKronerField").css("margin-left", "10px");
		} else if (stdevKmPerKr) {
			$(".stdevKilometerPerKronerField").css("margin-left", "10px");
		} else if (averageKmPerKr) {
			$(".averageKilometerPerKronerField").css("margin-left", "10px");
		} 
		
		if(stdevKmPerKr || varKmPerKr || medianKmPerKr || averageKmPerKr){
			kmPerKr = true;
			$(".headerKilometerPerKronerField").show();
		} else {
			kmPerKr = false;
			$(".headerKilometerPerKronerField").hide();
		}
		alignValues()
	}
	
	
</script>