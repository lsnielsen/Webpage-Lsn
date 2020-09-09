
<script>



	$("#webscraper").click(function() { 
		$('#msgDiv').load('https://www.bilbasen.dk/');
    });

	url = "https://www.bilbasen.dk/brugt/bil/audi/a6/30-tdi-272-avant-quattro-s-tr-5d/4761460";
	url = "https://www.bilbasen.dk/brugt/bil/Audi";
	
	
	
	var array = new Array();
	var placement = new Array();
	
	urlOne = "https://www.bilbasen.dk/brugt/bil?IncludeEngrosCVR=true&PriceFrom=0&includeLeasing=true";
	urlTwo = "https://www.bilbasen.dk/brugt/bil/vw";
	urlThree = "https://www.bilbasen.dk/brugt/bil/vw/passat";
	urlFour = "https://www.bilbasen.dk/brugt/bil/vw/passat/1,4_gte_variant_dsg_5d";
	urlFive = "https://www.bilbasen.dk/brugt/bil";
	
	// Denne url starter sådan: /brugt/bil/vw/passat/14-gte-variant-dsg-5d/4808684
	url = "https://www.bilbasen.dk/brugt/bil/vw/passat/14-gte-variant-dsg-5d/4808684";
	
	$.get(urlTwo, 
		function( data ) {
			console.log( typeof data);
			console.log( data.length );
			console.log(" ");
	
			for ($i = 0; $i < data.length; $i++) {
				subStr = data.substring($i, $i+60);
				temp = subStr.search(/\"https:\/\/www\.bilbasen\.dk\/brugt\/bil\/vw\/[a-z]+["]$/i);
				if (temp != -1) {
					theString = subStr.substring(temp, subStr.length);
//					console.log("data found at: " + temp);
					console.log("The string " + theString);
				}
			}
			
			console.log(" ");
			//console.log( data );
			var n = data.search(urlTwo);
			console.log("this is n: " + n);
			console.log("this is data[n]: " + data[n]);
			var subStr = data.substring(n, n+40);
			console.log("this should be the substring: " + subStr);
			
		}, 
		'html' // or 'text', 'xml', 'more'
	);  


</script>


<table id="msgDiv"></table>




