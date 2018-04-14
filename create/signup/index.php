<?php
/*
Name: Sanele Mpangalala

add user to the datatbase
*/

$name = $_POST["name"];
//$middleName = $_POST["mid-name"];
$lastName = $_POST["surname"];
$grade = $_POST['grade'];
$password = md5($_POST["password"]);
$confPassword = $_POST["conf-password"];
$cell_number = $_POST["cell_number"];
$email_address = $_POST["email_address"];

//sanitise input to database


//add to database
//1. connect to database
$link = mysqli_connect("localhost","root","zukiswa");
$db = mysqli_select_db($link, "funda");
//echo $db;
//	$sql_query = mysqli_query($link, "create table funda_users (name TEXT, mid_name TEXT, surname TEXT, ID TEXT, cell_number TEXT, email_address TEXT)"); -- created db for users
//$query = 
$sql_query = mysqli_query($link, "insert into funda_users (user_id,name,surname,password,cell_number,email,grade) values (NULL,'{$name}','{$lastName}','{$password}','{$cell_number}','{$email_address}','{$grade}')");
//$result = mysqli_fetch_assoc($sql_query);
//echo $result;
/*while ($row = mysqli_fetch_row($sql_query)) {
printf ($row[0]);
}*/

?>