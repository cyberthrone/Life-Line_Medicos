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

		$sql_query="update PURCHASES set Date='$cid' , Challan_no='$name' , Stk_id='$cname' , Amount='$qty' , Flag=0";
		$query_res=  mysql_query($sql_query);
		if($query_res){
			header('Location:modify_purchases.php');
		}
		else
			echo 'error';
	}
	else
		echo 'all fields are required';   

}

?>
