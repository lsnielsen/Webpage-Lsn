
<script>
	
	var kilometer = [];
	var kilometerPerLiter = [];
	var kilometerPerLiterStDev = [];
	var kilometerPerKroner = [];
	var kilometerPerKronerStDev = [];
	var kilometerMedian = [];
	var kilometerVarians = [];
	var kilometerStandardDev = [];
	var kilometerAverage = [];
	var kilometerStDev = [];
	
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
	console.log("kilometer standard dev");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerStDev.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['kilometerStDev'] 
		});
		console.log(array[i]['kilometerStDev']);
	}
	console.log("kmPerLiterStDev");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerPerLiterStDev.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['kmPerLiterStDev'] 
		});
		console.log(array[i]['kmPerLiterStDev']);
	}
	console.log("kmPerKrStDev");
	for (var i = 0; i < arrayLength; i += 1) {
		kilometerPerKronerStDev.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['kmPerKrStDev'] 
		});
		console.log(array[i]['kmPerKrStDev']);
	}
	
	</script>