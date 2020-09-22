<?php $txtFile = include("../text/global.php");  ?>	
<div class="literPerKronerValues">
	<div class="headerliterPerKronerField">
		<?php echo $txtFile['ownGraph']['lkrHeader']; ?>
	</div>
	<div class="stdevLiterPerKronerField">
		<div class="stdevliterPerKronerTxt">
			<?php echo $txtFile['ownGraph']['lkrStdev']; ?>
		</div>
		<div class="stdevliterPerKronerCross">
			&#10060;
		</div>
	</div>

	<div class="varLiterPerKronerField">
		<div class="varliterPerKronerTxt">
			<?php echo $txtFile['ownGraph']['lkrVar']; ?>
		</div>
		<div class="varliterPerKronerCross">
			&#10060;
		</div>
	</div>

	<div class="medianLiterPerKronerField">
		<div class="medianliterPerKronerTxt">
			<?php echo $txtFile['ownGraph']['lkrMedian']; ?>
		</div>
		<div class="medianliterPerKronerCross">
			&#10060;
		</div>
	</div>

	<div class="averageLiterPerKronerField">
		<div class="averageliterPerKronerTxt">
			<?php echo $txtFile['ownGraph']['lkrAverage']; ?>
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
		averageLPerKr = true;
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
			$(".averageLiterPerKronerField").css("margin-left", "10px");
			$(".stdevLiterPerKronerField").css("margin-left", "330px");
			$(".varLiterPerKronerField").css("margin-left", "660px");
			$(".medianLiterPerKronerField").css("margin-left", "930px");
		} else if (stdevLPerKr && varLPerKr && medianLPerKr) {
			$(".stdevLiterPerKronerField").css("margin-left", "10px");
			$(".varLiterPerKronerField").css("margin-left", "330px");
			$(".medianLiterPerKronerField").css("margin-left", "660px");
		} else if (stdevLPerKr && medianLPerKr && averageLPerKr) {
			$(".averageLiterPerKronerField").css("margin-left", "10px");
			$(".stdevLiterPerKronerField").css("margin-left", "330px");
			$(".medianLiterPerKronerField").css("margin-left", "660px");
		} else if (medianLPerKr && varLPerKr && averageLPerKr) {
			$(".averageLiterPerKronerField").css("margin-left", "10px");
			$(".varLiterPerKronerField").css("margin-left", "330px");
			$(".medianLiterPerKronerField").css("margin-left", "660px");
		} else if (stdevLPerKr && varLPerKr && averageLPerKr) {
			$(".averageLiterPerKronerField").css("margin-left", "10px");
			$(".varLiterPerKronerField").css("margin-left", "330px");
			$(".medianLiterPerKronerField").css("margin-left", "660px");
		} else if (stdevLPerKr && varLPerKr) {
			$(".stdevLiterPerKronerField").css("margin-left", "10px");
			$(".varLiterPerKronerField").css("margin-left", "330px");
		} else if (stdevLPerKr && medianLPerKr) {
			$(".stdevLiterPerKronerField").css("margin-left", "10px");
			$(".medianLiterPerKronerField").css("margin-left", "330px");
		} else if (stdevLPerKr && averageLPerKr) {
			$(".varLiterPerKronerField").css("margin-left", "10px");
			$(".averageLiterPerKronerField").css("margin-left", "330px");	
		} else if (medianLPerKr && varLPerKr) {
			$(".varLiterPerKronerField").css("margin-left", "10px");
			$(".medianLiterPerKronerField").css("margin-left", "330px");	
		} else if (medianLPerKr && averageLPerKr) {
			$(".averageLiterPerKronerField").css("margin-left", "10px");
			$(".medianLiterPerKronerField").css("margin-left", "330px");	
		} else if (varLPerKr && averageLPerKr) {
			$(".varLiterPerKronerField").css("margin-left", "10px");
			$(".averageLiterPerKronerField").css("margin-left", "330px");	
		} else if (varLPerKr) {
			$(".varLiterPerKronerField").css("margin-left", "10px");
		} else if (averageLPerKr) {
			$(".averageLiterPerKronerField").css("margin-left", "10px");
		} else if (medianLPerKr) {
			$(".medianLiterPerKronerField").css("margin-left", "10px");
		} else if (stdevLPerKr) {
			$(".stdevLiterPerKronerField").css("margin-left", "10px");
		} 
		
		if(stdevLPerKr || varLPerKr || medianLPerKr || averageLPerKr){
			lPerKr = true;
			$(".headerliterPerKronerField").show();
		} else {
			lPerKr = false;
			$(".headerliterPerKronerField").hide();
		}
		alignValues()
	}
	
	
</script>