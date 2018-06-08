
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
<div id = "container">
	<div id = "las">
		<span>Learning Areas</span>
		<div v-for = "la in las" class = "la">
			<span v-on:click = "show_hide_chapter">
				{{la.title}}
			</span>
			<div v-for="chapter in la.chapters" class = "chapter hide">
				<span v-on:click = "show_hide_units">
					{{chapter.title}}
				</span>
				<div  v-for= "unit in chapter.units" class = "units hide">
			    	<span v-on:click = "edit_content">
			    		{{unit}}
			    	</span>
				</div>
			</div>
		</div>
	</div>

	<div id="edit_view" class="hide">
		<span class="edit_view_title">{{title}}/{{chapter}}/{{unit}}</span>
		<div class="tool-bar">
			<ul class="tools">
				<li v-on:click = "add_paragraph" class="tool">Add Paragraph</li>
				<li class="tool">Add Image</li>
				<li class="tool">Add Equation</li>
				<li class="tool">Add Paragraph</li>
			</ul>
		</div>
		<div class="content">
			<div v-for="paragraph in content" :id = "paragraph.id" class="para-container">
				<p contenteditable="false" v-on:click="edit_paragraph">
					{{paragraph.text}}		
				</p>
				<button v-on:click = "stop_editing" class="editing-done">Done</button>
			</div>
		</div>
		<div id="id" contenteditable="true"></div><br>
		<div class="edit hide" placeholder = "Enter paragraph here..." contenteditable="true">
			
		</div>
		<button v-on:click="add_para">Add</button>
		<button v-on:click="save_content">Save</button>

	</div>	
</div>
<br>
<div id = "form" style="display: none">
	Title: <input type="text" id="name"><br>
	Chapter: <input type="text" id="chapter_title"><br>
	Units:
	<div id = "units_area" placeholder = "Enter units here..." contenteditable="true">
		
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
	
		var temp = {};
		//console.log(learning_areas[1])
	function build_temp(title,chapter,units) {
		if(Object.keys(temp).length>0){
			//console.log(learning_areas.length);
			var units_arr = units.split(',');
			learning_areas['las'][learning_areas['las'].length-1]['chapters'].push({'title':chapter,'units':units_arr});
			//console.log(learning_areas[learning_areas.length-1]);
			console.log(learning_areas);
		}
		else{
			temp['title'] = title;
			temp['chapters']=[];
			var units_arr = units.split(',');
			temp['chapters'].push({'title':chapter,'units':units_arr});
			//console.log(Object.keys(temp).length);
			learning_areas['las'].push(temp);
			console.log(learning_areas)
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

					get_las();
		
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
				show_hide_chapter: function(event){
					if(event.path[1].getElementsByClassName('chapter')[0].classList.contains('hide')){
						for(var i=0; i<event.path[1].getElementsByClassName('chapter').length;i++){
							event.path[1].getElementsByClassName('chapter')[i].classList.remove('hide')
							event.path[1].getElementsByClassName('chapter')[i].classList.add('display')
						}	
					}
					else if(event.path[1].getElementsByClassName('chapter')[0].classList.contains('display')){
						for(var i=0; i<event.path[1].getElementsByClassName('chapter').length;i++){
							event.path[1].getElementsByClassName('chapter')[i].classList.remove('display')
							event.path[1].getElementsByClassName('chapter')[i].classList.add('hide')
						}	
					}
					else{
						console.log('andazi ke')
					}
					//console.log(event.path[1].getElementsByClassName('chapter')[0].classList.contains('hide'))
				},
				show_hide_units: function(event){
					console.log(event.path[1].getElementsByClassName('units')[0].classList)
					if(event.path[1].getElementsByClassName('units')[0].classList.contains('hide')){
						for(var i=0; i<event.path[1    ].getElementsByClassName('units').length;i++){
							console.log('hey')
							event.path[1].getElementsByClassName('units')[i].classList.remove('hide')
							event.path[1].getElementsByClassName('units')[i].classList.add('display')		
						}
					}
					else if(event.path[1].getElementsByClassName('units')[0].classList.contains('display')){
						//console.log(event.path[1].getElementsByClassName('chapter')[0].style.display)
						for(var i=0; i<event.path[1].getElementsByClassName('units').length;i++){
							event.path[1].getElementsByClassName('units')[i].classList.remove('display')
							event.path[1].getElementsByClassName('units')[i].classList.add('hide')	
						}
					}
					else{
						console.log('andazi ke')
					}
					//console.log(event.path[1].getElementsByClassName('chapter')[0].classList.contains('hide'))
				},
				edit_content: function(event){
					console.log(event.path)
					edit_view_app.title=event.path[3].firstChild.innerText
					edit_view_app.chapter=event.path[2].firstElementChild.innerText
					edit_view_app.unit=event.path[0].innerText
					document.getElementById('edit_view').classList.remove('hide');
					document.getElementById('edit_view').classList.add('display');
				}
			}
	});

	var edit_view_app = new Vue({
		el:'#edit_view',
		data:{
			title:'Learning Area Title',
			chapter:'chapter',
			unit:'unit',
			content:[],
			content_json:{}
		},
		methods:{
			add_paragraph:function() {
				// body...
				document.getElementsByClassName('edit')[0].classList.remove('hide')
				document.getElementsByClassName('edit')[0].classList.add('display')
			},
			add_para:function(){
				var id = document.getElementById('id').innerHTML;
				var paragraph = document.getElementsByClassName('edit')[0].innerHTML.replace(/<div>/g,'')
				paragraph = paragraph.replace(/<\/div>/g,'')
				//document.getElementsByClassName('content')[0].innerHTML += '<div id = "'+id+'" contenteditable="false">'+paragraph+'</div>'
				this.content.push({'id':id,'text':paragraph})
				this.content_json[id]=paragraph;
				//console.log(this.content)
			},
			edit_paragraph:function(event){
				//console.log(event.path[1])
				//console.log(document.getElementById(event.path[0]['id']).getAttribute('contenteditable'))
				var paragraph = event.path[1].getElementsByTagName('p')[0];
				//console.log(paragraph)
				paragraph.setAttribute('contenteditable','true');
				paragraph.classList.add('editing')
				//event.path[0].childNodes[1].setAttribute('style','display:block');
				var button = event.path[1].getElementsByTagName('button')[0]
				button.setAttribute('style','display:block')
				//console.log();

			},
			stop_editing:function(event){
				//remove éditing' from div
				var paragraph = event.path[1].getElementsByTagName('p')[0];
				event.path[0].setAttribute('style','display:none');
				paragraph.classList.remove('editing')
				paragraph.setAttribute('contenteditable','false');
				console.log(event.path);

			},
			save_content:function(){
				console.log(this.content_json)
				console.log(JSON.stringify(this.content_json))
				var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
			       // Typical action to be performed when the document is ready:
							document.getElementById("result").innerHTML = xhttp.responseText;
							}
						};
		
					xhttp.open("GET", "save_content.php?json="+JSON.stringify(this.content_json)+"&la="+this.title+"&chapter="+this.chapter+"&unit="+this.unit, true);
					xhttp.send();
			}
		}

		
	});
</script>
</body>
</html>