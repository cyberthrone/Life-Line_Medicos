<?php
session_start();
if($_SESSION['mode']!=2)
{
$ms="Access Denied";
header('Location:login.php? msg=' . $ms );
}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
<body>
<div id='cssmenu'>
<?php
echo "<ul>
<li class='has-sub'><a href='#'>Drug</a>
<ul>
<li><a href='./drug_view.php'>View Drug List</a></li>
</ul>
</li>
<li class='has-sub' ><a href='#'>Stockist</a>
<ul>
<li><a href='stockist_view.php'>View Stockist List</a></li>
</ul>
</li>
<li class='has-sub' ><a href='#'>Company</a>
<ul>
<li><a href='company_view.php'>View Company list</a></li>
</ul>
<li class='has-sub' ><a href='#'>Customer</a>
<ul>
<li><a href='customer_view.php'>View Details</a></li>
<li><a href='add_customer.php'>Add Customer</a></li>
<li><a href='modify_customer.php'>Modify Customer</a></li>
</ul>
</li>
<li class='has-sub' ><a href='#'>Demand Book</a>
<ul>
<li><a href='view_demand.php'>View Demands</a></li>
<li><a href='add_demand.php'>Add Demands</a></li>
<li><a href='modify_demand.php'>Modify Demands</a></li>
</ul>
<li><a href='logout.php'>Logout</a></li>
</ul>";
?>
</div>
</body>
</html>
