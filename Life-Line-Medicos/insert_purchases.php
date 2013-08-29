<?php
include('header.php');
$bill_no = $_POST['challan'];
$date = $_POST['date'];
$amnt = $_POST['amnt'];
$stockist = $_POST['stockist'];
$query = "INSERT into PURCHASES values('$date','$bill_no','$stockist','$amnt',0)";
mysql_query($query);
mysql_close();
header('Location:view_purchases.php');
?>
