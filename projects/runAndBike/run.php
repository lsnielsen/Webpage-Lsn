<html>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <head>  
        <title>  
			Løb
        </title> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
        <script src="/Webpage-Lsn/diverse/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="/Webpage-Lsn/diverse/amcharts/gauge.js" type="text/javascript"></script>
		<link rel="stylesheet" href="/Webpage-Lsn/projects/runAndBike/css/run.css" type="text/css">
		<link rel="stylesheet" href="/Webpage-Lsn/projects/runAndBike/css/popup.css" type="text/css">
	</head>  
	<body>
		<h1>
			Løbe side
		</h1>   
		<form action="/../Webpage-Lsn/controller/runAndBike.php" method="post">  
			<fieldset style="background-color: #ff8080">
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
						<input class="runningInput" type="text" placeholder="format: hh:mm:ss " name="time"> 					 
					</div>
				</center>
				<div style="margin-top: 20px; margin-bottom: 200px;">

				</div>
				
				<div class="runNumbers">
					<h2 style="margin-left: 40%;">
						Tabel over indtastede løbe tal
					</h2>

					<table class="runTable">
						<tr>
							<th class="runHeader">Dato</th>
							<th class="runHeader">Kilometer</th>
							<th class="runHeader">Tid</th>
							<th class="runHeader">Slet række</th>
						</tr>
						<?php 
							$runAndBike = "run";
							include  '../projects/runAndBike/runAndBikeTable.php'; 
						?>
					</table>
				</div>
			</fieldset>  
		</form>     	
		

		<div class="deleteRunAndBikeRow">
			<span class="helper"></span>
			<div>
				<div class="deleteRunAndBikeRowPopupCloseButton popupCloseButton">&times;</div>
				<div class="messageInfo">Er du sikker på, at du vil slette denne række?</div>
				<ul class="rowToDelete">
					<li class="dateToDelete"> </li>
					<li class="kmToDelete"> </li>
					<li class="timeToDelete"> </li>
				</ul>
				<div>
					<div class="deleteRunAndBikeRowYes runPopupButton">Ja</div>
					<div class="deleteRunAndBikeRowNo runPopupButton">Nej</div>
				</div>
			</div>
			<form id="deleteSpecificRow" action="/../Webpage-Lsn/controller/RunAndBike.php" method="post">
				<input type="hidden" id="hiddenField" name="runButton"/>
			</form>
		</div>

		<h1>
			Graf over løbe hastigheden
		</h1>

		<?php
			include("graphs/runChart.php"); 
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


<script>
	$(".deleteRow").click(function() {
		var row = $(this).closest('tr');
		var txt = row.text();
		var id = row.attr('id');
		var date;
		var km;
		var time;
		var counter = 1;
		row.find('td').each(function() {
			var stuff = $(this).text();
			if (counter == 1) {
				date = "Dato: " + stuff;
				counter++;
			} else if (counter == 2) {
				km = "Km: " + stuff;
				counter++;
			} else if (counter == 3) {
				time = "Tid: " + stuff;
				counter++;
			} 
		});   
		
		txt = date + km + time + time;

		$(".dateToDelete").text(date);
		$(".kmToDelete").text(km);
		$(".timeToDelete").text(time);
		$("#hiddenField").val(id);
		$('.deleteRunAndBikeRow').show();
		$('.deleteRunAndBikeRowYes').click(function(){
			$("#deleteSpecificRow").submit();
		});
	});
    $('.deleteRunAndBikeRowPopupCloseButton').click(function(){
        $('.deleteRunAndBikeRow').hide();
    });
    $('.deleteRunAndBikeRowNo').click(function(){
        $('.deleteRunAndBikeRow').hide();
    });
    
	$('.wrongRunAndBikeInputButton').click(function(){
        $('.wrongRunAndBikeInput').hide();
    });
    $('.wrongRunAndBikeInputPopupCloseButton').click(function(){
        $('.wrongRunAndBikeInput').hide();
    });
	
	if($(".notDisplayingWrongInput").length){
		$(".notDisplayingWrongInput").css("display", "block");
	}
</script>



