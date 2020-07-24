<?php

	$con = mysqli_connect('127.0.0.1','root','');  
	  
	if(!$con) {  
		echo 'not connect to the server';  
	}  
	if(!mysqli_select_db($con,'lsnDb')) {  
		echo 'database not selected';  
	}  

	if (isset($_POST['Name']) && isset($_POST['Email'])) {
		$name = $_POST['Name'];  
		$email = $_POST['Email'];   
		$sql = "INSERT INTO person (Id, Name,Email) VALUES (43,'$name','$email')";  
		  
		if(!mysqli_query($con,$sql)) {  
			echo 'Not inserted';  
		}  
		else {  
			echo 'Data Inserted';  
		}  
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
		<form action="setup.php" method="post">  
			<fieldset>  
				<legend style="font-weight: bold; font-size: 23;"> 
					Indtast dine tal nedenfor, og de vil blive vist i tabellen til højre
				</legend>  
				<div style="margin-top: 20px;">
				
					<label style="margin-left: 40px; font-weight: bold;">
							Dato <br>
						</label>
						<input class="dieselInput" type="text" placeholder="ex: 20/06-1990" name="date">  	
						<br> <br>
						<label style="margin-left: 40px; font-weight: bold;">
							Antal kilometer <br>
						</label>
						<input class="dieselInput" type="text" placeholder="ex: 659,4 kilometer" name="km">  				 
				</div>
				<div style="margin-left: 220px; margin-top: -172px; margin-bottom: 200px;">
						<label style="margin-left: 40px; font-weight: bold;">
							Liter <br>
						</label>  
						<input class="dieselInput" type="text" placeholder="ex: 23,3 liter" name="liter"> 				 
						<br> <br>
						<label style="margin-left: 40px; font-weight: bold;">
							Kroner <br>
						</label>
						<input class="dieselInput" type="text" placeholder="ex: 223,3 kroner" name="kr">

				</div>
				
				<div class="dieselNumbers">
					<h2 style="margin-left: 150px;">
						Tabel over indtastede diesel tal
					</h2>

					<table class="dieselTable">
						<tr>
							<th>Dato</th>
							<th>Kilometer</th>
							<th>Kroner</th>
							<th>Liter</th>
						</tr>
						<tr>
							<td>10/07-2005</td>
							<td>105</td>
							<td>36</td>
							<td>5</td>
						</tr>
					</table>
				</div>
				<button class="dieselButton" type="submit" value="dieselPage" name="dieselButton">  
					Indsæt tal
				</button>
			</fieldset>  
		</form>     		

		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
		
    </body>  
	
	
	<form action="setup.php" method="post">
		<button type="submit" name="cvButton" id="backToStartButton" value="frontpage"> Tilbage til startside </button>
	</form>
</html> 

<script src="/Webpage-Lsn/view/diesel/graph.js"></script>






