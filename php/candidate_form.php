<html>
<body>
<link  rel="stylesheet" href="..\css\candidate.css" type="text/css">
<div id="bg">
  <div class="module">
    <ul>
      <li class="tab activeTab"><img src="..\images\logo.png" alt="" class="icon"/></li>
	  <br><br><br><br><H1>CANDIDATE</H1>
    </ul>
    
    <form class="form" action="candidate.php" method="post">
      <input type="text" placeholder="First Name" name="FirstName" class="textbox" required />
      <input type="text" placeholder="Last Name" name="LastName" class="textbox" required />
      <input type="text" placeholder="Department" name="department" class="textbox" required />
	   <input type="text" placeholder="Register number" name="regno" class="textbox" required />
	   <input type="text" placeholder="Post" name="post" class="textbox" required />
      <input type="submit" name="submit" value="submit">
	 
    </form>
  </div>
</div>
</body>
</html>