<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cvadmigration_db";

        if(isset($_POST['search-btn']))
		{
        	$search_value=$_POST["search-txt"];
			if ($search_value == null){
				echo '<h3 align="center" style="color:red"> You must enter your email address!</h3>';

			}
			else
			{

				$conn=new mysqli($servername,$username,$password,$dbname);
				if($conn->connect_error){
					echo 'Connection Failed: '.$con->connect_error;
					}
					else
					{
						$sql="SELECT * FROM `employee` WHERE `EmailAddress` like '%$search_value%'";
			
						$res=$conn->query($sql);
						
						if($res->num_rows == 0){
							echo '<h4 align="center" style="color:#d70d28"> You are either typing incorrect email address or your virtual desktop is not yet migrated to new Citrix portal. </h4>'; 
							echo '<h4 align="center" style="color:#d70d28"> Please try again later! </h4>';
							echo '<ul>
								<li style="text-align:center" "list-style-type:none"><h3>Click the link to connect to <a href="https://bmovdisf.bmogc.net"><strong>BMO Old Portal</strong></a> </h3> </li>
							</ul>';
						}
						else{
							echo '<h4 align="center" style="color:#2a5820" padding="10px"> Congratulations! Your following virtual desktop has been migrated: </h4>';
							echo '<table width = "50%" style=text-align:center align="center" border="1" cellpadding="5" cellspacing="5">
							<tr>
								<th> Virtual Desktop </th>
								<th> Email </th>
							</tr>';

							while($row=$res->fetch_assoc())
							{

								echo '<tr>
									<td>'.$row["DNSName"].'</td>
									<td>'.$row["EmailAddress"].'</td>
									
									</tr>';
							}
								
							echo '</table>';       
							echo '<ul>
								<li style="text-align:center" "list-style-type:none"> <h3> Click the link to connect <a href="https://bmovad.bmogc.net"><strong>BMO Virtual App and Desktop</strong></a></h3></li>
							</ul> 
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<p></p>'; 
						}

						$conn -> close();
                	}
			}	
		}
     
?>