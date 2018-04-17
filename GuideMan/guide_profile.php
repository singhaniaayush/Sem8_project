<?php
session_start();

if(!isset($_SESSION['status'])){
    echo "<script> windows.location.href = 'loginandsignup.php'; </script>";
}
else{
    
    $guideemail = $_SESSION['email'];
    $guidename = $_SESSION['name'];
    
    $conn = new mysqli('localhost','root','','guideman');
    
    if($conn->connect_error){
        die("COnnection Failed".$conn->connect_error);
    }
    else{
        $query_guide = "select * from tbl_guide where guideemail = '$guideemail' ";
        $result = mysqli_query($conn,$query_guide);
        $row = mysqli_fetch_array($result);
        
        $guideId = $row['guide_id'];
        $guideName = $row['guidename'];
        $guideEmail = $row['guideemail'];
        $guideAdd = $row['guideaddress'];
        $guideState = $row['guidestate'];
        $guideCity = $row['guidecity'];
        $guideGender = $row['guidegender'];
        $guideDOB = $row['guidedateofbirth'];
        $guideNo = $row['guidecontactnumber'];
        $guideRating = $row['guiderating'];
        $guideReview = $row['guidereview'];
        $guidelicense = $row['guidelicense'];
        $guidePrice = $row['guideprice'];
        $guideCount = $row['guidenumberoftourdone'];
    }
}

?>

<!DOCTYPE>
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
            
            function profileclick(){
              document.getElementById("#profile").style.display = "grid";               
              document.getElementById("#plan_tour").style.display = "none";
              document.getElementById("#history").style.display = "none";
            } 
            
            function tourclick(){
              document.getElementById("#profile").style.display = "none";
              document.getElementById("#plan_tour").style.display = "block";
              document.getElementById("#history").style.display = "none";
            } 
            
            function history(){
              document.getElementById("#profile").style.display = "none";
              document.getElementById("#plan_tour").style.display = "none";
              document.getElementById("#history").style.display = "grid";
            }
           
            function logout(){
               
            }
            
            function myFunction() {
              var input, filter, table, tr, td, i;
              input = document.getElementById("myInput");
              filter = input.value.toUpperCase();
              table = document.getElementById("myTable");
              tr = table.getElementsByTagName("tr");
              for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                  if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                  } else {
                    tr[i].style.display = "none";
                  }
                }       
              }
            }
            
        </script>
        
    </head>
    
