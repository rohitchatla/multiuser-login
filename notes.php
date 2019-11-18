
//this is mysql o mysqli inproved version ((things inside the bracket are highlights of changes to be made in new version))



$query="select * from login where username='$username' and password='$password' and type='$type'";
$result=mysql(i)_query(($conn,)$query);
while ($row=mysql(i)_fetch_array($result)) {
	if($row['username']==$username && $row['password']==$password && $row['type']=='Admin'){
	header("Location:admin.html");
	}
	else if($row['username']==$username && $row['password']==$password && $row['type']=='User'){
	header("Location:admin.html");
	}

}




/*/
//this is another way in/for new version again mysqli way not mysql




$sql="SELECT * FROM login where username='$username' and password='$password' and type='$type'";
$result=$conn->query($sql);
if($result->num_rows>0){
	while($row= $result->fetch_assoc()){
		if($row['username']==$username && $row['password']==$password && $row['type']=='Admin'){
			header("Location: admin.html");
		}
       else if($row['username']==$username && $row['password']==$password && $row['type']=='User'){
			header("Location: user.html");
		}

	}
}else{
	echo "0 result";
}
$conn->close();