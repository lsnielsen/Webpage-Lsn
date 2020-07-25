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
			echo 'Vent 5 sekunder og dine nye data vil blive vist i tabellen';  
		}  
		header("refresh:5; url=http://localhost/Webpage-Lsn/view/diesel/controller.php"); 
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
						<input class="dieselInput" type="text" placeholder="ex: 2020-07-24" name="date">  	
						<br> <br>
						<label style="margin-left: 40px; font-weight: bold;">
							Antal kilometer <br>
						</label>
						<input class="dieselInput" type="text" placeholder="ex: 659.4 kilometer" name="km">  				 
				</div>
				<div style="margin-left: 220px; margin-top: -172px; margin-bottom: 200px;">
						<label style="margin-left: 40px; font-weight: bold;">
							Liter <br>
						</label>  
						<input class="dieselInput" type="text" placeholder="ex: 23.3 liter" name="liter"> 				 
						<br> <br>
						<label style="margin-left: 40px; font-weight: bold;">
							Kroner <br>
						</label>
						<input class="dieselInput" type="text" placeholder="ex: 223.3 kroner" name="kr">
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
		
		<?php
			include "graph.php";
		?>
    </body>  
	
	
	<form action="/../Webpage-Lsn/setup.php" method="post">
		<button type="submit" name="cvButton" id="backToStartButton" value="frontpage"> Tilbage til startside </button>
	</form>
</html> 

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
	$(".deleteRow").click(function() {
		var row = $(this).closest('tr');
		var id = row.attr('id');
		console.log(id);
		$("#" + id).remove();
	});
</script>






