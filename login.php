<?php
error_reporting(0);
session_start(); 
if (isset($_POST['submit'])) {
if (empty($_POST['email']) || empty($_POST['password'])) {
echo  '<script>alert("Enter Username and Password!");</script>';
echo '<script>window.location.replace("loginform.php");</script>';
}
else
{
$email=$_POST['email'];
$password=$_POST['password'];
$connection = mysql_connect("localhost", "root", "");
$username = stripslashes($email);
$password = stripslashes($password);
$username = mysql_real_escape_string($email);
$password = mysql_real_escape_string($password);
$db = mysql_select_db("cvmaker", $connection);
$query = mysql_query("select * from login where email='$email' AND password='$password'", $connection);

$rows = mysql_num_rows($query);
if ($rows == 1) {
header("location: dashboard.php"); 
}
 else {
echo '<script>alert("Email or password is incorrect!");</script>';
echo '<script>window.location.replace("loginform.php");</script>';
}

mysql_close($connection);
}
}
?>