<?php


$servername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "multilevel";

$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
	die("Connection failed:".mysqli_connect_error());
}

?>
<?php
if(isset($_POST['submit'])){
	$type=$_POST['type'];
	$username=$_POST['username'];
	$password=$_POST['pwd'];

			
$query="select * from login where username='$username' and password='$password' and type='$type'";
$result=mysqli_query($conn,$query);
while ($row=mysqli_fetch_array($result)) {
	if($row['username']==$username && $row['password']==$password && $row['type']=='Admin'){
	header("Location:admin.html");
	}
	else if($row['username']==$username && $row['password']==$password && $row['type']=='User'){
	header("Location:user.html");
	}

}
}
?>
