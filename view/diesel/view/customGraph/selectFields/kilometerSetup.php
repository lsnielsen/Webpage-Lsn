
<script>
	
	var kilometer = [];
	var kilometerPerLiter = [];
	var kilometerPerLiterAverage = [];
	var kilometerPerLiterStDev = [];
	var kilometerPerKroner = [];
	var kilometerPerKronerAverage = [];
	var kilometerPerKronerStDev = [];
	var kilometerMedian = [];
	var kilometerVarians = [];
	var kilometerStandardDev = [];
	var kilometerAverage = [];
	var kilometerStDev = [];
	
	for (var i = 0; i < arrayLength; i += 1) {
		kilometer.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['kilometer'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kilometerPerLiter.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['km/l'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kilometerPerKroner.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['km/kr'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kilometerMedian.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['kilometerMedian'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kilometerVarians.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['kilometerVariance'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kilometerStandardDev.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['kilometerStandardDev'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kilometerAverage.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageKm'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kilometerStDev.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['kilometerStDev'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kilometerPerLiterStDev.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['kmPerLiterStDev'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kilometerPerKronerStDev.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['kmPerKrStDev'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kilometerPerKronerAverage.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageKmPerKr'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kilometerPerLiterAverage.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageKmPerLiter'] 
		});
	}
	
	</script>