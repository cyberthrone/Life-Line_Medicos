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

$drugname = $_POST['cno'];
$stock = $_POST['stock'];
$price = $_POST['price'];
$Edate = $_POST['Edate'];
$Emonth = $_POST['Emonth'];
$Eyear = $_POST['Eyear'];
$edate = $_POST['Edate'] . "-" . $_POST['Emonth'] . "-" . $_POST['Eyear'];

$query = "SELECT S_id from STOCKIST where $stock = Name";
        $run=mysql_query($query);


$query = "INSERT INTO PURCHASES VALUES ('$edate','$cno','$stock','$price',0)";
        $run=mysql_query($query);

mysql_close();
header('Location:admin.php');

?>
