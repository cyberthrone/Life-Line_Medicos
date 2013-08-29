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

$cid = $_POST['cid'];
$drug = $_POST['drug'];
$cname = $_POST['cname'];
$qty = $_POST['qty'];
$query = "INSERT INTO Demand_book VALUES ('$cid','$drug','$cname','$qty')";
        $run=mysql_query($query);
mysql_close();
header('Location:admin.php');

?>
