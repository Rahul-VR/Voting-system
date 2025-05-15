<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/button.css"> 
<?php
if(isset($_POST['submit']))
{
$post=$_POST['post'];
if($post=="CHAIRMAN")
{	
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db"); 
 $fname=$_POST['FirstName'];
 $lname=$_POST['LastName'];
 $dep=$_POST['department'];
 $regno=$_POST['regno'];
 $vote=0;
 $q1="select count(first_name) from candidatechairman";
 $r1=$con->query($q1);
 $row=$r1->fetch_array()[0] ?? '';
 $q2="select att_percentage from student where reg_no='$regno'";
 $r2=$con->query($q2);
 $row2=$r2->fetch_array()[0] ?? '';
 $q3="select reg_no from student where reg_no='$regno'";
 $r3=$con->query($q3);
 $row3=$r3->fetch_array()[0] ?? '';
 if($row3!=$regno)
 {
	 echo "This student is not registered as a student";
	 echo '<div class="b">
<button class="button" style="vertical-align:middle"><a href="candidate_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div>';
	 exit();
 }
 if($row==5)
 {
	 echo "Nomination list is full";
	 echo '<div class="b">
<button class="button" style="vertical-align:middle"><a href="candidate_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div>';
	 exit();
 }
 else
 {
echo "";
 }
 if($row2<70)
 {
	 echo "Attendance of this candidate is less than 70%";
	 echo "so nomination rejected";
	 echo '<div class="b">
<button class="button" style="vertical-align:middle"><a href="candidate_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div>';
	 exit();
 }
 else
 {
 $q="insert into candidatechairman(reg_no,first_name,last_name,Department,Post,vote)values($regno,'$fname','$lname','$dep','$post',$vote)";
$result=$con->query($q);
echo "Successfully registered";
 }
}
if($post=="VICE-CHAIRMAN")
{	
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db"); 
 $fname=$_POST['FirstName'];
 $lname=$_POST['LastName'];
 $dep=$_POST['department'];
 $regno=$_POST['regno'];
 $vote=0;
 $q1="select count(first_name) from candidatevicechairman";
 $r1=$con->query($q1);
 $row=$r1->fetch_array()[0] ?? '';
 $q2="select att_percentage from student where reg_no='$regno'";
 $r2=$con->query($q2);
 $row2=$r2->fetch_array()[0] ?? '';
 $q3="select reg_no from student where reg_no='$regno'";
 $r3=$con->query($q3);
 $row3=$r3->fetch_array()[0] ?? '';
 if($row3!=$regno)
 {
	 echo "This student is not registered as a student";
	 echo '<div class="b">
<button class="button" style="vertical-align:middle"><a href="candidate_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div>';
	 exit();
 }
 if($row==5)
 {
	 echo "Nomination list is full";
	 echo '<div class="b">
<button class="button" style="vertical-align:middle"><a href="candidate_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div>';
	 exit();
 }
 else
 {
echo "";
 }
 if($row2<70)
 {
	 echo "Attendance of this candidate is less than 70%";
	 echo "so nomination rejected";
	 echo '<div class="b">
<button class="button" style="vertical-align:middle"><a href="candidate_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div>';
	 exit();
 }
 else
 {
 $q="insert into candidatevicechairman(reg_no,first_name,last_name,Department,Post,vote)values($regno,'$fname','$lname','$dep','$post',$vote)";
$result=$con->query($q);
echo "Successfully registered";
 }
}
if($post=="COUNCILLOR")
{	
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db"); 
 $fname=$_POST['FirstName'];
 $lname=$_POST['LastName'];
 $dep=$_POST['department'];
 $regno=$_POST['regno'];
 $vote=0;
 $q1="select count(first_name) from candidatecouncillor";
 $r1=$con->query($q1);
 $row=$r1->fetch_array()[0] ?? '';
 $q2="select att_percentage from student where reg_no='$regno'";
 $r2=$con->query($q2);
 $row2=$r2->fetch_array()[0] ?? '';
 $q3="select reg_no from student where reg_no='$regno'";
 $r3=$con->query($q3);
 $row3=$r3->fetch_array()[0] ?? '';
 if($row3!=$regno)
 {
	 echo "This student is not registered as a student";
	 echo '<div class="b">
<button class="button" style="vertical-align:middle"><a href="candidate_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div>';
	 exit();
 }
 if($row==5)
 {
	 echo "Nomination list is full";
	 echo '<div class="b">
<button class="button" style="vertical-align:middle"><a href="candidate_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div>';
	 exit();
 }
 else
 {
echo "";
 }
 if($row2<70)
 {
	 echo "Attendance of this candidate is less than 70%";
	 echo "so nomination rejected";
	 echo '<div class="b">
<button class="button" style="vertical-align:middle"><a href="candidate_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div>';
	 exit();
 }
 else
 {
 $q="insert into candidatecouncillor(reg_no,first_name,last_name,Department,Post,vote)values($regno,'$fname','$lname','$dep','$post',$vote)";
$result=$con->query($q);
echo "Successfully registered";
 }
}
if($post=="MAGAZINE-EDITOR")
{	
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db"); 
 $fname=$_POST['FirstName'];
 $lname=$_POST['LastName'];
 $dep=$_POST['department'];
 $regno=$_POST['regno'];
 $vote=0;
 $q1="select count(first_name) from candidatemagazine";
 $r1=$con->query($q1);
 $row=$r1->fetch_array()[0] ?? '';
 $q2="select att_percentage from student where reg_no='$regno'";
 $r2=$con->query($q2);
 $row2=$r2->fetch_array()[0] ?? '';
 $q3="select reg_no from student where reg_no='$regno'";
 $r3=$con->query($q3);
 $row3=$r3->fetch_array()[0] ?? '';
 if($row3!=$regno)
 {
	 echo "This student is not registered as a student";
	 echo '<div class="b">
<button class="button" style="vertical-align:middle"><a href="candidate_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div>';
	 exit();
 }
 if($row==5)
 {
	 echo "Nomination list is full";
	 echo '<div class="b">
<button class="button" style="vertical-align:middle"><a href="candidate_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div>';
	 exit();
 }
 else
 {
echo "";
 }
 if($row2<70)
 {
	 echo "Attendance of this candidate is less than 70%";
	 echo "so nomination rejected";
	 echo '<div class="b">
<button class="button" style="vertical-align:middle"><a href="candidate_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div>';
	 exit();
 }
 else
 {
 $q="insert into candidatemagazine(reg_no,first_name,last_name,Department,Post,vote)values($regno,'$fname','$lname','$dep','$post',$vote)";
$result=$con->query($q);
echo "Successfully registered";
 }
}
}
?>
</head>
<body>


<div class="b">
<button class="button" style="vertical-align:middle"><a href="candidate_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div></body>
</html>