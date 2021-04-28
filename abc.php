<?php

	$name = $_REQUEST['name'];

	$con = mysqli_connect('localhost', 'root', '', 'onlineshop');
	$sql = "select * from user where `UserName` like '%{$name}%'";
	$result = mysqli_query($con, $sql);

	$response = "<table border=1>
					<tr>
						<td>FullName</td>
						<td>UserName</td>
						<td>Gender</td>
						<td>Email</td>
						 <td>Phone</td>
						 <td>Password</td>
					</tr>";

	while ($row = mysqli_fetch_assoc($result)) {
		$response .= "	<tr>
							 <td>{$row['FullName']}</td>
							  <td>{$row['UserName']}</td>
							   <td>{$row['Gender']}</td>
							<td>{$row['Email']}</td>
							 <td>{$row['Phone']}</td>
							 <td>{$row['Password']}</td>
						</tr>";
	}

	$response .= "</table>";

	echo $response;
?>
