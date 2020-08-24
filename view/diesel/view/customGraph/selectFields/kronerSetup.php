
<script>
	var array = <?php echo json_encode($arr); ?>;
	arrayLength = array.length;
	
	var kronerPerLiter = [];
	var kronerPerKroner = [];
	var kronerPerKilometer = [];
	var kronerPerLiter = [];
	var kroner = [];
	var kronerMedian = [];
	var kronerVarians = [];
	var kronerStandardDev = [];
	var kronerAverage = [];
	
	console.log("kroner");
	for (var i = 0; i < arrayLength; i += 1) {
		kroner.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['kroner'] 
		});
		console.log(array[i]['kroner']);
	}
	console.log("kroner per liter:");
	for (var i = 0; i < arrayLength; i += 1) {
		kronerPerLiter.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['kr/l'] 
		});
		console.log(array[i]['kr/l']);
	}
	console.log("kroner median");
	for (var i = 0; i < arrayLength; i += 1) {
		kronerMedian.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['krMedian'] 
		});
		console.log(array[0]['krMedian']);
	}
	console.log("kroner varians");
	for (var i = 0; i < arrayLength; i += 1) {
		kronerVarians.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['krVariance'] 
		});
		console.log(array[0]['krVariance']);
	}
	console.log("kroner standard Dev");
	for (var i = 0; i < arrayLength; i += 1) {
		kronerStandardDev.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['krStandardDev'] 
		});
		console.log(array[0]['krStandardDev']);
	}
	console.log("kroner average");
	for (var i = 0; i < arrayLength; i += 1) {
		kronerAverage.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageKr'] 
		});
		console.log(array[0]['averageKr']);
	}
	
	</script>