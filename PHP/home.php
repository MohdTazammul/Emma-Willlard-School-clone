<?php
session_start();

if(@!$_SESSION["login_user"])
{
 
     
 header("location:../index.php?error=You have to login First...!!!");

}
?>


	<html>

	<head>
		<title>Emma Willard School</title>
		<link rel="stylesheet" type="text/css" href="../CSS/home.css">
		<link rel="stylesheet" type="text/css" href="../CSS/slide.css">
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<script src="../java%2520Script/slide.js"></script>
		<link rel="icon" type="image/jpg" href="../LOGO/logo.jpeg">

	</head>

	<body>
		<div id="navbar">
			<img src="../logo/logo_square.png" id="logo">
			<div class="dropdown" style="float: left; margin-left:190px;">
				<div class="dropdown-button" style="background-color: darkslategray;">
					<a href="../PHP/home.php">Home &#9819;</a>
				</div>
			</div>
			<div class="dropdown" style="float: left;">
				<div class="dropdown-button">
					<a href="../HTML/Introduction.html">About us &nbsp;<i class="down"></i></a>
				</div>
				<ul>
					<li><a href="../HTML/Introduction.html">Introduction</a></li>
					<li><a href="../HTML/head%20of%20school.html">Head of School</a></li>
					<li><a href="../HTML/school_review.html">School Review</a></li>
					<li><a href="Admission_form.php">Admission Process</a></li>
				</ul>
			</div>
			<div class="dropdown" style="float: left;">
				<div class="dropdown-button">
					<a href="../HTML/TGT.html">Staff Zone &nbsp;<i class="down"></i></a>
				</div>
				<ul>
					<li><a href="../HTML/TGT.html">TGT</a></li>
					<li><a href="../HTML/PGT.html">PGT</a></li>
					<li><a href="../HTML/Guest_Teacher.html">Guest Teacher</a></li>
				</ul>
			</div>
			<div class="dropdown" style="float: left;">
				<div class="dropdown-button">
					<a href="#">Student Zone &nbsp;<i class="down"></i></a>
				</div>
				<ul>
					<li><a href="#">Time Table</a></li>
					<li><a href="#">Syllabus</a></li>
					<li><a href="#">Student Curricullam Activites</a></li>
				</ul>
			</div>
			<div class="dropdown" style="float: left;">
				<div class="dropdown-button">
					<a href="#">School Toppers &nbsp;<i class="down"></i></a>
				</div>
				<ul>
					<li><a href="#">Class Toppers</a></li>
					<li><a href="#">Quiz Toppers</a></li>
					<li><a href="#">Curriculam Activities Topper</a></li>
				</ul>
			</div>
			<div class="dropdown" style="float: left;">
				<div class="dropdown-button">
					<a href="../HTML/Image_Gallery.html">Gallery &nbsp;<i class="down"></i></a>
				</div>
				<ul>
					<li><a href="../HTML/Image_Gallery.html">Pictures</a></li>
					<li><a href="../HTML/video_gallery.html">Videos</a></li>
				</ul>
			</div>
			<div class="dropdown" style="float: left;">
				<div class="dropdown-button">
					<a href="../HTML/address.html">Contact Us &nbsp;<i class="down"></i></a>
				</div>
				<ul>
					<li><a href="../HTML/address.html">Address</a></li>
					<li><a href="../HTML/contact.html">Contact No.</a></li>
				</ul>
			</div>
			<div class="dropdown" style="float: left;">
				<div class="dropdown-button" style="padding:5px 0px 5px 0px;">
					<a href="logout.php"><i class="fa fa-user" aria-hidden="true" style="color:white;border:none;"></i>
                <?php
                    echo '<span style="color:white; font-size:15px; padding-right:0px;">'.@$_SESSION['login_user'].'<span>';
                ?>
                <br>
               Log Out <i class="fa fa-power-off" aria-hidden="true" style="color:white; font-size:15px;line-height:10px; border:none;"></i></a>
				</div>
			</div>
		</div>

<div class="slideshow-container">
 <!-- SLIDE 1 -->
