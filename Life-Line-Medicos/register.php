<?php
$flag = $_GET['flag'];
?>
<html>
<style type-"text/css">
body
{
background:url(./css/bg.jpg);
}
</style>

<?php
echo "<form name=\"form2\" method=\"POST\" action=\"reg.php?flag=$flag\">";
?>
	<table border="0" cellspacing="5" cellpadding="5">
	<tr>
		<td>Username : </td>
		<td><input type="text" name="user_id" /></td>
	</tr>
	<tr>
		<td>Password : </td>
		<td><input type="password" name="pass1" /></td>
	</tr>
	
	<tr>
		<td>Uname : </td>
		<td><input type="text" name="Uname" /></td>
	</tr>
	</table>
	<input type="submit" value="Register" />
</form>
</html>
