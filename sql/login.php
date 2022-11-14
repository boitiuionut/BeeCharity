
<?php

	//connecting to the database
	$db = mysqli_connect('localhost', 'root', '', 'userdb');
	
	// Check connection
	if (mysqli_connect_errno())
	 {
	  echo "Failed to connect to the database: " . mysqli_connect_error();
	 }	

	$username=$_POST['username'];
	$password=$_POST['password'];
	$password_md5=md5($password);
	
	$query = "SELECT username, password FROM userdetails WHERE username='$username' AND password='$password_md5'";
	$results = mysqli_query($db, $query);
	
	if(mysqli_num_rows($results) == 1)
	{
		$logged_in_user = mysqli_fetch_assoc($results);
		echo "User logged in: ", $logged_in_user['username'];
		session_start();
		$_SESSION['username']=$username;
				header('location: main_page.php');

	}
	else
	{
		echo "User not found. Would you like to ";
		echo '<a href="signup.php">Register?</a>';
	}
	
	
	

?>