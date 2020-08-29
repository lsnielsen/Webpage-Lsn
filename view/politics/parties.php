<html lang="da">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<head>
		<link rel="stylesheet" type="text/css" href="css/backButton.css">
		<link rel="stylesheet" type="text/css" href="css/parties.css">
		<title>
			Folketinget
		</title>
	</head>
	<body>
		<h1>
			Folketingets partier på Christiansborg
		</h1>		
	
		<?php
				include 'partiTable.php';
				$rss = new SimpleXMLElement($xmlFeed);
		?>
		
		<center class="politicTable">
			<table>
				<thead>
					<tr class="row100">
						<th>
							Parti
						</th>
						<th>
							Formand
						</th>
						<th>
							Antal mandater
						</th>
					</tr>
				</thead>
				<tbody>
			<?php
				foreach ($rss ->xpath('//channel') as $channel) {
					foreach ($channel->item as $item) {
						echo 	"<tr class=row100>
									<td>
										$item->parti
									</td>
									<td>
										$item->chairman
									</td>
									<td>
										$item->mandates
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





