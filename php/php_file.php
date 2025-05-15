<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/button.css"> 
<?php
if(isset($_POST['submit']))
{
	
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db"); 
echo "sucessfully registered";
 $fname=$_POST['FirstName'];
 $lname=$_POST['LastName'];
 $regno=$_POST['regno'];
 $phno=$_POST['MobileNumber'];
 $gender=$_POST['Gender'];
 $dob=$_POST['BirthDay'];
 $address=$_POST['Address'];
 $per=$_POST['per'];
 $pincode=$_POST['PinCode'];
 $state=$_POST['State'];
 $country=$_POST['Country'];
 $course=$_POST['Course'];
 $usr=$_POST['usr'];
 $pass=$_POST['pass'];
 $q="insert into student(first_name,last_name,reg_no,ph_no,gender,dob,address,att_percentage,pin_code,state,country,course,user,password)values('$fname','$lname',$regno,$phno,'$gender','$dob','$address',$per,$pincode,'$state','$country','$course','$usr','$pass')";
$result=$con->query($q);
}
?>
</head>
<body>
<div class="b">
<button class="button" style="vertical-align:middle"><a href="reg_form.php"><span>NEW REGISTER</span></a></button>
<button class="button" style="vertical-align:middle"><a href="../index.php"><span>BACK TO HOME PAGE</span></a></button>
<div></body>
</html>