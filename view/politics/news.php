<html lang="da">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<?xml-stylesheet type="text/css" href="collectionStyle.xsl"?>
	<head>
		<title>
			Nyheder
		</title>
	</head>
	<body>
		<h1>
			Inkluderer her en xml fil
		</h1>
		<?php
			include "collection.xml";
		?>
		<br><br><br><br><br>
		<div id="toInsertXml">
		
		</div>
		
		</xml>
		<form action="/Webpage-Lsn/controller/politics.php" method="post">
			<button id="backButton" type="submit"> 
				Tilbage
			</button>
		</form>
	</body>

</html>

<script type="text/javascript">
  var xml = new ActiveXObject("Microsoft.XMLDOM")
  xml.async = false
  xml.load("some_xml.xml")
  var xsl = new ActiveXObject("Microsoft.XMLDOM")
  xsl.async = false
  xsl.load("some_xsl.xsl")
  document.write(xml.transformNode(xsl))
</script>

<script>

	var xml = "<rss version='2.0'><channel><title>RSS Title</title></channel></rss>",
//	var newXml = "collection.xml";
	//$.ajax({
		//type: "GET",
		//url: "collection.xml",
		//dataType: "xml",
		//success: xmlParser
	//});
	
	//function xmlParser(xml) {

		//$('#load').fadeOut();

		//$(xml).find("cd").each(function () {

			//$("#toInsertXml").append('<div class="book"><div class="title">' + 
				//$(this).find("Title").text() +   
				//'</div><div class="description">' + 
				//$(this).find("Description").text() + 
				//'</div><div   class="date">Published ' + 
				//$(this).find("Date").text() + 
				//'</div></div>'
			//);
			//$(".book").fadeIn(1000);

		//});

	//}
	
	
	xmlDoc = $.parseXML( xml ),
	$xml = $( xmlDoc ),
	$title = $xml.find( "title" );
	 
	// Append "RSS Title" to #someElement
	$( "#toInsertXml" ).append( $title.text() );
	 
	// Change the title to "XML Title"
	$title.text( "XML Title" );
	 
	// Append "XML Title" to #anotherElement
	//$( "#anotherElement" ).append( $title.text() );
	
</script>









