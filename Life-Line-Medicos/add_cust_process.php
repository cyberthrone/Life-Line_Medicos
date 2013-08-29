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

$cuname = $_POST['cname'];
$cuphone=$_POST['phone'];
$cillness=$_POST['illness'];
$query = "INSERT INTO Customer(Name,Phone_No,Illness) VALUES ('$cuname','$cuphone','$cillness')";
        mysql_query($query);
mysql_close();
header('Location:admin.php');
?>
