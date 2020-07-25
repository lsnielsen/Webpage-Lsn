<?php

	$con = mysqli_connect('127.0.0.1','root','');  
	
	if(!$con) {  
		echo 'not connect to the server';  
	}  
	if(!mysqli_select_db($con,'lsnDb')) {  
		echo 'database not selected';  
	}  
	
	$fetchId = "SELECT * FROM diesel";
	$result = mysqli_query($con,$fetchId);
	$uniqueId = 0;
	while($row = $result->fetch_array()){
		$uniqueId = $row['id'];
	}

	if (isset($_POST['date']) && isset($_POST['km']) && isset($_POST['liter']) && isset($_POST['kr'])) {
		$date = $_POST['date'];
		$km = $_POST['km'];
		$liter = $_POST['liter'];
		$kr = $_POST['kr'];
		$id = $uniqueId + 1;
		$sql = "INSERT INTO diesel (id, date, kilometer, liter, kroner) VALUES ('$id', '$date','$km', '$liter', '$kr')";  
		  
		if(!mysqli_query($con,$sql)) {  
			echo 'Not inserted';  
		}  
		else {  
			echo 'Vent 3 sekunder og dine nye data vil blive vist i tabellen';  
		}  
		header("refresh:3; url=http://localhost/Webpage-Lsn/view/diesel/controller.php"); 
	}
		
?>

<html>  
    <head>  
        <title>  
            Forsøg på at skrive til databasen
        </title>  
	</head>  
	<link rel="stylesheet" href="/Webpage-Lsn/view/diesel/diesel.css" type="text/css">
	<body>  
		<h1>
			Diesel page
		</h1>   
		<form action="/../Webpage-Lsn/setup.php" method="post">  
			<fieldset>  
				<legend style="font-weight: bold; font-size: 23;"> 
					Indtast dine tal nedenfor, og de vil blive vist i tabellen til højre
				</legend>  
				<div style="margin-top: 30px;">
				
					<label style="margin-left: 40px; font-weight: bold;">
							Dato <br>
						</label>
						<input class="dieselInput" type="text" placeholder="format: yyyy-mm-dd" name="date">  	
						<br> <br>
						<label style="margin-left: 40px; font-weight: bold;">
							Antal kilometer <br>
						</label>
						<input class="dieselInput" type="text" placeholder="ex: 659.4 " name="km">  				 
				</div>
				<div style="margin-left: 220px; margin-top: -172px; margin-bottom: 200px;">
						<label style="margin-left: 40px; font-weight: bold;">
							Liter <br>
						</label>  
						<input class="dieselInput" type="text" placeholder="ex: 23.3 " name="liter"> 				 
						<br> <br>
						<label style="margin-left: 40px; font-weight: bold;">
							Kroner <br>
						</label>
						<input class="dieselInput" type="text" placeholder="ex: 223.3 " name="kr">
						<br> <br> <br>
						
						<button class="dieselButton" type="submit" value="dieselPage" name="dieselButton">  
							Indsæt tal
						</button>

				</div>
				
				<div class="dieselNumbers">
					<h2 style="margin-left: 150px;">
						Tabel over indtastede diesel tal
					</h2>

					<table class="dieselTable">
						<tr>
							<th class="dieselHeader">Dato</th>
							<th class="dieselHeader">Kilometer</th>
							<th class="dieselHeader">Kroner</th>
							<th class="dieselHeader">Liter</th>
							<th class="dieselHeader">Slet række</th>
						</tr>
						<?php
							$tableData = "SELECT * FROM diesel";
							$result = mysqli_query($con,$tableData);
							while($row = $result->fetch_array()){
								$row['date'] = changeDateFormat($row['date'], "table");
								echo "	<tr id=$row[id]>
											<td>
												$row[date]
											</td>
											<td>
												$row[kilometer]
											</td>
											<td>
												$row[kroner]
											</td>
											<td>
												$row[liter]
											</td>									
											<td> 
												<center> 
													<div class=deleteRow value=dieselPage name=dieselButton> 
														&#10006; 
													</div> 
												</center> 
											</td>
										</tr>";
							}
						?>
					</table>
				</div>
			</fieldset>  
		</form>     		
		<form id="deleteSpecificRow" action="/../Webpage-Lsn/setup.php" method="post">
			<input type="hidden" id="hiddenField" name="dieselButton"/>
		</form>
		
		<?php
			include "graph.php";
		?>
    </body>  
	
	
	<form action="/../Webpage-Lsn/setup.php" method="post">
		<button type="submit" name="dieselButton" id="backToStartButton" value="frontpage"> Tilbage til startside </button>
	</form>
</html> 

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
	$(".deleteRow").click(function() {
		var row = $(this).closest('tr');
		var id = row.attr('id');
		$("#hiddenField").val(id);
		$("#deleteSpecificRow").submit();
	});
</script>

<?php


	function changeDateFormat($date, $page)
	{
		$charOne = $date[0];
		$charTwo = $date[1];
		$charThree = $date[2];
		$charFour = $date[3];
		$charFive = $date[4];
		$charSix = $date[5];
		$charSeven = $date[6];
		$charEight = $date[7];
		$charNine = $date[8];
		$charTen = $date[9];
		
		if ($page == "table") {
			return $charNine . $charTen . "/" . $charSix . $charSeven . " - " . $charOne . $charTwo . $charThree . $charFour;
		} elseif ($page == "graph") {
			if ($charSix == 0 && $charNine =! 0) {
				return $charNine . $charTen . "/" . $charSeven . " - " . $charThree . $charFour;
			} elseif ($charSix != 0 && $charNine == 0) {
				return $charTen . "/" . $charSix . $charSeven . " - " . $charThree . $charFour;
			} elseif ($charSix == 0 && $charNine == 0) {
				return $charNine . $charTen . "/" . $charSix . $charSeven . " - " . $charThree . $charFour;
			}
		}
	}



	 
	function compareByTimeStamp($time1, $time2) 
	{ 
		if (strtotime($time1) < strtotime($time2)) { 
			return -1; 
		} else if (strtotime($time1) > strtotime($time2)) { 
			return 1; 
		} else
			return 0; 
	} 

	function makeQueryToArray($query) 
	{
		while ($rowArray = $query->fetch_array()) {
			$graphArray[] = $rowArray;
		}
		for ($i = 0; $i<sizeof($graphArray); $i++) {
			$dateArray[] = $graphArray[$i][1];
		}	
		usort($dateArray, "compareByTimeStamp");
		
		for ($i = 0; $i<sizeof($dateArray); $i++) {
			for ($j = 0; $j<sizeof($graphArray); $j++) {
				if ($dateArray[$i] == $graphArray[$j][1]) {
					$sortedArray[] = $graphArray[$j];
					continue;
				}
			}
		}

		for ($i = 0; $i<sizeof($sortedArray); $i++) {
			$sortedArray[$i][1] = changeDateFormat($sortedArray[$i][1], "graph");	
		}
		return $sortedArray;
	}

?>