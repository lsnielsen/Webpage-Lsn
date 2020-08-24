
<script>
	var array = <?php echo json_encode($arr); ?>;
	arrayLength = array.length;
	
	var kilometer = [];
	var kilometerPerLiter = [];
	var kilometerPerKroner = [];
	var kilometerMedian = [];
	var kilometerVarians = [];
	var kilometerStandardDev = [];
	var kilometerAverage = [];
	
	console.log("kilometer");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometer.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['kilometer'] 
		});
		console.log(array[i]['kilometer']);
	}
	console.log("kilometer per liter:");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerPerLiter.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['km/l'] 
		});
		console.log(array[i]['km/l']);
	}
	console.log("kilometer per kroner:");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerPerKroner.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['km/kr'] 
		});
		console.log(array[i]['km/l']);
	}
	console.log("kilometer median");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerMedian.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['kilometerMedian'] 
		});
		console.log(array[0]['kilometerMedian']);
	}
	console.log("kilometer varians");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerVarians.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['kilometerVariance'] 
		});
		console.log(array[0]['kilometerVariance']);
	}
	console.log("kilometer standard Dev");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerStandardDev.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['kilometerStandardDev'] 
		});
		console.log(array[0]['kilometerStandardDev']);
	}
	console.log("kilometer average");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerAverage.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageKm'] 
		});
		console.log(array[0]['averageKm']);
	}
	
	</script>