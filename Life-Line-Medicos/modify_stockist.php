<?php
session_start();
if($_SESSION['mode']!=1)
{
$ms="Access Denied";
header('Location:login.php? msg=' . $ms );
}
?>

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
$sql = "select * FROM STOCKIST";
$result = mysql_query($sql);

echo "<form action=\"modify_stockist_form.php\" method=\"post\">
<select name=\"x\">";
echo "<option value =''>". "S_Id" . "</option>";
while ($row = mysql_fetch_array($result)){
	$x=$row['S_id'];
echo "<option value ='$x'>".  $row['S_id'] . "</option>";
}
echo"</select><input type=\"submit\" value=\"update\"></form>";

echo "<form action=\"delete_stockist.php\" method=\"post\">";
echo "<select name=\"y\">";

echo "<option value =''>". "S_Id" . "</option>";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
	$n=$row['S_id'];
echo "<option value = $n>" . $row['S_id'] . "</option>";
}
echo"</select><input type=\"submit\" value=\"Delete\"  onclick=\"return delf()\"></form>";



?>

</body>
</html>
