<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="do_login.php" enctype="multipart/form-data" >

ENTER EMAIL:<input type="email" name="txtemail" required /><br><br>
ENTER PASSWORD:<input type="password" name="txtpass" required /> <br><br>
		<input type="submit" name="submit" value="LOGIN" />
		<select name="type">
						<option value="-1">Select user type</option>
						<option value="Admin">Admin</option>
						<option value="User">User</option>


					</select>
			
									
</form>

</body>
</html>