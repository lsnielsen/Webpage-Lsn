
<html>

	<head>
		<title>
			Regeringen
		</title>
		<link rel="stylesheet" type="text/css" href="css/backButton.css">
		<link rel="stylesheet" type="text/css" href="css/parties.css">
	</head>

	<body style="background-color: blue;">
		
		<h1 style="text-align: center; font-size: 50px;">
			Socialdemokratiet sidder i regeringen
		</h1>
		
		<div style="position: relative; margin-left: 200px;">
			<div style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">
				Her er Mette Frederiksens grundlovstale for 2020
			</div>
			<iframe width="600" height="330" src="https://www.youtube.com/embed/BXBLi-3szG8" 
					frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; 
					picture-in-picture" allowfullscreen
					style="margin-bottom: 20px;">
			</iframe>
		</div>
		
		<?php
				include 'govTable.php';
				$rss = new SimpleXMLElement($xmlFeed);
		?>
		
		
		<center class="politicTable">
			<h1>
				Tabel over regeringens ministre
			</h1>
			<table>
				<thead>
					<tr class="row100">
						<th>
							Navn
						</th>
						<th>
							Minister område
						</th>
					</tr>
				</thead>
				<tbody>
			<?php
				foreach ($rss ->xpath('//channel') as $channel) {
					foreach ($channel->item as $item) {
						echo 	"<tr class=row100>
									<td>
										$item->name
									</td>
									<td>
										$item->area
									</td>
								</tr>";
					}
				}
			?>
				</tbody>
			</table> 
		</center>
		
		<form action="/Webpage-Lsn/controller/politics.php" method="post">
			<button id="politicsBackButton" type="submit"> 
				Tilbage
			</button>
		</form>
	</body>










</html>