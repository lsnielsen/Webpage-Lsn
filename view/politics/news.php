<html lang="da">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<head>
		<link rel="stylesheet" type="text/css" href="css/backButton.css">
		<title>
			Nyheder
		</title>
	</head>
	<body>
		<h1>
			Nyheder og politik
		</h1>		
	
		<?php
				include 'xml.php';
				$rss = new SimpleXMLElement($xmlFeed);
				echo "<div class=newsHeader>";
				echo $rss->channel->title, ', ';
				echo $rss->channel->link, ', ';
				echo $rss->channel->description;
				echo "</div>";
		?>
		<center>
			<table border="1" class="xmlTable">
				<tr bgcolor="#9acd32">
					<th>
						Title
					</th>
					<th>
						Link
					</th>
					<th>
						Description
					</th>
				</tr>
		<?php
				foreach ($rss ->xpath('//channel') as $channel) {
					foreach ($channel->item as $item) {
						echo 	"<tr>
									<td>
										$item->title
									</td>
									<td>
										$item->link
									</td>
									<td>
										$item->description
									</td>
								</tr>";
						
					}
				}
		?>
			</table> 
		</center>
		
		<form action="/Webpage-Lsn/controller/politics.php" method="post">
			<button id="politicsBackButton" type="submit"> 
				Tilbage
			</button>
		</form>
	</body>

</html>

<style>
	.xmlTable {
		margin-top: 20px;
		width: 60%;
	}

	.newsHeader {
		font-family: times, Times New Roman, times-roman, georgia, serif;
		font-size: 48px;
		line-height: 40px;
		letter-spacing: -1px;
		color: #444;
		margin: 0 0 0 0;
		padding: 0 0 0 0;
		font-weight: 100;
		text-align:center;
	}
</style>




