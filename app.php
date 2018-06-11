<?php include 'switch.php'; ?>
<html>
	<head>
		<title>Funda-Making a difference through education</title>
		<link rel = 'stylesheet' type = 'text/css' href = 'http://<?php echo $_SERVER['HTTP_HOST']; ?>/funda/css/fundastyle.css'>
		<link rel = 'stylesheet' type = 'text/css' href = 'http://<?php echo $_SERVER['HTTP_HOST']; ?>/funda/css/app.css'>
		<script src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/funda/js/vue.js"></script>
	</head>
	<body>
		<?php include("header.php"); ?>
		<br>
		<div class="container">
			<div class="courses">
				<div v-for="course in courses" class="course" v-on:click="show_units">
					{{course.title}}
					<div class="chapters">
						<hr style="width: 97%">
						<div class="chapter" v-for= "chapter in course.chapters">
							{{chapter.title}}
							<div class="units">
								<hr>
								<div class="unit" v-for="unit in chapter.units">
									{{unit}}
								</div>
							</div>
							<br>							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
			var app = new Vue({
				el: ".container",
				data: {
					courses: [{"title":"Maths Gr10","chapters":[{"title":"Trigonometry","units":["Complementary Angles","Waves","Other things"]}]},{"title":"Maths Gr11","chapters":[{"title":"Geometry","units":["Complementary Angles","Waves","Other things"]},{"title":"Geometry II","units":["Supplemantary Angles","Waves and shit","Other things"]}]},{"title":"Title","chapters":[{"title":"asde","units":["\n\t\tzuikewm","esr","ty","u"]}]},{"title":"Fam","chapters":[{"title":"Intro To The Fam","units":["Unit 1","Unit 2","Unit 3"]},{"title":"Intro To The Fam 2","units":["Unit 1","Unit 2","Unit 3","Unit 4","Unit 5"]}]}]
				}
			});
		</script>
	</body>
</html>