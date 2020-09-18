<html>  
	<?php $txtFile = include("../txt/diesel/txt.php"); ?>
    <head>  
        <title>  
			<?php echo $txtFile['frontpage']['tabHeader']; ?>
        </title>  
	</head>  
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/diesel.css" type="text/css">
	<link rel="stylesheet" href="/Webpage-Lsn/projects/diesel/css/popup.css" type="text/css">
	<body>
		<h1>
			<?php echo $txtFile['frontpage']['header']; ?>
		</h1>   
		<form action="/../Webpage-Lsn/controller/diesel.php" method="post">  
			<fieldset style="background-color: #b3ecff">
				<legend style="font-weight: bold; font-size: 23;"> 
					<?php echo $txtFile['frontpage']['infoHeader']; ?>
				</legend>  
				<div style="margin-top: 30px;">
					<div style="display: inline-block;">
						<label style="margin-left: 40px; font-weight: bold;">
							<?php echo $txtFile['general']['date']; ?>
							<br>
						</label>
						<input class="dieselInput" type="text" placeholder="format: yyyy-mm-dd" name="date">  
					</div>
					<div style="display: inline-block;">
						<label style="margin-left: 40px; font-weight: bold;">
							<?php echo $txtFile['frontpage']['km']; ?>
							<br>
						</label>
						<input class="dieselInput" type="text" placeholder="ex: 659,4 " name="km">  				 
					</div>
				</div>
				<div style="margin-top: 20px; margin-bottom: 200px;">
					<div style="display: inline-block;">
						<label style="margin-left: 40px; font-weight: bold;">
							<?php echo $txtFile['frontpage']['liter']; ?>
							<br>
						</label>  
						<input class="dieselInput" type="text" placeholder="ex: 23,3 " name="liter"> 					 
					</div>
					
					<div style="display: inline-block;">
						<label style="margin-left: 40px; font-weight: bold;">
							<?php echo $txtFile['frontpage']['kr']; ?>
							<br>
						</label>
						<input class="dieselInput" type="text" placeholder="ex: 223,3 " name="kr">				 
					</div>
					<br> <br> <br>
					
					<button class="dieselButton" type="submit" value="dieselPage" name="dieselButton" style="margin-left: 10px;">  
						<?php echo $txtFile['frontpage']['enterNumbers']; ?>
					</button>

				</div>
				
				<div class="dieselNumbers">
					<h2 style="margin-left: 150px;">
						<?php echo $txtFile['frontpage']['tableHeader']; ?>
					</h2>

					<table class="dieselTable">
						<tr>
							<th class="dieselHeader">
								<?php echo $txtFile['general']['date']; ?>
							</th>
							<th class="dieselHeader">
								<?php echo $txtFile['frontpage']['km']; ?>
							</th>
							<th class="dieselHeader">
								<?php echo $txtFile['frontpage']['kr']; ?>
							</th>
							<th class="dieselHeader">
								<?php echo $txtFile['frontpage']['liter']; ?>
							</th>
							<th class="dieselHeader">
								<?php echo $txtFile['frontpage']['deleteRow']; ?>
							</th>
						</tr>
						<?php
							$tableData = "SELECT * FROM diesel";
							$result = mysqli_query($con,$tableData);
							$graphArray = makeQueryToArray($result, "table");
							
							for($i=0; $i<sizeOf($graphArray); $i++) {
								echo "	<tr id="; echo $graphArray[$i]['id']; echo ">";
											echo "<td class=dieselTableCell>";
											echo $graphArray[$i][1];
											echo "</td>
											<td class=dieselTableCell>";
											echo $graphArray[$i]['kilometer'];
											echo "</td>
											<td class=dieselTableCell>";
											echo $graphArray[$i]['kroner'];
											echo "</td>
											<td class=dieselTableCell>";
											echo $graphArray[$i]['liter'];
											echo "</td>									
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
				<?php include("statisticButtons.php"); ?>
			</fieldset>  
		</form>     	
		

		<div class="deleteDieselRow">
			<span class="helper"></span>
			<div>
				<div class="deleteDieselRowPopupCloseButton popupCloseButton">&times;</div>
				<div class="messageInfo">
					<?php echo $txtFile['frontpage']['confirmDelete']; ?>
				</div>
				<ul class="rowToDelete">
					<li class="dateToDelete"> </li>
					<li class="kmToDelete"> </li>
					<li class="krToDelete"> </li>
					<li class="literToDelete"> </li>
				</ul>
				<div>
					<div class="deleteDieselRowYes dieselPopupButton">
						<?php echo $txtFile['frontpage']['yes']; ?>
					</div>
					<div class="deleteDieselRowNo dieselPopupButton">
						<?php echo $txtFile['frontpage']['no']; ?>
					</div>
				</div>
			</div>
			<form id="deleteSpecificRow" action="/../Webpage-Lsn/controller/diesel.php" method="post">
				<input type="hidden" id="hiddenField" name="dieselButton"/>
			</form>
		</div>
		
		
		<?php include "../projects/diesel/graphs/graph.php"; ?>
    </body>  
	
	
	<form action="/../Webpage-Lsn/controller/frontpage.php" method="post">
		<button type="submit" name="dieselButton" id="backToStartButton" value="frontpage"> 
			<?php echo $txtFile['frontpage']['backButton']; ?>
		</button>
	</form>
</html> 

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
	$(".deleteRow").click(function() {
		var row = $(this).closest('tr');
		var txt = row.text();
		var id = row.attr('id');
		var dato;
		var km;
		var liter;
		var kroner;
		var counter = 1;
		row.find('td').each(function() {
			var stuff = $(this).text();
			if (counter == 1) {
				dato = "Dato: " + stuff;
				counter++;
			} else if (counter == 2) {
				km = "Km: " + stuff;
				counter++;
			} else if (counter == 3) {
				kroner = "Kroner: " + stuff;
				counter++;
			} else if (counter == 4) {
				liter = "Liter: " + stuff;
				counter = 0;
			}
		});   
		
		txt = dato + km + kroner + liter;

		$(".dateToDelete").text(dato);
		$(".kmToDelete").text(km);
		$(".krToDelete").text(kroner);
		$(".literToDelete").text(liter);
		$("#hiddenField").val(id);
		$('.deleteDieselRow').show();
		$('.deleteDieselRowYes').click(function(){
			$("#deleteSpecificRow").submit();
		});
	});
    $('.deleteDieselRowPopupCloseButton').click(function(){
        $('.deleteDieselRow').hide();
    });
    $('.deleteDieselRowNo').click(function(){
        $('.deleteDieselRow').hide();
    });
    
	$('.wrongDieselInputButton').click(function(){
        $('.wrongDieselInput').hide();
    });
    $('.wrongDieselInputPopupCloseButton').click(function(){
        $('.wrongDieselInput').hide();
    });
	
	if($(".notDisplayingWrongInput").length){
		$(".notDisplayingWrongInput").css("display", "block");
	}
</script>

