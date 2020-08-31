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