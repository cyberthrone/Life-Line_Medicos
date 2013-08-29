<head>
<style type="text/css" >
#hor-zebra
{
    font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
    font-size: 15px;
    //margin: 45px;
    //width: 400px;
    text-color:#FF0000;
    text-align:center;
    border-collapse: collapse;
    margin:0px 0 0 150px;
    background: #708090;
    color:#00ff00;
    position:relative;
}

#hor-zebra th
{
    font-size: 18px;
    font-weight: normal;
    padding: 10px 8px;
    /*color: #FFFFFF;*/
    background:#2F4F4F;
}
#hor-zebra td
{
    padding: 8px;
    color: #FFFFFF;
    /*background: #778899;*/
}
#hor-zebra .odd
{
    background: #2F4F4F; 
}
</style>
</head>
<table id="hor-zebra" summary="Employee Pay Sheet">
    <thead>
       	<th scope="col">Bill No</th>
       	<th scope="col">Date</th>
       	<th scope="col">Amount</th>
       	<th scope="col">Expense Type</th>
        <th scope="col">Month</th>
   </thead>
<?php

include('header.php');
$sql="SELECT * FROM General_Expenses";

$result = mysql_query($sql);

$i=0;
while($row = mysql_fetch_array($result))
{
	if($i%2!=0)
	echo "<tr class=\"odd\">";
	else
	echo "<tr>";
	echo "<td>" . $row['Bill_no'] . "</td>";
	echo "<td>" . $row['Date'] . "</td>";
	echo "<td>" . $row['Amount'] . "</td>";
	echo "<td>" . $row['Expense_type'] . "</td>";
	echo "<td>" . $row['Month'] . "</td>";
	echo "</tr>";
	$i++;
}
echo "</table>";

mysql_close($con);
?> 
