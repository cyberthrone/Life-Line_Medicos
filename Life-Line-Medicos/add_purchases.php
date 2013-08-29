<?php
session_start();
if($_SESSION['mode']!=1)
{
$ms="Access Denied";
header('Location:login.php? msg=' . $ms );
}
?>

<html>
<style type-"text/css">
body
{
background:url(./css/bg.jpg);
}
</style>

<form id="form3" name="form3" method="POST" action="insert_purchases.php">
	<table border="0" cellspacing="5" cellpadding="5">
	<tr>
		<td>Date : </td>
		<td><input type="text" name="date" /></td>
	</tr>
	<tr>
		<td>Challan No :  </td>
		<td><input type="text" name="challan" /></td>
	</tr>
	
	<tr>
		<td>Amount :  </td>
		<td><input type="text" name="amnt" /></td>
	</tr>
	<tr>
		<td>Stockist Id : </td>
<td>
<?php
include 'header.php';
$sql1="SELECT * FROM STOCKIST";
$result1 = mysql_query($sql1);
echo "<select name='stockist'>";
while($row = mysql_fetch_array($result1))
{
        $x=$row['S_id'];
        echo "<option value='$x'>" . $row['S_id'] ."</option>";
}
echo "</select>";
?>
</td>
	</tr>
	</table>
	<input type="submit" value="Submit" />
</form>
</center>
</html>
