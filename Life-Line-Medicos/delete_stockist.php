<?php
include('header.php');

$id = $_POST['y'];
$sql="delete from STOCKIST where S_id='$id'";
$result= mysql_query($sql);
mysql_close();
header('Location:stockist_view.php');
?>


