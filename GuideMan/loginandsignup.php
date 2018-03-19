<?php

//Login Check
if (isset($_POST["submitLogin"])) {
    $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "guideman";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

       $touristemail = $_POST["username"];
       $touristpasswordUser = $_POST["password"];
        $radioVal = $_POST["radio"];
        
    //Tourist Login
    if($radioVal == 'touristRadio')
    {
        
       $result = "SELECT * FROM tbl_tourist WHERE touristemail='$touristemail' AND touristpassword='$touristpasswordUser'";
    
       $query = mysqli_query($conn, $result);
       $row = mysqli_fetch_array($query);
          if($query->num_rows > 0)
           {
              
              ////Starting the session
              session_start();
              
              $touristname = $row['touristname'];
              
             if ($row['touristemail']= $touristemail && $row['touristpassword']=$touristpasswordUser)
             {
//             $returnArray['message'] = "WELCOME";
//             $returnArray['id'] = $row['tourist_id'];
                 
                 ///Storing in session
                 $_SESSION['status'] = true;
                 $_SESSION['name'] = $touristname;
                 $_SESSION['url'] = "tourist_profile.php";                
                 $_SESSION['email'] = $touristemail;
                 
              echo "<script>
                window.location.href='index.php'; ";
              echo "</script>";
            
              }
          }
           else{
               echo "<script>
                alert('Enter Proper Email or password');";
                echo "window.location.href='loginandsignup.php';";
               echo "</script>";
           }
    }
    
    //Guide Login
    else if($radioVal == 'guideRadio')
    {
       $result = "SELECT * FROM tbl_guide WHERE guideemail='$touristemail' AND guidepassword='$touristpasswordUser'";
    
       $query = mysqli_query($conn, $result);
       $row = mysqli_fetch_array($query);
          if($query->num_rows > 0)
           {
              
              ////Starting the session
              session_start();
              
             if ($row['guideemail']= $touristemail && $row['guidepassword']=$touristpasswordUser)
             {
//             $returnArray['message'] = "WELCOME";
//             $returnArray['id'] = $row['tourist_id'];
                 
                 ///Storing in session
                 
                 $_SESSION['email'] = $touristemail;
                 
              echo "<script>
                window.location.href='guide_profile.php'; ";
              echo "</script>";
            
              }
          }
           else{
               echo "<script>
                alert('Enter Proper Email or password');";
                echo "window.location.href='loginandsignup.php';";
               echo "</script>";
           } 
        
    }
    
    else
    {
        echo "<script>
                alert('Enter Proper Email or password');";
                echo "window.location.href='loginandsignup.php';";
               echo "</script>";
    }
    
       $conn->close();

}
   
//LogOn event 
if (isset($_POST["SubmitSignUp"])) {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "guideman";

      $conn = new mysqli($servername, $username, $password, $dbname);

      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

        $uploadDir = 'C:/xampp/htdocs/travel/myuploadedphoto/';
        
        $fileName = isset($_FILES['Photo']['name']);
        $tmpName  = isset($_FILES['Photo']['tmp_name']);
        $fileSize = isset($_FILES['Photo']['size']);
        $fileType = isset($_FILES['Photo']['type']);
        
        $filePath = $uploadDir . $fileName;
        move_uploaded_file($tmpName, $filePath);
       $value = str_split('abcdefghijklmnopqrstuvwxyz'.'ABCDEFGHIJKLMNOPQRSTUVWXYZ'.'0123456789');
       shuffle($value);
       $rand = '';
       foreach (array_rand($value, 5) as $k)
       {$rand .= $value[$k]; }

       $tourist_id = $rand;
       $profile_photo = $filePath;
       $touristname = $_POST['signupusername'];
       $touristemail = $_POST['signupemail'];
       $touristpassword = $_POST['signupPassword'];
       $touristaddress = $_POST['signupaddress'];
       $touriststate = $_POST['signupState'];
       $touristcity = $_POST['signupCity'];
       $touristgender = $_POST['signupGender'];
       $touristdateofbirth = $_POST['signupdateofbirth'];
       $touristnumber = $_POST['signupnumber'];

       $sql= "INSERT INTO tbl_tourist VALUES  ('$tourist_id','$profile_photo','$touristname','$touristemail','$touristpassword','$touristaddress','$touriststate','$touristcity','$touristgender','$touristdateofbirth','$touristnumber')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>
                window.location.href='index.php';
                alert('you are successfully signed up');";
              echo "</script>";
       } else {
         echo "<script>
                window.location.href='index.php';
                alert('Use another email');";
              echo "</script>";
       }
     $conn->close();
    }

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Join US</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
    
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Simple Login and Signup Form web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.9.1.min.js"></script>
<!--// js -->
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
 <link href="//fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
</head>
    
