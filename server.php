<?php
	session_start();
	$username = "";
	$email = "";
	$errors = array();
	//connect to the database
	$link = mysqli_connect('localhost', 'root', '', 'registration') or die(mysqli_error($link));

	//if the signup button is clicked
	if (isset($_POST['signup'])){
		$username = mysqli_real_escape_string($link, $_POST['username']);
		$email = mysqli_real_escape_string($link, $_POST['email']);
		$password_1 = mysqli_real_escape_string($link, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($link, $_POST['password_2']);

		//ensure that form fields are filled properly
		if (empty($username)){
			array_push($errors, "Username is required");
		}
		if (empty($email)){
			array_push($errors, "Email is required");
		}
		if (empty($password_1)){
			array_push($errors, "Password is required");
		}
		if ($password_1 != $password_2){
			array_push($errors, "Password did not match");
		}
		//if there are no errors, save user to database
		if (count($errors) == 0){
			$password = sha1($password_1); // encrypt password before storing in database (as security)
			 
		$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

		mysqli_query($link, $sql);

			$_SESSION['username'] = $username;
			$_SESSION['success'];
			header('location: home.php'); //refirect to the home page
		}
	}

	//login
	if (isset($_POST['signin'])){
		$username = mysqli_real_escape_string($link, $_POST['username']);
		$password = mysqli_real_escape_string($link, $_POST['password']);

		//ensure that form fields are filled properly
		if (empty($username)){
			array_push($errors, "Username is required");
		}
		if (empty($password)){
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0 ){
			$password = sha1($password); //encrypt password before compairing with that from database
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($link, $query);
			if (mysqli_num_rows($result) == 1){
				//log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'];
			header('location: home.php'); //redirect to the home page
			}
			else{
				array_push($errors, "wrong username or password combination");
			}
		}
	}

	//logout
	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
	}
?>