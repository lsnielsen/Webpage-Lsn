	<div class="headerLiterField">
		Liter statistik: 
	</div>
	<div class="stdevLiterField">
		<div class="stdevliterTxt">
			Standard afvigelse for liter
		</div>
		<div class="stdevLiterCross">
			&#10060;
		</div>
	</div>

	<div class="varLiterField">
		<div class="varLiterTxt">
			Varians for liter
		</div>
		<div class="varLiterCross">
			&#10060;
		</div>
	</div>

	<div class="medianLiterField">
		<div class="medianLiterTxt">
			Median for liter
		</div>
		<div class="medianLiterCross">
			&#10060;
		</div>
	</div>

	<div class="averageLiterField">
		<div class="averageLiterTxt">
			Gennemsnit for liter
		</div>
		<div class="averageLiterCross">
			&#10060;
		</div>
	</div>

<script>

	var stdevliter = false;
	var varliter = false;
	var medianliter = false;
	var averageliter = false;
	
	$(".literStDev").click(function() {
		$(".stdevLiterField").show();
		stdevliter = true;
		handleliterFields();
	});
	$(".stdevliterCross").click(function() {
		$(".stdevLiterField").hide();
		stdevliter = false;
		handleliterFields();
	});
	
	$(".literVar").click(function() {
		$(".varLiterField").show();
		varliter = true;
		handleliterFields();
	});
	$(".varliterCross").click(function() {
		$(".varLiterField").hide();
		varliter = false;
		handleliterFields();
	});
	
	$(".literMedian").click(function() {
		$(".medianLiterField").show();
		medianliter = true;
		handleliterFields();
	});
	$(".medianliterCross").click(function() {
		$(".medianLiterField").hide();
		medianliter = false;
		handleliterFields();
	});
	
	$(".literAverage").click(function() {
		$(".averageLiterField").show();
		averageliter = true;
		handleliterFields();
	});
	$(".averageliterCross").click(function() {
		$(".averageLiterField").hide();
		averageliter = false;
		handleliterFields();
	});
	
	function handleliterFields()
	{
		if(stdevliter && varliter && medianliter && averageliter){
			$(".averageliterField").css("margin-left", "10px");
			$(".stdevliterField").css("margin-left", "330px");
			$(".varliterField").css("margin-left", "660px");
			$(".medianliterField").css("margin-left", "930px");
		} else if (stdevliter && varliter && medianliter) {
			$(".stdevliterField").css("margin-left", "10px");
			$(".varliterField").css("margin-left", "350px");
			$(".medianliterField").css("margin-left", "660px");
		} else if (stdevliter && medianliter && averageliter) {
			$(".stdevliterField").css("margin-left", "0px");
			$(".medianliterField").css("margin-left", "350px");
			$(".averageliterField").css("margin-left", "660px");
		} else if (medianliter && varliter && averageliter) {
			$(".varliterField").css("margin-left", "10px");
			$(".medianliterField").css("margin-left", "350px");
			$(".averageliterField").css("margin-left", "660px");
		} else if (stdevliter && varliter && averageliter) {
			$(".stdevliterField").css("margin-left", "10px");
			$(".medianliterField").css("margin-left", "350px");
			$(".averageliterField").css("margin-left", "660px");
		} else if (stdevliter && varliter) {
			$(".stdevliterField").css("margin-left", "0px");
			$(".varliterField").css("margin-left", "330px");
		} else if (stdevliter && medianliter) {
			$(".stdevliterField").css("margin-left", "10px");
			$(".medianliterField").css("margin-left", "330px");
		} else if (stdevliter && averageliter) {
			$(".stdevliterField").css("margin-left", "10px");
			$(".averageliterField").css("margin-left", "330px");
		} else if (medianliter && varliter) {
			$(".medianliterField").css("margin-left", "10px");
			$(".varliterField").css("margin-left", "330px");
		} else if (medianliter && averageliter) {
			$(".medianliterField").css("margin-left", "10px");
			$(".averageliterField").css("margin-left", "330px");
		} else if (varliter && averageliter) {
			$(".averageliterField").css("margin-left", "10px");
			$(".varliterField").css("margin-left", "330px");
		} else if (varliter) {
			$(".varliterField").css("margin-left", "10px");
		} else if (medianliter) {
			$(".medianliterField").css("margin-left", "10px");
		} else if (stdevliter) {
			$(".stdevliterField").css("margin-left", "10px");
		} else if (averageliter) {
			$(".averageliterField").css("margin-left", "10px");
		} 
		
		if(stdevliter || varliter || medianliter || averageLiter){
			$(".headerliterField").show();
		} else {
			$(".headerliterField").hide();
		}
	}
	
	
</script>