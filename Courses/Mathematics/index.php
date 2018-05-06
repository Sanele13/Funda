<html>
	<head>
		<title>Funda-Making a difference through education</title>
		<link rel = 'stylesheet' type = 'text/css' href = 'http://localhost/funda/css/fundastyle.css'>
		<script>
			//JSON for the lesson
			var mathematic_12 = {
				"Introduction":{
					"Prerequisites":{
						content:["<p>To understand the material presented in this book you need to know a programming language well enough to translate the pseudocode in this book into a working solution. You also need to know the basics about the following data structures: arrays, stacks, queues, linked-lists, trees, heaps (also called priority queues), disjoint sets, and graphs.</p>","<p>Additionally, you should know some basic algorithms like binary search, a sorting algorithm (merge sort, heap sort, insertion sort, or others), and breadth-first or depth-first search.</p>","<p>If you are unfamiliar with any of these prerequisites you should review the material in the Data Structures book first.</p>"]
					},
					"When is Efficiency Important?":{
						content:["<p>Not every problem requires the most efficient solution available. For our purposes, the term efficient is concerned with the time and/or space needed to perform the task. When either time or space is abundant and cheap, it may not be worth it to pay a programmer to spend a day or so working to make a program faster.</p>","<p>However, here are some cases where efficiency matters: <br><ul><li>When resources are limited, a change in algorithms could create great savings and allow limited machines (like cell phones, embedded systems, and sensor networks) to be stretched to the frontier of possibility.</li><li>When the data is large a more efficient solution can mean the difference between a task finishing in two days versus two weeks. Examples include physics, genetics, web searches, massive online stores, and network traffic analysis.</li><li>Real time applications: the term “real time applications” actually refers to computations that give time guarantees, versus meaning “fast.” However,the quality can be increased further by choosing the appropriate algorithm.</li></ul></p>"]
					},
					"Inventing Algorithms":{
						content:""
					},
				},
				"Mathematical Background":[],
				"Divide and Conquer":[],
				"Randomization":[]
			};


			function addUnits(){
				for (var i = 0; i < Object.keys(book).length; i++) {
					//var parent = document.getElementsByClassName('units')[0];
					//console.log(parent);
					//var node = document.createElement("LI");
					document.write("<li>"+Object.keys(book)[i]+"</li>");
					console.log("<li>"+book[Object.keys(book)[i]]+"</li>");
					/*var child = */
					//node.appendChild("<li>"+book[Object.keys(book)[i]]+"</li>");
					//console.log(book.length);
				}
			}

			function addSections(unit=0) {
				// body...
				var unitObject = book[Object.keys(book)[unit]];
				alert(Object.keys(unitObject))
				alert(unitObject[Object.keys(unitObject)[0]]);
				for (var i = 0; i < Object.keys(unitObject).length; i++) {
					document.write("<li>"+Object.keys(unitObject)[i]+"</li>");
				}
			}
			var slide=0;
			function addContent(unit="Introduction", section="Prerequisites", slide){
				slide<book[unit][section]["content"].length && slide>-1?document.getElementsByClassName('content-display')[0].innerHTML = book[unit][section]["content"][slide]:alert("You have reached the end");
			}
		</script>
	</head>
	<body>
		<?php include("../../header.php"); ?>
		
		<h1 style="text-align: center;">Mathematics</h1>
		
		<div class="subject-container">
			<div class="units">
				
				<h2 style="text-align: center;">Contents</h2>
				<ul>
					<script>addUnits(); </script>	
				</ul>
			</div>
			<div class="content">
				<div class="content-display">
					<script type="text/javascript">addContent(unit="Introduction", section="Prerequisites", slide);</script>	
				</div>
				
				<div class="content-bottom">
					<div id = "prev" onclick="slide--,addContent('Introduction','Prerequisites',slide)">Prev</div>
					<div id="slide-count">
						<center>0/5</center>
						<div id="completion-percentage-display">
							<div id="green-bar"></div>
						</div>
					</div>
					<div id = "next" onclick="slide++,addContent('Introduction','Prerequisites',slide)">Next</div>
				</div>
			</div>
			<div class="sections">
				<h2 style="text-align: center;">Sections</h2>
				<ul>
					<script type="text/javascript">addSections()</script>
				</ul>
			</div>

			
		</div>
		<script type="text/javascript">
			

		</script>>
	</body>
</html>