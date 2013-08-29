<html>
<body>
<h2>Select a company</h2></br>
<?php
include 'header.php';
$sql1="SELECT * FROM COMPANY";
$result1 = mysql_query($sql1);
echo "<form action='list_drug_company.php' method='POST'><select name='cmp'>";
echo "<option value=''>" . 'Select a Company:' . "</option>";
while($row = mysql_fetch_array($result1))
{
	$x=$row['NAME'];
	echo "<option value='$x'>" . $row['NAME'] ."</option>";
}
echo "<br/></select><input type='submit' value='Get Drugs'>";
echo "</form>";
?>
</body>
</html>

