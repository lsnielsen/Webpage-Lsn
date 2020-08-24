
<script>
	var array = <?php echo json_encode($arr); ?>;
	arrayLength = array.length;
	
	var literPerKroner = [];
	var literPerKilometer = [];
	var liter = [];
	var literMedian = [];
	var literVarians = [];
	var literStandardDev = [];
	var literAverage = [];
	
	console.log("liter");
	for (var i = 0; i < arrayLength; i += 1) {
		liter.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['liter'] 
		});
		console.log(array[i]['liter']);
	}
	console.log("liter per kilometer:");
	for (var i = 0; i < arrayLength; i += 1) {
		literPerKilometer.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['l/km'] 
		});
		console.log(array[i]['l/km']);
	}
	console.log("liter per kroner:");
	for (var i = 0; i < arrayLength; i += 1) {
		literPerKroner.push({ 
			x: new Date(array[i][1]), 
			y: array[i]['l/kr'] 
		});
		console.log(array[i]['l/kr']);
	}
	console.log("liter median");
	for (var i = 0; i < arrayLength; i += 1) {
		literMedian.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['literMedian'] 
		});
		console.log(array[0]['literMedian']);
	}
	console.log("liter varians");
	for (var i = 0; i < arrayLength; i += 1) {
		literVarians.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['literVariance'] 
		});
		console.log(array[0]['literVariance']);
	}
	console.log("liter standard Dev");
	for (var i = 0; i < arrayLength; i += 1) {
		literStandardDev.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['literStandardDev'] 
		});
		console.log(array[0]['literStandardDev']);
	}
	console.log("liter average");
	for (var i = 0; i < arrayLength; i += 1) {
		literAverage.push({ 
			x: new Date(array[i][1]), 
			y: array[0]['averageLiter'] 
		});
		console.log(array[0]['averageLiter']);
	}
	
	</script>