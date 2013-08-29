<?php
session_start();
if($_SESSION['mode']!=1)
{
$ms="Access Denied";
header('Location:login.php? msg=' . $ms );
}
?>

<html>
<script>

function mf(value)
{
alert("Required amount to be paid is " + value);
}
return false;
</script>

<body>
<h2>Make Payment</h2>
<form action="add_payment_process.php" method="POST">
<?php
include 'header.php';
$sql1="SELECT * FROM PURCHASES";
$result1 = mysql_query($sql1);
echo "&nbspSelect Challan: &nbsp&nbsp&nbsp&nbsp";
echo "<select name='challan'>";
while($row = mysql_fetch_array($result1))
{
	$x=$row['Challan_no'];
	echo "<option value='$x'>" . $row['Challan_no'] ."</option>";
}
$q="select Amount from PURCHASES where Challan_no = '$x'";
$r=mysql_query($q);
$row=mysql_fetch_array($r);
$y=$row['Amount']; 
echo "</select>";
?>
</br>
<div></div>
<table border="0" cellpadding"5" cellspacing="5">
<tr><td>Cheque Number: </td>
<td><input type="text" name="chq"></td></tr>
<tr><td>Date: </td>
<td> <input type="text" name="date"></td></tr>
<tr><td>Amount: </td>
<td><input type="text" name="amnt"></td></tr>
</table>
<?php
echo "<input type=\"submit\" value=\"Submit\"> ";
?>
</form>
</body>
<html>
