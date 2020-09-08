
<script>



	$("#webscraper").click(function() { 
		$('#msgDiv').load('https://www.bilbasen.dk/');
    });

	url = "https://www.bilbasen.dk/brugt/bil/audi/a6/30-tdi-272-avant-quattro-s-tr-5d/4761460";
	url = "https://www.bilbasen.dk/brugt/bil/Audi";
	
	
	url = "https://www.bilbasen.dk/brugt/bil?IncludeEngrosCVR=true&PriceFrom=0&includeLeasing=true";
	url = "https://www.bilbasen.dk/brugt/bil/vw";
	url = "https://www.bilbasen.dk/brugt/bil/vw/passat";
	url = "https://www.bilbasen.dk/brugt/bil/vw/passat/1,4_gte_variant_dsg_5d";
	
	// Denne url starter sådan: /brugt/bil/vw/passat/14-gte-variant-dsg-5d/4808684
	url = "https://www.bilbasen.dk/brugt/bil/vw/passat/14-gte-variant-dsg-5d/4808684";
	
	$.get(url, 
		function( data ) {
			console.log( typeof data);
			console.log(data);
			//$('#msgDiv').load('https://www.bilbasen.dk/');
		}, 
		'html' // or 'text', 'xml', 'more'
	);  


</script>
<table id="msgDiv"></table>