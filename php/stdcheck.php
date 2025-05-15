<?php

if(isset($_POST['submit2']))
{
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db"); 
 $usrname=$_POST['user_name'];
 $pas=$_POST['password'];
 $q="SELECT * FROM student WHERE user='$usrname' AND password='$pas'";
 $result=$con->query($q);
 $name="SELECT user_name FROM login WHERE user_name='$usrname' AND password='$pas'";
 $result2=$con->query($name);
 $row = $result2->fetch_array()[0] ?? '';
 if($row==$usrname)
	 {
		 echo "you are already voted on :";
		 $t="SELECT dateandtime FROM login WHERE user_name='$usrname' AND password='$pas'";
		 $result3=$con->query($t);
		 $row2 = $result3->fetch_array()[0] ?? '';
		 echo $row2;
		 header('refresh:3; url=../index.php');
	 }
	 else{
		 
          if(mysqli_num_rows($result)==1)
		  {
	      session_start();
	      $_SESSION['user']=$username;
	      $_SESSION['success']="your are logged in";
	      $q2="insert into login(user_name,password)values('$usrname','$pas')";
		  $result4=$con->query($q2);
          header('location: vote.php');
		  }
	      else
		  {
		   echo "password or user name incorrect";
		   header('refresh:3; url=../index.php');
		  }
		 }
}
?>

