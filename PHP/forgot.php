<html>
<head>
    <title>Forget password page</title>
    <link rel="stylesheet" type="text/css" href="../CSS/forgot_style.css">
     <link rel="icon" type="image/jpg" href="../logo/logo.jpeg">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
    </head>
<body>
    
     <img src="../logo/2017mainSiteLogo.png" style="margin:20px 0px 0px 30px;">
   
    
   <center>
       <div class="forgot">
          <img src="../logo/images.jpg">
           <form action="forgot_procss.php" method="post">
               
               <p style="font-size:40px; font-family:consolas;margin: -15px 0px -15px -40px; font-weight:100;">RESET PASSWORD<p>
             	<div>
   	                 
	               <input type="text" placeholder="Username" name="user"/><i class="fa fa-user" style="font-size:30px;color:black; margin-left:-40px;"></i>
	            </div>
	     
               <div>
	                <input type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="pass">
                   <i class="fa fa-lock" aria-hidden="true" style="font-size:30px;color:black; margin-left:-40px; "></i>
	            </div>
               <div>
	                  <input type="password" placeholder="Re-enter Password" name="pass1">
                   <i class="fa fa-lock" aria-hidden="true" style="font-size:30px;color:black; margin-left:-40px; "></i>
	            </div>
                <span align="center" style="color:red; font-size:20px; font-weight:600; font-family:Arial;margin-top:-20px; background:white; "><?php echo @$_GET['empty']; ?></span>
               <span align="center" style="color:red; font-size:20px; font-weight:600; font-family:Arial;margin-top:-20px; background:white; "><?php echo @$_GET['does_not_exist']; ?></span>
               <span align="center" style="color:red; font-size:20px; font-weight:600; font-family:Arial;margin-top:-20px; background:white; "><?php echo @$_GET['invalid']; ?></span>
               <br>
               &nbsp;&nbsp;&nbsp;
                <button type="submit" name="submit" class="button"><span>Submit </span></button><br><br>
               <a href="signup.php">Sign up</a>
           </form>
        </div></center>     
</body>
</html>