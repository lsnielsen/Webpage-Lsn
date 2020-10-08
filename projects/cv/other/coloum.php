<center>
<table class="duringTimeTable">
	<tr>
		<th>	
			<a href="/Webpage-Lsn/projects/cv/sparetime/work.html">
				<div class="tableHeader">
                    <?php echo $txtFile['otherPage']['workTime']; ?>
				</div>
			</a>
		</th>
		<th>	
			<div class="tableHeader">
                <?php echo $txtFile['otherPage']['sparetimeBox']; ?>
			</div>
		</th>
	</tr>
	<tr>
		<td class="duringTimeCv">
            <?php echo $txtFile['otherPage']['piipl']; ?>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['piiplWork']; ?>
			</li>
			<li class="bulletTxt">
				<a class="duringTimeLink" href="https://piipl.dk/" target="_blank">
                    <?php echo $txtFile['otherPage']['workLink']; ?>
                </a>
			</li>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['piiplTxt']; ?>
				<div style="text-indent: 40px;">
                    <?php echo $txtFile['otherPage']['piiplTxtTwo']; ?>
				</div>
			</li>
		</td>
		<td class="duringTimeCv" style="text-indent: 20px;">
            <?php echo $txtFile['otherPage']['mathHeader']; ?>
			<li class="bulletTxt">
                <form action="/Webpage-Lsn/controller/cv.php" method="post">
                    <button class="duringTimeLink phpLink" name="cvButton" value="math" type="submit">
                        <?php echo $txtFile['general']['docProof']; ?>
                    </button>
                </form>
			</li>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['mathTxt']; ?>
				<div style="text-indent: 40px;">
                    <?php echo $txtFile['otherPage']['mathTxtTwo']; ?>
				</div>
			</li>
			<li class="bulletTxt">
				<a class="duringTimeLink" href="https://coursera.org/" target="_blank">
                    <?php echo $txtFile['otherPage']['courLink']; ?>
				</a>
			</li>
		</td>
	</tr>
	<tr>
		<td class="duringTimeCv">
            <?php echo $txtFile['otherPage']['bizHeader']; ?>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['bizHeader']; ?>
			</li>
			<li class="bulletTxt">
				<a class="duringTimeLink" href="https://bizsys.dk/" target="_blank">
                    <?php echo $txtFile['otherPage']['workLink']; ?>
				</a>
			</li>
			<li class="bulletTxt">
                <form action="/Webpage-Lsn/controller/cv.php" method="post">
                    <button class="duringTimeLink phpLink" name="cvButton" value="statement" type="submit">
                        <?php echo $txtFile['otherPage']['statement']; ?>
                    </button>
                </form>
			</li>
		</td>
		<td class="duringTimeCv" style="text-indent: 70px;">
            <?php echo $txtFile['otherPage']['logicHeader']; ?>
            <form action="/Webpage-Lsn/controller/cv.php" method="post">
                <li class="bulletTxt">
                    <button class="duringTimeLink phpLink" name="cvButton" value="argue" type="submit">
                        <?php echo $txtFile['general']['docProof']; ?>
                    </button>
                </li>
            </form>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['logicTxt']; ?>
				<div style="text-indent: 40px;">
                    <?php echo $txtFile['otherPage']['logicTxtTwo']; ?>
				</div>
			</li>
			<li class="bulletTxt">
				<a class="duringTimeLink" href="https://coursera.org/" target="_blank">
                    <?php echo $txtFile['otherPage']['logicLink']; ?>
				</a>
			</li>
		</td>
	</tr>
	<tr>
		<td class="duringTimeCv">
            <?php echo $txtFile['otherPage']['jekaLocal']; ?>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['jekaHeader']; ?>
			</li>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['jekaWork']; ?>
			</li>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['jekaWorkTwo']; ?>
			</li>
		</td>
		<td class="duringTimeCv">
            <?php echo $txtFile['general']['crossJoin']; ?>
				<li class="bulletTxt">
                    <?php echo $txtFile['otherPage']['crossTime']; ?>
				</li>
				<li class="bulletTxt">
                    <?php echo $txtFile['otherPage']['crossAu']; ?>
				</li>
				<li class="bulletTxt">
                    <?php echo $txtFile['otherPage']['crossCph']; ?>
				</li>
		</td>
	</tr>
	<tr>
		<td class="duringTimeCv">
            <?php echo $txtFile['otherPage']['paperHeader']; ?>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['paperWork']; ?>
			</li>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['paperWorkTwo']; ?>
			</li>
		</td>
		<td class="duringTimeCv">
            <?php echo $txtFile['otherPage']['runHeader']; ?>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['runTime']; ?>
			</li>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['runEvent']; ?>
			</li>
		</td>
	</tr>
	<tr>
		<td class="duringTimeCv">
            <?php echo $txtFile['otherPage']['swimHeader']; ?>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['swimClub']; ?>
			</li>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['swimWork']; ?>
			</li>
		</td>
		<td class="duringTimeCv">
            <?php echo $txtFile['otherPage']['scoutHeader']; ?>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['scoutType']; ?>
			</li>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['scoutClub']; ?>
			</li>
		</td>
	</tr>
    <tr>
		<td class="duringTimeCv">
            <?php echo $txtFile['otherPage']['grassHeader']; ?>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['grassWork']; ?>
			</li>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['grassWorkTwo']; ?>
			</li>
		</td>
		<td class="duringTimeCv">
            <?php echo $txtFile['otherPage']['basketHeader']; ?>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['basketClub']; ?>
			</li>
			<li class="bulletTxt">
                <?php echo $txtFile['otherPage']['basketEvent']; ?>
			</li>
		</td>
	</tr>
</table>

</center>

<style>
	.duringTimeCv{
		width: 300px;
		margin-bottom: 10px;
		height: 80px;
		margin-left: 260px;
		font-size: 21px;
		font-weight: bold;
		background-color: #993399;
		border-radius: 20px 20px 20px 20px;
		word-spacing: 2px;
		text-indent: 130px;
		padding: 15px;
	}
	.bulletTxt {
		text-indent: 20px;
		font-size: 15px;
		color: black;
		text-decoration: none; 
		background-color: none;
	}
	.duringTimeLink {
		color: black;
	}
	.duringTimeTable {
		width: 50%;
		border-spacing: 25px;
	}
	.tableHeader {
		font-size: 35px;
	}
    .phpLink {
        background-color: #993399;
        border: none;
        cursor: pointer;
        font-weight: bold;
        text-indent: 20px;
        margin-top: -15px;
        margin-bottom: -20px;
    }
</style>

	