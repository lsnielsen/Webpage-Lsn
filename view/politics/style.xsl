<?xml version="1.0" encoding="UTF-8"?>

<xsl:stylesheet version="1.0"
xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
	<html>
	<body>
	<h2>My CD Collection</h2>
	<table border="1">
	<tr bgcolor="#9acd32">
	  <th>Title</th>
	  <th>Artist</th>
	</tr>
	<xsl:for-each select="catalog/cd">
	<tr>
	  <td><xsl:value-of select="title"/></td>
	  <td><xsl:value-of select="artist"/></td>
	</tr>
	</xsl:for-each>
	</table>

		<form>
			<button id="xmlButton" 
					action="Webpage-Lsn/controller/politics.php" 
					value="politicPage"
					name="politicsButton"						
					style="margin-left: auto;">
				Tilbage
			</button>
		</form>
	</body>
	</html>
	<style>		
		#xmlButton{
			background-color: #4CAF50;
			border: none;
			color: white;
			padding: 15px 32px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			margin-left: -150px;
		} 
	</style>
	<script>
		console.log("lskdfj");
		var xhttp = new XMLHttpRequest();
		document.getElementById("xmlButton").onclick = function(){
			console.log("hello");
			timing = sleep(3000);
			xhttp.open("POST", "../Webpage-Lsn/controller/politics.php", true);
			xhttp.send();			
		};
		

		function sleep(duration) {
			return new Promise(resolve => {
				setTimeout(() => {
					resolve()
				}, duration * 1000)
			})
		}
	</script>

</xsl:template>

</xsl:stylesheet>