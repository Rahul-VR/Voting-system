<html>
<head>
    <link rel="stylesheet" href="css\homepage.css">
    <title>Online voting system</title>
</head>
<body>
    
    <div class="container">
        <div class="title">
            <span>COLLEGE ELECTION 2022</span>
        </div>
        <div class="nav">
            <ul>
                <li>
                    <a href="#">HOME</a>
                </li>
                <li class="dropdown" onclick="toggleDisplay('1')">
                    <a href="#" class="dropbtn">ADMIN &nbsp <span style='font-size: 25px;'>&#9662;</span>
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-content" id="1">
                        <input type="button" name="submit1" id="submit1" value="STUDENT REGISTRATION      ">
						<input type="button" name="submit2" id="submit2" value="CANDIDATE REGISTRATION  ">
                        <input type="button" name="submit3" id="submit3" value="ELECTION RESULT                  ">
                    </div>
                </li>
				
				<li class="dropdown" onclick="toggleDisplay('4')">
                    <a href="#" class="dropbtn">TEACHER &nbsp <span style='font-size: 25px;'>&#9662;</span>
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-content" id="1">
                        <input type="button" name="submit4" id="submit4" value="CANDIDATE LIST">
						<input type="button" name="submit5" id="submit5" value="VOTERS LIST      ">
                        
                    </div>
                </li>
				
                <li class="dropdown" onclick="toggleDisplay('2')">
                    <a href="#" class="dropbtn">STUDENT &nbsp <span style='font-size: 25px;'>&#9662;</span>
                        <span class="fa fa-angle-down"></span>
                    </a>
                    <div class="dropdown-content" id="2">
                       <input type="button" name="submit6" id="submit6" value="VOTE                  ">
					   <input type="button" name="submit7" id="submit7" onclick="window.location.href='php/tempid.php';" value="FORM                 ">
                    </div>
                </li>
            </ul>
        </div>
    
        <div class="slider">
            <img src="images\img.jpg" class="slider-image" alt="img">
			<BR><BR><BR></div>
	<div class="popup1">
	<div class="popup-content">
	<div class="login-box">
    <img src="images\avatar.png" class="avatar">
	<img src="images\close.png" class="close">
        <h1>ADMIN</h1>
            <form action="php\admincheck.php" method="POST">
            <p>Username</p>
            <input type="text" name="user name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit1" value="Login">
            <input type="button" value="Forget Password" onclick="alert('Oops Sorry, we cannot have the right to access your password.')" >    
            </form>
			</div>
	</div>
	</div>
	
	<div class="popup2">
	<div class="popup-content">
	<div class="login-box">
    <img src="images\avatar.png" class="avatar">
	<img src="images\close.png" class="close2">
        <h1>ADMIN</h1>
            <form action="php\adminreg.php" method="POST">
            <p>Username</p>
            <input type="text" name="user name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit2" value="Login">
            <input type="button" value="Forget Password" onclick="alert('Oops Sorry, we cannot have the right to acsess your password.')" >    
            </form>
        
        
        </div>
	</div>
	</div>
			
	<div class="popup3">
	<div class="popup-content">
	<div class="login-box">
    <img src="images\avatar.png" class="avatar">
	<img src="images\close.png" class="close3">
        <h1>ADMIN</h1>
            <form action="php\adminresult.php" method="POST">
            <p>Username</p>
            <input type="text" name="user name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit2" value="Login">
            <input type="button" value="Forget Password" onclick="alert('Oops Sorry, we cannot have the right to access your password.')" >    
            </form>
        
        
        </div>
	</div>
	</div>
	
	
	
		<div class="popup4">
	<div class="popup-content">
	<div class="login-box">
    <img src="images\avatar.png" class="avatar">
	<img src="images\close.png" class="close4">
        <h1>TEACHER</h1>
            <form action="php\teachercheck.php" method="POST">
            <p>Username</p>
            <input type="text" name="user name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit2" value="Login">
            <input type="button" value="Forget Password" onclick="alert('Oops Sorry, we cannot have the right to access your password.')" >    
            </form>
        
        
        </div>
	</div>
	</div>
    
	<div class="popup5">
	<div class="popup-content">
	<div class="login-box">
    <img src="images\avatar.png" class="avatar">
	<img src="images\close.png" class="close5">
        <h1>TEACHER</h1>
            <form action="php\teachercheck2.php" method="POST">
            <p>Username</p>
            <input type="text" name="user name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit2" value="Login">
            <input type="button" value="Forget Password" onclick="alert('Oops Sorry, we cannot have the right to access your password.')" >    
            </form>
        
        
        </div>
	</div>
	</div>
	
    <div class="popup6">
	<div class="popup-content">
	<div class="login-box">
    <img src="images\avatar.png" class="avatar">
	<img src="images\close.png" class="close6">
        <h1>STUDENT</h1>
            <form action="php\stdcheck.php" method="POST">
            <p>Username</p>
            <input type="text" name="user name" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="submit2" value="Login">
            <input type="button" value="Forget Password" onclick="alert('Oops Sorry, we cannot have the right to access your password.')" >    
            </form>
        
        
        </div>
	</div>
	</div>
        <div class="main">
		<br><br><br>
            <span>About College</span>
            <p>College of Applied Sciences, Puthenvelikkara P.O, North Paravur Ernakulam- 683 594 (CAS) located at - Ernakulam Kerala is one of the popular colleges in India. The College has been rated by 3 people on iCBSE. The College of Applied Sciences, Puthenvelikkara P.O, North Paravur Ernakulam- 683 594 has been viewed 102 times by the visitors on iCBSE. This College is counted among the top-rated Colleges in Kerala with an excellent academic track record. If you're looking for more details regarding results, courses offered, application forms, syllabus, admission procedure, placements and examinations schedule, kindly get in touch with the relevant department of the college.

            <div class="info">
                <div>
                    <span>Courses</span> <hr>
                    <p>Still deciding what you want to study at university? Browse the full range of options with our course guides, a detailed information about types of program, specializations and career prospects.</p>
                </div>
                <div>
                    <span>Admissions</span> <hr>
                    <p>Whether your new to campus or are looking for more information on campus activities you can find information about admissions and financial aid here</p>
                </div>
                <div>
                    <span>Library</span> <hr>
                    <p>Be the first to know. Stay informed and up to date with the upcoming technology. Get varied knowledge right from social events to newest research topics by clicking the link</p>
                </div>
                <div>
                    <span>Campus Region</span> <hr>
                    <p>Welcome to Campus, a multipurpose WordPress theme. Go ahead and click around, there is a ton of new stuff to check out. For more information</p>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="footer--contact">
                <span>Contact Us</span>
                <p><a href="http://www.ihrd.ac.in/index.php/institutions/colleges-of-applied-science/95-mg-university/169-college-of-applied-science-north-paravoor">caspeermade@ihrd.ac.in</a></p>
                <p><a href="tel:0484-2487790"> 0484- 2487790</a></p>
            </div>
           
        </div>

    </div>
