<html>
<head>
	<title>School Diary - Test : Admin Pannel</title>
</head>
	<body>
	<?php
	//GEt the value from Login PAge
	$username=$_GET['Uname'];
	$password=$_GET['password'];
	//connect to mysqli 
	$conn=new mysqli("localhost","root","","schooldb");
	//check the connection
	if($conn->connect_error)
	{
		die("connection Failed");	
	}
	//execute the query
	$sql="select *from login where username='$username' and password='$password'";
	$result=$conn->query($sql);
	//list the record
	if($row=$result->num_rows>0)
	{
		echo "<h2><p align=center>Login Susscufully</p></h2>";
	}
	else
		echo "<h2><p align=center>Incorrect Password</p></h2>";
	//close the connection
	$conn->close();
	?>
</body>
</html>