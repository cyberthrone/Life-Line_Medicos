<?php
session_start();
if($_SESSION['mode']!=1)
{
$ms="Access Denied";
header('Location:login.php? msg=' . $ms );
}
?>

<?php
$flag=$_GET['flag'];
if($flag==3)
	echo "<script type='text/javascript'>alert('Expenses updated');</script>";
	?>
<html>
<head>
<script>
function gexp()
{
		
	if (window.XMLHttpRequest)
		  {
			    xmlhttp=new XMLHttpRequest();
	          }
	else
		  {
			    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	          }
	xmlhttp.onreadystatechange=function()
		  {
			    if (xmlhttp.readyState==4 && xmlhttp.status==200)
				        {
						    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
				        }
                  }
	xmlhttp.open("GET","display_exp.php",true);
	xmlhttp.send();
}
</script>
<script type="text/javascript">
function delf()
{
var x;
var r=confirm("Are you Sure");
if (r==true)
  {
  	return true;
  }
else
  {
  	return false;
  }
}
</script>
</head>
<body>
<h2>General Expenses</h2>
<form>
<br>

<input type="button" value="Insert" onClick="location.href='expenses_form.php'" />
<button type="button" onClick="gexp()">View</button>
</form>
</br>
<div id="txtHint"></div></br></br>
<?php
include 'header.php';
$sql1="SELECT * FROM General_Expenses";
$result1 = mysql_query($sql1);
echo "<form action='update_expenses.php' method='POST'><select name='exp'>";
		      echo "<option value=''>" ."Bill_no" ."</option>";
while($row = mysql_fetch_array($result1))
	  {
		      $x=$row['Bill_no'];
		      echo "<option value='$x'>" . $row['Bill_no'] ."</option>";
	  }
echo "</select><input type='submit' value='Update'>";
echo "</form>";
?>
</br></br></br>
<?php
$del=$_POST['del'];
include 'header.php';
$query="delete from General_Expenses where Bill_no='$del'";
$query_run=mysql_query($query);
if($query_run && $del)
{
	mysql_close();
	header('Location:general_exp.php');
}
?>
<?php
include 'header.php';
$sql1="SELECT * FROM General_Expenses";
$result1 = mysql_query($sql1);
echo "<form action='general_exp.php' method='POST'><select name='del'>";
		      echo "<option value=''>" ."Bill_no" ."</option>";
while($row = mysql_fetch_array($result1))
	  {
		      $x=$row['Bill_no'];
		        echo "<option value='$x'>" . $row['Bill_no'] ."</option>";
	  }
echo "<input type='submit' value='Delete' onclick=\"return delf()\">";
echo "</form>";
?>
</body>
</html>
