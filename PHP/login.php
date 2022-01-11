
<?php

$conn = mysqli_connect("localhost","root","","user") or die(mysqli_error($conn));
session_start();


if(isset($_POST['submit']))  //submit button
{
 $username = $_POST['user']; // assigning username from the form
  $password = $_POST['pass'];// assigning password from the form

  $query = "select * from user_details where username='$username' and password='$password'";
  
    $execute_query = mysqli_query($conn, $query); // Executing query
    
  $found_num_rows = mysqli_num_rows($execute_query);

  if($found_num_rows == true )
  {
   $_SESSION['login_user']=$username;
   header("location: home.php");
      
  }else{
   header("location:../index.php?invalid=Invalid Username or Password...!!!");
  }


}

?>