<html>
<head>
    <link rel="stylesheet" type="text/css" href="../CSS/Achievements.css">
   
     <script>
      function validate()
{ 
   if( document.StudentRegistration.firstname.value == "" )
   {
     alert( "Please enter your First Name...!!!" );
     document.StudentRegistration.firstname.focus() ;
     return false;
   }
   if( document.StudentRegistration.lastname.value == "" )
   {
     alert( "Please enter your Last Name...!!!" );
     document.StudentRegistration.lastname.focus() ;
     return false;
   }
    
   if( document.StudentRegistration.fathername.value == "" )
   {
     alert( "Please enter your Father Name...!!!" );
     document.StudentRegistration.fathername.focus() ;
     return false;
   }
   if( document.StudentRegistration.mothername.value == "" )
   {
     alert( "Please enter your Mother Name...!!!" );
     document.StudentRegistration.mothername.focus() ;
     return false;
   }
   if ( ( StudentRegistration.gender[0].checked == false ) && ( StudentRegistration.gender[1].checked == false ) )
   {
   alert ( "Please choose your Gender: Male or Female" );
   return false;
   }
    if( document.StudentRegistration.DOB.value == "")
   {
     alert( "Please select your date of birth..!" );
     
     document.StudentRegistration.DOB.focus() ;
     return false;
   }
    if( document.StudentRegistration.Entering_year.value == "-1" )
   {
     alert( "Please select your Entering Year...!!!" );
     document.StudentRegistration.Entering_year.focus() ;
     return false;
   }
    if( document.StudentRegistration.Entering_grade.value == "-1" )
   {
     alert( "Please select your Entering Grade...!!!" );
     document.StudentRegistration.Entering_grade.focus() ;
     return false;
   }
   if( document.StudentRegistration.address1.value == "" )
   {
     alert( "Please enter your Adress Line 1...!!!" );
     document.StudentRegistration.address1.focus() ;
     return false;
   }
   if( document.StudentRegistration.city.value == "" )
   {
     alert( "Please enter your City Name...!!!" );
     document.StudentRegistration.city.focus() ;
     return false;
   }
    if( document.StudentRegistration.state.value == "" )
   {
     alert( "Please enter your State Name...!!!" );
     document.StudentRegistration.state.focus() ;
     return false;
   }
    if( document.StudentRegistration.zipcode.value == "" ||
           isNaN( document.StudentRegistration.zipcode.value) ||
           document.StudentRegistration.zipcode.value.length != 6 )
   {
     alert( "Please enter a Zip Code in the format ######...!!!" );
     document.StudentRegistration.zipcode.focus() ;
     return false;
   }
    if( document.StudentRegistration.country.value == "-1" )
   {
     alert( "Please select your Country Name...!!!" );
     document.StudentRegistration.country.focus() ;
     return false;
   }
    if( document.StudentRegistration.mobileno.value == "" ||
           isNaN( document.StudentRegistration.mobileno.value) ||
           document.StudentRegistration.mobileno.value.length != 10 )
   {
     alert( "Please enter a Mobile Number in the format 9876543210...!!!" );
     document.StudentRegistration.mobileno.focus() ;
     return false;
   }
    var emailid = document.StudentRegistration.email.value;
  atpos = emailid.indexOf("@");
  dotpos = emailid.lastIndexOf(".");
 if (emailid == "" || atpos < 1 || ( dotpos - atpos < 2 )) 
 {
     alert("Please enter correct email ID...!!!");
     document.StudentRegistration.email.focus() ;
     return false;
 }
   if( document.StudentRegistration.birthplace.value == "" )
   {
     alert( "Please enter your Birth Place...!!!" );
     document.StudentRegistration.birthplace.focus() ;
     return false;
   }
   
    if( document.StudentRegistration.language.value == "-1" )
   {
     alert( "Please select your First Primary Language...!!!" );
     document.StudentRegistration.language.focus() ;
     return false;
   }
    
    if( document.StudentRegistration.school_type.value == "-1" )
   {
     alert( "Please select Boarding or Day...!!!" );
     document.StudentRegistration.school_type.focus() ;
     return false;
   }
   return  true;
}
      </script>


