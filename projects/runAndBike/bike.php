<html>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <head>  
        <title>  
			Cykling
        </title> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
        <script src="/Webpage-Lsn/diverse/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="/Webpage-Lsn/diverse/amcharts/gauge.js" type="text/javascript"></script>
		<link rel="stylesheet" href="/Webpage-Lsn/projects/runAndBike/css/bike.css" type="text/css">
		<link rel="stylesheet" href="/Webpage-Lsn/projects/runAndBike/css/popup.css" type="text/css">
	</head>  
	<body>
		<h1>
			Cykel side
		</h1>   
		<form action="/../Webpage-Lsn/controller/runAndBike.php" method="post">  
			<fieldset style="background-color: #80dfff">
				<legend style="font-weight: bold; font-size: 23;"> 
					Indtast dine cykel tal, og de vil blive vist i tabellen nedenunder
				</legend>  
				<center style="margin-top: 50px;">
					<button class="bikeButton" type="submit" value="bikePage" name="bikeButton" style="margin-right: 30px;">  
						Indsæt tal
					</button>
					<div style="display: inline-block;">
						<label style="margin-left: 40px; font-weight: bold; margin-top: -100px;">
							Dato <br>
						</label>
						<input class="bikeInput" type="text" placeholder="format: yyyy-mm-dd" name="date">  
					</div>
					<div style="display: inline-block;">
						<label style="margin-left: 40px; font-weight: bold;">
							Antal kilometer <br>
						</label>
						<input class="bikeInput" type="text" placeholder="ex: 659,4 " name="km">  				 
					</div>
					<div style="display: inline-block;">
						<label style="margin-left: 40px; font-weight: bold;">
							Tid <br>
						</label>  
						<input class="bikeInput" type="text" placeholder="format: hh:mm:ss " name="time"> 					 
					</div>
				</center>
				<div style="margin-top: 20px; margin-bottom: 200px;">

				</div>
				
				<div class="bikeNumbers">
					<h2 style="margin-left: 40%;">
						Tabel over indtastede cykel tal
					</h2>

					<table class="bikeTable">
						<tr>
							<th class="bikeHeader">Dato</th>
							<th class="bikeHeader">Kilometer</th>
							<th class="bikeHeader">Tid</th>
							<th class="bikeHeader">Slet række</th>
						</tr>
						<?php include  '../projects/runAndBike/bikeTable.php'; ?>
					</table>
				</div>
				<?php //include("statisticButtons.php"); ?>
			</fieldset>  
		</form>     	
		

		<div class="deleteBikeRow">
			<span class="helper"></span>
			<div>
				<div class="deleteBikeRowPopupCloseButton popupCloseButton">&times;</div>
				<div class="messageInfo">Er du sikker på, at du vil slette denne række?</div>
				<ul class="rowToDelete">
					<li class="dateToDelete"> </li>
					<li class="kmToDelete"> </li>
					<li class="timeToDelete"> </li>
				</ul>
				<div>
					<div class="deleteBikeRowYes bikePopupButton">Ja</div>
					<div class="deleteBikeRowNo bikePopupButton">Nej</div>
				</div>
			</div>
			<form id="deleteSpecificRow" action="/../Webpage-Lsn/controller/biking.php" method="post">
				<input type="hidden" id="hiddenField" name="bikeButton"/>
			</form>
		</div>

		<h1>
			Graf over cykel hastigheden
		</h1>

		<?php
			include("graphs/bikeChart.php"); 
		?>
		
		<center>
			<div id="chartdiv" style="width:600px; height:500px;"></div>
		</center>
    </body>  
	
	
	<form action="/../Webpage-Lsn/controller/frontpage.php" method="post">
		<button type="submit" name="bikeButton" id="backToStartButton" value="frontpage"> 
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
		$('.deleteBikeRow').show();
		$('.deleteBikeRowYes').click(function(){
			$("#deleteSpecificRow").submit();
		});
	});
    $('.deleteBikeRowPopupCloseButton').click(function(){
        $('.deleteBikeRow').hide();
    });
    $('.deleteBikeRowNo').click(function(){
        $('.deleteBikeRow').hide();
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



