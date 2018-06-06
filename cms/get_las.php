<?php
	$file = fopen("learning_areas.txt","r");
	echo fread($file, filesize("learning_areas.txt"));
	fclose($file);
?>