
<script>
	
	var kroner = [];
	var kronerMedian = [];
	var kronerVarians = [];
	var kronerAverage = [];
	var kronerPerLiter = [];
	var kronerStandardDev = [];
	var kronerPerKilometer = [];
	var kronerPerLiterStDev = [];
	var kronerPerLiterAverage = [];
	var kronerPerKilometerStDev = [];
	var kronerPerKilometerAverage = [];
	
	for (var i = 0; i < arrayLength; i += 1) {
		kroner.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['kroner'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kronerPerLiter.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['kr/l'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kronerMedian.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['krMedian'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kronerVarians.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['krVariance'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kronerStandardDev.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['krStandardDev'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kronerAverage.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageKr'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kronerPerKilometerStDev.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['krPerKmStDev'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kronerPerLiterStDev.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['krPerLiterStDev'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kronerPerLiterAverage.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageKrPerLiter'] 
		});
	}

	for (var i = 0; i < arrayLength; i += 1) {
		kronerPerKilometerAverage.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageKrPerKm'] 
		});
	}
	
	</script>