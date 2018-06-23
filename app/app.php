<?php include '../switch.php'; ?>
<html>
	<head>
		<title>Funda-Making a difference through education</title>
		<link rel = 'stylesheet' type = 'text/css' href = '<?php echo $host_url; ?>/css/fundastyle.css'>
		<link rel = 'stylesheet' type = 'text/css' href = '<?php echo $host_url; ?>/css/app.css'>
		<script src="<?php echo $host_url; ?>/js/vue.js"></script>
	</head>
	<body>
		<?php //include("../header.php"); ?>
		<br>
		<div class="container">
			<div class="courses">
				<div v-for="course in courses" class="course">
					<div class="la-title" v-on:click="show_chapters">
						{{course.title}}
					</div>
					<div class="chapters hide">
						<hr style="width: 97%">
						<div class="chapter" v-for= "chapter in course.chapters" v-on:click = "show_units">
							{{chapter.title}}
							<div class="units hide">
								<hr>
								<div class="unit" v-for="unit in chapter.units" v-on:click="show_content">
									-{{unit}}
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
				},
				methods:{
					show_chapters: function(event){
						console.log(event.path[1].children[1].classList)
						for(var i=0; i < document.getElementsByClassName('chapters').length; i++){
							if(document.getElementsByClassName('la-title')[i].innerHTML === event.path[1].getElementsByClassName('la-title')[0].innerHTML){
								event.path[1].children[1].classList.toggle('display')
							}
							else{
								document.getElementsByClassName('chapters')[i].classList.add('hide')
								document.getElementsByClassName('chapters')[i].classList.remove('display')
							}
						}
					},
					show_units: function(event){
						console.log(event.path[0].children[0])
						event.path[0].children[0].classList.toggle('hide')
						event.path[0].children[0].classList.toggle('display')
					}
				}
			});
		</script>
	</body>
</html>