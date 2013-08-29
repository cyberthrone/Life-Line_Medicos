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
if(isset($_POST['cid'],$_POST['name'],$_POST['cname'],$_POST['qty']))
{ 
	$cid=$_POST['cid'];
	$name=$_POST['name'];
	$cname=$_POST['cname'];
	$qty=$_POST['qty'];
	if(!empty($cid) && !empty($name) && !empty($cname) && !empty($qty))
	{

		$sql_query="update Demand_book set C_id='$cid' , Drug_name='$name' , C_name='$cname' , Qty='$qty'";
		$query_res=  mysql_query($sql_query);
		if($query_res){
			header('Location:view_demand.php');
		}
		else
			echo 'error';
	}
	else
		echo 'all fields are required';   

}

?>
