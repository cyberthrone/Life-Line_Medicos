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
$sql = "select * FROM USER_INFO where User_type=2";
$result = mysql_query($sql);

echo "<form action=\"modify_admin_process.php\" method=\"post\">
<select name=\"x\">";

echo "<option value =''>". "Admin_Id" . "</option>";
while ($row = mysql_fetch_array($result)){
	$x=$row['User_id'];
echo "<option value ='$x'>".  $row['User_id'] . "</option>";
}
echo"</select><input type=\"submit\" value=\"Promote to admin\"></form>";

$sql = "select * FROM USER_INFO where User_type=1";
$result = mysql_query($sql);
echo "<form action=\"delete_admin.php\" method=\"post\">";
echo "<select name=\"y\">";
echo "<option value =''>". "Admin_Id" . "</option>";

$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
	$n=$row['User_id'];
echo "<option value = $n>" . $row['User_id'] . "</option>";
}
echo"</select><input type=\"submit\" value=\"Demote from Admin\"  onclick=\"return delf()\"></form>";



?>

</body>
</html>
