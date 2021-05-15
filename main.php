<?php
	include 'db.php';
	
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
		if(isset($_POST['login'])){
			$getUsername = $_POST["username"];
			$getPass = $_POST["passw"];
			check($getUsername, $getPass);
			$conn->close();

		}
		
		
		// $_SESSION = session_start();
		// $nama_cookie = "cookieusername";
		// if(isset($_POST["login"])){
			// $getUsername = $_POST["username"];
			// $getPass = $_POST["passw"];	
		// 	setcookie($nama_cookie ,$getUsername, time() + (30*1),'/');
		// 	setcookie('passw',$getPass, time() + (30*1),'/');
		// }
		// if(!isset($_COOKIE[$nama_cookie])){
		// 	echo 'nama cookie is not set!';
		// }else{
		// 	echo 'nama cookie is set!';
		// 	echo $_COOKIE[$nama_cookie];
		// 	// echo 'Value is'. $_COOKIE[$COOKIE];
		// }
		
		

		// echo 'value'.$_COOKIE[$COOKIE];
		// if (isset($_POST["login"])) {
		// 	$getUsername = $_POST["username"];
		// 	$getPass = $_POST["passw"];
			// echo "Hallo".$getUsername.$getPass;

			// echo "<pre>".print_r($_POST, true)."</pre>";
			// die();	
		// }

		?>

	<?php
		
		
		
	?>


</body>
</html>
