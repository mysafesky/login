<?php
	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
        if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Invalid Account and Password combination";
                //  	$error = var_dump(_POST);
          	}
		else
		{
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = mysqli_connect("localhost", "root", "2500181","dev");
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($connection,$username);
			$password = mysqli_real_escape_string($connection,$password);
			// Selecting Database
			// SQL query to fetch information of registerd users and finds user match.
			$login_result = mysqli_query($connection,"select * from login where password='$password' AND username='$username'");
			if ($login_result) {
				$_SESSION['login_user']=$username; // Initializing Session
				header("location: ../aqi_apiUI/"); // Redirecting To Other Page
			} else {
				$error = "Invalid Account and Password combination";
                                //$error = var_dump(_POST);
			}

			mysqli_close($connection); // Closing Connection
		}
	}
?>
