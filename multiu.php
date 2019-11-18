<?php
include 'db.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post" >
		<table>
			
				<tr>
					<td>User Type</td>
					<td><select name="type">
						<option value="-1">Select user type</option>
						<option value="Admin">Admin</option>
						<option value="User">User</option>


					</select></td>
				</tr>
			
			
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" placeholder="username"></td>
				</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="pwd" placeholder="password"></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="submit" value="<login>"></td>
		</tr>
		</table>
	
		
	</form>
	
</body>
</html>
