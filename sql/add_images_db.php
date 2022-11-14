<?php
	
	session_start();

	//connecting to the database
	$db = mysqli_connect('localhost', 'root', '', 'messagesdb');
	
	// Check connection
	if (mysqli_connect_errno())
	 {
	  echo "Failed to connect to the database: " . mysqli_connect_error();
	 }
	
	$title=$_POST['title'];
	$picture=$_POST['picture'];
	$goto=$_POST['goto'];

	echo $title, $picture, $goto;
	$query = "INSERT INTO messages(titlu, descriere, imagine, type, goto) VALUES ('$title', 'no_desc', '$picture', 'photo', '$goto')";
					  
	mysqli_query($db, $query);
	$header = "location: /myproject/admin.php";
	header($header);
	
	

	
	

?>