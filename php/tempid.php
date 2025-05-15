
<html>
<head>
<title>Form Submit to Send Request</title>
<link rel="stylesheet" type="text/css" href="../css/id.css">
</head>
<body>

<?php
if(isset($_POST['submit']))
{
	session_start();
 $_SESSION['fname']=$_POST['FName'];
 $_SESSION['lname']=$_POST['LName'];
 $_SESSION['regno']=$_POST['regno'];
 $_SESSION['dep']=$_POST['dep'];
 $_SESSION['yer']=$_POST['year'];
 $fname=$_SESSION['fname'];
 $lname=$_SESSION['lname'];
 $regno=$_SESSION['regno'];
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db"); 
 $q1="select reg_no from student where first_name='$fname' AND last_name='$lname' AND reg_no='$regno'";
 $r1=$con->query($q1);
 $row1=$r1->fetch_array()[0] ?? '';
  if($regno!=$row1)
 {
	 echo '<script>alert("invalid register number")</script>';
 }
 else
 {
 header('location: idapplication.php');	
 }
}
?>
<div class="form-container">
<h1 align="center">FORM</h1>
  <form name="contactFormEmail" method="post">
    <table align="center" cellpadding = "10">
<tr>
<td>First Name</td>
<td><input type="text" name="FName" maxlength="50" placeholder="First name" required />
</td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" name="LName" maxlength="50" placeholder="Last name" required />
</td>
</tr>
<tr>
<td>Register number</td>
<td><input type="text" name="regno" maxlength="12" placeholder="Register number" required />
</td>
</tr>
<tr>
<td>Department</td>
<td>
<input type="text" name="dep" maxlength="10" placeholder="Department"/>
</td>
</tr>
<tr>
<td>Year</td>
<td>
<input type="text" name="year" maxlength="10" placeholder="first\second\third"/>
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit" name="submit">
<input type="reset" value="Reset">
</tr>
    </div>
  </form>
</div>

</body>
</html>