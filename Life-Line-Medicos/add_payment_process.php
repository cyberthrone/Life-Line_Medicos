<?php
session_start();
if($_SESSION['mode']!=1)
{
$ms="Access Denied";
header('Location:login.php? msg=' . $ms );
}
?>

<?php
include('header.php');
$challan=$_POST['challan'];
$cheque=$_POST['chq'];
$date=$_POST['date'];
$amount=$_POST['amnt'];
$query2="select * from PURCHASES where Challan_no='$challan'";
$run2=mysql_query($query2);
$row=mysql_fetch_array($run2);
if($amount == $row['Amount'])
{
$query = "INSERT INTO BANK_TRANSACTIONS VALUES ('$challan','$cheque','$amount','$date')";
$run=mysql_query($query);
$val="1";
$query2="update PURCHASES set Flag='$val' where Challan_no='$challan' ";
$query2_res=mysql_query($query2);

mysql_close();
header('Location:view_bank.php');}
else
{
	header('Location:make_payment.php?flag=2');
}
?>
