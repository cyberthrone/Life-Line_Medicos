<html>
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
var x1=document.forms["form1"]["bill_no"].value;
var x2=document.forms["form1"]["date"].value;
var x3=document.forms["form1"]["amnt"].value;
var x4=document.forms["form1"]["etype"].value;
var x5=document.forms["form1"]["mnth"].value;

if (x1==null || x1=="" || x2==null || x2=="" || x3==null || x3=="" || x4==null || x4=="" || x5==null || x5=="")
  {
  alert("Fill Complete Details");
  return false;
  }
}
</script>
<form  name="form1" method="POST" action="insert_expenses.php"  onsubmit="return validateForm()" >
	<table border="0" cellspacing="5" cellpadding="5">
	<tr>
		<td>Bill no : </td>
		<td><input type="text" name="bill_no" /></td>
	</tr>
	<tr>
		<td>Date :  </td>
		<td><input type="text" name="date" /></td>
	</tr>
	
	<tr>
		<td>Amount :  </td>
		<td><input type="text" name="amnt" /></td>
	</tr>
	<tr>
		<td>Expense type : </td>
		<td><input type="text" name="etype" /></td>
	</tr>
	<tr>
		<td>Month : </td>
		<td><input type="text" name="mnth" /> </td>
	</tr>
	</table>
	<input type="submit" value="Submit"/>
</form>
</center>
</html>
