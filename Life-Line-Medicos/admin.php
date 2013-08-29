<?php
session_start();
if($_SESSION['mode']!=1)
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
<li class='has-sub' ><a href='#'>Admin</a>
<ul>
<li ><a href='./register.php?flag=1'>Register Admin</a></li>
<li ><a href='./modify_admin.php'>Modify Admin</a></li>
</ul>
<li class='has-sub'><a href='#'>Drug</a>
<ul>
<li><a href='./add_drug.php'>Add Drug</a></li>
<li><a href='./drug_view.php'>View Drug List</a></li>
<li><a href='./modify_drugs.php'>Modify Drugs</a></li>
<li><a href='./view_drug_company.php'>View Drug By Company</a></li>
</ul>
</li>
<li class='has-sub' ><a href='#'>Stockist</a>
<ul>
<li><a href='./add_stockist.php'>Add Stockist</a></li>
<li><a href='stockist_view.php'>View Stockist List</a></li>
<li><a href='./modify_stockist.php'>Modify Stockist</a></li>
<li><a href='./view_stockist_company.php'>View Stockist By Company</a></li>
</ul>
</li>
<li class='has-sub' ><a href='#'>Company</a>
<ul>
<li><a href='add_company.php'>Add Company</a></li>
<li><a href='company_view.php'>View Company list</a></li>
<li><a href='./modify_company.php'>Modify Company</a></li>
</ul>
</li>
<li><a href='general_exp.php'>General Expenses</a></li>
<li class='has-sub' ><a href='#'>Purchases</a>
<ul>
<li><a href='add_purchases.php'>Add Challan</a></li>
<li><a href='view_purchases.php'>View Purchase Book</a></li>
<li><a href='modify_purchases.php'>Modify Purchase Book</a></li>
</ul>
</li>
<li class='has-sub' ><a href='#'>Banking</a>
<ul>
<li><a href='make_payment.php'>Make Payment</a></li>
<li><a href='view_bank.php'>View Payments</a></li>
</ul>
</li>
<li class='has-sub' ><a href='#'>Customer</a>
<ul>
<li><a href='customer_view.php'>View Details</a></li>
<li><a href='add_customer.php'>Add Customer</a></li>
<li><a href='modify_customer.php'>Modify Customers</a></li>
</ul>
</li>
<li class='has-sub' ><a href='#'>Demand Book</a>
<ul>
<li><a href='view_demand.php'>View Demands</a></li>
<li><a href='add_demand.php'>Add Demands</a></li>
<li><a href='modify_demand.php'>Modify Demands</a></li></ul>
<li><a href='logout.php'>Logout</a></li>
</ul>";
?>
</div>
</body>
</html>
