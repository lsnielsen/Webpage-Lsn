<html lang="da">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<head>
		<title>
			Nyheder
		</title>
	</head>
	<body>
		<h1>
			Inkluderer her en xml fil
		</h1>		
			<table border="1">
				<tr bgcolor="#9acd32">
					<th>
						Title
					</th>
					<th>
						Artist
					</th>
					<th>
						Country
					</th>
					<th>
						Company
					</th>
					<th>
						Price
					</th>
					<th>
						Year
					</th>
				</tr>
				<?php
					include 'phpArticle.php';
					$catalog = new SimpleXMLElement($xmlstr);

					foreach ($catalog->xpath('//cd') as $cd) {
						echo 	"<tr>
									<td>
										$cd->title
									</td>
									<td>
										$cd->artist
									</td>
									<td>
										$cd->country
									</td>
									<td>
										$cd->company
									</td>
									<td>
										$cd->price
									</td>
									<td>
										$cd->year
									</td>
								</tr>";
					}					
				?>
			</table>
		<br><br><br><br><br>
		
		
		</xml>
		<form action="/Webpage-Lsn/controller/politics.php" method="post">
			<button id="backButton" type="submit"> 
				Tilbage
			</button>
		</form>
	</body>

</html>








