<?php
include 'header.php';
$id = $_POST['x'];
$arr = explode("+", $id);
$sql="select * from Demand_book where C_id='$arr[0]' and Drug_name='$arr[1]'";
$result= mysql_query($sql);

while($row = mysql_fetch_array($result))
{
echo "<body>";
echo "<form action='modify_demand_process.php' method='POST'>";
echo "<table>";
echo "<tr>";
echo "<td>Customer id :</td><td> <input type='text' name='cid' value='$row[0]' readonly='readonly'></td></tr><tr>";
echo "<td>Drug Name :</td><td> <input type='text' name='name' value='$row[1]' readonly='readonly'></td></tr><tr>";
echo "<td>Company :</td> <td><input type='text' name='cname' value='$row[2]'></td></tr><tr>";
echo "<td>Quantity :</td> <td><input type='text' name='qty' value='$row[3]'></td></tr>";
echo "</table>";
echo "<br><input type='submit' value='Update'>";
echo "</form>";
echo "</body>";
}

?>
