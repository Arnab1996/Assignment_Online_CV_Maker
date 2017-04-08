<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("cvmaker", $connection);
session_start();
$user_check=$_SESSION['login_user'];
$ses_sql=mysql_query("select name from login where name='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['name'];
if(!isset($login_session)){
mysql_close($connection);
header('Location: home.html'); 
}
?>

