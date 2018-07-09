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
						<hr>
						<div v-for = "chapter in course.chapters" class="chapter">
							<div class="chapter-title" v-on:click = "show_units">
								{{chapter.title}}
							</div>
							<div class="units hide">
								<hr>
								<div class="unit" v-for ="unit in chapter.units" v-on:click = "show_content">
									{{unit}}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<script type="text/javascript">
			function get_content(name){
				content = [];
				var response=""; 
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						content = JSON.parse(xhttp.response)['content'];
					}
				};
				xhttp.open("GET", "../cms/"+name, false);
				xhttp.send();
				return content;
			}
			
			var app = new Vue({
				el: ".container",
				data: {
					courses: [] 
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
						console.log(event.path[1].children[1])
						event.path[1].children[1].classList.toggle('hide')
						event.path[1].children[1].classList.toggle('display')
					},
					show_content:function(event){
						console.log(event.path[0].innerText)
						document.getElementsByClassName('container')[0].style.display='none';
						var course_title = event.path[4].firstChild.innerText;
						var chapter_title = event.path[2].firstChild.innerText;
						var unit_title = event.path[0].innerText;	
						content_app.title = unit_title;
						console.log(get_content(course_title+"-"+chapter_title+"-"+unit_title))
						content_app.content = get_content(course_title+"-"+chapter_title+"-"+unit_title);

					}
				}
			});
		</script>
		<script type="text/javascript">
			function get_courses(){
				courses = [];
				
				var response=""; 
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
			       		console.log(xhttp.response);
			       		courses = JSON.parse(xhttp.response)['las'];
					}
				};
		
				xhttp.open("GET", "../cms/learning_areas.txt", false);
				xhttp.send();
				app.courses = courses;	
			}
			get_courses();
		</script>
	</body>
</html>