<html>
<head>
<script type="text/javascript">
function delf()
{
var x;
var r=confirm("Are you Sure");
if (r==true)
  {
        return true;
  }
else
  {
        return false;
  }
}
</script>
</head>
<body>
<?php
include 'header.php';
$sql = "select * FROM Customer";
$result = mysql_query($sql);

echo "<form action=\"modify_customer_form.php\" method=\"post\">
<select name=\"x\">";

echo "<option value =''>". "C_Id" . "</option>";
while ($row = mysql_fetch_array($result)){
	$x=$row['C_id'];
echo "<option value ='$x'>".  $row['C_id'] . "</option>";
}
echo"</select><input type=\"submit\" value=\"update\"></form>";

echo "<form action=\"delete_customer.php\" method=\"post\">";
echo "<select name=\"y\">";
echo "<option value =''>". "C_Id" . "</option>";

$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
	$n=$row['C_id'];
echo "<option value = $n>" . $row['C_id'] . "</option>";
}
echo"</select><input type=\"submit\" value=\"Delete\"  onclick=\"return delf()\"></form>";



?>

</body>
</html>
