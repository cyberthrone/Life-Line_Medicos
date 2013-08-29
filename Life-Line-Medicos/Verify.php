<?php
include('header.php');
$username = $_POST['id'];
$pass = $_POST['passwd'];

if($username and $pass){
	ob_start();
	$myusername = stripslashes($username);
	$mypassword = stripslashes($pass);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);

	$query ="SELECT * FROM USER_INFO WHERE User_id = '$myusername' and Passwd ='$mypassword' and User_type=1";
	$result = mysql_query($query);
	if(mysql_num_rows($result) == 1) 
	{
		mysql_close();
		session_start();
		//$sid=session_id();
	        //$_POST['sid']=$sid;
		$_SESSION['mode']=1;
		header('Location: admin.php');
	}
	else
	{
		$query ="SELECT * FROM USER_INFO WHERE User_id = '$myusername' and Passwd ='$mypassword' and User_type=2";
		$result = mysql_query($query);
		if(mysql_num_rows($result) < 1) 
		{
			$msg = "Enter correct details.Please retry";
			header('Location: wrong.php?msg=msg');
		}
		else
		{
			mysql_close();
			session_start();
			//$sid=session_id();
		        //$_POST['sid']=$sid;
			$_SESSION['mode']=2;
			header('Location: others.php');
		}
		ob_end_flush();
	}
}
else
{
    header('Location:wrong.php?msg=Please enter some username and password');
}
?>
