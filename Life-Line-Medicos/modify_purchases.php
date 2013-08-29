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
include('header.php');
$sql = "Select Challan_no,Stk_id FROM PURCHASES";
$result = mysql_query($sql);
echo "<form action=\"modify_purchases_form.php\" method=\"post\">
<select name=\"x\">";
echo "<option value = $row[0]+$row[1]>" ."Challan_no & S_id" . "</option>";

while ($row = mysql_fetch_row($result)){
echo "<option value = $row[0]+$row[1]>" . $row[0] . " + " . $row[1] . "</option>";
}
echo"</select><input type=\"submit\" value=\"update\"></form>";

echo "<form action=\"delete_purchases.php\" method=\"post\">";
echo "<select name=\"y\">";
echo "<option value = $row[0]+$row[1]>" ."Challan_no & S_id" . "</option>";

$result = mysql_query($sql);
while ($row = mysql_fetch_row($result)){
echo "<option value = $row[0]+$row[1]>" . $row[0] . " + " . $row[1] . "</option>";
}
echo"</select><input type=\"submit\" value=\"Delete\"  onclick=\"return delf()\"></form>";



?>

</body>
</html>
