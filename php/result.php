<html>
<body>
<link rel="stylesheet" href="..\css\result.css">
<h2><CENTER>CHAIRMAN POST</CENTER></h2>
<div class="put">
<table>
  <tr>
    <th>NAME</th>
    <th>VOTE</th>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatechairman where slno=1";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r2="select vote from candidatechairman where slno=1";
 $result=$con->query($r2);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?> 
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
$sql1="select first_name,last_name from candidatechairman where slno=2";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r4="select vote from candidatechairman where slno=2";
 $result=$con->query($r4);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatechairman where slno=3";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?></td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r6="select vote from candidatechairman where slno=3";
 $result=$con->query($r6);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatechairman where slno=4";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r8="select vote from candidatechairman where slno=4";
 $result=$con->query($r8);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatechairman where slno=5";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r="select vote from candidatechairman where slno=5";
 $result=$con->query($r);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr></table>
  <br><br>
  <h2><CENTER>VICE-CHAIRMAN POST</CENTER></h2>
<table>
  <tr>
    <th>NAME</th>
    <th>VOTE</th>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatevicechairman where slno=1";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r2="select vote from candidatevicechairman where slno=1";
 $result=$con->query($r2);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?> 
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
$sql1="select first_name,last_name from candidatevicechairman where slno=2";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r4="select vote from candidatevicechairman where slno=2";
 $result=$con->query($r4);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatevicechairman where slno=3";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?></td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r6="select vote from candidatevicechairman where slno=3";
 $result=$con->query($r6);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatevicechairman where slno=4";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r8="select vote from candidatevicechairman where slno=4";
 $result=$con->query($r8);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatevicechairman where slno=5";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r="select vote from candidatevicechairman where slno=5";
 $result=$con->query($r);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr></table>
    <br><br>
  <h2><CENTER>COUNCILLOR POST</CENTER></h2>
<table>
  <tr>
    <th>NAME</th>
    <th>VOTE</th>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatecouncillor where slno=1";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r2="select vote from candidatecouncillor where slno=1";
 $result=$con->query($r2);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?> 
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
$sql1="select first_name,last_name from candidatecouncillor where slno=2";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r4="select vote from candidatecouncillor where slno=2";
 $result=$con->query($r4);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatecouncillor where slno=3";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?></td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r6="select vote from candidatecouncillor where slno=3";
 $result=$con->query($r6);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatecouncillor where slno=4";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r8="select vote from candidatecouncillor where slno=4";
 $result=$con->query($r8);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatecouncillor where slno=5";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r="select vote from candidatecouncillor where slno=5";
 $result=$con->query($r);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr></table>
     <br><br>
  <h2><CENTER>MAGAZINE-EDITOR POST</CENTER></h2>
<table>
  <tr>
    <th>NAME</th>
    <th>VOTE</th>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatemagazine where slno=1";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r2="select vote from candidatemagazine where slno=1";
 $result=$con->query($r2);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?> 
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
$sql1="select first_name,last_name from candidatemagazine where slno=2";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r4="select vote from candidatemagazine where slno=2";
 $result=$con->query($r4);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatemagazine where slno=3";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?></td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r6="select vote from candidatemagazine where slno=3";
 $result=$con->query($r6);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatemagazine where slno=4";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r8="select vote from candidatemagazine where slno=4";
 $result=$con->query($r8);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr>
  <tr>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $sql1="select first_name,last_name from candidatemagazine where slno=5";
 $result=$con->query($sql1);
 while($row=$result->fetch_assoc())
 {
	  echo $row["first_name"]."&nbsp".$row["last_name"];
 }
?>
</td>
    <td><?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db");
 $r="select vote from candidatemagazine where slno=5";
 $result=$con->query($r);
 $row = $result->fetch_array()[0] ?? '';
 echo $row;
?>
</td>
  </tr></table> </div>
  <div class="s">
  <FORM action="result.php" method="post">
<button onclick="window.print()">Print</button>
</form></div>
 <div class="s2"> <FORM action="..\index.php" method="post">
<input type="submit" name="sub" id="sub" value="BACK">
</form>
</div>
</body>
</html>