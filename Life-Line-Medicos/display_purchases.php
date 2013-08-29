<?php
include('header.php');

$sql="SELECT * FROM PURCHASES";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>Date</th>
<th>Challan No</th>
<th>Stockist Id</th>
<th>Amount</th>
<th>Paid/Unpaid</th>
</tr>";

while($row = mysql_fetch_array($result))
{
	echo "<tr>";
	echo "<td>" . $row['Date'] . "</td>";
	echo "<td>" . $row['Challan_no'] . "</td>";
	echo "<td>" . $row['Stk_id'] . "</td>";
	echo "<td>" . $row['Amount'] . "</td>";
	echo "<td>" . $row['Flag'] . "</td>";
	echo "</tr>";
}
echo "</table>";

mysql_close($con);
?> 
