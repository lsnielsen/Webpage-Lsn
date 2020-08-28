<html lang="da">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<head>
		<link rel="stylesheet" type="text/css" href="css/backButton.css">
		<title>
			Folketinget
		</title>
	</head>
	<body>
		<h1>
			Folketingets partier på Christiansborg
		</h1>		
	
		<?php
				include 'xml.php';
				$rss = new SimpleXMLElement($xmlFeed);
		?>
		
		<center class="politicTable  m-b-110">
			<table>
				<thead>
					<tr class="row100 head">
						<th class="column100">
							Parti
						</th>
						<th class="column100">
							Formand
						</th>
						<th class="column100">
							Antal mandater
						</th>
					</tr>
				</thead>
				<tbody>
			<?php
				foreach ($rss ->xpath('//channel') as $channel) {
					foreach ($channel->item as $item) {
						echo 	"<tr class=row100>
									<td class=column100>
										$item->parti
									</td>
									<td class=column100>
										$item->chairman
									</td>
									<td class=column100>
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

<style>




	.politicTable {
		border-radius: 16px;
		overflow: hidden;
		background: #7918f2;
		background: -webkit-linear-gradient(-68deg, #ac32e4 , #4801ff);
		background: -o-linear-gradient(-68deg, #ac32e4 , #4801ff);
		background: -moz-linear-gradient(-68deg, #ac32e4 , #4801ff);
		background: linear-gradient(-68deg, #ac32e4 , #4801ff);
	}

	.politicTable table {
		background-color: transparent;
	}

	.politicTable td {
		font-family: Montserrat-Regular;
		font-size: 14px;
		color: #fff;
		line-height: 1.4;
	}

	.politicTable th {
		font-family: Montserrat-Medium;
		font-size: 12px;
		color: #fff;
		line-height: 1.4;
		text-transform: uppercase;

		background-color: rgba(255,255,255,0.32);
	}

	.row100:hover td {
		background-color: rgba(255,255,255,0.1);
	}

	.politicTable .hov-column {
		background-color: rgba(255,255,255,0.1);
	}


	.row100 td:hover {
		background-color: rgba(255,255,255,0.2);
	}


	table {
		width: 100%;
		background-color: #fff;
	}

	th, td {
		text-align: center; 
		font-weight: unset;
		padding-right: 10px;
		padding-top: 24px;
		padding-bottom: 20px;
		width: 130px;
		padding-left: 25px;
	}

	.row100 td {
		padding-top: 18px;
		padding-bottom: 14px;
	}

</style>




