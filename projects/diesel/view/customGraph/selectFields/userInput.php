<?php $txtFile = include("../text/global.php");  ?>
<div class="userInputValues">
	<div class="userInputField">
		<?php echo $txtFile['dropdown']['userInput']; ?>
	</div>
	<div class="userInputKmField">
		<div class="userInputKmTxt">
			<?php echo $txtFile['dropdown']['km']; ?>
		</div>
		<div class="userInputKmCross">
			&#10060;
		</div>
	</div>

	<div class="userInputLiterField">
		<div class="userInputLiterTxt">
			<?php echo $txtFile['dropdown']['liter']; ?>
		</div>
		<div class="userInputLiterCross">
			&#10060;
		</div>
	</div>

	<div class="userInputKronerField">
		<div class="userInputKronerTxt">
			<?php echo $txtFile['dropdown']['kr']; ?>
		</div>
		<div class="userInputKronerCross">
			&#10060;
		</div>
	</div>
</div>
<script>

	var kilometer = false;
	var kroner = false;
	var liter = false;
	
	$(".numberOfKm").click(function() {
		$(".userInputKmField").show();
		kilometer = true;
		handleUserInputFields();
	});
	$(".userInputKmCross").click(function() {
		$(".userInputKmField").hide();
		kilometer = false;
		handleUserInputFields();
	});
	
	$(".numberOfKr").click(function() {
		$(".userInputKronerField").show();
		kroner = true;
		handleUserInputFields();
	});
	$(".userInputKronerCross").click(function() {
		$(".userInputKronerField").hide();
		kroner = false;
		handleUserInputFields();
	});
	
	$(".numberOfLiter").click(function() {
		$(".userInputLiterField").show();
		liter = true;
		handleUserInputFields();
	});
	$(".userInputLiterCross").click(function() {
		$(".userInputLiterField").hide();
		liter = false;
		handleUserInputFields();
	});
	
	function handleUserInputFields()
	{
		if(kilometer && liter && kroner){
			$(".userInputKmField").css("margin-left", "10px");
			$(".userInputKronerField").css("margin-left", "330px");
			$(".userInputLiterField").css("margin-left", "660px");
		} else if (kilometer && liter) {
			$(".userInputKmField").css("margin-left", "10px");
			$(".userInputLiterField").css("margin-left", "350px");
		} else if (kilometer && kroner) {
			$(".userInputKmField").css("margin-left", "10px");
			$(".userInputKronerField").css("margin-left", "350px");
		} else if (liter && kroner) {
			$(".userInputLiterField").css("margin-left", "10px");
			$(".userInputKronerField").css("margin-left", "350px");
		} else if (liter) {
			$(".userInputLiterField").css("margin-left", "10px");
		} else if (kilometer) {
			$(".userInputKmField").css("margin-left", "0px");
		} else if (kroner) {
			$(".userInputKronerField").css("margin-left", "10px");
		}
		
		if(kilometer || liter || kroner){
			userInput = true;
			console.log("userInput: " + userInput);
			$(".userInputField").show();
		} else {
			userInput = false;
			console.log("userInput: " + userInput);
			$(".userInputField").hide();
		}
		alignValues()
	}
	
	
</script>