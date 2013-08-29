<?php
include 'header.php';
if(isset($_POST['bill_no'],$_POST['date'],$_POST['amnt'],$_POST['exp_type'],$_POST['mnth']))
{ 
	$bill_no=$_POST['bill_no'];
	$date=$_POST['date'];
	$amnt=$_POST['amnt'];
	$exp=$_POST['exp_type'];
	$mnth=$_POST['mnth'];
	if(!empty($bill_no) && !empty($date) && !empty($amnt) && !empty($exp) && !empty($mnth))
	{

		$sql_query="update General_Expenses set Bill_no='$bill_no' , Date='$date' , Amount='$amnt' , Expense_type='$exp' , Month='$mnth'where Bill_no='$bill_no' ";
		$query_res=  mysql_query($sql_query);
		if($query_res){
			header('Location: general_exp.php?flag=3');

		}
		else
			echo 'error';
	}
	else
		echo 'all fields are required';   

}

?>
