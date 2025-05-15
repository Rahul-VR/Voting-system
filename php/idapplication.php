<html>
<body>
<link rel="stylesheet" type="text/css" href="..\css\tempid.css">
<script>
function printDiv(){
	var divContents=document.getElementById("prt").innerHTML;
	var a=window.open('','','height=500,width=500');
	a.document.write(divContents);
	a.document.close();
	a.print();
}
</script>
<marquee direction="left">...............Take the printout and submit to the principal with the signature of your class teacher................ </marquee>
<div id="prt" class="style">
<div class="style2">
<?php
session_start();
$fname=$_SESSION['fname'];
$lname=$_SESSION['lname'];
$regno=$_SESSION['regno'];
$dep=$_SESSION['dep'];
$yer=$_SESSION['yer'];
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db"); 

 $q2="select reg_no from student where first_name='$fname' AND last_name='$lname' AND reg_no='$regno'";
 $r2=$con->query($q2);
 $regno=$r2->fetch_array()[0] ?? '';
echo '<p>From<br><br>'
.$fname.'&nbsp'.$lname.'<br><br>'.$yer.' year '.$dep.'<br><br>Reg no: '.$regno.'<br><br>Date: '.date("d-m-y").'<br><br>






To<br><br>

The Principal,<br><br>

College of applied science puthenvelikkara<br><br>

Subject: Application for duplicate Identity Card.<br><br>

Sir/Madam,<br><br>

With all due respect it is to state that I am '.$fname.'&nbsp'.$lname.' a student of '.$dep.' in this College.<br>
The college issued Identity cards to students for security reason and election purpose.<br>
I was also given such card but because of loose cord I lost my card. Kindly issue me the <br>
duplicate of the Identity card as soon as possible for participating election procedures.<br><br>

I will pay the extra charges for the issuance of the card. Thank you very much.<br><br>

Yours Truly,<br><br>'

.$fname.'&nbsp'.$lname.'<br><br>'

.$yer.' year '.$dep.'<br><br>


Signature of applicant:<br><br>
Name & Signature of class teacher:</p>';
?>
</div></div>
<input type="button" value="print" onclick="printDiv()">
</body>
</html>