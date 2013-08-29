<?php
session_start();
if($_SESSION['mode']!=1)
{
$ms="Access Denied";
header('Location:login.php? msg=' . $ms );
}
?>

<?php
include 'header.php';
if(isset($_POST['name'],$_POST['stk'],$_POST['amnt'],$_POST['exp'],$_POST['mfg'],$_POST['cmp'],$_POST['dr'],$_POST['rck']))
{ 
	$name=$_POST['name'];
	$stock=$_POST['stk'];
	$price=$_POST['amnt'];
	$expiry=$_POST['exp'];
	$mfg=$_POST['mfg'];
	$comp=$_POST['cmp'];
	$drawer=$_POST['dr'];
	$rack=$_POST['rck'];
	if(!empty($name) && !empty($stock) && !empty($price) && !empty($expiry) && !empty($mfg) && !empty($comp) && !empty($drawer) && ! empty($rack))
	{

		$sql_query="update DRUG set Name='$name' ,Stock='$stock' , Price='$price' , Exp_date='$expiry' , Mfg_date='$mfg' , Mfg_by='$comp' , Drawer_no='$drawer' , Rack_no='$rack' where Name='$name'";
		$query_res=  mysql_query($sql_query);
		if($query_res){
			header('Location:drug_view.php');
		}
		else
			echo 'error';
	}
	else
		echo 'all fields are required';   

}

?>
