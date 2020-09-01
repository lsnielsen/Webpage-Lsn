<html>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <head>  
        <title>  
			Løb
        </title> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
        <script src="/Webpage-Lsn/projects/running/graphs/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="/Webpage-Lsn/projects/running/graphs/amcharts/gauge.js" type="text/javascript"></script>
		<link rel="stylesheet" href="/Webpage-Lsn/projects/running/css/run.css" type="text/css">
		<link rel="stylesheet" href="/Webpage-Lsn/projects/running/css/popup.css" type="text/css">
	</head>  
	<body>
		<h1>
			Løbe side
		</h1>   
		<form action="/../Webpage-Lsn/controller/running.php" method="post">  
			<fieldset style="background-color: #b3ecff">
				<legend style="font-weight: bold; font-size: 23;"> 
					Indtast dine løbe tal, og de vil blive vist i tabellen nedenunder
				</legend>  
				<center style="margin-top: 50px;">
					<button class="runButton" type="submit" value="runPage" name="runButton" style="margin-right: 30px;">  
						Indsæt tal
					</button>
					<div style="display: inline-block;">
						<label style="margin-left: 40px; font-weight: bold; margin-top: -100px;">
							Dato <br>
						</label>
						<input class="runningInput" type="text" placeholder="format: yyyy-mm-dd" name="date">  
					</div>
					<div style="display: inline-block;">
						<label style="margin-left: 40px; font-weight: bold;">
							Antal kilometer <br>
						</label>
						<input class="runningInput" type="text" placeholder="ex: 659,4 " name="km">  				 
					</div>
					<div style="display: inline-block;">
						<label style="margin-left: 40px; font-weight: bold;">
							Tid <br>
						</label>  
						<input class="runningInput" type="text" placeholder="ex: 23,3 " name="liter"> 					 
					</div>
				</center>
				<div style="margin-top: 20px; margin-bottom: 200px;">

				</div>
				
				<div class="runNumbers">
					<h2 style="margin-left: 40%;">
						Tabel over indtastede run tal
					</h2>

					<table class="runTable">
						<tr>
							<th class="runHeader">Dato</th>
							<th class="runHeader">Kilometer</th>
							<th class="runHeader">Tid</th>
							<th class="runHeader">Slet række</th>
						</tr>
						<?php include  '../projects/running/runTable.php'; ?>
					</table>
				</div>
				<?php //include("statisticButtons.php"); ?>
			</fieldset>  
		</form>     	
		

		<div class="deleteDieselRow">
			<span class="helper"></span>
			<div>
				<div class="deleteDieselRowPopupCloseButton popupCloseButton">&times;</div>
				<div class="messageInfo">Er du sikker på, at du vil slette denne række?</div>
				<ul class="rowToDelete">
					<li class="dateToDelete"> </li>
					<li class="kmToDelete"> </li>
					<li class="krToDelete"> </li>
					<li class="literToDelete"> </li>
				</ul>
				<div>
					<div class="deleteDieselRowYes runPopupButton">Ja</div>
					<div class="deleteDieselRowNo runPopupButton">Nej</div>
				</div>
			</div>
			<form id="deleteSpecificRow" action="/../Webpage-Lsn/controller/run.php" method="post">
				<input type="hidden" id="hiddenField" name="runButton"/>
			</form>
		</div>

		<?php
			include("graphs/runChart.html"); 
		?>
		
		<center>
			<div id="chartdiv" style="width:600px; height:500px;"></div>
		</center>
    </body>  
	
	
	<form action="/../Webpage-Lsn/controller/frontpage.php" method="post">
		<button type="submit" name="runButton" id="backToStartButton" value="frontpage"> 
			Tilbage til startside 
		</button>
	</form>
</html> 



