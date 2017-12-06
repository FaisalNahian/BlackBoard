<?php


	$user = "root";
	$pass = "";
	$host = "localhost";
	$database = "planner";
	$con = mysqli_connect($host,$user,$pass,$database) ;
	
	 $query = "SELECT * FROM table 1";
	if($result = mysqli_query ( $con , $query))
	{
		if (mysql_num_rows($result)>0)
		{
			echo "<table>";
			echo "<tr>>";
					echo "<th> OfficeCode </th>";
                    echo "<th> RegisteredRepCode </th>";
                    echo "<th> AccountNumber </th> ";
                    echo "<th> AccountName </th>";
					echo"<th> AccountNature </th>";
					echo"<th> AddressLine1 </th>";
					echo"<th> AddressLine2 </th>";
					echo"<th> AddressLine3 </th>";
					echo"<th> AddressLine4 </th>";
					echo"<th> City </th>";
					echo"<th> State </th>";
					echo"<th> ZipCode </th>";
					echo"<th> HomePhone </th>";
					echo"<th> WorkPhone </th>";
					echo"<th> EmailAddress </th>";
					echo"<th> OpenDDate </th>";
					echo"<th> RestrictDate </th>";
					echo"<th> RestrictReasonCode </th>";
					echo"<th> MoneyFunds </th>";
					echo"<th> TotalAccountValue </th>";
					echo"<th> DOB </th>";
					echo"<th> YTDTradeCount </th>";
					echo"<th> YTDCommission </th>";
                echo"</tr>";
				
				while($row = mysqli_fetch_array($result))
				{
						echo "<tr>";		
				 echo "<td>". $row['OfficeCode'] ."</td>";
                 echo "<td>". $row['RegisteredRepCode'] ."</td>";
                 echo "<td>". $row['AccountNumber'] ."</td>";
                 echo"<td>". $row['AccountName']."</td>";
				 echo "<td>". $row['AccountNature'] ."</td>";
				 echo"<td>". $row['AddressLine1']."</td>";
				 echo"<td>". $row['AddressLine2']."</td>";
				 echo"<td>". $row['AddressLine3']."</td>";
				 echo"<td>". $row['AddressLine4']."</td>";
				 echo"<td>". $row['City']."</td>";
			     echo"<td>". $row['State']."</td>";
			     echo"<td>". $row['ZipCode']."</td>";
					 echo"<td>". $row['HomePhone']."</td>";
					 echo"<td>". $row['WorkPhone']."</td>";
					 echo"<td>". $row['EmailAddress']."</td>";
					 echo"<td>". $row['OpenDDate']."</td>";
					 echo"<td>". $row['RestrictDate']."</td>";
					 echo"<td>". $row['RestrictReasonCode']."</td>";
					 echo"<td>". $row['MoneyFunds']."</td>";
					echo"<td>" . $row['TotalAccountValue']."</td>";
					 echo"<td>". $row['DOB'] ."</td>";
					 echo"<td>". $row['YTDTradeCount'] ."</td>";
				 echo "<td>".  $row['YTDCommission'] ."</td>";
				 
               echo "</tr>";
			   
			
				}
				echo"</table";
				
				
				
				
				
		}else{
			echo " No records found";
		}
		
		}else
		{
			echo " failed to display data";
		}


?>

