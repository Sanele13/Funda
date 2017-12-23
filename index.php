<html>
	<head>
		<title>Funda-Making a difference through education</title>
		<link rel = 'stylesheet' type = 'text/css' href = 'fundastyle.css'>
		<script></script>
	</head>
	<body>
		<?php include("header.php"); ?>
		<?php //include("menu.php"); ?>
		<div class = "login">
			<form action="login/" method = "POST">
				<input name = "username" type = "text" placeholder = "Username/email" class="login-input" /><br/><br/>
				<input name = "password" type = "password" placeholder = "Password" class="login-input" /><br/><br/><br/>
				<input id = "login-button" name = "submit" type = "submit" value="Log in">
			</form><br/>
			
		</div>
		<br/>
		<p style = "text-align: center;"><a href = "create/"><span style = "text-decoration: underline;text-align: center;">Create Account</span></a></p>
		
	</body>
</html>