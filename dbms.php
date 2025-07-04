<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$mysql_name='project';
$conn=mysqli_connect($mysql_host,$mysql_user,$mysql_password,$mysql_name);
if(!$conn){
	die("connection failed".mysqli_connect_error());
}
?>
