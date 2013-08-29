<?php
session_start();
if($_SESSION['mode']!=1)
{
$ms="Access Denied";
//header('Location:login.php? msg=' . $ms );
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
var x1=document.forms["form1"]["cno"].value;
var x2=document.forms["form1"]["stock"].value;
var x3=document.forms["form1"]["price"].value;

if (x1==null || x1=="" || x2==null || x2=="" || x3==null || x3=="")
  {
  alert("Fill Complete Details");
  return false;
  }
}
</script>
<?php echo $_SESSION['mode']; ?>
<form name="form1" method="POST" action="add_challan_process.php" onsubmit="return validateForm()">
<table border="0" cellspacing="5" cellpadding="5">
<tr>
<td>Challan No: </td>
<td><input type="text" name="cno" /></td>
</tr>
<tr>
<td>Stockist Name: </td>
<td><input type="text" name="stock" /></td>
</tr>
<tr>
<td>Amount: </td>
<td><input type="text" name="price" /></td>
</tr>
</table>
&nbsp;&nbsp;Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="Edate">
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
<input type="submit" value="Insert" />
</form>
</html>
