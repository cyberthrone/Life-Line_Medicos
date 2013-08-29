<?php
include('header.php');

$id = $_POST['y'];
$sql="delete from DRUG where Name='$id'";
$result= mysql_query($sql);
mysql_close();
header('Location:modify_drugs.php');
?>


