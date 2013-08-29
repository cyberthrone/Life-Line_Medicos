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
	margin:40px 0 0 500px;
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

<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LIST OF COMPANIES</h1>
<table id="hor-zebra" summary="Employee Pay Sheet">
<thead>
<th scope="col">Company Name</th>
<th scope="col">Phone Number</th>
</thead>

<?php
include('header.php');
$query = "select * from COMPANY";
$result=mysql_query($query);
$i=0;
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
	if($i%2!=0)
		echo "<tr class=\"odd\">";
	else
		echo "<tr>";
	echo "<td>";
	echo($row['NAME']);
	echo "</td><td>";
	echo($row['Phone_no']);
	echo "</td>";
	$i++;
}
echo "</table>";
mysql_close();
?>