</head>
<body>
<div id="navbar">    
       <img src="../logo/logo_square.png" id="logo">
       <div class="dropdown" style="float: left; margin-left:190px;">
            <div class="dropdown-button">
               <a href="../PHP/home.php">Home &#9819;</a>
            </div> 
        </div>
        <div class="dropdown" style="float: left;">
            <div class="dropdown-button">
                <a href="../HTML/Introduction.html">About us &nbsp;<i class="down"></i></a>
            </div> 
              <ul>
                 <li><a href="Introduction.html">Introduction</a></li>
                  <li><a href="../HTML/head%20of%20school.html">Head of School</a></li>
                  <li><a href="school_review.html">School Review</a></li>
                  <li><a href="../PHP/Admission_form.php">Admission Process</a></li>
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
             <div class="dropdown-button" style="background-color: darkslategray;">
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
            <div class="dropdown-button">
               <a href="../PHP/logout.php">Log Out&nbsp; &#10071;</a>
            </div> 
        </div>
</div><br><br>
    <div style="float: left; width: 990px; margin-top: 135px;">
   <div class="title">WELCOME TO THE ADMISSION PROCESS AT EMMA WILLARD SCHOOL</div>
        <div class="title2">
            <p>Applying to a new school can be overwhelming. The admissions team at Emma is here to help make the application process as easy as possible.</p><p style="padding-top: 8px;">The cost of application is $50 for a domestic student, and $100 for an international student. International students are determined by their permanent address. The application fee can be paid by credit card online, or by check via mail.</p>
        </div>
    </div>
    <div class="side-img"><img src="../image/orig_photo457761_4508373.jpg" height="350px" width="300px"></div>
    <br clear="all"><br>
    <div class="title3">2018-19 TUITION &amp; FEES</div>
    <div class="container1">
        <p id="heading1">Boarding Students</p><br>
        <p id="heading2">Tuition, room, and board<br>&#36;62,150</p>
        <p id="heading3">SmartCard deposit (see explanation below)<br>&#36;600<br>&#36;650 for seniors</p>
    </div>  
    
    <div class="container2">
          <p id="heading1">Day Students</p><br>
        <p id="heading2">Tuition, room, and board<br>&#36;37,690</p>
        <p id="heading3">SmartCard deposit (see explanation below)<br>&#36;400<br>&#36;450 for seniors</p>
    </div>
    <br clear="all"><br><br><br>
    <center><hr color="#800000" height="5px" width="90%">
        <h1 class="h1">Admission Form</h1><br><br></center>
    <div style="background:#b0c4c0; margin-left:25px; margin-right:25px; padding-top:30px; padding-bottom:50px;">
    <form action="Admission.php" name="StudentRegistration" onSubmit="return(validate());" method="post" autocomplete="off">
       <span style="margin-left:35px; font-size:25px;">First Name <sup style="color:red; font-size:15px;">*</sup>
           <input type=text name="firstname" placeholder="First name..." id="input" style="width:255px;"></span>
        
        <span style="margin-left:40px; font-size:25px;"> Last Name <sup style="color:red; font-size:15px;">*</sup>
            <input type=text name="lastname" placeholder="Last name..." id="input" style="width:255px;"></span>
        
         <span style="margin-left:40px; font-size:25px;">Nick Name 
             <input type=text name="nickname" placeholder="Nick name..." id="input" style="width:255px;"></span>
        <br><br>
        
        
        <span style="margin-left:35px; font-size:25px;">Father Name <sup style="color:red; font-size:15px;">*</sup>&nbsp;
           <input type=text name="fathername" placeholder="Father name..." id="input" style="width:415px;"></span>
        
        <span style="margin-left:65px; font-size:25px;">Mother Name <sup style="color:red; font-size:15px;">*</sup>&nbsp;
            <input type=text name="mothername" placeholder="Mother name..." id="input" style="width:415px;"></span>
        <br><br>
        
         <span style="margin-left:35px; font-size:25px;">Gender <sup style="color:red; font-size:15px;">*</sup>&nbsp;&nbsp;
             <input type="radio" name="gender" value="male"> Male  
             <input type="radio" name="gender" value="Female"> Female</span>
        <span style="margin-left:70px; font-size:25px;">Date Of Birth <sup style="color:red; font-size:15px;">*</sup>&nbsp;&nbsp;<input type="date" name="DOB" id="input"></span>
            
            <span style="margin-left:70px; font-size:25px;">Birth Place <sup style="color:red; font-size:15px;">*</sup>&nbsp;&nbsp;
            <input type="text" name="birthplace" id="input" placeholder="Birth place..." style="width:285px;"></span>
            <br><br>
            <span style="margin-left:35px; font-size:25px;">Entering Year <sup style="color:red; font-size:15px;">*</sup>&nbsp;&nbsp;
            <select name="Entering_year" id="input" style="width:390px;">
                <option value="-1" selected>select..</option>
                <option value="2013-2014">2013-2014</option>
                <option value="2014-2015">2014-2015</option>
                <option value="2015-2016">2015-2016</option>
                <option value="2016-2017">2016-2017</option>
                <option value="2017-2018">2017-2018</option>
                <option value="2018-2019">2018-2019</option>
                <option value="2019-2020">2019-2020</option>
                </select></span>
           <span style="margin-left:90px; font-size:25px;">Entering Grade <sup style="color:red; font-size:15px;">*</sup>&nbsp;&nbsp;
            <select name="Entering_grade" id="input" style="width:390px;">
                <option value="-1" selected>select..</option>
                <option value="12th">12th</option>
                <option value="11th">11th</option>
                <option value="10th">10th</option>
                <option value="9th">9th</option>
                </select></span>
            <br><br>
         <span style="margin-left:35px; font-size:25px;">Address 1<sup style="color:red; font-size:15px;">*</sup>&nbsp;
             <input type="text" placeholder="Address line 1..." name="address1" id="input" style="width:255px;"></span>
         <span style="margin-left:50px; font-size:25px;">Address 2&nbsp;
             <input type="text" placeholder="Address line 2..." name="address1" id="input" style="width:257px;"></span>
         <span style="margin-left:50px; font-size:25px;">Address 3&nbsp;
             <input type="text" placeholder="Address line 3..." name="address1" id="input" style="width:260px;"></span>
            <br><br>
        
        <span style="margin-left:38px; font-size:25px;">City <sup style="color:red; font-size:15px;">*</sup>&nbsp;&nbsp;
            <input type="text" name="city" id="input" placeholder="City name..." style="width:480px"></span>
         <span style="margin-left:100px; font-size:25px;">State <sup style="color:red; font-size:15px;">*</sup>&nbsp;&nbsp;
        <input type="text" name="state" id="input" placeholder="State name..." style="width:485px">
            </span>
             <br><br>
        <span style="margin-left:35px; font-size:25px;">Zip Code <sup style="color:red; font-size:15px;">*</sup>&nbsp;&nbsp;
            <input type="number" name="zipcode" id="input" placeholder="Zip code..." style="width:350px"></span>
         <span style="margin-left:100px; font-size:25px;">Country <sup style="color:red; font-size:15px;">*</sup>&nbsp;&nbsp;
         <select name="country" id="input" style="width:540px;">
                     <option value="-1">select..</option>
