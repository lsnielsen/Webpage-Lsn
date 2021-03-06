<?php
	
							$con = mysqli_connect('127.0.0.1','root','');
							if(!$con) {  
								echo 'not connect to the server';  
							}  
							if(!mysqli_select_db($con,'lsnDb')) {  
								echo 'database not selected';  
							}    
							if ($runAndBike == "bike") {
								$tableData = "SELECT * FROM biking";
								$result = mysqli_query($con,$tableData);
				
								$tableCheck = (mysqli_num_rows(mysqli_query($con, $tableData)) > 0) ? true : false;
								if ($tableCheck) {
									$graphArray = makeQueryToArray($result, $tableData, $con);
									for($i=0; $i<sizeOf($graphArray); $i++) {
										echo "	<tr id="; echo $i; echo ">";
													echo "<td class=bikeTableCell>";
													echo $graphArray[$i][1];
													echo "</td>
													<td class=bikeTableCell>";
													$km = rewriteKilometerToDanishFormat($graphArray[$i]['kilometer']);
													echo $km;
													echo "</td>
													<td class=bikeTableCell>";
													echo $graphArray[$i]['time'];
													echo "</td>									
													<td> 
														<center> 
															<div class=deleteRow value=bikePage name=bikeButton> 
																&#10006; 
															</div> 
														</center> 
													</td>
												</tr>";
									}
								}
							} elseif ($runAndBike == "run") {
								$tableData = "SELECT * FROM running";
								$result = mysqli_query($con,$tableData);
				
								$tableCheck = (mysqli_num_rows(mysqli_query($con, $tableData)) > 0) ? true : false;
								if ($tableCheck) {
									$graphArray = makeQueryToArray($result, $tableData, $con);
									for($i=0; $i<sizeOf($graphArray); $i++) {
										echo "	<tr id="; echo $i; echo ">";
													echo "<td class=runningTableCell>";
													echo $graphArray[$i][1];
													echo "</td>
													<td class=runningTableCell>";
													$km = rewriteKilometerToDanishFormat($graphArray[$i]['kilometer']);
													echo $km;
													echo "</td>
													<td class=runningTableCell>";
													echo $graphArray[$i]['time'];
													echo "</td>									
													<td> 
														<center> 
															<div class=deleteRow value=runPage name=runButton> 
																&#10006; 
															</div> 
														</center> 
													</td>
												</tr>";
									}
								}
							}
							
	function makeQueryToArray($query, $tableData, $con) 
	{
			while ($rowArray = $query->fetch_array()) {
				$graphArray[] = $rowArray;
			}
			for ($i = 0; $i<sizeof($graphArray); $i++) {
				$dateArray[] = $graphArray[$i][1];
			}	
			usort($dateArray, "compareByTimeStamp");
			
			for ($i = 0; $i<sizeof($dateArray); $i++) {
				for ($j = 0; $j<sizeof($graphArray); $j++) {
					if ($dateArray[$i] == $graphArray[$j][1]) {
						$sortedArray[] = $graphArray[$j];
						continue;
					}
				}
			}

			for ($i = 0; $i<sizeof($sortedArray); $i++) {
				$sortedArray[$i][1] = changeDateFormat($sortedArray[$i][1]);	
			}
			return $sortedArray;
	}
	 
	function compareByTimeStamp($time1, $time2) 
	{ 
		if (strtotime($time1) < strtotime($time2)) { 
			return -1; 
		} else if (strtotime($time1) > strtotime($time2)) { 
			return 1; 
		} else
			return 0; 
	} 

	function changeDateFormat($date)
	{
		$page = "table";
		$charOne = $date[0];
		$charTwo = $date[1];
		$charThree = $date[2];
		$charFour = $date[3];
		$charFive = $date[4];
		$charSix = $date[5];
		$charSeven = $date[6];
		$charEight = $date[7];
		$charNine = $date[8];
		$charTen = $date[9];
		
		if ($page == "table") {
			return $charNine . $charTen . "/" . $charSix . $charSeven . " - " . $charOne . $charTwo . $charThree . $charFour;
		} elseif ($page == "graph") {
			if ($charSix == 0 && $charNine == 0) {
				return $charTen . "/" . $charSeven . " - " . $charThree . $charFour;
			} elseif ($charSix !== 0 && $charNine == 0) {
				return $charTen . "/" . $charSix . $charSeven . " - " . $charThree . $charFour;			
			} elseif ($charSix == 0 && $charNine !== 0) {
				return $charNine . $charTen . "/" . $charSeven . " - " . $charThree . $charFour;			
			} elseif ($charSix !== 0 && $charNine !== 0) {
				return $charNine . $charTen . "/" . $charSix . $charSeven . " - " . $charThree . $charFour;
			}
		}
	}
	
	function rewriteKilometerToDanishFormat($km)
	{
		for($i = 0; $i < strlen($km); $i++) {
			if($km[$i] == ".") {
				$km[$i] = ",";
			}
		}
		return $km;
	}
							
							
							
?>