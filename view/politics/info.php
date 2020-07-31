
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
$(document).ready(function () {
$.ajax({
    type: "GET",
    url: "books.xml",
    dataType: "xml",
    success: xmlParser
   });
   $.ajax({
    type: "GET",
    url: "style.xsl",
    dataType: "xsl"
   });
});

function xmlParser(xml) {

$('#load').fadeOut();

$(xml).find("book").each(function () {
    $(".main").append('<div class="book"><div class="title">' + 
		$(this).find("title").text() +   
		'</div><div class="description">' + 
		$(this).find("description").text() + 
		'</div><div   class="date">Published ' + 
		$(this).find("date").text() + 
		'</div></div>'
	);
    $(".book").fadeIn(1000);

 });

}
</script>

<!DOCTYPE html>

<html>
	<div>
		Der skulle komme noget xml her...
	</div>			
	<div class="main">
		<div align="center" class="loader">
			<img src="loader.gif" id="load" width="16" height="11"   align="absmiddle"/>
		</div>
	</div>

	<div class="clear"></div>
	<form action="/Webpage-Lsn/controller/politics.php" method="post">
		<button id="backButton" type="submit"> 
			Tilbage
		</button>
	</form>
 
</html>