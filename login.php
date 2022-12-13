<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=0.7, shrink-to-fit=no">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="register-login.css">
		<link href="images/logo.png" rel="icon" type="images/png" />
<style>
	                /*BACKGROUND*/
	body{
   		background:url("images/ss.jpg") no-repeat;
   		width:100%;
   		height:100vh;
   		background-size: cover;
   		background-position:center;
   		background-attachment:fixed;
   		font-family: montserrat;
		}
</style>
</head>
<body>

<div class="header">
	
	<form class="form-bg" method="post" action="login.php">

		<h2>Log In</h2>
		
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" required="required">
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password"><br>
					<!-- displays validation errors -->
					 <h5><?php include('errors.php'); ?></h5>
		</div>

		<div class="input-group">
			<center>
				<button type="submit" name="signin" class="btn"><b>Log In</b></button>
			</center>
		</div>
		<p style="font-family: Raleway,sans-serif; font-size: 13px;">Don't have an account? <a href="register.php">Create Account Here!</a></p>
	</form>
</div>

</body>
</html>