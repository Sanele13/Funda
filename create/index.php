<?php
/*
Name: Sanele Mpangalala
Date: 23/12/2017
*/
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Create Account</title>
		<link type="text/css" rel = "stylesheet" href="../fundastyle.css"></link>
	</head>
<body>
	<div class = "login">
		<form action="/signup/" method = "POST">
			<input name = "name" type = "text" placeholder = "Name" class="login-input" /><br/><br/>
			<input name = "mid-name" type = "text" placeholder = "Middle Name" class="login-input" /><br/><br/>
			<input name = "surname" type = "text" placeholder = "Password" class="login-input" /><br/><br/>
			<input name = "ID" type = "text" placeholder = "ID Number" class="login-input" /><br/><br/>
			<input name = "password" type = "password" placeholder = "Password" class="login-input" /><br/><br/>
			<input name = "conf-password" type = "password" placeholder = "Confirm Password" class="login-input" /><br/><br/><br/>
			<input id = "login-button" name = "submit" type = "submit" value="Sign Up">
		</form><br/>
			
	</div>
</body>
</html>