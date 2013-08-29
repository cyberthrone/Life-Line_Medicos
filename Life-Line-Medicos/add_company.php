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
	var x1=document.forms["form1"]["cname"].value;
	var x2=document.forms["form1"]["cphone"].value;

	if (x1==null || x1=="" || x2==null || x2=="")
	{
		alert("Fill Complete Details");
		return false;
	}
}
</script>
<form name="form1" method="POST" action="add_comp_process.php" onsubmit="return validateForm()">
<table border="0" cellspacing="5" cellpadding="5">
<tr>
<td>Company Name: </td>
<td><input type="text" name="cname" /></td>
</tr>
<tr>
<td>Phone Number: </td>
<td><input type="text" name="cphone" /></td>
</tr>
</table>
&nbsp
<input type="submit" value="Insert" />
</form>
</html>
