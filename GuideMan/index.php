<?php
session_start();

$tab = 'ayush';
if(isset($_SESSION['status'])){
    
    $tab = $_SESSION['name'];
    $url = 'tourist_profile.php';
}
else{
    $tab = 'Login/SignUp';
    $url = "loginandsignup.php";
}

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GuideMan</title>
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

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container" style="height:125px; margin:0px; width:100%;">
				<div class="nav-header" style="top:15px;">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><img src="Guideman_logo.jpg" height="100" width="200"/></a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active"><a href="index.php">Home</a></li>
                            <li><a href="famous_destination.php">Famous Destination</a></li>
							<li><a href="About_us.php">About Us</a></li>
							<li><a href="contact.php">Contact</a></li>
                            <?php
                                echo "<li><a href= $url > $tab  </a></li>";
                            ?>
														
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->
	
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/5.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
                            <div class="col-sm-5 col-md-5">
								<div class="tab-content">
                                    <div class="input-field">
									   <input type="text" class="fa fa-search form-control" id="from-place" placeholder="&#xF002; Search" />
                                </div>
                                </div>

							</div>
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<h2>Hire your Guide !</h2>
									<h3>We provide the best guides which makes your trip Super Awesome, So Why to Wait?</h3>
                                </div>
							</div>
						</div>
					</div>
				</div>
			</div>

            </div>
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Popular Guides</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive" style="filter:blur(1px)">
							<div class="desc">
								<span></span>
								<h3>Ayush Singhania</h3>
								<span>2 Years of Experience</span>
								<span class="price"></span>
								<a class="btn btn-primary btn-outline" href="#">Hire now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/IMG_2510_1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive" style="filter:blur(1px)">
							<div class="desc">
								<span></span>
								<h3>Yash Rathod</h3>
								<span>1 Year of Experience</span>
								<span class="price"></span>
								<a class="btn btn-primary btn-outline" href="#">Hire now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="images/IMG_2510_1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive" style="filter:blur(1px)">
							<div class="desc">
								<span></span>
								<h3>Vijay shah</h3>
								<span>5 Years of Experience </span>
								<span class="price"></span>
								<a class="btn btn-primary btn-outline" href="#">Hire now <i class="icon-arrow-right22"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-12 text-center animate-box">
						<p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Offers <i class="icon-arrow-right22"></i></a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-wine"></i>
							</span>
							<div class="feature-copy">
								<h3>Business Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#"></a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-genius"></i>
							</span>
							<div class="feature-copy">
								<h3>Solo Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#"></a></p>
							</div>
						</div>

					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
							<div class="feature-copy">
								<h3>Explorer</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#"></a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		
		<div id="fh5co-destination">
			<div class="tour-fluid">
				<div class="row">
					<div class="col-md-12">
						<ul id="fh5co-destination-list" class="animate-box">
							<li class="one-forth text-center" style="background-image: url(images/agra.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Agra</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/udaipur.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Udaipur</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/Somnath.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Somnath</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/kerela.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Kerela</h2>
									</div>
								</a>
							</li>

							<li class="one-forth text-center" style="background-image: url(images/darjeling.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Darjeeling</h2>
									</div>
								</a>
							</li>
							<li class="one-half text-center">
								<div class="title-bg">
									<div class="case-studies-summary">
										<h2>Most Famous Destinations</h2>
										<span><a href="#">View All Destinations</a></span>
									</div>
								</div>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/delhi.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Delhi</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/jaipur.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Jaipur</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/shimla.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Shimla</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/goa.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Goa</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/mumbai.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Mumbai</h2>
									</div>
								</a>
							</li>
						</ul>		
					</div>
				</div>
			</div>
		</div>

		<!-- fh5co-blog-section -->
		<div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;My Trip was Wonderfull, Thanks to Guideman.&rdquo;</p>
						</blockquote>
						<p class="author">Rajan Pandya<a href="http://freehtml5.co/" target="_blank"></a> <span class="subtext"></span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;First of all thanks guideman, Guide you provided was superb. He was having the detailed knowledge of the Destination.&rdquo;</p>
						</blockquote>
						<p class="author">Shubham Trivedi<a href="http://freehtml5.co/" target="_blank"></a> <span class="subtext"></span></p>
					</div>
					
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Everytime I go on tour, I was not able to know the history of heritage site but with guide you provided was having good knowledge, You guys are Best.&rdquo;</p>
						</blockquote>
						<p class="author">Kairvi Butani<a href="#"></a> <span class="subtext"></span></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
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
			</div>
		</footer>


	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

