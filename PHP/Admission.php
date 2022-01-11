<?php
$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$nickname=$_REQUEST['nickname'];
$fathername=$_REQUEST['fathername'];
$mothername=$_REQUEST['mothername'];
$gender=$_REQUEST['gender'];
$DOB = $_REQUEST['DOB'];
$entering_year = $_REQUEST['Entering_year'];
$entering_grade = $_REQUEST['Entering_grade'];
$address1 = $_REQUEST['address1'];
$address2 = $_REQUEST['address2'];
$address3 = $_REQUEST['address3'];
$city = $_REQUEST['city'];
$state = $_REQUEST['state'];
$zipcode = $_REQUEST['zipcode'];
$country = $_REQUEST['country'];
$mobileno = $_REQUEST['mobileno'];
$email = $_REQUEST['email'];
$birthplace = $_REQUEST['birthplace'];
$language = $_REQUEST['language'];
$school_type = $_REQUEST['school_type'];

    $conn=mysqli_connect("localhost","root","","Admission");

 $query="insert into student(firstname,lastname,nickname,fathername,mothername,gender,DOB,entering_year,entering_grade,address1,address2,address3,city,state,zip_code,country,mobile_no,email,birth_place,language,Boarding_or_Day) values('$firstname','$lastname','$nickname','$fathername','$mothername','$gender','$DOB','$entering_year','$entering_grade','$address1','$address2','$address3','$city','$state','$zipcode','$country','$mobileno','$email','$birthplace','$language','$school_type')";


    if(mysqli_query($conn, $query))
        echo"Your Admission form is submited successfully.....!!!";
    else
        echo"Error to submit the form...!!!";
?>