<html>
<head>
<script>
function gexp()
{
		
	if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
			    xmlhttp=new XMLHttpRequest();
			      }
	else
		  {// code for IE6, IE5
			    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			      }
	xmlhttp.onreadystatechange=function()
		  {
			    if (xmlhttp.readyState==4 && xmlhttp.status==200)
				        {
						    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
						        }
			      }
	xmlhttp.open("GET","display_purchases.php",true);
	xmlhttp.send();
}
</script>
</head>
<body>
<h2>Puchases</h2>
<form>
<br>

<input type="button" value="Insert" onClick="location.href='purchases_form.php'" />
<button type="button" onClick="gexp()">View</button>
</form>
</br>
<div id="txtHint"></div>
</body>
</html>
