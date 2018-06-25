<?php include '../switch.php'; ?>
<html>
	<head>
		<title>Funda-Making a difference through education</title>
		<link rel = 'stylesheet' type = 'text/css' href = '<?php echo $host_url; ?>/css/fundastyle.css'>
		<link rel = 'stylesheet' type = 'text/css' href = '<?php echo $host_url; ?>/css/classroom.css'>
		<link rel = 'stylesheet' type = 'text/css' href = '<?php echo $host_url; ?>/css/menu.css'>
		<script src="<?php echo $host_url; ?>/js/vue.js"></script>
	</head>
	<body>
		<div id="menu-container">
			<div id="menu-icon" v-on:click = "display_menu">
				<div id="bar-container">
					<div class="bar"></div>
					<div class="bar"></div>
					<div class="bar"></div>
				</div>
			</div>
			<div id="menu">
				<div id="menu-options">
					<div class="menu-opt">Subjects</div>
					<div class="menu-opt">Mock Tests & Exams</div>
					<div class="menu-opt">Quizzes</div>
					<div class="menu-opt">Competitions</div>
					<div class="menu-opt">Discussions</div>
				</div>
			</div>	
		</div>
		
		<div id = "outer-container">
			<div id="inner-container">
				<?php include 'app.php';?>
			</div>
			
		</div>
		<script src="<?php echo $host_url; ?>/js/menu.js"></script>
		<script type="text/javascript">
		</script>
	</body>
</html>