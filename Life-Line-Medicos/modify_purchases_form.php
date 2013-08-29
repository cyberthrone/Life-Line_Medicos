<?php
include 'header.php';
$id = $_POST['x'];
$arr = explode("+", $id);
$sql="select * from PURCHASES where Challan_no='$arr[0]' and Stk_id='$arr[1]'";
$result= mysql_query($sql);

while($row = mysql_fetch_array($result))
{
echo "<body>";
echo "<form action='modify_purchases_process.php' method='POST'>";
echo "<table>";
echo "<tr>";
echo "<td>Date :</td><td> <input type='text' name='cid' value='$row[0]'></td></tr><tr>";
echo "<td>Challan No :</td><td> <input type='text' name='name' value='$row[1]' readonly='readonly'></td></tr><tr>";
echo "<td>Stockist Id :</td> <td><input type='text' name='cname' value='$row[2]' readonly='readonly'></td></tr><tr>";
echo "<td>Amount :</td> <td><input type='text' name='qty' value='$row[3]'></td></tr>";
echo "</table>";
echo "<br><input type='submit' value='Update'>";
echo "</form>";
echo "</body>";
}

?>
