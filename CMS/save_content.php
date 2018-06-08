<?php 
	//echo $_GET['json'];
	$filname = $_GET['la']."-".$_GET['chapter']."-".$_GET['unit'];
	$file = fopen($filname,"w");
	fwrite($file, $_GET['json']);
	fclose($file);
?>