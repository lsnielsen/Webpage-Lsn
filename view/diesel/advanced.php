<?php
	include "helpFunctions/helper.php";
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
	<link rel="stylesheet" href="/Webpage-Lsn/view/diesel/css/advanced.css" type="text/css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<body style="background-color: #d9ffb3;">  
		<h1>
			Avanceret statistik for diesel forbrug
		</h1>  
		<table class="advancedTable statisticTable">
						<tr>
							<th class="dieselHeader headerSortUp dateColumn">Dato</th>
							<th class="dieselHeader headerSortDown kmColumn">Km</th>
							<th class="dieselHeader headerSortDown literColumn">Liter</th>
							<th class="dieselHeader headerSortDown kronerColumn">Kroner</th>
							<th class="dieselHeader headerSortDown krlColumn">Kr/l</th>
							<th class="dieselHeader headerSortDown kmlColumn">Km/l</th>
							<th class="dieselHeader headerSortDown kmkrColumn">Km/kr</th>
							<th class="dieselHeader headerSortDown krkmColumn">Kr/km</th>
							<th class="dieselHeader headerSortDown lkmColumn">L/km</th>
							<th class="dieselHeader headerSortDown lkrColumn">L/kr</th>
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
											echo number_format($graphArray[$i]['kilometer'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['liter'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell advancedDieselCell>";
											echo number_format($graphArray[$i]['kroner'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['kr/l'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['km/l'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['km/kr'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['kr/km'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['l/km'], 2, ',', '.');
											echo "</td>
											<td class=dieselTableCell>";
											echo number_format($graphArray[$i]['l/kr'], 2, ',', '.');
										echo "</td></tr>";
							} ?>		
		</table>
		<?php include "bottumTable.php"; ?>
		
		<form>
			<button class="dieselButton" 
					action="/../Webpage-Lsn/view/diesel/controller.php" 
					value="dieselPage"
					name="dieselButton"						
					style="margin-left: auto;">
				Tilbage
			</button>
		</form>
		<?php include "graphs/krPerLiter.php"; ?>
		<?php include "graphs/kmPerLiter.php"; ?>
		<?php include "graphs/kmPerKroner.php"; ?>
		<?php //include "graphs/krPerKm.php"; ?>
		<?php //include "graphs/literPerKm.php"; ?>
		<?php //include "graphs/literPerKroner.php"; ?>
		<?php include "graphs/combinedGraph.php"; ?>
		
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

<?php include "helpFunctions/tableSort.php" ?>











