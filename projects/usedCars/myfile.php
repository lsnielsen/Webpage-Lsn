
<script>



	$("#webscraper").click(function() { 
		$('#msgDiv').load('https://www.bilbasen.dk/');
    });

	url = "https://www.bilbasen.dk/brugt/bil/audi/a6/30-tdi-272-avant-quattro-s-tr-5d/4761460"
	
	$.get(url, 
		function( data ) {
			console.log( typeof data);
			console.log(data);
			//$('#msgDiv').load('https://www.bilbasen.dk/');
		}, 
	'html');  // or 'text', 'xml', 'more'


</script>
<table id="msgDiv"></table>