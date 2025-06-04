<?php
//connect to mysqli 
	$conn=new mysqli("localhost","root","","schooldb");
	//check the connection
	if($conn->connect_error)
	{
		die("connection Failed");	
	}

?>