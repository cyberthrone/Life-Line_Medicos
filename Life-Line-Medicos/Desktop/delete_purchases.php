<?php
include('header.php');

$id = $_POST['y'];
$arr = explode("+", $id);
$sql="delete from PURCHASES where Challan_no='$arr[0]' and Stk_id='$arr[1]'";
$result= mysql_query($sql);
mysql_close();
header('Location:modify_purchases.php');
?>


