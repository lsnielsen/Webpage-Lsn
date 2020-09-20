<?php $txtFile = include("../text/global.php");  ?>
<div class="literValues">
	<div class="headerLiterField">
		<?php echo $txtFile['ownGraph']['lHeader']; ?>
	</div>
	<div class="stdevLiterField">
		<div class="stdevLiterTxt">
			<?php echo $txtFile['ownGraph']['lStdev']; ?>
		</div>
		<div class="stdevLiterCross">
			&#10060;
		</div>
	</div>

	<div class="varLiterField">
		<div class="varLiterTxt">
			<?php echo $txtFile['ownGraph']['lVar']; ?>
		</div>
		<div class="varLiterCross">
			&#10060;
		</div>
	</div>

	<div class="medianLiterField">
		<div class="medianLiterTxt">
			<?php echo $txtFile['ownGraph']['lMedian']; ?>
		</div>
		<div class="medianLiterCross">
			&#10060;
		</div>
	</div>

	<div class="averageLiterField">
		<div class="averageLiterTxt">
			<?php echo $txtFile['ownGraph']['lAverage']; ?>
		</div>
		<div class="averageLiterCross">
			&#10060;
		</div>
	</div>
</div>
<script>

	var stdevLiter = false;
	var varLiter = false;
	var medianLiter = false;
	var averageLiter = false;
	
	$(".literStDev").click(function() {
		$(".stdevLiterField").show();
		stdevLiter = true;
		handleliterFields();
	});
	$(".stdevLiterCross").click(function() {
		$(".stdevLiterField").hide();
		stdevLiter = false;
		handleliterFields();
	});
	
	$(".literVar").click(function() {
		$(".varLiterField").show();
		varLiter = true;
		handleliterFields();
	});
	$(".varLiterCross").click(function() {
		$(".varLiterField").hide();
		varLiter = false;
		handleliterFields();
	});
	
	$(".literMedian").click(function() {
		$(".medianLiterField").show();
		medianLiter = true;
		handleliterFields();
	});
	$(".medianLiterCross").click(function() {
		$(".medianLiterField").hide();
		medianLiter = false;
		handleliterFields();
	});
	
	$(".literAverage").click(function() {
		$(".averageLiterField").show();
		averageLiter = true;
		handleliterFields();
	});
	$(".averageLiterCross").click(function() {
		$(".averageLiterField").hide();
		averageLiter = false;
		handleliterFields();
	});
	
	function handleliterFields()
	{
		if(stdevLiter && varLiter && medianLiter && averageLiter){
			$(".averageLiterField").css("margin-left", "10px");
			$(".stdevLiterField").css("margin-left", "330px");
			$(".varLiterField").css("margin-left", "660px");
			$(".medianLiterField").css("margin-left", "930px");
		} else if (stdevLiter && varLiter && medianLiter) {
			$(".stdevLiterField").css("margin-left", "10px");
			$(".varLiterField").css("margin-left", "350px");
			$(".medianLiterField").css("margin-left", "660px");
		} else if (stdevLiter && medianLiter && averageLiter) {
			$(".stdevLiterField").css("margin-left", "0px");
			$(".medianLiterField").css("margin-left", "350px");
			$(".averageLiterField").css("margin-left", "660px");
		} else if (medianLiter && varLiter && averageLiter) {
			$(".varLiterField").css("margin-left", "10px");
			$(".medianLiterField").css("margin-left", "350px");
			$(".averageLiterField").css("margin-left", "660px");
		} else if (stdevLiter && varLiter && averageLiter) {
			$(".stdevLiterField").css("margin-left", "10px");
			$(".medianLiterField").css("margin-left", "350px");
			$(".averageLiterField").css("margin-left", "660px");
		} else if (stdevLiter && varLiter) {
			$(".stdevLiterField").css("margin-left", "0px");
			$(".varLiterField").css("margin-left", "330px");
		} else if (stdevLiter && medianLiter) {
			$(".stdevLiterField").css("margin-left", "10px");
			$(".medianLiterField").css("margin-left", "330px");
		} else if (stdevLiter && averageLiter) {
			$(".stdevLiterField").css("margin-left", "10px");
			$(".averageLiterField").css("margin-left", "330px");
		} else if (medianLiter && varLiter) {
			$(".medianLiterField").css("margin-left", "10px");
			$(".varLiterField").css("margin-left", "330px");
		} else if (medianLiter && averageLiter) {
			$(".medianLiterField").css("margin-left", "10px");
			$(".averageLiterField").css("margin-left", "330px");
		} else if (varLiter && averageLiter) {
			$(".averageLiterField").css("margin-left", "10px");
			$(".varLiterField").css("margin-left", "330px");
		} else if (varLiter) {
			$(".varLiterField").css("margin-left", "10px");
		} else if (medianLiter) {
			$(".medianLiterField").css("margin-left", "10px");
		} else if (stdevLiter) {
			$(".stdevLiterField").css("margin-left", "10px");
		} else if (averageLiter) {
			$(".averageLiterField").css("margin-left", "10px");
		} 
		
		if(stdevLiter || varLiter || medianLiter || averageLiter){
			liter = true;
			$(".headerLiterField").show();
		} else {
			liter = false;
			$(".headerLiterField").hide();
		}
		alignValues()
	}
	
	
</script>