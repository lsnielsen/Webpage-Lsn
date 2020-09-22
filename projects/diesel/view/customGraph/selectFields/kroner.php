
<?php $txtFile = include("../text/global.php");  ?>
<div class="kronerValues">
	<div class="headerKronerField">
		<?php echo $txtFile['ownGraph']['krHeader']; ?>
	</div>
	<div class="stdevKronerField">
		<div class="stdevKronerTxt">
			<?php echo $txtFile['ownGraph']['krStdev']; ?>
		</div>
		<div class="stdevKronerCross">
			&#10060;
		</div>
	</div>

	<div class="varKronerField">
		<div class="varKronerTxt">
			<?php echo $txtFile['ownGraph']['krVar']; ?>
		</div>
		<div class="varKronerCross">
			&#10060;
		</div>
	</div>

	<div class="medianKronerField">
		<div class="medianKronerTxt">
			<?php echo $txtFile['ownGraph']['krMedian']; ?>
		</div>
		<div class="medianKronerCross">
			&#10060;
		</div>
	</div>

	<div class="averageKronerField">
		<div class="averageKronerTxt">
			<?php echo $txtFile['ownGraph']['krAverage']; ?>
		</div>
		<div class="averageKronerCross">
			&#10060;
		</div>
	</div>
</div>
<script>

	var stdevKroner = false;
	var varKroner = false;
	var medianKroner = false;
	var averageKroner = false;
	
	$(".kronerStDev").click(function() {
		$(".stdevKronerField").show();
		stdevKroner = true;
		handleKronerFields();
	});
	$(".stdevKronerCross").click(function() {
		$(".stdevKronerField").hide();
		stdevKroner = false;
		handleKronerFields();
	});
	
	$(".kronerVar").click(function() {
		$(".varKronerField").show();
		varKroner = true;
		handleKronerFields();
	});
	$(".varKronerCross").click(function() {
		$(".varKronerField").hide();
		varKroner = false;
		handleKronerFields();
	});
	
	$(".kronerMedian").click(function() {
		$(".medianKronerField").show();
		medianKroner = true;
		handleKronerFields();
	});
	$(".medianKronerCross").click(function() {
		$(".medianKronerField").hide();
		medianKroner = false;
		handleKronerFields();
	});
	
	$(".kronerAverage").click(function() {
		$(".averageKronerField").show();
		averageKroner = true;
		handleKronerFields();
	});
	$(".averageKronerCross").click(function() {
		$(".averageKronerField").hide();
		averageKroner = false;
		handleKronerFields();
	});
	
	function handleKronerFields()
	{
		if(stdevKroner && varKroner && medianKroner && averageKroner){
			$(".averageKronerField").css("margin-left", "10px");
			$(".stdevKronerField").css("margin-left", "330px");
			$(".varKronerField").css("margin-left", "660px");
			$(".medianKronerField").css("margin-left", "930px");
		} else if (stdevKroner && varKroner && medianKroner) {
			$(".stdevKronerField").css("margin-left", "10px");
			$(".varKronerField").css("margin-left", "350px");
			$(".medianKronerField").css("margin-left", "660px");
		} else if (stdevKroner && medianKroner && averageKroner) {
			$(".stdevKronerField").css("margin-left", "0px");
			$(".medianKronerField").css("margin-left", "350px");
			$(".averageKronerField").css("margin-left", "660px");
		} else if (medianKroner && varKroner && averageKroner) {
			$(".varKronerField").css("margin-left", "10px");
			$(".medianKronerField").css("margin-left", "350px");
			$(".averageKronerField").css("margin-left", "660px");
		} else if (stdevKroner && varKroner && averageKroner) {
			$(".stdevKronerField").css("margin-left", "10px");
			$(".medianKronerField").css("margin-left", "350px");
			$(".averageKronerField").css("margin-left", "660px");
		} else if (stdevKroner && varKroner) {
			$(".stdevKronerField").css("margin-left", "0px");
			$(".varKronerField").css("margin-left", "330px");
		} else if (stdevKroner && medianKroner) {
			$(".stdevKronerField").css("margin-left", "10px");
			$(".medianKronerField").css("margin-left", "330px");
		} else if (stdevKroner && averageKroner) {
			$(".stdevKronerField").css("margin-left", "10px");
			$(".averageKronerField").css("margin-left", "330px");
		} else if (medianKroner && varKroner) {
			$(".medianKronerField").css("margin-left", "10px");
			$(".varKronerField").css("margin-left", "330px");
		} else if (medianKroner && averageKroner) {
			$(".medianKronerField").css("margin-left", "10px");
			$(".averageKronerField").css("margin-left", "330px");
		} else if (varKroner && averageKroner) {
			$(".averageKronerField").css("margin-left", "10px");
			$(".varKronerField").css("margin-left", "330px");
		} else if (varKroner) {
			$(".varKronerField").css("margin-left", "10px");
		} else if (medianKroner) {
			$(".medianKronerField").css("margin-left", "10px");
		} else if (stdevKroner) {
			$(".stdevKronerField").css("margin-left", "10px");
		} else if (averageKroner) {
			$(".averageKronerField").css("margin-left", "10px");
		} 
		
		if(stdevKroner || varKroner || medianKroner || averageKroner){
			Kroner = true;
			$(".headerKronerField").show();
		} else {
			Kroner = false;
			$(".headerKronerField").hide();
		}
		alignValues()
	}
	
	
</script>