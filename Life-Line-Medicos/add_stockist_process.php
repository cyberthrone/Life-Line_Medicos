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
$comp = $_POST['comp'];


$query = "INSERT INTO STOCKIST (Name,Phone_No,Account_No) VALUES ('$stockistname','$phone_no','$bank')";
        $run=mysql_query($query);
$query = "select S_id from STOCKIST where Name='$stockistname' and Phone_No='$phone_no' and Account_No='$bank'";
        $run=mysql_query($query);
$row = mysql_fetch_row($run);
echo $comp;
echo $row[0];
$q1= "insert into Works_For (Company_name,S_id) values ('$comp','$row[0]')";
        $run=mysql_query($q1);
mysql_close();
header('Location:admin.php');
?>
