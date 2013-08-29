<?php
include('header.php');

$id = $_POST['y'];
$arr = explode("+", $id);
$sql="delete from Demand_book where C_id='$arr[0]' and Drug_name='$arr[1]'";
$result= mysql_query($sql);
mysql_close();
header('Location:modify_demand.php');
?>


