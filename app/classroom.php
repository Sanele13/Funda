<?php include '../switch.php'; ?>
<html>
	<head>
		<title>Funda-Making a difference through education</title>
		<link rel = 'stylesheet' type = 'text/css' href = '<?php echo $host_url; ?>/css/fundastyle.css'>
		<link rel = 'stylesheet' type = 'text/css' href = '<?php echo $host_url; ?>/css/classroom.css'>
		<script src="<?php echo $host_url; ?>/js/vue.js"></script>
	</head>
	<body>
		<div class="menu-container">
			<div class="menu-icon">
				<div class="bar-container">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</div>
			</div>
			<div class="menu">
				<div class="menu-options">
					<div class="menu-opt">Subjects</div>
					<div class="menu-opt">Mock Tests & Exams</div>
					<div class="menu-opt">Quizzes</div>
					<div class="menu-opt">Competitions</div>
					<div class="menu-opt">Discussions</div>
				</div>
			</div>	
		</div>
		
		<div class = "outer-container">
			<div class="inner-container">
				<?php include 'app.php';?>
				<script>console.log(app)</script>
			</div>
			
		</div>
		
	</body>
</html>