<?php
	$filename = $_GET['filename'];
	$file = fopen($filename,"r");
	echo fread($file, filesize($filename));
	fclose($file);
?>