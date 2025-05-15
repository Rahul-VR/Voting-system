<html>
<title>College election</title>
<body>
<link rel="stylesheet" type="text/css" href="../css/voter_list.css">
<div class="row print-container">
<h1><u><b>CANDIDATE LIST</b></u></h1>
<h3><I>POST : CHAIRMAN</I></h3>
<p class="r">
<?php
 $sname="localhost";
 $uid="root";
 $pwd="";
 $db="election";
 $con=mysqli_connect("$sname","$uid","$pwd","$db"); 
 $sql1="select slno,first_name,last_name,Department from candidatechairman";
 $result=$con->query($sql1);
 echo "<table><tr><th>SLNO</th><th>NAME</th><th>DEPARTMENT</th>";
 while($row=$result->fetch_assoc())
 {
	 echo "<tr>"."<td>".$row["slno"]."</td>"."<td>".$row["first_name"]."&nbsp".$row["last_name"]."</td>"."<td>".$row["Department"]."</td></tr>";
 }
 echo "</table>";
 $sql2="select slno,first_name,last_name,Department from candidatevicechairman";
 $result=$con->query($sql2);
 echo "<h3><i>POST : VICE-CHAIRMAN</i></h3>";
 echo "<table><tr><th>SLNO</th><th>NAME</th><th>DEPARTMENT</th>";
 while($row2=$result->fetch_assoc())
 {
	 echo "<tr>"."<td>".$row2["slno"]."</td>"."<td>".$row2["first_name"]."&nbsp".$row2["last_name"]."</td>"."<td>".$row2["Department"]."</td></tr>";
 }
 echo "</table>";
 $sql3="select slno,first_name,last_name,Department from candidatecouncillor";
 $result=$con->query($sql3);
 echo "<h3><i>POST : COUNCILLOR</i></h3>";
 echo "<table><tr><th>SLNO</th><th>NAME</th><th>DEPARTMENT</th>";
 while($row3=$result->fetch_assoc())
 {
	 echo "<tr>"."<td>".$row3["slno"]."</td>"."<td>".$row3["first_name"]."&nbsp".$row3["last_name"]."</td>"."<td>".$row3["Department"]."</td></tr>";
 }
 echo "</table>";
$sql4="select slno,first_name,last_name,Department from candidatemagazine";
 $result=$con->query($sql4);
  echo "<h3><i>POST : MAGAZINE EDITOR</i></h3>";
  echo "<table><tr><th>SLNO</th><th>NAME</th><th>DEPARTMENT</th>";
 while($row4=$result->fetch_assoc())
 {
	 echo "<tr>"."<td>".$row4["slno"]."</td>"."<td>".$row4["first_name"]."&nbsp".$row4["last_name"]."</td>"."<td>".$row4["Department"]."</td></tr>";
 }
 echo "</table>";

?>
</p>
</div>
<button class="button" onclick="window.print()">Print</button>
<a href="../index.php"><button class="button">Back</button></a>
</body>
</html>