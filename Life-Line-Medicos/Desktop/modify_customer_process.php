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
if(isset($_POST['id'],$_POST['name'],$_POST['phone'],$_POST['ill']))
{ 
	$cid=$_POST['id'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$illness=$_POST['ill'];
	if(!empty($name) && !empty($cid) && !empty($phone) && !empty($illness) )
	{

		$sql_query="update Customer set C_id='$cid' ,Name='$name' , Phone_No='$phone' , Illness='$illness' where C_id='$cid' ";
		$query_res=  mysql_query($sql_query);
		if($query_res){
			header('Location:customer_view.php');
		}
		else
			echo 'error';
	}
	else
		echo 'all fields are required';   

}

?>
