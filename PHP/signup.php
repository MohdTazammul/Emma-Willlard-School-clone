<html>
<head>
    <title>Sign Up page</title>
    <link rel="stylesheet" type="text/css" href="../CSS/signup_style.css">
     <link rel="icon" type="image/jpg" href="../logo/logo.jpeg">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> 
</head>
<body>
    
     <img src="../logo/2017mainSiteLogo.png" style="margin:20px 0px 0px 30px;">
   <center>
       <div class="signup">
          <img src="../logo/images.jpg"><br>
           <form action="signup_process.php" method="post">
               
                <p style="font-size:50px; font-family:consolas;margin: -15px 0px -15px -190px; font-weight:100;">SIGN UP<p>
             	<div>
   	              
	               <input type="text" placeholder="Username" name="user"/><i class="fa fa-user" style="font-size:30px;color:black; margin-left:-40px;"></i>
	            </div>
	      
               <div>
	            
	               <input type="email" placeholder="Email ID" name="email"/><i class="fa fa-envelope" style="font-size:27px;color:black; margin-left:-41px;"></i>
	            </div>
                <div>
	                <input type="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="pass">
                   <i class="fa fa-lock" aria-hidden="true" style="font-size:30px;color:black; margin-left:-40px; "></i>
	            </div>
               <div>
	                 <input type="password" placeholder="Re-enter Password" name="pass1">
                   <i class="fa fa-lock" aria-hidden="true" style="font-size:30px;color:black; margin-left:-40px; "></i>
	            </div>
               
        
 
           <span align="center" style="color:red; font-size:20px; font-weight:600; font-family:Arial;margin-top:-20px; line-height:40px; "><?php echo @$_GET['empty']; ?></span>
           <span align="center" style="color:red; font-size:20px; font-weight:600; font-family:Arial;margin-top:-20px; background:white; line-height:40px;"><?php echo @$_GET['invalid']; ?></span>
           <span align="center" style="color:red; font-size:20px; font-weight:600; font-family:Arial;margin-top:-20px; background:white; line-height:40px;"><?php echo @$_GET['already_exist']; ?></span>
               
               <br>
               &nbsp;&nbsp;&nbsp;
                <button type="submit" name="submit" class="button"><span>Sign Up </span></button><br>
              <br>
               <a href="../index.php">Already have an account</a>
           </form>
        </div></center>     
</body>
</html>