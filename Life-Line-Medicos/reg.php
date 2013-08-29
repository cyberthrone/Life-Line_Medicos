<?php
include('header.php');

$userna = $_POST['user_id'];
$pass1 = $_POST['pass1'];
$name = $_POST['Uname'];
$type = $_POST['Utype'];
$flag = $_GET['flag'];
if(!$flag)
{
$flag=2;
}

$query = "INSERT INTO USER_INFO (User_id,Passwd,Name,User_type)  VALUES ('$userna','$pass1','$name','$flag')";
	$run=mysql_query($query);

mysql_close();
header('Location: login.php');
?>
