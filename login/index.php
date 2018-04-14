<?php
/*
Name: Sanele Mpangalala
Date: 23/12/2017
*/

/**
* 
*/
require_once('login.php');
$login = new Login($_POST['username'],$_POST['password']);
if($login->user_exists()){
	require_once('../app.php');
};

?>