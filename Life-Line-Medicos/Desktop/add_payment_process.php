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
echo $challan;
$cheque=$_POST['chq'];
echo $cheque;
$date=$_POST['date'];
echo $date;
$amount=$_POST['amnt'];
echo $amount;
$query = "INSERT INTO BANK_TRANSACTIONS VALUES ('$challan','$cheque','$amount','$date')";
$run=mysql_query($query);
$val="1";
$query2="update PURCHASES set Flag='$val' where Challan_no='$challan' ";
$query2_res=mysql_query($query2);
mysql_close();
header('Location:view_bank.php');
?>
