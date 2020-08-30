
<html>

	<head>
		<title>
			Regeringen
		</title>
	</head>

	<body style="background-color: blue;">
		
		<h1 style="text-align: center; font-size: 50px;">
			Socialdemokratiet sidder i regeringen
		</h1>
		
		<div style="position: relative; margin-left: 200px;">
			<div style="font-size: 20px; font-weight: bold; margin-bottom: 10px;">
				Her er Mette Frederiksens grundlovstale for 2020
			</div>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/BXBLi-3szG8" 
					frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; 
					picture-in-picture" allowfullscreen>
			</iframe>
		</div>
		
		<?php
				include 'govTable.php';
				$rss = new SimpleXMLElement($xmlFeed);
		?>
		
		<center class="politicTable">
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
		
	</body>










</html>