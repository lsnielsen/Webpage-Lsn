<?php
	include "helper.php";
	$con = mysqli_connect('127.0.0.1','root','');
	if(!$con) {  
		echo 'not connect to the server';  
	}  
	if(!mysqli_select_db($con,'lsnDb')) {  
		echo 'database not selected';  
	}    
?>
<html>  
    <head>  
        <title>  
            Advanced
        </title>  
	</head>  
	<link rel="stylesheet" href="/Webpage-Lsn/view/diesel/diesel.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/view/diesel/popup.css" type="text/css">
	<body>  
		<h1>
			Avanceret statistik for diesel forbrug
		</h1>  
		<table class="dieselTable">
						<tr>
							<th class="dieselHeader">Dato</th>
							<th class="dieselHeader">Kilometer</th>
							<th class="dieselHeader">Kroner</th>
							<th class="dieselHeader">Liter</th>
						</tr>
						<?php
							$tableData = "SELECT * FROM diesel";
							$result = mysqli_query($con,$tableData);
							$graphArray = handleAdvancedArray($result, "table");
							
							for($i=0; $i<sizeOf($graphArray); $i++) {
								echo "	<tr id="; echo $graphArray[$i]['id']; echo ">";
											echo "<td class=dieselTableCell>";
											echo $graphArray[$i][1];
											echo "</td>
											<td class=dieselTableCell>";
											echo $graphArray[$i]['kilometer'];
											echo "</td>
											<td class=dieselTableCell>";
											echo $graphArray[$i]['kroner'];
											echo "</td>
											<td class=dieselTableCell>";
											echo $graphArray[$i]['liter'];
										echo "</tr>";
							}
						?>
					</table>
	</body>
</html>