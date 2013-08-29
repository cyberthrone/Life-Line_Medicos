
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

<script>
function validateForm()
{
var x1=document.forms["form1"]["name"].value;
var x2=document.forms["form1"]["phn"].value;
var x3=document.forms["form1"]["bank"].value;

if (x1==null || x1=="" || x2==null || x2=="" || x3==null || x3=="")
  {
  alert("Fill Complete Details");
  return false;
  }
}
</script>
<form name="form1" method="POST" action="add_stockist_process.php" onsubmit="return validateForm()">
<table border="0" cellspacing="5" cellpadding="5">
<tr>
<td>Name: </td>
<td><input type="text" name="name" /></td>
</tr>
<tr>
<td>Phone-no: </td>
<td><input type="text" name="phn" /></td>
</tr>
<tr>
<td>A/c No: </td>
<td><input type="text" name="bank" /></td>
</tr>
<tr>
<td>Works_for: </td>
<td>
<?php
include 'header.php';
$sql1="SELECT * FROM COMPANY";
$result1 = mysql_query($sql1);
echo "<select name='comp'>";
while($row = mysql_fetch_array($result1))
{
        $x=$row['NAME'];
        echo "<option value='$x'>" . $row['NAME'] ."</option>";
}
echo "</select>";
?>
</td>
</tr>

</table>
</br>
&nbsp;
<input type="submit" value="Register" />
</form>
</html>
