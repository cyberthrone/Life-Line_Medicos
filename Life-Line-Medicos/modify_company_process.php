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
if(isset($_POST['id'],$_POST['name']))
{ 
	$sid=$_POST['id'];
	$name=$_POST['name'];
	if(!empty($name) && !empty($sid))
	{
		echo $name;
		echo $sid;

		$sql_query="update COMPANY set Phone_no='$name' where NAME='$sid'";
		$query_res=  mysql_query($sql_query);
		if($query_res){
			header('Location:company_view.php');
		}
		else
			echo 'error';
	}
	else
		echo 'all fields are required';   

}

?>
