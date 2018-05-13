
<?php //echo $_SERVER['HTTP_HOST']; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Funda-CMS</title>
	<link rel="stylesheet" type="text/css" href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/funda/cms/cms.css">
	<script type="text/javascript" src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/funda/js/vue.js"></script>
</head>
<body>
<div id = "result"></div>
<div id = "las">
	<span>Learning Areas</span>
	<div v-for = "la in las" class = "la">
		{{la.title}}
		<div v-for="chapter in la.chapters" class = "chapter">
			{{chapter.title}}
			<div  v-for= "unit in chapter.units" class = "units">
			    {{unit}}
			</div>
		</div>
	</div>
</div>
<br>
<div id = "form" style="display: none">
	Title: <input type="text" id="name"><br>
	Chapter: <input type="text" id="chapter_title"><br>
	Units:
	<div id = "units_area" contenteditable="true">
		Enter units here
	</div>
	<button onclick="build_temp(document.getElementById('name').value,document.getElementById('chapter_title').value,document.getElementById('units_area').innerHTML);">Next Chapter</button>
	<button onclick="submit()">Done</button>
</div>
<button onclick="display_form()" id = "add_la">Add LA</button>

<script type="text/javascript">
	function display_form() {
		document.getElementById('form').style.display = "block"
	}

	function get_las() {
		//if(){		
					var response=""; 
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
			       // Typical action to be performed when the document is ready:
							set_las(xhttp.response);
							}
						};
		
					xhttp.open("GET", "learning_areas.txt", false);
					xhttp.send();
					//return response;
		/*		}
				else{
					alert("You need to add the task!");
				}*/
	}
	get_las();
	var learning_areas;
	function set_las(las) {
		learning_areas = JSON.parse(las);
	}
	//document.write(learning_areas);
	/*learning_areas = {
				'las':[
					{
						'title':'Maths Gr10',
						'chapters':[
							{
								'title':'Trigonometry',
								'units': [
									'Complementary Angles',
									'Waves',
									'Other things'
								]
							}
						]
					},
					{
						'title':'Maths Gr11',
						'chapters':[
							{
								'title':'Geometry',
								'units': [
									'Complementary Angles',
									'Waves',
									'Other things'
								]
							},
							{
								'title':'Geometry II',
								'units': [
									'Supplemantary Angles',
									'Waves and shit',
									'Other things'
								]
							}
						]
					}
				]
			}*/
		var temp = {};
		//console.log(learning_areas[1])
	function build_temp(title,chapter,units) {
		if(Object.keys(temp).length>0){
			//console.log(learning_areas.length);
			var units_arr = units.split(',');
			learning_areas['las'][learning_areas['las'].length-1]['chapters'].push({'title':chapter,'units':units_arr});
			//console.log(learning_areas[learning_areas.length-1]);
			//console.log(learning_areas);
		}
		else{
			temp['title'] = title;
			temp['chapters']=[];
			var units_arr = units.split(',');
			temp['chapters'].push({'title':chapter,'units':units_arr});
			//console.log(Object.keys(temp).length);
			learning_areas['las'].push(temp);
			//temp = {};
		}
		
	}

	function submit() {
		var json = JSON.stringify(learning_areas);
		//if(){
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
			       // Typical action to be performed when the document is ready:
							document.getElementById("result").innerHTML = xhttp.responseText;
							}
						};
		
					xhttp.open("GET", "add_la.php?json="+json, true);
					xhttp.send();
		
		/*		}
				else{
					alert("You need to add the task!");
				}*/
	}
	var app = new Vue({
		el:"#las",
		data:{
			las: learning_areas['las']
			},
			methods:{
				add_la: function(la){
					this.las.push(a);
				}
			}
	});
</script>
</body>
</html>