<div class="mySlides fade">
<img src="../image/slide1.jpg" style="width:100%; height:550px;">
  <div class="cap">
  	<p style="font-family: Fiolex Girls;font-size: 70px; font-weight:100;">
  	Emma is a leader</p><br>
  	<p style="font-size:30px; font-family:Bookman Old Style; font-weight:100;">in girls first thinking.</p>
  	<p style="font-size:15px; font-family:Arial; font-weight:100;">
  	For more than 200 years, Emma Willard School has celebrated girls' intellectual curiosity and drive to make their mark on the world.</p>
  </div>
</div>
 <!-- SLIDE 2 -->
<div class="mySlides fade">
  <img src="../image/slide2.jpg" style="width:100%; height:550px;">
<div class="cap">
  	<p style="font-family: Fiolex Girls;font-size: 70px; font-weight:100;">
  	I am inquisitive</p><br>
  	<p style="font-size:30px; font-family:Bookman Old Style; font-weight:100;">
  	and i want to know more.</p>
  	<p style="font-size:15px; font-family:Arial; font-weight:100;">
  	Girls come to Emma seeking more than the typical high school experience. They want to be challenged as they learn to serve and shape their world.</p>
  </div>
</div>
<!--  SLIDE 3 -->
<div class="mySlides fade">
  <img src="../image/slide3.jpg" style="width:100%; height:550px;">
 <div class="cap">
  	<p style="font-family: Fiolex Girls;font-size: 70px; font-weight:100;">
  	I am a believer</p><br>
  	<p style="font-size:30px; font-family:Bookman Old Style; font-weight:100;">and I know I can make difference.</p>
  	<p style="font-size:15px; font-family:Arial; font-weight:100;">
  	Emma Girls share a committment to serving and shaping their world for the good of others.</p>
  </div>
</div>
 <!-- SLIDE 4 -->
<div class="mySlides fade">
  <img src="../image/slide4.jpg" style="width:100%; height:550px;">
  <div class="cap">
  	<p style="font-family: Fiolex Girls;font-size: 55px; font-weight:100;">
  	I am making friendships.</p><br>
  	<p style="font-size:30px; font-family:Bookman Old Style; font-weight:100;">that will last a life time.</p>
  	<p style="font-size:15px; font-family:Arial; font-weight:100;">
  	Emma Girls come from 35 countries and 31 states, allowing girls to make globe-spanning friendships in our supportive, fun community.</p>
  </div>
</div>
<!--SLIDE 5 -->
<div class="mySlides fade">
  <img src="../image/slide5.jpg" style="width:100%; height:550px;">
  <div class="cap">
  	<p style="font-family: Fiolex Girls;font-size: 70px; font-weight:100;">
  	I am fierce</p><br>
  	<p style="font-size:30px; font-family:Bookman Old Style; font-weight:100;">on and of the field.</p>
  	<p style="font-size:15px; font-family:Arial; font-weight:100;">
  	Girls are encouraged try out new skills or excel in an activity they've been training in for years on one of our 13 interscholastic JV and Varsity athletics teams.</p>
  </div>
</div>

		</div>
<br>
<div style="text-align:center;">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>	



		<center>
			<div class="Mission">
				Our Mission
			</div>
			<hr color=#59582b width='800px'>

			<p class="Mission2">
				Honoring its founder's vision, Emma Willard School proudly fosters in each young woman a love of learning, the habits of an intellectual life, and the character, moral strength, and qualities of leadership to serve and shape her world.
			</p>
			<br><br><br><br><br>
			<video src="../video/Experience%20Emma%20Willard%20School.mp4" width="1350px" autoplay loop muted></video>
		</center>
		<i class="container2">
            <p class="Review1">Our Campus, Our Home</p>
            <p class="Review2">More than a school, a thiriving community.</p>
            <p class="Review3">Emma Willard School is located atop Mount Ida in Troy, New York in the heart of New York's Capital Region.</p>
        </i>
		<br><br><br>
		<div class="footer">
			<img src="../logo/2017mainSiteLogo.png"><br><br><br>
			<p style="font-family: Arial; font-weight: lighter; text-decoration: none;">285 Pawling Avenue, Troy, NY 12180 &#124; P: 518.833.1300 F: 518.833.1815
				<br><br>&copy; EMMA WILLARD SCHOOL</p>
		</div>
	</body>

	</html>
