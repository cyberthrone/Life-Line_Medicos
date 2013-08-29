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
<form name="form1" method="POST" action="add_cust_process.php" onsubmit="return validateForm()">
<table border="0" cellspacing="5" cellpadding="5">
<tr>
<td>Customer Name: </td>
<td><input type="text" name="cname" /></td>
</tr>
<tr>
<td>Phone No: </td>
<td><input type="text" name="phone" /></td>
</tr>
<tr>
<td>Illness: </td>
<td><input type="text" name="illness" /></td>
</tr>
</table>
&nbsp
<input type="submit" value="Insert" />
</form>
</html>
