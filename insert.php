<?php
error_reporting(0);
$connection = mysql_connect("localhost", "root", ""); 
$db = mysql_select_db("cvmaker", $connection);
$first=$_POST['fname'];

$last=$_POST['lname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$con = mysql_connect("localhost","root" ,"");
if (!$con){
 die('Could not connect: ' . mysql_error());
 }
 else if($con && $email != ""){
 mysql_select_db("cvmaker", $con);
 $query = "INSERT INTO contactform (first,last,email,phone,message)VALUES ('$first','$last','$email','$phone','$message')";
 mysql_query($query);
 echo '<script>alert("Message has been sent !");</script>'.'<script>window.location.replace("contact.html");</script>';
 mysql_close();}
 else{
	 echo '<script>alert("Kindly enter the email address")</script>'.'<script>window.location.replace("contact.html");</script>';
	 }

?>