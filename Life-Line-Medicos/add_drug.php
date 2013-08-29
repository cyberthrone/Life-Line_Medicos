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
<form name="form1" method="POST" action="add_drug_process.php" onsubmit="return validateForm()">
<table border="0" cellspacing="5" cellpadding="5">
<tr>
<td>Drug Name: </td>
<td><input type="text" name="dname" /></td>
</tr>
<tr>
<td>Stock: </td>
<td><input type="text" name="stock" /></td>
</tr>
<tr>
<td>Price: </td>
<td><input type="text" name="price" /></td>
</tr>
<tr>
<td>Mfg_by: </td>
<td>
<?php
include 'header.php';
$sql1="SELECT * FROM COMPANY";
$result1 = mysql_query($sql1);
echo "<select name='mfg_by'>";
while($row = mysql_fetch_array($result1))
{
        $x=$row['NAME'];
        echo "<option value='$x'>" . $row['NAME'] ."</option>";
}
echo "</select>";
?>
</td>
</tr>
<tr>
<td>Drawer: </td>
<td><input type="text" name="drawer" /></td>
</tr>
<tr>
<td>Rack: </td>
<td><input type="text" name="rack" /></td>
</tr>

</table>
&nbsp;&nbsp;Exp_date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="Edate">
<?php
for($i=1; $i<32; $i++)
{
echo "<option value=" .$i . ">" . $i . "</option></br>";
}
?>
</select>

<select name="Emonth">
<option value="Jan">Jan</option>
<option value="Feb">Feb</option>
<option value="Mar">Mar</option>
<option value="Apr">Apr</option>
<option value="May">May</option>
<option value="Jun">Jun</option>
<option value="Jul">Jul</option>
<option value="Aug">Aug</option>
<option value="Sep">Sep</option>
<option value="Oct">Oct</option>
<option value="Nov">Nov</option>
<option value="Dec">Dec</option>
</select>

<select name="Eyear">
<?php
for($i=2010; $i<2020; $i++)
{
echo "<option value=" .$i. ">" . $i . "</option>";
}
?>
</select>

</br>
</br>
&nbsp;&nbsp;Mfg_date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="Mdate">
<?php
for($i=1; $i<32; $i++)
{
echo "<option value=" .$i. ">" . $i . "</option></br>";
}
?>
</select>
<select name="Mmonth">
<option value="Jan">Jan</option>
<option value="Feb">Feb</option>
<option value="Mar">Mar</option>
<option value="Apr">Apr</option>
<option value="May">May</option>
<option value="Jun">Jun</option>
<option value="Jul">Jul</option>
<option value="Aug">Aug</option>
<option value="Sep">Sep</option>
<option value="Oct">Oct</option>
<option value="Nov">Nov</option>
<option value="Dec">Dec</option>
</select>

<select name="Myear">
<?php
for($i=2010; $i<2020; $i++)
{
echo "<option value=" .$i .">" . $i . "</option>";
}
?>

</select>
<table>

</br>
</br>
&nbsp;
<input type="submit" value="Insert" />
</form>
</html>