<script>
  document.getElementById("submit1").addEventListener("click",function(){document.querySelector(".popup1").style.display="flex";})
  document.getElementById("submit2").addEventListener("click",function(){document.querySelector(".popup2").style.display="flex";})
  document.getElementById("submit3").addEventListener("click",function(){document.querySelector(".popup3").style.display="flex";})
  document.getElementById("submit4").addEventListener("click",function(){document.querySelector(".popup4").style.display="flex";})
  document.getElementById("submit5").addEventListener("click",function(){document.querySelector(".popup5").style.display="flex";})
  document.getElementById("submit6").addEventListener("click",function(){document.querySelector(".popup6").style.display="flex";})
 
  
  document.querySelector(".close").addEventListener("click",function(){document.querySelector(".popup1").style.display="none";})
  document.querySelector(".close2").addEventListener("click",function(){document.querySelector(".popup2").style.display="none";})
  document.querySelector(".close3").addEventListener("click",function(){document.querySelector(".popup3").style.display="none";})
  document.querySelector(".close4").addEventListener("click",function(){document.querySelector(".popup4").style.display="none";})
  document.querySelector(".close5").addEventListener("click",function(){document.querySelector(".popup5").style.display="none";})
  document.querySelector(".close6").addEventListener("click",function(){document.querySelector(".popup6").style.display="none";})
  document.querySelector(".close7").addEventListener("click",function(){document.querySelector(".popup7").style.display="none";})
</script> 


</body>
</html>