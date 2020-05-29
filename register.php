<?php include('server.php')?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="register.css">
	
</head>
<body>

	<div class="registerbox">
		<h1>Create your Account</h1>
		<form action="register.php" method="POST">
			<?php include('errors.php'); ?>
			<p>First Name</p>
			<input type="text" name="FirstName" placeholder="First Name" required="required">
			<p>Surname</p>
			<input type="text" name="Surname" placeholder="Surname" required="required">
			<p>Email id</p>
			<input type="name" name="EmailID" placeholder="Username" required="required">@illusion.com
			<p>Password</p>
			<input type="password" name="Password" placeholder="Password" required="required">
			<p>Confirm Password</p>
			<input type="password" name="ConfirmPassword" placeholder="Confirm Password" required="required"><br>
			<label class="container">Male
			  <input type="radio" checked="checked" name="gender" value="Male">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Female
			  <input type="radio" name="gender" value="Female">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Other
			  <input type="radio" name="gender" value="Other">
			  <span class="checkmark"></span>
			</label>
			
			<button type="submit" name="register" value="Register">Register</button>

		</form>
		<footer>&copy; Illusion Inc</footer>
		
	</div>
</body>
</html>