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
$sql = "select * FROM DRUG";
$result = mysql_query($sql);

echo "<form action=\"modify_drug_form.php\" method=\"post\">
<select name=\"x\">";

echo "<option value =''>". "Drug Name" . "</option>";
while ($row = mysql_fetch_array($result)){
	$x=$row['Name'];
echo "<option value ='$x'>".  $row['Name'] . "</option>";
}
echo"</select><input type=\"submit\" value=\"update\"></form>";

echo "<form action=\"delete_drug.php\" method=\"post\">";
echo "<select name=\"y\">";

echo "<option value =''>". "Drug Name" . "</option>";
$result = mysql_query($sql);
while ($row = mysql_fetch_array($result)){
	$n=$row['Name'];
echo "<option value = $n>" . $row['Name'] . "</option>";
}
echo"</select><input type=\"submit\" value=\"Delete\"  onclick=\"return delf()\"></form>";



?>

</body>
</html>
