<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="NewLogin.css">
</head>
<body>

	<div class="loginbox">
		<h1>Illusion</h1>
		<button class="signup" onclick="gotoSignup()" id="signupbtn">Sign Up</button>
		<button class="signin" onclick="gotologin()" id="signinbtn">Sign In</button>
		<div class="register" id="regdiv">
			<form>
				<?php include('errors.php'); ?>
				<label>FIRST NAME</label><br> 
				<input type="text" name="FirstName" placeholder="Enter your first name" required="required"><br>
				<label>LAST NAME</label><br> 
				<input type="text" name="Surname" placeholder="Enter your last name" required="required"><br>
				<label>E-MAIL</label><br> 
				<input type="text" name="EmailID" placeholder="Your email goes here" required="required"><br>
				<label>PASSWORD</label><br> 
				<input type="password" name="Password" placeholder="Enter Password" required="required"><br>
				<label>CONFIRM PASSWORD</label><br> 
				<input type="password" name="ConfirmPassword" placeholder="Confirm Password" required="required"><br>
				<input type="checkbox" name="">I agree all statements <a href="">terms of service.</a><br><br>
				<button type="submit" name="register" value="Register" class="regbtn" id="newbtn">Sign Up</button>
				<!-- <input type="submit" name="register" value="Sign Up"> -->
			</form>	
		</div>
		<div class="Login" id="logdiv">
			<form>
				<label>E-MAIL</label><br> 
				<input type="text" name="Email" placeholder="Your email goes here" required><br>
				<label>PASSWORD</label><br> 
				<input type="password" name="Pass" placeholder="Enter Password" required><br>
				<input type="submit" name="login" value="Sign In">
			</form>	
		</div>
	</div>
	<script type="text/javascript">
		function gotoSignup(){
			document.getElementById("regdiv").style.display = "block";
			document.getElementById("logdiv").style.display = "none";
			document.getElementById("signupbtn").style.backgroundColor = "#6ee0cb";
			document.getElementById("signupbtn").style.color = "#fff";
			document.getElementById("signinbtn").style.backgroundColor = "#4c5d72";
			document.getElementById("signinbtn").style.color = "#727f90";


		}
		function gotologin(){
			document.getElementById("regdiv").style.display = "none";
			document.getElementById("logdiv").style.display = "block";
			document.getElementById("signinbtn").style.backgroundColor = "#6ee0cb";
			document.getElementById("signupbtn").style.backgroundColor = "#4c5d72";
			document.getElementById("signupbtn").style.color = "#727f90";
			document.getElementById("signinbtn").style.color = "#fff";
		}
	</script>
</body>
</html>