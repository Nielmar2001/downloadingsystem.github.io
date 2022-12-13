<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=0.7, shrink-to-fit=no">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="register-login.css">
<style>
	                /*BACKGROUND*/
	body{
   		background:url("images/background.jpg") no-repeat;
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
	
	<form class="form-bg" method="post" action="register.php">

		<h2>Register</h2>
		
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" required="required">
		</div>

		<div class="input-group">
			<label>Email</label>
			<input type="text" name="email">
		</div>

		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>

		<div class="input-group">
			<label>Confirm Password</label>
			<input type="password" name="password_2"><br>
					<!-- displays validation errors -->
					 <h5><?php include('errors.php'); ?></h5>
		</div>

		<div class="input-group">
			<center>
				<button type="submit" name="signup" class="btn">Sign up</button>
			</center>
		</div>
		<p style="font-family: Raleway,sans-serif; font-size: 15px;">Already have an account?  <a href="login.php">Sign in</p>
	</form>
</div>

</body>
</html>