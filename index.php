<?php
	include('login.php'); // Includes Login Script

	if(isset($_SESSION['login_user'])){
		header("location: profile.php");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" >
		<title>AQI Trading Platform Developer Portal</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">
		    <div class="row">
		        <div class="col-sm-6 col-md-4 col-md-offset-4">
		            <h1 class="text-center login-title">AQI Trading Platform<br>Developer Portal</h1>
		            <div class="account-wall">
		                <img class="profile-img" src="img/logo-01.jpg" alt="">
		                <form class="form-signin" action="" method="post">
			                <input type="text" class="form-control" placeholder="Username" name="username" required autofocus>
			                <input type="password" class="form-control" placeholder="Password" name="password" required>
			                <button class="btn btn-lg btn-primary btn-block" name="submit" type="submit">
			                    Sign in</button>
			                <label class="checkbox pull-left">
			                    <input type="checkbox" value="remember-me">
			                    Remember me
			                </label>
			                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
			                <span><?php echo $error; ?></span>
		                </form>
		            </div>
		            <a href="#" class="text-center new-account">Please contact admin to get a developer account </a>
		        </div>
		    </div>
		</div>
	</body>
</html>