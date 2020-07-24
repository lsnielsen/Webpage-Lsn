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
						Antal kilometer <br>
					<label>
					<input class="dieselInput" type="text" placeholder="ex: 659,4 kilometer" name="km">  				 
					<br> <br>
					<label style="margin-left: 40px; font-weight: bold;">
						Liter <br>
					</label>  
					<input class="dieselInput" type="text" placeholder="ex: 23,3 liter" name="liter"> 				 
					<br> <br>
					<label style="margin-left: 40px; font-weight: bold;">
						Kroner <br>
					</label>
					<input class="dieselInput" type="text" placeholder="ex: 223,3 kroner" name="kr">
					<br>
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
			</fieldset>  
		</form>     		
		<button class="dieselButton" type="submit" value="dieselPage" name="dieselButton">  
			Indsæt tal
		</button>



		

		<div id="chartContainer" style="height: 370px; width: 100%;"></div>
		<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
		
    </body>  
	
	
	<form action="setup.php" method="post">
		<button type="submit" name="cvButton" id="backToStartButton" value="frontpage"> Tilbage til startside </button>
	</form>
</html> 

<style>
	.dieselInput {
		padding: 12px 20px;
		margin: 8px 0;
		box-sizing: border-box;		
	}

	.dieselNumbers {
		margin-left: 780px;
		margin-bottom: 150px;
		margin-top: -200px;
	}

	.dieselTable {
		width: 60%;
	}
			
	.dieselButton{
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
	}
	h1{  
	  color: rebeccapurple;  
	  font-family: fantasy;  
	  font-style: italic;  
	  text-align: center;
	}  
			
	table {
	  font-family: arial, sans-serif;
	  border-collapse: collapse;
	  width: 100%;
	}

	td, th {
	  border: 1px solid #dddddd;
	  text-align: left;
	  padding: 8px;
	}

	tr:nth-child(even) {
	  background-color: #dddddd;
	}
	
	#backToStartButton {
		padding: 20;
		margin-bottom: 30px;
		border-radius: 20px;
		width: 100%;
		background-color: #ff944d;
		font-size: 20px;
		border: solid #8cff1a;
		border-width: 1px 1px 1px 1px;
		font-family: Georgia, serif;
	}
</style>

<script>
	window.onload = function () {

		var chart = new CanvasJS.Chart("chartContainer", {
			animationEnabled: true,
			theme: "light2",
			title:{
				text: "Simple Line Chart"
			},
			axisY:{
				includeZero: false
			},
			data: [{        
				type: "line",
				indexLabelFontSize: 16,
				dataPoints: [
					{ y: 450 },
					{ y: 414},
					{ y: 520, indexLabel: "\u2191 highest",markerColor: "red", markerType: "triangle" },
					{ y: 460 },
					{ y: 450 },
					{ y: 500 },
					{ y: 480 },
					{ y: 480 },
					{ y: 410 , indexLabel: "\u2193 lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
					{ y: 500 },
					{ y: 480 },
					{ y: 510 }
				]
			}]
		});
		chart.render();

	}
</script>