<?php
include('header.php');
$bill_no = $_POST['bill_no'];
$date = $_POST['date'];
$amnt = $_POST['amnt'];
$etype = $_POST['etype'];
$mnth = $_POST['mnth'];
$query = "INSERT into General_Expenses values('$bill_no','$date','$amnt','$etype','$mnth')";
mysql_query($query);
mysql_close();
header('Location: general_exp.php');
?>
