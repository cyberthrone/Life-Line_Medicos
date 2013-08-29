<?php
include 'header.php';
$id = $_POST['x'];
$sql="select * from STOCKIST where S_id='$id'";
$result= mysql_query($sql);

while($row = mysql_fetch_array($result))
{
echo "<body>";
echo "<form action='modify_stockist_process.php' method='POST'>";
echo "<table>";
echo "<tr>";
echo "<td>Stockist Id :</td><td> <input type='text' name='id' value='$row[0]' readonly='readonly'></td></tr><tr>";
echo "<td>Name:</td><td> <input type='text' name='name' value='$row[1]'></td></tr><tr>";
echo "<td>Phone No :</td> <td><input type='text' name='phone' value='$row[2]'></td></tr><tr>";
echo "<td>Account No:</td> <td><input type='text' name='acc' value='$row[3]'></td></tr>";
echo "</table>";
echo "<br><input type='submit' value='Update'>";
echo "</form>";
echo "</body>";
}

?>
