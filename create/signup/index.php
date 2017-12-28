<?php
/*
Name: Sanele Mpangalala

add user to the datatbase
*/

$name = $_POST["name"];
$middleName = $_POST["mid-name"];
$lastName = $_POST["surname"];
$IdentityNum = $_POST["ID"];
$password = $_POST["password"];
$confPassword = $_POST["conf-password"];

//sanitise input to database


//add to database
//1. connect to database
$link = mysqli_connect("localhost","root","zukiswa");
//2. select database
$db = mysqli_select_db($link, "mydb");

$sql_query = mysqli_query($link, "create table funda (TEXT name, TEXT mid_name, TEXT surname, VARCHAR(13) ID_num, TEXT email_address, VARCHAR(10)cell_number);");
$result = mysqli_fetch_assoc($sql_query);
//echo $result;
/*while ($row = mysqli_fetch_row($sql_query)) {
printf ("%s (%s)\n", $row[0], $row[1]);
}*/

?>