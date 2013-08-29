<?php
include 'header.php';
$name=$_POST['exp'];
$query="select * from General_Expenses where Bill_no='$name'";
$query_run=  mysql_query($query);
if($query_run)
{
	echo "<form action='updated.php' method='POST'>"; 
	while($row = mysql_fetch_array($query_run))
	{
		$a=$row['Bill_no'];
		$b=$row['Date'];
		$c=$row['Amount'];
		$d=$row['Expense_type'];
		$e=$row['Month'];
		echo "<body>";
		echo "<table>";
		echo "<tr>";
		echo "<td>Bill_no :</td> <td> <input type='text' name='bill_no' value='$a' readonly='readonly'></td></tr>";
		echo "<td>Date :</td><td> <input type='text' name='date' value='$b'></td></tr>";
		echo "<td>Amount :</td> <td><input type='text' name='amnt' value='$c'></td></tr>";
		echo "<td>Expense_type :</td><td> <input type='text' name='exp_type' value='$d'></td></tr>";
		echo "<td>Month :</td> <td><input type='text' name='mnth' value='$e'></td></tr>";
		echo "</table>";
	}
	echo "<br><input type='submit' value='Update'>";
	echo "</form>";
	echo "</body>";

}
?>
