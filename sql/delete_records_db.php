<?php
	
	session_start();

	//connecting to the database
	$db = mysqli_connect('localhost', 'root', '', 'messagesdb');
	
	// Check connection
	if (mysqli_connect_errno())
	 {
	  echo "Failed to connect to the database: " . mysqli_connect_error();
	 }
	
	$id=$_GET['id'];
	  
	$query = "Delete from messages WHERE id=$id";

	mysqli_query($db, $query);
	$header = "location: /myproject/admin.php";
	header($header);
	

?>