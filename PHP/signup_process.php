<?php
$username=$_POST['user'];
$email=$_POST['email'];
$password=$_POST['pass'];
$password1=$_POST['pass1'];
$conn=mysqli_connect("localhost","root","","user");
$result=mysqli_query($conn, "select * from user_details where username='$username'");
$row=mysqli_num_rows($result);
if($username !="" && $password !="" && $password1 != "" && $email != "")
{
   if($password == $password1)
   {
       if($row==0) 
       {
           mysqli_query($conn, "insert into user_details(username, password, email) values('$username','$password','$email')");
            header("location:../index.php?created=Your account is created.");
       }
       else
       {
           header("location:signup.php?already_exist=Username already exist...");
       }
   }
    else
    {
        header("location:signup.php?invalid=Wrong Password...!!!");
    }
}
else
{
    header("location:signup.php?empty=All fields are required...!!!");
}
    
    
?>