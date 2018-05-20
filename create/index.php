<!DOCTYPE html>
<html>
	<head>
		<title>Create Account</title>
		<link type="text/css" rel = "stylesheet" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/funda/css/fundastyle.css"></link>
	</head>
<body>
	<?php include("../header.php"); ?>
	<div class = "login">
		<form action="signup/" method = "POST">
			<input name = "name" type = "text" placeholder = "Name" class="login-input" /><br/><br/>
			<!-- <input name = "mid-name" type = "text" placeholder = "Middle Name" class="login-input" /><br/><br/> -->
			<input name = "surname" type = "text" placeholder = "Surname" class="login-input" /><br/><br/>
			<!-- <input name = "ID" type = "text" placeholder = "ID Number" class="login-input" /><br/><br/> -->
			<input name = "cell_number" type = "text" placeholder = "Cell Number" class="login-input" /><br/><br/>
			<input name = "email_address" type = "text" placeholder = "Email Address" class="login-input" /><br/><br/>
			<input name = "password" type = "password" placeholder = "Password" class="login-input" /><br/><br/>
			<input name = "conf-password" type = "password" placeholder = "Confirm Password" class="login-input" /><br/><br/><br/>
			Grade: <select name="grade"><option>10</option><option>11</option><option>12</option></select><br/><br>
			<input id = "login-button" name = "submit" type = "submit" value="Sign Up">
		</form><br/>
			
	</div>
</body>
</html>