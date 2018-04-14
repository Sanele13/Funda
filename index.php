<html>
	<head>
		<title>Funda-Making a difference through education</title>
		<link rel = 'stylesheet' type = 'text/css' href = 'http://localhost/funda/css/fundastyle.css'>
		<script></script>
	</head>
	<body>
		<?php include("header.php"); ?>
		<?php //include("menu.php"); ?>
		<div class = "login">
			<form action="login/" method = "POST">
				<input name = "username" type = "text" placeholder = "Email/Cell Number" class="login-input" /><br/><br/>
				<input name = "password" type = "password" placeholder = "Password" class="login-input" /><br/><br/><br/>
				<input id = "login-button" name = "submit" type = "submit" value="Log in"><br/>
				<a href = "create/"><span style = "text-decoration: underline; margin-left: 33%">Create Account</span></a>
			</form>
			
		</div>
		
		
	</body>
</html>