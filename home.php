	<?php include ('server.php'); 
	//if the user is not logged in, they can't access this page
	if (empty($_SESSION['username'])){
		header('location: loginform.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=0.7, shrink-to-fit=no">
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="register-login.css">
		<link href="images/logo.png" rel="icon" type="images/png" />
<style>
	                /*BACKGROUND*/
	body{
   		background-color: gray;
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
					

		<!--Navigation Bar-->

  <nav class="nav-bar">
    <ul>
      <li><a class="active" href="home.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="index.php">Logout</a></li>
    </ul>
  </nav>

<div class="header">
	<h2 style="color: white;">CHOOSE AND DOWNLOAD YOUR DESIRED WALLPAPER</h2>
	<h4>Tips: Click the wallpaper you want to download</h4>
</div>
		<div class="content">		
			<?php if(isset($_SESSION['success'])):?>
			<div class="error success">
				<h3>
					<?php
					echo $_SESSION['success'];
					unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<?php if (isset($_SESSION["username"])): ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
		<?php endif ?>
	</div><br>
<center>
	<table cellspacing="15">
		<tr>
			<td><a href="images/1.jpg" download><img src="images/1.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/2.jpeg" download><img src="images/2.jpeg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/3.jpg" download><img src="images/3.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/4.jpg" download><img src="images/4.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/5.jpg" download><img src="images/5.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
		</tr>
		<tr>
			<td><a href="images/6.jpg" download><img src="images/6.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/7.jpeg" download><img src="images/7.jpeg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/8.jpg" download><img src="images/8.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/9.jpg" download><img src="images/9.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/10.jpg" download><img src="images/10.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
		</tr>
		<tr>
			<td><a href="images/11.jpeg" download><img src="images/11.jpeg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/12.jpg" download><img src="images/12.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/13.jpg" download><img src="images/13.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/14.jpg" download><img src="images/14.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/15.jpeg" download><img src="images/15.jpeg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
		</tr>
		<tr>
			<td><a href="images/16.jpg" download><img src="images/16.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/17.jpg" download><img src="images/17.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/18.jpg" download><img src="images/18.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/19.jpg" download><img src="images/19.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/20.jpg" download><img src="images/20.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
		</tr>
		<tr>
			<td><a href="images/21.jpg" download><img src="images/21.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/22.jpg" download><img src="images/22.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/23.jpg" download><img src="images/23.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/24.jpg" download><img src="images/24.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
			<td><a href="images/25.jpg" download><img src="images/25.jpg" style="width: 250px; height: 300px; cursor: pointer;"></a></td>
		</tr>
	</table>
	</center>
</div>
</body>
</html>