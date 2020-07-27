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
	<link rel="stylesheet" href="/Webpage-Lsn/view/diesel/advanced.css" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<body>  
		<h1>
			Avanceret statistik for diesel forbrug
		</h1>  
		<table class="advancedTable">
						<tr>
							<th class="dieselHeader">Dato</th>
							<th class="dieselHeader">Km</th>
							<th class="dieselHeader">Liter</th>
							<th class="dieselHeader">Kroner</th>
							<th class="dieselHeader">Km/l</th>
							<th class="dieselHeader">Km/kr</th>
							<th class="dieselHeader">Kr/l</th>
							<th class="dieselHeader">Kr/km</th>
							<th class="dieselHeader">L/km</th>
							<th class="dieselHeader">L/kr</th>
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
											echo $graphArray[$i]['liter'];
											echo "</td>
											<td class=dieselTableCell advancedDieselCell>";
											echo $graphArray[$i]['kroner'];
											echo "</td>
											<td class=dieselTableCell>";
											echo $graphArray[$i]['km/l'];
											echo "</td>
											<td class=dieselTableCell>";
											echo $graphArray[$i]['km/kr'];
											echo "</td>
											<td class=dieselTableCell>";
											echo $graphArray[$i]['kr/l'];
											echo "</td>
											<td class=dieselTableCell>";
											echo $graphArray[$i]['kr/km'];
											echo "</td>
											<td class=dieselTableCell>";
											echo $graphArray[$i]['l/km'];
											echo "</td>
											<td class=dieselTableCell>";
											echo $graphArray[$i]['l/kr'];
										echo "</tr>";
							}
						?>
		</table>
		<form>
			<button class="dieselButton" 
					action="/../Webpage-Lsn/view/diesel/controller.php" 
					value="dieselPage"
					name="dieselButton"						
					style="margin-left: auto;">
				Tilbage
			</button>
		</form>
		<?php include "kmPerLiter.php"; ?>
		<?php include "krPerLiter.php"; ?> 		
		<?php include "kmPerKroner.php"; ?>
		<?php //include "krPerKm.php"; ?>
		<?php //include "literPerKm.php"; ?>
		<?php //include "literPerKroner.php"; ?>
		<?php include "combinedGraph.php"; ?>
		
		<form>
			<button class="dieselButton" 
					action="/../Webpage-Lsn/view/diesel/controller.php" 
					value="dieselPage"
					name="dieselButton"						
					style="margin-left: auto;">
				Tilbage
			</button>
		</form>
	</body>
</html>













