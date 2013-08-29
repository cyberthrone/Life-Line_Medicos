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

$stockistname = $_POST['name'];
$phone_no = $_POST['phn'];
$bank = $_POST['bank'];

$query = "INSERT INTO STOCKIST (Name,Phone_No,Account_No) VALUES ('$stockistname','$phone_no','$bank')";
        $run=mysql_query($query);

mysql_close();
header('Location:admin.php');
?>
