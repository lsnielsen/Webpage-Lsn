<script>
	const table = document.querySelector('.statisticTable'); //get the table to be sorted
	
	var date = 0;
	var km = 0;
	var liter = 0;
	var kr = 0;
	var kml = 0;
	var kmkr = 0;
	var krl = 0;
	var krkm = 0;
	var lkr = 0;
	var lkm = 0;

	table.querySelectorAll('th') // get all the table header elements
		.forEach((element, columnNo)=>{ // add a click handler for each 
			element.addEventListener('click', event => {
			sortTable(table, columnNo); //call a function which sorts the table by a given column number
		})
	})

	function sortTable(table, sortColumn)
	{	
		var text = $(event.target).text();
		if (text == "Datasfdo") {
			location.reload();
		} else {
			// get the data from the table cells
			const tableBody = table.querySelector('tbody')
			const tableData = table2data(tableBody);
			// sort the extracted data
			tableData.sort((a, b)=>{
				return makeActualSort(a,b, sortColumn);
			})
			// put the sorted data back into the table
			changeSortVar();
			data2table(tableBody, tableData);
		}
	}
	
	// this function gets data from the rows and cells 
	// within an html tbody element
	function table2data(tableBody)
	{
		const tableData = []; // create the array that'll hold the data rows
		tableBody.querySelectorAll('tr')
		.forEach(row=>{  // for each table row...
			const rowData = [];  // make an array for that row
			row.querySelectorAll('td')  // for each cell in that row
			.forEach(cell=>{
				rowData.push(cell.innerText);  // add it to the row data
			})
			tableData.push(rowData);  // add the full row to the table data 
		});
		return tableData;
	}

	// this function puts data into an html tbody element
	function data2table(tableBody, tableData)
	{
		tableBody.querySelectorAll('tr') // for each table row...
		.forEach((row, i)=>{  
			const rowData = tableData[i-1]; // get the array for the row data
			row.querySelectorAll('td')  // for each table cell ...
			.forEach((cell, j)=>{
				cell.innerText = rowData[j]; // put the appropriate array element into the cell
			})
			tableData.push(rowData);
		});
	}
	
	function changeSortVar()
	{
		var text = $(event.target).text();
		if(text == "Km" && km == 0) {
			km = 1;
		} else if(text == "Km" && km == 1){ 
			km = 0; 
		} 

		if(text == "Liter" && liter == 0) {
			liter = 1;
		} else if(text == "Liter" && liter == 1){ 
			liter = 0; 
		}
		
		if(text == "Kroner" && kr == 0) {
			kr = 1;
		} else if(text == "Kroner" && kr == 1){ 
			kr = 0; 
		}
		
		if(text == "Km/l" && kml == 0) {
			kml = 1;
		} else if(text == "Km/l" && kml == 1){ 
			kml = 0; 
		}
		
		if(text == "Km/kr" && kmkr == 0) {
			kmkr = 1;
		} else if(text == "Km/kr" && kmkr == 1){ 
			kmkr = 0; 
		}
		
		if(text == "Kr/km" && krkm == 0) {
			krkm = 1;
		} else if(text == "Kr/km" && krkm == 1){ 
			krkm = 0; 
		}
		
		if(text == "L/kr" && lkr == 0) {
			lkr = 1;
		} else if(text == "L/kr" && lkr == 1){ 
			lkr = 0; 
		}
		
		if(text == "L/km" && lkr == 0) {
			lkr = 1;
		} else if(text == "L/km" && lkr == 1){ 
			lkr = 0; 
		}
		
		if(text == "Kr/l" && krl == 0) {
			krl = 1;
		} else if(text == "Kr/l" && krl == 1){ 
			krl = 0; 
		}
		
		if(text == "Dato" && date == 0) {
			date = 1;
		} else if(text == "Dato" && date == 1){ 
			date = 0; 
		}
	}
	
	function changeDateFormat(date)
	{
		console.log("Date: " + date);
		if (typeof(date) == "undefined") {
			return "0000-00-00";
		}
		var length = date.length;
		var index = length - 4;
		var year = date.slice(index, length);
		index = index - 1;
		
		var monthDate = date.slice(0, index);
		var emptyPos = monthDate.indexOf(" ") + 1;

		var month; 
		if (date.indexOf("januar") != -1) {
			month = "01";
		} else if (date.indexOf("februar") != -1) {
			month = "02";
		} else if (date.indexOf("marts") != -1) {
			month = "03";
		} else if (date.indexOf("april") != -1) {
			month = "04";
		} else if (date.indexOf("maj") != -1) {
			month = "05";
		} else if (date.indexOf("juni") != -1) {
			month = "06";
		} else if (date.indexOf("juli") != -1) {
			month = "07";
		} else if (date.indexOf("august") != -1) {
			month = "08";
		} else if (date.indexOf("september") != -1) {
			month = "09";
		} else if (date.indexOf("oktober") != -1) {
			month = "10";
		} else if (date.indexOf("november") != -1) {
			month = "11";
		} else if (date.indexOf("december") != -1) {
			month = "12";
		}
		
		index = emptyPos - 2;
		var dayDate = monthDate.slice(0, index);
		if (dayDate.charAt(1) == "") {
			dayDate = "0" + dayDate;
		}
		return year + "-" + month + "-" + dayDate;
	}

	function makeActualSort(a,b, sortColumn) 
	{
		var text = $(event.target).text();

		if(text == "Dato" && date == 0) {
			dateA = changeDateFormat(a[sortColumn]);
			dateB = changeDateFormat(b[sortColumn]);
			if(Date.parse(dateA) > Date.parse(dateB)) {
				return 1;
			}
			return -1;
		} else if (text == "Dato" && date == 1) {
			dateA = changeDateFormat(a[sortColumn]);
			dateB = changeDateFormat(b[sortColumn]);
			if(Date.parse(dateA) < Date.parse(dateB)) {
				return 1;
			} else {
				return -1;
			}
		}
		
		if(text == "Kr/l" && krl == 0) {
			if(a[sortColumn] > b[sortColumn]){
				return 1;
			}
			return -1;
		} else if(text == "Kr/l" && krl == 1) {
			if(a[sortColumn] <= b[sortColumn]){
				return 1;
			}
			return -1;			
		}

		if(text == "Km" && km == 0) {
			if(a[sortColumn] > b[sortColumn]){
				return 1;
			}
			return -1;
		} else if(text == "Km" && km == 1){
			if(a[sortColumn] <= b[sortColumn]){
				return 1;
			}
			return -1;			
		}
		
		if(text == "Liter" && liter == 0) {
			if(a[sortColumn] > b[sortColumn]){
				return 1;
			}
			return -1;
		} else if(text == "Liter" && liter == 1){
			if(a[sortColumn] <= b[sortColumn]){
				return 1;
			}
			return -1;			
		}
		
		if(text == "Kroner" && kr == 0) {
			if(a[sortColumn] > b[sortColumn]){
				return 1;
			}
			return -1;
		} else if(text == "Kroner" && kr == 1) {
			if(a[sortColumn] <= b[sortColumn]){
				return 1;
			}
			return -1;			
		}
		
		if(text == "Km/l" && kml == 0) {
			if(a[sortColumn] > b[sortColumn]){
				return 1;
			}
			return -1;
		} else if(text == "Km/l" && kml == 1) {
			if(a[sortColumn] <= b[sortColumn]){
				return 1;
			}
			return -1;			
		}
		
		if(text == "Km/kr" && kmkr == 0) {
			if(a[sortColumn] > b[sortColumn]){
				return 1;
			}
			return -1;
		} else if(text == "Km/kr" && kmkr == 1) {
			if(a[sortColumn] <= b[sortColumn]){
				return 1;
			}
			return -1;			
		}
		
		if(text == "Kr/km" && krkm == 0) {
			if(a[sortColumn] > b[sortColumn]){
				return 1;
			}
			return -1;
		} else if(text == "Kr/km" && krkm == 1) {
			if(a[sortColumn] <= b[sortColumn]){
				return 1;
			}
			return -1;			
		}
		
		if(text == "L/km" && lkm == 0) {
			if(a[sortColumn] > b[sortColumn]){
				return 1;
			}
			return -1;
		} else if(text == "L/km" && lkm == 1) {
			if(a[sortColumn] <= b[sortColumn]){
				return 1;
			}
			return -1;			
		}
		
		if(text == "L/kr" && lkr == 0) {
			if(a[sortColumn] > b[sortColumn]){
				return 1;
			}
			return -1;
		} else if(text == "L/kr" && lkr == 1) {
			if(a[sortColumn] <= b[sortColumn]){
				return 1;
			}
			return -1;			
		}
		
	}
	
	
</script>
