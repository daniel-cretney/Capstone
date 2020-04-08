<?php
	session_start();
	$servername = 'dealer-dans.clioivi2itqg.us-east-1.rds.amazonaws.com'
	$username = 'admin'
	$password = 'Dannyrocks1'
	$dbname = 'DealerDans'
	$conn = mysqli_connect($servername, $username, $password);
	
	$dbcon = mysqli_select_db($conn,$dbname);
	if (!$conn)	{
		die("Connection failed: " . mysqli_connect_error());
	}
	
	if (!$dbcon)	{
		die("Database Connection failed : " . mysqli_error());
	}
?>