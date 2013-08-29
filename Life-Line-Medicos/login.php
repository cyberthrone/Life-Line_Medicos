<html>
<style type-"text/css">
body
{
background:url(./css/bg.jpg);
}
h1 { font: bold 2em "Times New Roman", Times, serif; text-align:center}
</style>
<h1>LIFE LINE MEDICOS</h1>
<form id="form1" name="form1" method="post" action="Verify.php">
	<table border="0" cellspacing="5" cellpadding="5">
	<tr>
		<td>User : </td>
		<td><input name="id" type="text" /></td>
	</tr>
	<tr>
		<td>Password : </td>
		<td><input name="passwd" type="password" /></td>
	</tr>
	<tr>
		<td><input name="Reset" type="reset" id="Reset" value="Reset" /></td>
		<td><input name="Login" type="submit" id="Login" value="Login" />&nbsp;&nbsp;&nbsp;<a href='register.php'>New User</a></td>
	</tr>
	</table>
</form>
<?php
$ms=$_GET['msg'];
echo $ms;
echo $_SESSION['id'];
?>
</center>
</html>
