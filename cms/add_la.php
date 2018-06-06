<?php
	$file = fopen("learning_areas.txt","w");
	fwrite($file, $_GET['json']);
	fclose($file);
?>