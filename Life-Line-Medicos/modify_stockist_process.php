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
if(isset($_POST['id'],$_POST['name'],$_POST['phone'],$_POST['acc']))
{ 
	$sid=$_POST['id'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$acc=$_POST['acc'];
	if(!empty($name) && !empty($sid) && !empty($phone) && !empty($acc) )
	{

		$sql_query="update STOCKIST set S_id='$sid' ,Name='$name' , Phone_No='$phone' , Account_No='$acc' where S_id='$sid' ";
		$query_res=  mysql_query($sql_query);
		if($query_res){
			header('Location:stockist_view.php');
		}
		else
			echo 'error';
	}
	else
		echo 'all fields are required';   

}

?>
