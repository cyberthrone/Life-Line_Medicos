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
$sql = "Select C_id,Drug_name FROM Demand_book";
$result = mysql_query($sql);
echo "<form action=\"modify_demand_form.php\" method=\"post\">
<select name=\"x\">";

echo "<option value = $row[0]+$row[1]>" . "C_id & Drug Names" . "</option>";
while ($row = mysql_fetch_row($result)){
echo "<option value = $row[0]+$row[1]>" . $row[0] . "+" . $row[1] . "</option>";
}
echo"</select><input type=\"submit\" value=\"update\"></form>";

echo "<form action=\"delete_demand.php\" method=\"post\">";
echo "<select name=\"y\">";
echo "<option value = $row[0]+$row[1]>" . "C_id & Drug Names" . "</option>";

$result = mysql_query($sql);
while ($row = mysql_fetch_row($result)){
echo "<option value = $row[0]+$row[1]>" . $row[0] . "+" . $row[1] . "</option>";
}
echo"</select><input type=\"submit\" value=\"Delete\"  onclick=\"return delf()\"></form>";



?>

</body>
</html>
