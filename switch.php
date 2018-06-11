<?php
	//echo $_SERVER['HTTP_HOST'];
	$hostname = $_SERVER['HTTP_HOST'];
	$host_url="";
	if ($hostname=="localhost") {
		$host_url =  "http://localhost/Funda";
	}
	else{
		$host_url = "https://".$hostname;
	}
?>