<?php
error_reporting(0);
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("cvmaker", $connection);
$name=$_POST['name1'];
$email=$_POST['email1'];
$password= $_POST['password1'];  
if (empty($_POST['name1']) || empty($_POST['email1'])|| empty($_POST['password1'])){
echo '<script>alert("Fill all fields");</script>';
echo '<script>window.location.replace("signupform.php");</script>';
}else{
$result = mysql_query("SELECT * FROM registration WHERE email='$email'");
$data = mysql_num_rows($result);
if(($data)==0){
$query = mysql_query("insert into registration(name, email, password) values ('$name', '$email', '$password')");
$qury = mysql_query("insert into login(email, password) values ('$email','$password')");
if($query && $qury){
	echo '<script>alert("You have Successfully Registered !");</script>';
echo '<script>window.location.replace("loginform.php");</script>';
}
}else{
echo '<script>alert("Email address already exist. Please try another email address");</script>';
echo '<script>window.location.replace("signupform.php");</script>';
}
}
mysql_close ($connection);
?>

