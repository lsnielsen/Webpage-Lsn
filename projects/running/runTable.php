<?php
							include "helper/runHelper.php";
							$con = mysqli_connect('127.0.0.1','root','');
							if(!$con) {  
								echo 'not connect to the server';  
							}  
							if(!mysqli_select_db($con,'lsnDb')) {  
								echo 'database not selected';  
							}    
							$tableData = "SELECT * FROM diesel";
							$result = mysqli_query($con,$tableData);
							$graphArray = makeQueryToArray($result, "table");
							
							for($i=0; $i<sizeOf($graphArray); $i++) {
								echo "	<tr id="; echo $graphArray[$i]['id']; echo ">";
											echo "<td class=runningTableCell>";
											echo $graphArray[$i][1];
											echo "</td>
											<td class=runningTableCell>";
											echo $graphArray[$i]['kilometer'];
											echo "</td>
											<td class=runningTableCell>";
											echo $graphArray[$i]['kroner'];
											echo "</td>									
											<td> 
												<center> 
													<div class=deleteRow value=runningPage name=runningButton> 
														&#10006; 
													</div> 
												</center> 
											</td>
										</tr>";
							}
?>