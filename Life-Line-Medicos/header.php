<?php
$server = 'localhost';
$database = 'lifeline';
$username = 'root';
$password = 'mastermind09';
$conn =@mysql_connect( $server, $username, $password );
mysql_select_db($database, $conn);
?>
<style type-"text/css">
body
{
background:url(./css/bg.jpg);
}
</style>