<body>
    
    <header id="fh5co-header-section" class="sticky-banner">
			<div class="container" style="height:125px; margin:0px; width:100%; background-color: white;">
				<div class="nav-header" style="top:15px;">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><img src="Guideman_logo.jpg" height="100" width="200"/></a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="index.php">Home</a></li>
                            <li><a href="famous_destination.php">Famous Destination</a></li>
							<li><a href="About_us.php">About Us</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<li><a href="logout.php">LogOut</a></li>
						</ul>
					</nav>
				</div>
			</div>
    </header>
    
    
    <main>
            
            <div class="container" style="width: 100%; background-color: white;">
               <div class="panel panel-warning">
                   <div class="panel-heading"><b><?php echo "$guidename"; ?> </b></div>
                  <div class="panel-body">
                      <ul class="nav nav-tabs nav-justified nav_format">
                        <li><a href="#profile" onclick="profileclick()">Profile</a></li>
                        <li><a href="#plan_tour" onclick="tourclick()">Upcoming Tours</a></li>
                        <li><a href="#history" onclick="history()">History</a></li>
                      </ul>
                      
                      <!-- Profile section for guide -->
                      <div id="#profile" class="profile_container" style="width: 100%;">
                
                        <div class="data" style="font-size:20px;">
                            <!-- Edit Profile Option -->
                            <button type="button" class="btn btn-warning btn-md edit_data" data-toggle="modal" data-target="#editdata" style="float:right; margin:25px; margin-top:0px;"> Edit Data </button>
                            <!-- edit modal -->
                            <div class="modal fade" id="editdata" role="dialog">
                                <div class="modal-dialog modal-lg">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                      <h4 class="modal-title">Edit Data</h4>
                                    </div>
                                    <div class="modal-body">
                                      <table class="table">
                                          <tr>
                                              <td style="vertical-align:middle;"> Name: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_name" value="<?php echo "$guideName"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> E-mail: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_email" value="<?php echo "$guideEmail"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> Address: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_address" value="<?php echo "$guideAdd"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> City: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_city" value="<?php echo "$guideCity"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> State: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_state" value="<?php echo "$guideState"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> date of Birth: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_dob" value="<?php echo "$guideDOB"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> Gender: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_gender" value="<?php echo "$guideGender"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> Contact No.: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_number" value="<?php echo "$guideNo"; ?>" />
                                              </td>
                                          </tr>
                                          
                                      </table>
                                    </div>
                                    <div class="modal-footer">
                                      <button type="button" class="btn btn-primary" onclick="updateTourist()" >Save</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            
                            
                            <script type="text/javascript">
                                function updateTourist(){
                                    var name = document.getElementById('edit_name').value;
                                    var email = document.getElementById('edit_email').value;
                                    var address = document.getElementById('edit_address').value;
                                    var state = document.getElementById('edit_state').value;
                                    var city = document.getElementById('edit_city').value;
                                    var gender = document.getElementById('edit_gender').value;
                                    var dob = document.getElementById('edit_dob').value;
                                    var no = document.getElementById('edit_number').value;
                                    var data={
                                        name:name,
                                        email:email,
                                        address:address,
                                        state:state,
                                        city:city,
                                        gender:gender,
                                        dob:dob,
                                        no:no
                                    };
                                     $.ajax(
                                         {
                                             url: "edit_profile_guide.php",
                                             type:'POST',
                                             data:data,
                                             success: function(result){
                                                 
                                                 alert(result);
                                                window.location = 'guide_profile.php';
                                    }});
                                    
                                }
                                    
                                
                            </script>
                            
                            
                            <table style="padding-left:25px;" class="table">
                                <tr>
                                    <td>  Name </td>
                                    <td> <?php echo "$guideName"; ?> </td>
                                </tr>
                                <tr>
                                    <td> E-mail </td>
                                    <td> <?php echo "$guideEmail"; ?> </td>
                                </tr>
                                <tr>
                                    <td> Address </td>
                                    <td> <?php echo "$guideAdd"; ?> </td>
                                </tr>
                                <tr>
                                    <td> City </td>
                                    <td> <?php echo "$guideCity"; ?> </td>
                                </tr>
                                <tr>
                                    <td> State </td>
                                    <td> <?php echo "$guideState"; ?> </td>
                                </tr>
                                <tr>
                                    <td> Date of Birth </td>
                                    <td> <?php echo "$guideDOB"; ?> </td>
                                </tr>
                                <tr>
                                    <td> Gender </td>
                                    <td> <?php echo "$guideGender"; ?> </td>
                                </tr>
                                <tr>
                                    <td> Contact No. </td>
                                    <td> <?php echo "$guideNo"; ?> </td>
                                </tr>
                                <tr>
                                    <td> Rating </td>
                                    <td> <?php echo "$guideRating"; ?> </td>
                                </tr>
                                <tr>
                                    <td> Review </td>
                                    <td> <?php echo "$guideReview"; ?> </td>
                                </tr>
                                <tr>
                                    <td> License </td>
                                    <td> <?php echo "$guidelicense"; ?> </td>
                                </tr>
                                <tr>
                                    <td> Price </td>
                                    <td> <?php echo "$guidePrice"; ?> </td>
                                </tr>
                                <tr>
                                    <td> No of Tours </td>
                                    <td> <?php echo "$guideCount"; ?> </td>
                                </tr>
                            </table>
                        </div>                    
                        
                    
                      </div>
                      
                      
                      <!-- UpComing Tours -->
                      <div id="#plan_tour" class="plan_tour_container" style="display: none;">
                          <div class="tour_plan">
                               <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for tours.." title="Type in a city/state">
                          
                        <table id="myTable" style="background-color: white; overflow: auto;">
                          <thead>
                            <th>Guide Name</th>
                              <th>Tour Id</th>
                            
                            <th>No Of days</th>
                            <th>Tourist Count</th>
                            <th>Description</th>
                            <th>Payment</th>
                            <th>City</th>
                            <th>State</th>
                          </thead>
                          <tbody>
                              
                               <?php
                              
                              $tour = "select * from tbl_tour where guide_email = '$guideEmail'";
                            $query_tour = mysqli_query($conn,$tour);
                                            while($row = mysqli_fetch_array($query_tour)){
                                               echo "<tr>".
                                                   "<td>".$row["guide_name"]."</td>".
                                                   "<td>".$row["tour_id"]."</td>".                                             
                                                   
                                                   "<td>".$row["days"]."</td>".
                                                   "<td>".$row["peoplenumber"]."</td>".
                                                   "<td>".$row["description"]."</td>".
                                                   "<td>".$row["payment"]."</td>".
                                                   "<td>".$row["city"]."</td>".
                                                   "<td>".$row["state"]."</td>".
                                                   "</tr>";
                                            }
                                ?>    
                              
                          </tbody>
                        </table>
                          </div>
                      </div>
                      
                      <!-- History Section -->
                      <div id="#history" class="history" style="display: none;">
                          
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for tours.." title="Type in a city/state">
                          
                        <table id="myTable" style="background-color: white; overflow: auto;">
                          <thead>
                            <th>Guide Name</th>
                              <th>Tour Id</th>
                            
                            <th>No Of days</th>
                            <th>Tourist Count</th>
                            <th>Description</th>
                            <th>Payment</th>
                            <th>City</th>
                            <th>State</th>
                          </thead>
                          <tbody>
                              
                               <?php
                              
                              $tour = "select * from tbl_tour where guide_email = '$guideEmail'";
                            $query_tour = mysqli_query($conn,$tour);
                                            while($row = mysqli_fetch_array($query_tour)){
                                               echo "<tr>".
                                                   "<td>".$row["guide_name"]."</td>".
                                                   "<td>".$row["tour_id"]."</td>".                                             
                                                   
                                                   "<td>".$row["days"]."</td>".
                                                   "<td>".$row["peoplenumber"]."</td>".
                                                   "<td>".$row["description"]."</td>".
                                                   "<td>".$row["payment"]."</td>".
                                                   "<td>".$row["city"]."</td>".
                                                   "<td>".$row["state"]."</td>".
                                                   "</tr>";
                                            }
                                ?>    
                              
                          </tbody>
                        </table>

                      </div>
                      
                   </div>
               </div>
            </div>

        </main>

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