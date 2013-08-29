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
    margin:40px 0 0 300px;
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
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; LIST OF DRUGS</h1>
<table id="hor-zebra" summary="Employee Pay Sheet">
    <thead>
        <th scope="col">Drug Name</th>
        <th scope="col">Stock</th>
        <th scope="col">Price</th>
        <th scope="col">Exp date</th>
        <th scope="col">Mfg date</th>
        <th scope="col">Mfg by</th>
        <th scope="col">Drawer</th>
        <th scope="col">Rack</th>
   </thead>

<?php
include('header.php');
$query = "select * from DRUG";
$result=mysql_query($query);
$i=0;
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
if($i%2!=0)
echo "<tr class=\"odd\">";
else
echo "<tr>";
echo "<td>";
echo($row['Name']);
echo "</td><td>";
echo($row['Stock']);
echo "</td><td>";
echo($row['Price']);	
echo "</td><td>";
echo($row['Exp_date']);	
echo "</td><td>";
echo($row['Mfg_date']);	
echo "</td><td>";
echo($row['Mfg_by']);	
echo "</td><td>";
echo($row['Drawer_no']);	
echo "</td><td>";
echo($row['Rack_no']);	
echo "</td></tr>";
$i++;
}
echo "</table>";
mysql_close();
?>



