<?php
	if (isset($_POST["submit"])) {
		$con = mysqli_connect("localhost", "root", "", "imageextractor") or die();
		$username = $_POST["username"];
		$password = $_POST["password"];
		$query = mysqli_query($con, "SELECT * FROM userfile WHERE username='$username' AND password='$password'  ") or die();
		if (!$row = $query -> fetch_assoc()) {
			$message = "<p style='color:red;font-weight:bold;text-align:center;'>Admin not found, Try again</p>";
		}else{
			session_start();
			$name = $row['username'];
			$_SESSION['admin'] = $name;
			header("location: index.php");
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
	<div class="container">
		<form action="" method="post">
			<h2>Admin login</h2>
			<?php if (isset($_POST["submit"])) {
				echo $message;
			} ?>
			<p>
				Username: <input type="text" name="username" placeholder="Enter your username">
			</p>
			<p>
				Password: <input type="password" name="password" placeholder="Enter your password">
			</p>
			<center><button name="submit">Login</button></center>
		</form>
	</div>
	
</body>
</html>