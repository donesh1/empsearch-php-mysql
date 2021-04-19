<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "employee_db";

        if(isset($_POST['submit']))
		{
        	$search_value=$_POST["search"];
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
						$sql="select * from employee Where Name like '%$search_value%'";
			
						$res=$conn->query($sql);
						
						if($res->num_rows == 0){
							echo '<h3 align="center" style="color:red"> You are either typing incorrect email address or your virtual desktop is not yet migrated to new Citrix portal. </h3>'; 
							echo '<h3 align="center" style="color:red"> Please try again later! </h3>';
							echo '<ul>
								<li style="text-align:center"><a href="https://bmovdisf.bmogc.net"><strong>BMO Old Portal</strong></a> - Click to connect</li>
							</ul>';
						}
						else{
							echo '<h2 align="center" style="color:green"> Congratulations! Your following virtual desktop has been migrated: </h2>';
							echo '<table width = "50%" style=text-align:center align="center" border="1" cellpadding="5" cellspacing="5">
							<tr>
								<th> Name </th>
								<th> Address </th>
								<th> Gender </th>
								<th> Designation </th>
								<th> Age </th>
							</tr>';

							while($row=$res->fetch_assoc())
							{

								echo '<tr>
									<td>'.$row["Name"].'</td>
									<td>'.$row["Address"].'</td>
									<td>'.$row["Gender"].'</td>
									<td>'.$row["Designation"].'</td>
									<td>'.$row["Age"].'</td>
									</tr>';
							}
								
							echo '</table>';       
							echo '<ul>
								<li style="text-align:center"><a href="https://bmovad.bmogc.net"><strong>BMO Virtual App and Desktop</strong></a> - Click to connect to new portal </li>
							</ul>';     
						}
							
						$conn -> close();
                	}
			}	
		}
     
?>