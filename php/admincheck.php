<?php
if(isset($_POST['submit1']))
{
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db"); 
 $usrname=$_POST['user_name'];
 $pas=$_POST['password'];
 $q="SELECT * FROM admin WHERE user_name='$usrname' AND password='$pas'";
$result=$con->query($q);
 if(mysqli_num_rows($result)==1){
	 session_start();
	 $_SESSION['user']=$username;
	 $_SESSION['success']="your are logged in";
 header('location: reg_form.php');}
	 else{
		 echo 'password or user name incorrect';
		 header('refresh:3; url=../index.php');
		 }}
?>
   