<body class="bg agileinfo">


		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container" style="height:125px; margin:0px; width:100%;">
				<div class="nav-header" style="top:15px;">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><img src="Guideman_logo.jpg" height="100" width="200"/></a>
                    </h1>
                    
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class=""><a href="index.php">Home</a></li>
                            <li><a href="famous_destination.php">Famous Destination</a></li>
							<li><a href="About_us.php">About Us</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<li class="active"><a href="loginandsignup.php">Login/Sign up</a></li>
							
						</ul>
					</nav>
				</div>
			</div>
		</header>
    <form method="post" enctype="multipart/form-data">
    
   <h1 class="agile_head text-center"> Welcome Back! </h1>
   <div class="w3layouts_main wrap">
    <!--Horizontal Tab-->
        <div id="parentHorizontalTab_agile">
            <ul class="resp-tabs-list hor_1">
                <li>LogIn</li>
                <li>SignUp</li>
            </ul>
            <div class="resp-tabs-container hor_1">
               <div class="w3_agile_login">
                    <form action="#" method="post" class="agile_form">
					  <p>Email</p>
					  <input type="email" name="username" required="required" id="loginUsername"/>
					  <p>Password</p>
					  <input type="password" name="password" required="required" class="password" id="loginPassword" /> 
					  <div class="check">
<!--							<label class="checkbox w3l"><input type="checkbox" name="checkbox" required="required"><i> </i>I accept the terms and conditions</label>-->
                          Guide<input type="radio" style="margin-right:25px; margin-left:10px;" name="radio" value="guideRadio" id="guideradiobutton"/>                              
                          Tourist<input type="radio" style="margin-right:25px; margin-left:10px;" name="radio" value="touristRadio" id="touristradiobutton"/> 
 
					 </div>
					  <input type="submit" value="LogIn" class="agileinfo" style="width:91%;" name="submitLogin"/>
					</form>
					 <div class="login_w3ls">
				        <a href="#">Forgot Password</a>
					 </div>
                    
                </div>
                <div class="agile_its_registration">
                    <form action="#" method="post" class="agile_form">
					  <p>Name</p>
					  <input type="text" name="signupusername" required="required" placeholder="Enter your Full name" />
					  <p>Email</p>
					  <input type="email" name="signupemail" required="required" placeholder="Enter your Email "/>
                      <p>Date of Birth</p>
                        <input type="date" name="signupdateofbirth" required="required" placeholder="DOB" dateformat="yyyy-mm-dd"/>
                      <p>Gender</p>
                       <div class="gender">Male <input type="radio" class="male" name="signupGender" required="required" value="Male" />
                       Female <input type="radio" name="signupGender" required="required" value="Female" placeholder="Gender"/></div>
                      <p>Address</p>
					  <input type="text" name="signupaddress" required="required" placeholder="Address"/>
                      <p>City</p>
					  <input type="text" name="signupCity" required="required" placeholder="City"/>
                      <p>State</p>
					  <input type="text" name="signupState" required="required" placeholder="State"/>
                      <p>Contact no.</p>
					  <input type="tel" name="signupnumber" required="required" placeholder="Contact no."/>
					  <p>Password</p>
					  <input type="password" name="signupPassword" id="password1"  required="required" placeholder="Enter your password">
					  <p>Confirm Password</p>
					  <input type="password" name="Confirm Password" id="password2" required="required" placeholder="Enter your password">
                      <p>Profile photo</p>
					  <input type="file" name="Photo" accept="image/jpeg, image/png," />
         	  			<div class="check w3_agileits">
							<label class="checkbox w3"><input type="checkbox" name="signupcheckbox" required="required" ><i> </i>I Accept the terms and conditions</label>
						</div>
					   <input type="submit" value="Signup" name="SubmitSignUp"/>
					</form> 
				</div>
            </div>
        </div>
		 <!-- //Horizontal Tab -->
    </div>
	<div class="agileits_w3layouts_copyright text-center">
			<p>© 2017 All rights reserved | Design by <a href="//guideman.com/">Guideman</a></p>
	</div>
<!--tabs-->
<script src="js/easyResponsiveTabs.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	//Horizontal Tab
	$('#parentHorizontalTab_agile').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion
		width: 'auto', //auto or any width like 600px
		fit: true, // 100% fit in a container
		tabidentify: 'hor_1', // The tab groups identifier
		activate: function(event) { // Callback function if tab is switched
			var $tab = $(this);
			var $info = $('#nested-tabInfo');
			var $name = $('span', $info);
			$name.text($tab.text());
			$info.show();
		}
	});
});
</script>
<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
			var pass2=document.getElementById("password2").value;
			var pass1=document.getElementById("password1").value;
			if(pass1!=pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');	 
				//empty string means no validation error
		}

</script>

</form>
	
<!--//tabs-->
        
            <footer>
			<div id="footer">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2018 <br><a href="#"> </a>Made with&nbsp;<i class="icon-heart3">&nbsp;</i>by<a href="" target="_blank"></a><br><a href="https//Guideman.com" target="_blank">GuideMan</a></p>
						</div>
					</div>
				</div>
			
		</footer>
</body>
</html>