<option value="Afghanistan">Afghanistan</option> 
<option value="Albania">Albania</option> 
<option value="Algeria">Algeria</option> 
<option value="American Samoa">American Samoa</option> 
<option value="Andorra">Andorra</option> 
<option value="Angola">Angola</option> 
<option value="Anguilla">Anguilla</option> 
<option value="Antarctica">Antarctica</option> 
<option value="Antigua and Barbuda">Antigua and Barbuda</option> 
<option value="Argentina">Argentina</option> 
<option value="Armenia">Armenia</option> 
<option value="Aruba">Aruba</option> 
<option value="Australia">Australia</option> 
<option value="Austria">Austria</option> 
<option value="Azerbaijan">Azerbaijan</option> 
<option value="Bahamas">Bahamas</option> 
<option value="Bahrain">Bahrain</option> 
<option value="Bangladesh">Bangladesh</option> 
<option value="Barbados">Barbados</option> 
<option value="Belarus">Belarus</option> 
<option value="Belgium">Belgium</option> 
<option value="Belize">Belize</option> 
<option value="Benin">Benin</option> 
<option value="Bermuda">Bermuda</option> 
<option value="Bhutan">Bhutan</option> 
<option value="Bolivia">Bolivia</option> 
<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
<option value="Botswana">Botswana</option> 
<option value="Bouvet Island">Bouvet Island</option> 
<option value="Brazil">Brazil</option> 
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
<option value="Brunei Darussalam">Brunei Darussalam</option> 
<option value="Bulgaria">Bulgaria</option> 
<option value="Burkina Faso">Burkina Faso</option> 
<option value="Burundi">Burundi</option> 
<option value="Cambodia">Cambodia</option> 
<option value="Cameroon">Cameroon</option> 
<option value="Canada">Canada</option> 
<option value="Cape Verde">Cape Verde</option> 
<option value="Cayman Islands">Cayman Islands</option> 
<option value="Central African Republic">Central African Republic</option> 
<option value="Chad">Chad</option> 
<option value="Chile">Chile</option> 
<option value="China">China</option> 
<option value="Christmas Island">Christmas Island</option> 
<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
<option value="Colombia">Colombia</option> 
<option value="Comoros">Comoros</option> 
<option value="Congo">Congo</option> 
<option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
<option value="Cook Islands">Cook Islands</option> 
<option value="Costa Rica">Costa Rica</option> 
<option value="Cote D'ivoire">Cote D'ivoire</option> 
<option value="Croatia">Croatia</option> 
<option value="Cuba">Cuba</option> 
<option value="Cyprus">Cyprus</option> 
<option value="Czech Republic">Czech Republic</option> 
<option value="Denmark">Denmark</option> 
<option value="Djibouti">Djibouti</option> 
<option value="Dominica">Dominica</option> 
<option value="Dominican Republic">Dominican Republic</option> 
<option value="Ecuador">Ecuador</option> 
<option value="Egypt">Egypt</option> 
<option value="El Salvador">El Salvador</option> 
<option value="Equatorial Guinea">Equatorial Guinea</option> 
<option value="Eritrea">Eritrea</option> 
<option value="Estonia">Estonia</option> 
<option value="Ethiopia">Ethiopia</option> 
<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
<option value="Faroe Islands">Faroe Islands</option> 
<option value="Fiji">Fiji</option> 
<option value="Finland">Finland</option> 
<option value="France">France</option> 
<option value="French Guiana">French Guiana</option> 
<option value="French Polynesia">French Polynesia</option> 
<option value="French Southern Territories">French Southern Territories</option> 
<option value="Gabon">Gabon</option> 
<option value="Gambia">Gambia</option> 
<option value="Georgia">Georgia</option> 
<option value="Germany">Germany</option> 
<option value="Ghana">Ghana</option> 
<option value="Gibraltar">Gibraltar</option> 
<option value="Greece">Greece</option> 
<option value="Greenland">Greenland</option> 
<option value="Grenada">Grenada</option> 
<option value="Guadeloupe">Guadeloupe</option> 
<option value="Guam">Guam</option> 
<option value="Guatemala">Guatemala</option> 
<option value="Guinea">Guinea</option> 
<option value="Guinea-bissau">Guinea-bissau</option> 
<option value="Guyana">Guyana</option> 
<option value="Haiti">Haiti</option> 
<option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
<option value="Honduras">Honduras</option> 
<option value="Hong Kong">Hong Kong</option> 
<option value="Hungary">Hungary</option> 
<option value="Iceland">Iceland</option> 
<option value="India" selected>India</option> 
<option value="Indonesia">Indonesia</option> 
<option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
<option value="Iraq">Iraq</option> 
<option value="Ireland">Ireland</option> 
<option value="Israel">Israel</option> 
<option value="Italy">Italy</option> 
<option value="Jamaica">Jamaica</option> 
<option value="Japan">Japan</option> 
<option value="Jordan">Jordan</option> 
<option value="Kazakhstan">Kazakhstan</option> 
<option value="Kenya">Kenya</option> 
<option value="Kiribati">Kiribati</option> 
<option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
<option value="Korea, Republic of">Korea, Republic of</option> 
<option value="Kuwait">Kuwait</option> 
<option value="Kyrgyzstan">Kyrgyzstan</option> 
<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
<option value="Latvia">Latvia</option> 
<option value="Lebanon">Lebanon</option> 
<option value="Lesotho">Lesotho</option> 
<option value="Liberia">Liberia</option> 
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
<option value="Liechtenstein">Liechtenstein</option> 
<option value="Lithuania">Lithuania</option> 
<option value="Luxembourg">Luxembourg</option> 
<option value="Macao">Macao</option> 
<option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
<option value="Madagascar">Madagascar</option> 
<option value="Malawi">Malawi</option> 
<option value="Malaysia">Malaysia</option> 
<option value="Maldives">Maldives</option> 
<option value="Mali">Mali</option> 
<option value="Malta">Malta</option> 
<option value="Marshall Islands">Marshall Islands</option> 
<option value="Martinique">Martinique</option> 
<option value="Mauritania">Mauritania</option> 
<option value="Mauritius">Mauritius</option> 
<option value="Mayotte">Mayotte</option> 
<option value="Mexico">Mexico</option> 
<option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
<option value="Moldova, Republic of">Moldova, Republic of</option> 
<option value="Monaco">Monaco</option> 
<option value="Mongolia">Mongolia</option> 
<option value="Montserrat">Montserrat</option> 
<option value="Morocco">Morocco</option> 
<option value="Mozambique">Mozambique</option> 
<option value="Myanmar">Myanmar</option> 
<option value="Namibia">Namibia</option> 
<option value="Nauru">Nauru</option> 
<option value="Nepal">Nepal</option> 
<option value="Netherlands">Netherlands</option> 
<option value="Netherlands Antilles">Netherlands Antilles</option> 
<option value="New Caledonia">New Caledonia</option> 
<option value="New Zealand">New Zealand</option> 
<option value="Nicaragua">Nicaragua</option> 
<option value="Niger">Niger</option> 
<option value="Nigeria">Nigeria</option> 
<option value="Niue">Niue</option> 
<option value="Norfolk Island">Norfolk Island</option> 
<option value="Northern Mariana Islands">Northern Mariana Islands</option> 
<option value="Norway">Norway</option> 
<option value="Oman">Oman</option> 
<option value="Pakistan">Pakistan</option> 
<option value="Palau">Palau</option> 
<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
<option value="Panama">Panama</option> 
<option value="Papua New Guinea">Papua New Guinea</option> 
<option value="Paraguay">Paraguay</option> 
<option value="Peru">Peru</option> 
<option value="Philippines">Philippines</option> 
<option value="Pitcairn">Pitcairn</option> 
<option value="Poland">Poland</option> 
<option value="Portugal">Portugal</option> 
<option value="Puerto Rico">Puerto Rico</option> 
<option value="Qatar">Qatar</option> 
<option value="Reunion">Reunion</option> 
<option value="Romania">Romania</option> 
<option value="Russian Federation">Russian Federation</option> 
<option value="Rwanda">Rwanda</option> 
<option value="Saint Helena">Saint Helena</option> 
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint Lucia">Saint Lucia</option> 
<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
<option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
<option value="Samoa">Samoa</option> 
<option value="San Marino">San Marino</option> 
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option> 
<option value="Senegal">Senegal</option> 
<option value="Serbia and Montenegro">Serbia and Montenegro</option> 
<option value="Seychelles">Seychelles</option> 
<option value="Sierra Leone">Sierra Leone</option> 
<option value="Singapore">Singapore</option> 
<option value="Slovakia">Slovakia</option> 
<option value="Slovenia">Slovenia</option> 
<option value="Solomon Islands">Solomon Islands</option> 
<option value="Somalia">Somalia</option> 
<option value="South Africa">South Africa</option> 
<option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
<option value="Spain">Spain</option> 
<option value="Sri Lanka">Sri Lanka</option> 
<option value="Sudan">Sudan</option> 
<option value="Suriname">Suriname</option> 
<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
<option value="Swaziland">Swaziland</option> 
<option value="Sweden">Sweden</option> 
<option value="Switzerland">Switzerland</option> 
<option value="Syrian Arab Republic">Syrian Arab Republic</option> 
<option value="Taiwan, Province of China">Taiwan, Province of China</option> 
<option value="Tajikistan">Tajikistan</option> 
<option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
<option value="Thailand">Thailand</option> 
<option value="Timor-leste">Timor-leste</option> 
<option value="Togo">Togo</option> 
<option value="Tokelau">Tokelau</option> 
<option value="Tonga">Tonga</option> 
<option value="Trinidad and Tobago">Trinidad and Tobago</option> 
<option value="Tunisia">Tunisia</option> 
<option value="Turkey">Turkey</option> 
<option value="Turkmenistan">Turkmenistan</option> 
<option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
<option value="Tuvalu">Tuvalu</option> 
<option value="Uganda">Uganda</option> 
<option value="Ukraine">Ukraine</option> 
<option value="United Arab Emirates">United Arab Emirates</option> 
<option value="United Kingdom">United Kingdom</option> 
<option value="United States">United States</option> 
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
<option value="Uruguay">Uruguay</option> 
<option value="Uzbekistan">Uzbekistan</option> 
<option value="Vanuatu">Vanuatu</option> 
<option value="Venezuela">Venezuela</option> 
<option value="Viet Nam">Viet Nam</option> 
<option value="Virgin Islands, British">Virgin Islands, British</option> 
<option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
<option value="Wallis and Futuna">Wallis and Futuna</option> 
<option value="Western Sahara">Western Sahara</option> 
<option value="Yemen">Yemen</option> 
<option value="Zambia">Zambia</option> 
<option value="Zimbabwe">Zimbabwe</option>

                </select>
            </span>     
        <br><br>
              
        <span style="margin-left:35px; font-size:25px;">Contact Number<sup style="color:red; font-size:15px;">*</sup>&nbsp;&nbsp;
            <input type="text" name="mobile_no" id="input" placeholder="Mobile number..." style="width:350px"></span>
         <span style="margin-left:100px; font-size:25px;">Email ID <sup style="color:red; font-size:15px;">*</sup>&nbsp;&nbsp;
        <input type="text" name="email" id="input" placeholder="Email ID..." style="width:455px">
            </span>
        <br><br>
        <span style="margin-left:35px; font-size:25px;">First Primary Language <sup style="color:red; font-size:15px;">*</sup>&nbsp;&nbsp;
         <select name="language" id="input" style="width:350px;">
                   <option value="-1">select..</option>
                 <option value="Afrikanns">Afrikanns</option>
  <option value="Albanian">Albanian</option>
  <option value="Arabic">Arabic</option>
  <option value="Armenian">Armenian</option>
  <option value="Basque">Basque</option>
  <option value="Bengali">Bengali</option>
  <option value="Bulgarian">Bulgarian</option>
  <option value="Catalan">Catalan</option>
  <option value="Cambodian">Cambodian</option>
  <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
  <option value="Croation">Croation</option>
  <option value="Czech">Czech</option>
  <option value="Danish">Danish</option>
  <option value="Dutch">Dutch</option>
  <option value="English">English</option>
  <option value="Estonian">Estonian</option>
  <option value="Fiji">Fiji</option>
  <option value="Finnish">Finnish</option>
  <option value="French">French</option>
  <option value="Georgian">Georgian</option>
  <option value="German">German</option>
  <option value="Greek">Greek</option>
  <option value="Gujarati">Gujarati</option>
  <option value="Hebrew">Hebrew</option>
  <option value="Hindi">Hindi</option>
  <option value="Hungarian">Hungarian</option>
  <option value="Icelandic">Icelandic</option>
  <option value="Indonesian">Indonesian</option>
  <option value="Irish">Irish</option>
  <option value="Italian">Italian</option>
  <option value="Japanese">Japanese</option>
  <option value="Javanese">Javanese</option>
  <option value="Korean">Korean</option>
  <option value="Latin">Latin</option>
  <option value="Latvian">Latvian</option>
  <option value="Lithuanian">Lithuanian</option>
  <option value="Macedonian">Macedonian</option>
  <option value="Malay">Malay</option>
  <option value="Malayalam">Malayalam</option>
  <option value="Maltese">Maltese</option>
  <option value="Maori">Maori</option>
  <option value="Marathi">Marathi</option>
  <option value="Mongolian">Mongolian</option>
  <option value="Nepali">Nepali</option>
  <option value="Norwegian">Norwegian</option>
  <option value="Persian">Persian</option>
  <option value="Polish">Polish</option>
  <option value="Portuguese">Portuguese</option>
  <option value="Punjabi">Punjabi</option>
  <option value="Quechua">Quechua</option>
  <option value="Romanian">Romanian</option>
  <option value="Russian">Russian</option>
  <option value="Samoan">Samoan</option>
  <option value="Serbian">Serbian</option>
  <option value="Slovak">Slovak</option>
  <option value="Slovenian">Slovenian</option>
  <option value="Spanish">Spanish</option>
  <option value="Swahili">Swahili</option>
  <option value="Swedish ">Swedish </option>
  <option value="Tamil">Tamil</option>
  <option value="Tatar">Tatar</option>
  <option value="Telugu">Telugu</option>
  <option value="Thai">Thai</option>
  <option value="Tibetan">Tibetan</option>
  <option value="Tonga">Tonga</option>
  <option value="Turkish">Turkish</option>
  <option value="Ukranian">Ukranian</option>
  <option value="Urdu">Urdu</option>
  <option value="Uzbek">Uzbek</option>
  <option value="Vietnamese">Vietnamese</option>
  <option value="Welsh">Welsh</option>
  <option value="Xhosa">Xhosa</option>
                </select>
        </span>
        <span style="margin-left:100px; font-size:25px;">Boarding or Day <sup style="color:red; font-size:15px;">*</sup>&nbsp;&nbsp;
            <select name="school_type" id="input" style="width:300px;">
                <option value="-1" selected>select..</option>
                <option value="Boarding">Boarding</option>
                <option value="Day">Day</option>
            </select></span>
       <br><br><br><br>
    
      <center>
     <input type="submit" value="Submit Form" id="submit"><input type="reset" id="reset">
        </center>
        </form></div>
    <br><br>
    <div style="float:left; width:750px; background-color:#59582b; margin-left:70px; color:white; text-align:center; font-size:25px; padding:50px; font-family:georgia; font-weight:100; margin-top:40px;">
      The Emma Willard School Admissions team is deeply committed to making connections with prospective students and families, and finding the best fit girls to join our school.
       
    </div>
    <div style=" float:left; margin-left:50px; color:white; padding:25px; font-size:22px;width:270px; background-color:#800000; font-weight:100;"><h3 style="font-family:French Script MT; font-size:50px;">Contact Us</h3>Please feel free to contact us any time, and please come visit us soon.
<br><br>
(518) 833-1320
        <a href="mailto:admissions@emmawillard.org" style="color:white;">admissions@emmawillard.org</a></div>
    <br clear="all"><br>
    <div class="footer">
            <img src="../logo/2017mainSiteLogo.png"><br><br><br>
            <p id="footer-p">285 Pawling Avenue, Troy, NY 12180 | P: 518.833.1300 F: 518.833.1815
            <br><br>&copy; EMMA WILLARD SCHOOL</p>
        </div>
    
            </body>
</html>