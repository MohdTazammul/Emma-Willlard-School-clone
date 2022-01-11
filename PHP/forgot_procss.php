<?php
// get values from form
$username=$_POST['user'];
$password=$_POST['pass'];
$password1=$_POST['pass1'];
$conn=mysqli_connect("localhost","root","","user");
$result=mysqli_query($conn, "select * from user_details where username='$username'");
$row=mysqli_num_rows($result);

if($username!="" && $password!="" && $password1!="")
{
    if($password == $password1)
    {
        if($row==1)
        {
             mysqli_query($conn, "update user_details set password='$password' where username='$username'");
            header("location:../index.php?success=changed your password...");
        }
        else
        {
            header("location:forgot.php?invalid=Wrong Password...!!!");
        }
    }
    else
    {
        header("location:forgot.php?does_not_exist=Username does not exist...!!!");
    }
}
else
{
    header("location:forgot.php?empty=All fields are required...!!!");
}



?>