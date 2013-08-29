<?php
include 'header.php';
$id = $_POST['x'];
$sql="select * from DRUG where Name='$id'";
$result= mysql_query($sql);

while($row = mysql_fetch_array($result))
{
echo "<body>";
echo "<form action='modify_drug_process.php' method='POST'>";
echo "<table>";
echo "<tr>";
echo "<td>Drug Name :</td><td> <input type='text' name='name' value='$row[0]' readonly='readonly'></td></tr><tr>";
echo "<td>Stock :</td><td> <input type='text' name='stk' value='$row[1]'></td></tr><tr>";
echo "<td>Price :</td> <td><input type='text' name='amnt' value='$row[2]'></td></tr><tr>";
echo "<td>Expiry Date</td> <td><input type='text' name='exp' value='$row[3]'></td></tr>";
echo "<td>Manufacture Date</td> <td><input type='text' name='mfg' value='$row[4]'></td></tr>";
echo "<td>Manufactured By</td> <td><input type='text' name='cmp' value='$row[5]'></td></tr>";
echo "<td>Drawer No:</td> <td><input type='text' name='dr' value='$row[6]'></td></tr>";
echo "<td>Rack No:</td> <td><input type='text' name='rck' value='$row[7]'></td></tr>";
echo "</table>";
echo "<br><input type='submit' value='Update'>";
echo "</form>";
echo "</body>";
}

?>
