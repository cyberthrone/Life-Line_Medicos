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
if(isset($_POST['y']))
{ 
	$cid=$_POST['y'];
	if(!empty($cid))
	{

		$sql_query="update USER_INFO set User_type=2 where User_id='$cid' ";
		$query_res=  mysql_query($sql_query);
		if($query_res){
			header('Location:admin.php');
		}
		else
			echo 'error';
	}
	else
		echo 'all fields are required';   

}

?>
