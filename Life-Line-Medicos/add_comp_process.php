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

$coname = $_POST['cname'];
$cphone = $_POST['cphone'];

$query = "INSERT INTO COMPANY VALUES ('$coname','$cphone')";
        mysql_query($query);
mysql_close();
header('Location:admin.php');
?>
