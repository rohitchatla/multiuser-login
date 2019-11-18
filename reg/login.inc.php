<?php include('connect.php');

if(isset($_POST["submit"])){
	$email=$_POST["txtemail"];
	$pass=$_POST["txtpass"];
		$type=$_POST['type'];

	$query=mysqli_query($con,"SELECT * FROM register");
	if($query->num_rows>0){
	while($row= $query->fetch_assoc()){
		if($row['email']==$email && $row['pass']==$pass && $row['type']=='Admin'){
			header("Location: home_admin.php");
		}
       else if($row['email']==$email && $row['pass']==$pass && $row['type']=='user'){
			header("Location: home.php");
		}
		else{echo "fault";}

	}
}else{
	echo "0 result";
}}
$con->close();
?>