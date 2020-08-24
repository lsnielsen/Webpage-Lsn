
<script>
	
	var literPerKroner = [];
	var literPerKilometer = [];
	var liter = [];
	var literMedian = [];
	var literVarians = [];
	var literStandardDev = [];
	var literAverage = [];
	var literPerKilometerStDev = [];
	var literPerKronerStDev = [];
	var literPerKilometerAverage = [];
	var literPerKronerAverage = [];
	
	for (var i = 0; i < arrayLength; i += 1) {
		liter.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['liter'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		literPerKilometer.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['l/km'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		literPerKroner.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['l/kr'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		literMedian.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['literMedian'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		literVarians.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['literVariance'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		literStandardDev.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['literStandardDev'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		literAverage.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageLiter'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		literPerKilometerStDev.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageLiter'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		literPerKronerStDev.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageLiter'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		literPerKronerAverage.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageLiterPerKr'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		literPerKilometerAverage.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageLiterPerKm'] 
		});
	}
	
	</script>