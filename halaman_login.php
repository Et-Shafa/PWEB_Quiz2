<?php
	require 'db.php';	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body style="background-color:#adce74;">
	<form action="" method="POST">
		<h2>LOGIN</h2>
		<!-- <label>Username : </label> -->
		<input class="in" type="text" name="username" placeholder="Username">

		<br>
		<!-- <label>Password : </label> -->
		<input class="in" type="password" name="passw" placeholder="Password">

		<br>
		<input id="btnLogin" type="submit" name="login" value="Login">
	</form>

	<?php
		session_start();
		if(isset($_COOKIE['username'])){
			if($_COOKIE['username']==$getUsername){
				$_SESSION['username']=$getUsername;
			}
		}
		if(!isset($_SESSION['username'])){
			if(isset($_POST['login'])){
			$getUsername = $_POST["username"];
			$getPass = $_POST["passw"];
			check($getUsername, $getPass);
			$conn->close();
			}
			
		}else{
			header('location:index.php');
			exit;
			

		}
	?>

</body>
</html>
