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
    margin:80px 0 0 500px;
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
<table id="hor-zebra" summary="drug view">
    <thead>
        <th scope="col">Company Name</th>
        <th scope="col">Stockist</th>
   </thead>

<?php
$cmp=$_POST['cmp'];
include('header.php');
$query = "select * from Works_For where Company_name='$cmp'";
$result=mysql_query($query);
$i=0;
while ($row = mysql_fetch_array($result, MYSQL_ASSOC))
{
if($i%2!=0)
echo "<tr class=\"odd\">";
else
echo "<tr>";
echo "<td>";
echo($row['Company_name']);
echo "</td><td>";
$myv=$row['S_id'];
$q="select Name from STOCKIST where S_id='$myv'";
$r=mysql_query($q);
$r1=mysql_fetch_array($r);
echo($r1['Name']);
echo "</td>";
$i++;
}
echo "</table>";
mysql_close();
?>



