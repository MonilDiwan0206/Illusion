<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="Login.css">
</head>
<body>

	<div class="loginbox">
		<h1>Login here</h1>
		<form action="Login.php" method="POST">
			<?php include('errors.php'); ?>
			<p>Email</p>
			<input type="text" name="Email" placeholder="Enter Email">
			<p>Password</p>
			<input type="Password" name="Pass" placeholder="Passowrd">
			<button type="submit" name="login" value="Login">Log In</button><br>
			<a href="#">Lost your password?</a><br>
			<a href="register.php">Don't have an account?</a>
		</form>
		
	</div>


</body>
</html>