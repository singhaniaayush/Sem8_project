


<!DOCTYPE HTML>
<html>

    <head>
    
        <meta name="viewport" content="width=device-width, initial-scale = 1">
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap.css.map" />
        <link rel="stylesheet" href="css/internal_style.css" />
        <link rel="stylesheet" href="css/font-awesome.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel="stylesheet" href="css/animate.css">
        <link rel="shortcut icon" href="favicon.ico">
        
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
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
        
    
        <script type="text/javascript">
            


            function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0px";
            }
            function profileclick(){
              document.getElementById("#profile").style.display = "grid";                
              document.getElementById("#plan_tour").style.display = "none";
              document.getElementById("#hire_guide").style.display = "none";
              document.getElementById("#history").style.display = "none";
            } 
            function tourclick(){
              document.getElementById("#profile").style.display = "none";
              document.getElementById("#plan_tour").style.display = "block";
              document.getElementById("#hire_guide").style.display = "none";
              document.getElementById("#history").style.display = "none";
            } 
            function hireguide(){
              document.getElementById("#profile").style.display = "none";
              document.getElementById("#plan_tour").style.display = "none";
              document.getElementById("#hire_guide").style.display = "block";
              document.getElementById("#history").style.display = "none";
            }
            function history(){
              document.getElementById("#profile").style.display = "none";
              document.getElementById("#plan_tour").style.display = "none";
              document.getElementById("#hire_guide").style.display = "none";
              document.getElementById("#history").style.display = "block";
            }
           
            function datadisplay(){
             document.getElementsById("name").innerHTML = document.getElementsById("name").innerHTML +   touristname;
            }
            
        </script>
        
    </head>

    
    <body onload="datadisplay()">
    
    <!--Header section-->
        <header id="fh5co-header-section" class="sticky-banner">
			<div class="container" style="width:100%; background-color:white; padding-bottom: 15px;">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><img src="Guideman_logo.jpg" height="100" width="200"/></a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="home.html">Home</a></li>
                            <li class="active"><a href="#profile">Profile</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

    
        
        <!--Main Body Part-->
        <main>
        
             <div id="leftpanel">
                                 
                 
                 <div id="mySidenav" class="sidenav" style="margin-top:6.75%;">
                     
                     <div class="image">
                         
                         <figure style="align-content:center; vertical-align: middle;">
                             <img src="images/mumbai.jpg" alt="" style="width: 200px; height: 200px;" />
                             <figcaption style="font-weight: 500; color: white; font-size: 16px;">GuideMan</figcaption>
                         </figure>
                                             
                     </div>
                     
                  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                  <a href="#profile" onclick="profileclick()"> Profile </a>
                  <a href="#plan_tour" onclick="tourclick()"> Plan a tour </a>
                  <a href="#hire-guide" onclick="hireguide()"> Hire Guide </a>
                  <a href="#history" onclick="history()"> History </a>
                  <a href="famous_destination.html"> Famous Destinations </a>
                  <a href="index.html" onclick="logout()"> Logout </a>
                </div>
                
            </div>
            
            <div id="rightpanel">
                
                <div class="header" style="background-color: #111;">
                       <span style="font-size:35px;cursor:pointer;color:white;padding-left: 15px" onclick="openNav()">&#9776;</span>  
                </div>
                
                <div class="container" style="width:100%; margin-bottom:-25pxpx;">
                    <p class="profile_name">Profile Name</p>
                </div>
                
                <div id="#profile" class="profile_container" style="width: 100%;">
                
                    <div class="data" style="padding-bottom: 100px;">
                        <p id="name" style="padding-bottom: 15px"> Name:   </p>
                        <p id="email" style="padding-bottom: 15px"> E-mail: </p>
                        <p id="address" style="padding-bottom: 15px"> Address:</p>
                        <p id="state" style="padding-bottom: 15px"> State: </p>
                        <p id="city" style="padding-bottom: 15px"> City: </p>
                    </div>
                    
                    <div>&nbsp;</div>
                    
                </div>
                
                <div id="#plan_tour" class="plan_tour_container" style="display: none;">
                    
                    <div class="plan-trip"> Plan a trip!!! </div>
                    
                    <div class="tour_plan">
                        
                        <div>
                         <p id="date_show" style="font-weight: 550; margin: 25px;"> No. Of Days:  </p> 
                        </div>              
                        
                        <p id="destination" style="font-weight: 550; margin: 0px 25px 10px;">Destination:</p>
                        <p id="state" style="font-weight: 550; display: inline; margin-left: 50px;"> State: </p>
                        <div class="custom-select" style="width:200px;" id="state_select">
                          <select style="background-color:beige; padding-right: 25px; display: inline;">
                            <option value="0">Select State:</option>
                            <option value="1">Audi</option>
                            <option value="2">BMW</option>
                            <option value="3">Citroen</option>
                            <option value="4">Ford</option>
                            <option value="5">Honda</option>
                            <option value="6">Jaguar</option>
                            <option value="7">Land Rover</option>
                            <option value="8">Mercedes</option>
                            <option value="9">Mini</option>
                            <option value="10">Nissan</option>
                            <option value="11">Toyota</option>
                            <option value="12">Volvo</option>
                          </select>
                        </div>
                        <p id="city" style="font-weight: 550; padding-top: 30px; margin-left: 50px;"> City: </p>
                        
                        <button class="button"><span> Search </span></button>
                    </div>
                </div>
                
                <div id="#hire_guide" class="hire-guide" style="display: none;">
                    <div id="myOverlay" class="overlay">
                      <div class="overlay-content">
                        <form action="">
                          <input type="text" placeholder="Search guide or Place .." id="search">
                          <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                      </div>
                    </div>
                </div>
                
                <div id="#history" class="history" style="display: none;">
                    <div id="tours" class="tours_nav">
                        <div id="Past-tours">
                            <button class="button Past-tours"><span> Recent Tours </span></button>
                        </div>
                        <div id="Future-tours">
                            <button class="button Future-tours"><span> Tour </span></button>
                        </div>
                    </div>
                </div>
                
            </div>            
            
        </main> 
        
        
        
        <!--Footer section-->
        <footer>
            
            
            
            
        </footer>
    
    </body>

</html>