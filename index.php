<html>
<head>
    <title>Log in page</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="CSS/login_style.css">
      <link rel="icon" type="image/jpg" href="logo/logo.jpeg">
</head>
<body>
    <img src="logo/2017mainSiteLogo.png" style="margin:20px 0px 0px 30px;">
    
    <center>
       <div class="login">
          <img src="logo/images.jpg"><br>
          
            <form action="php/login.php" method="POST" name="login">
             	<div>
   	              
	               <input type="text" placeholder="Username" name="user"><i class="fa fa-user" style="font-size:30px;color:black; margin-left:-40px;"></i>
	            </div>
	      
               <div>
	               
	                <input type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="pass">
                   <i class="fa fa-lock" aria-hidden="true" style="font-size:30px;color:black; margin-left:-40px; "></i>
	            </div>
               <span align="center" style="color:blue; font-size:20px; font-weight:600; font-family:Arial; background:white; line-height:40px; "><?php echo @$_GET['logout']; ?></span>
 
           <span align="center" style="color:red; font-size:20px; font-weight:600; font-family:Arial;margin-top:-20px; line-height:40px; "><?php echo @$_GET['invalid']; ?></span>
           <span align="center" style="color:red; font-size:20px; font-weight:600; font-family:Arial;margin-top:-20px; line-height:40px;"><?php echo @$_GET['error']; ?></span>
           <span align="center" style="color:green; font-size:20px; font-weight:600; font-family:Arial;margin-top:-20px; background:white; line-height:40px;"><?php echo @$_GET['success']; ?></span>
           <span align="center" style="color:blue; font-size:20px; font-weight:600; font-family:Arial;margin-top:-20px; background:white; line-height:40px;"><?php echo @$_GET['created']; ?></span><br>
               &nbsp;&nbsp;&nbsp;
                <button type="submit" name="submit" class="button"><span>Log In </span></button><br><br>
                <a href="PHP/signup.php">Sign Up</a>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="PHP/forgot.php">Forgot Password..!</a>
              
           </form>
        </div></center>     
</body>
</html>