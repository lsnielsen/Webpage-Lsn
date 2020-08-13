
<script>
	var stdevLPerKr = false;
	var varLPerKr = false;

	$(".literPerKrStDev").click(function() {
		$(".stdevLiterPerKronerField").show();
		stdevLPerKr = true;
		handleSelectedFields();
	});
	$(".stdevliterPerKronerCross").click(function() {
		$(".stdevLiterPerKronerField").hide();
		stdevLPerKr = false;
		handleSelectedFields();
	});
	
	$(".literPerKrVar").click(function() {
		$(".varLiterPerKronerField").show();
		varLPerKr = true;
		handleSelectedFields();
	});
	$(".varliterPerKronerCross").click(function() {
		$(".varLiterPerKronerField").hide();
		varLPerKr = false;
		handleSelectedFields();
	});
	
	function handleSelectedFields()
	{
		if(stdevLPerKr && varLPerKr){
			$(".varLiterPerKronerField").css("margin-left", "350px");
		} else if (varLPerKr) {
			$(".varLiterPerKronerField").css("margin-left", "0px");
		}
	}
	
</script>