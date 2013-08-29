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
margin:40px 0 0 450px;
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
h1 { font: bold 2em "Times New Roman", Times, serif;}
</style>

<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LIST OF CUSTOMERS</h1>

<table id="hor-zebra" summary="Employee Pay Sheet">
<thead>
<th scope="col">Customer Id</th>
<th scope="col">Name</th>
<th scope="col">Phone</th>
<th scope="col">Illness</th>
</thead>

<?php
include('header.php');
$query = "select * from Customer";
$result=mysql_query($query);
$i=0;
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	if($i%2!=0)
		echo "<tr class=\"odd\">";
	else
		echo "<tr>";
	echo "<td>";
	echo($row['C_id']);
	echo "</td><td>";
	echo($row['Name']);
	echo "</td><td>";
	echo($row['Phone_No']);
	echo "</td><td>";
	echo($row['Illness']);
	echo "</td></tr>";
	$i++;
}
echo "</table>";
mysql_close();
?>
