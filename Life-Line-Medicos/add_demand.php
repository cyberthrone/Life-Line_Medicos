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
var x1=document.forms["form1"]["dname"].value;
var x2=document.forms["form1"]["stock"].value;
var x3=document.forms["form1"]["price"].value;
var x4=document.forms["form1"]["mfg_by"].value;
var x5=document.forms["form1"]["drawer"].value;
var x6=document.forms["form1"]["rack"].value;

if (x1==null || x1=="" || x2==null || x2=="" || x3==null || x3=="" || x4==null || x4=="" || x5==null || x5=="" || x6==null || x6=="")
  {
  alert("Fill Complete Details");
  return false;
  }
}
</script>
<form name="form1" method="POST" action="add_demand_process.php" onsubmit="return validateForm()">
<table border="0" cellspacing="5" cellpadding="5">
<tr>
<td>Customer Id: </td>
<td>
<?php
include 'header.php';
$sql1="SELECT * FROM Customer";
$result1 = mysql_query($sql1);
echo "<select name='cid'>";
while($row = mysql_fetch_array($result1))
{
        $x=$row['C_id'];
        echo "<option value='$x'>" . $row['C_id'] ."</option>";
}
echo "</select>";
?>
</td>
</tr>
<tr>
<td>Drug Name: </td>
<td><input type="text" name="drug" /></td>
</tr>
<tr>
<td>Company: </td>
<td><input type="text" name="cname" /></td>
</tr>
<tr>
<td>Quantity: </td>
<td><input type="text" name="qty" /></td>
</tr>
<tr>
<td>
<input type="submit" value="Insert">
</td>
</tr>
</table>
</form>
</html>
