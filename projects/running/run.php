<html>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <head>  
        <title>  
			Løb
        </title> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>  
	<link rel="stylesheet" href="/Webpage-Lsn/projects/running/css/run.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/running/css/popup.css" type="text/css">
	<body>
		<h1>
			Løbe page
		</h1>   
		<form action="/../Webpage-Lsn/controller/running.php" method="post">  
			<fieldset style="background-color: #b3ecff">
				<legend style="font-weight: bold; font-size: 23;"> 
					Indtast dine tal nedenfor, og de vil blive vist i tabellen til højre
				</legend>  
				<div style="margin-top: 50px;">
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
				</div>
				<div style="margin-top: 20px; margin-bottom: 200px;">
					<div style="display: inline-block;">
						<label style="margin-left: 40px; font-weight: bold;">
							Tid <br>
						</label>  
						<input class="runningInput" type="text" placeholder="ex: 23,3 " name="liter"> 					 
					</div>
					
					<br> <br> <br>
					
					<button class="runButton" type="submit" value="runPage" name="runButton" style="margin-left: 10px;">  
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
							<th class="dieselHeader">Tid</th>
							<th class="dieselHeader">Slet række</th>
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
					<div class="deleteDieselRowYes dieselPopupButton">Ja</div>
					<div class="deleteDieselRowNo dieselPopupButton">Nej</div>
				</div>
			</div>
			<form id="deleteSpecificRow" action="/../Webpage-Lsn/controller/diesel.php" method="post">
				<input type="hidden" id="hiddenField" name="dieselButton"/>
			</form>
		</div>

		<?php
			include("graphs/graphTemp.html"); 
		?>
		
		
        <div id="chartdiv" style="width:400px; height:400px;"></div>

    </body>  
	
	
	<form action="/../Webpage-Lsn/controller/frontpage.php" method="post">
		<button type="submit" name="dieselButton" id="backToStartButton" value="frontpage"> 
			Tilbage til startside 
		</button>
	</form>
</html> 



