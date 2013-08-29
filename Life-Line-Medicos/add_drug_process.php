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

$drugname = $_POST['dname'];
echo $drugname;
$stock = $_POST['stock'];
echo $stock;
$price = $_POST['price'];
echo $price;
$mfg_by = $_POST['mfg_by'];
echo $mfg_by;
$drawer = $_POST['drawer'];
echo $drawer;
$rack = $_POST['rack'];
echo $rack;
$Edate = $_POST['Edate'];
$Emonth = $_POST['Emonth'];
$Eyear = $_POST['Eyear'];
$Mdate = $_POST['Mdate'];
$Mmonth = $_POST['Mmonth'];
$Myear = $_POST['Myear'];
$edate = $_POST['Edate'] . "-" . $_POST['Emonth'] . "-" . $_POST['Eyear'];
$mdate = $_POST['Mdate'] . "-" . $_POST['Mmonth'] . "-" . $_POST['Myear'];

$query = "INSERT INTO DRUG VALUES ('$drugname','$stock','$price','$edate','$mdate','$mfg_by','$drawer','$rack')";
        $run=mysql_query($query);
mysql_close();
header('Location:admin.php');

?>
