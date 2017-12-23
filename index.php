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
			<form action="login.php" method = "POST">
				<input name = "username" type = "text" placeholder = "Username/email" class="login-input" /><br/><br/>
				<input name = "password" type = "password" placeholder = "Password" class="login-input" /><br/><br/><br/>
				<input id = "login-button" name = "submit" type = "submit" value="Log in">
			</form>
		</div>
		
	</body>
</html>