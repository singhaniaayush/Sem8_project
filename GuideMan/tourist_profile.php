<?php
   session_start();

if(!isset($_SESSION['status'])){
     echo "<script>
                window.location.href='loginandsignup.php'; ";
     echo "</script>";
}
    $tuoristemail = $_SESSION['email'];
    $touristname = $_SESSION['name'];
    $tab = $_SESSION['name'];
    $url = 'tourist_profile.php';

    $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "guideman";
    
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $query_result = "select * from tbl_tourist WHERE touristemail='$tuoristemail'";
    $query = mysqli_query($conn, $query_result);
    $row = mysqli_fetch_array($query);

       $tourist_id = $row['tourist_id'];
       $profile_photo = $row['profile_photo'];
       $touristname = $row['touristname'];
       $touristemail = $row['touristemail'];
       $touristpassword = $row['touristpassword'];
       $touristaddress = $row['touristaddress'];
       $touriststate = $row['touriststate'];
       $touristcity = $row['touristcity'];
       $touristgender = $row['touristgender'];
       $touristdateofbirth = $row['touristdateofbirth'];
       $touristnumber = $row['touristnumber'];    
    
?>

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
           
            function formsubmit(){
                var state = document.getElementById("state").value;
                var city = document.getElementById("city").value;
                var from = document.getElementById("start").value;
                var to = document.getElementById("end").value;
                alert(state+"-"+city+"-"+from+"-"+to);
            }
            
            function logout(){
                <?php
                    $_SESSION['status'] == false;
                ?>
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
    
    <!--Header section-->
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

    
        
        <!--Main Body Part-->
        <main>
            
            <div class="container" style="width: 100%; background-color: white;">
               <div class="panel panel-warning" style="font-size: 20px">
                   <div class="panel-heading"><b id="tourist_name"><?php echo "$tab"; ?></b></div>
                  <div class="panel-body">
                      <ul class="nav nav-tabs nav-justified nav_format">
                        <li style="font-size: 20px"><a href="#profile" onclick="profileclick()">Profile</a></li>
                        <li style="font-size: 20px"><a href="#plan_tour" onclick="tourclick()">Tour Planning</a></li>
                        <li style="font-size: 20px"><a href="#hire-guide" onclick="hireguide()">Hire Guide</a></li>
                        <li style="font-size: 20px"><a href="#history" onclick="history()">History</a></li>
                      </ul>
                      
                      <!-- Profile Section -->
                      <div id="#profile" class="profile_container" style="width: 100%;">
                        
                        <div class="data" style="font-size:20px;">
                            <!-- Edit Profile Option -->
                            <button type="button" class="btn btn-warning btn-md edit_data" data-toggle="modal" data-target="#editdata" style="float:right; margin:25px; margin-top:0px;"> Edit Data </button>
                            
                            <!-- Edit Profile Modal -->
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
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_name" value="<?php echo "$touristname"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> E-mail: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_email" value="<?php echo "$touristemail"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> Address: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_address" value="<?php echo "$touristaddress"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> City: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_city" value="<?php echo "$touristcity"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> State: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_state" value="<?php echo "$touriststate"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> date of Birth: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_dob" value="<?php echo "$touristdateofbirth"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> Gender: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_gender" value="<?php echo "$touristgender"; ?>" />
                                              </td>
                                          </tr>
                                          <tr>
                                              <td style="vertical-align:middle;"> Contact No.: </td>
                                              <td style="vertical-align:middle;">
                                                  <input type="text" style="width:250px; font-size:18px;" class="form-control" id="edit_number" value="<?php echo "$touristnumber"; ?>" />
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
                            
                            <?php
                                $name="";
                                        echo "<script> $name = document.getElementById('edit_name').value; </script>";                                      
                            ?>
                            
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
                                             url: "edit_profile_tourist.php",
                                             type:'POST',
                                             data:data,
                                             success: function(result){
                                                 
                                                 alert(result);
                                                window.location = 'tourist_profile.php';
                                    }});
                                    
                                }
                            </script>
                            
                            
                            <table style="padding-left:25px;" class="table">
                                <tr>
                                    <td>  Name </td>
                                    <td> <?php echo "$touristname"; ?> </td>
                                </tr>
                                <tr>
                                    <td> E-mail </td>
                                    <td> <?php echo "$touristemail"; ?> </td>
                                </tr>
                                <tr>
                                    <td> Address </td>
                                    <td> <?php echo "$touristaddress"; ?> </td>
                                </tr>
                                <tr>
                                    <td> City </td>
                                    <td> <?php echo "$touristcity"; ?> </td>
                                </tr>
                                <tr>
                                    <td> State </td>
                                    <td> <?php echo "$touriststate"; ?> </td>
                                </tr>
                                <tr>
                                    <td> Date of Birth </td>
                                    <td> <?php echo "$touristdateofbirth"; ?> </td>
                                </tr>
                                <tr>
                                    <td> Gender </td>
                                    <td> <?php echo "$touristgender"; ?> </td>
                                </tr>
                                <tr>
                                    <td> Contact No. </td>
                                    <td> <?php echo "$touristnumber"; ?> </td>
                                </tr>
                            </table>
                        </div>                   
                        
                    
                      </div>
                      
                      <!-- Plan a tour Section -->
                      <div id="#plan_tour" class="plan_tour_container" style="display: none;">      
                                    
                        <div class="tour_plan">
                            <p style="font-size:24px"><b>Plan a Trip!!!</b></p>
                            <form method="POST">
                                <table class="table" style="vertical-align:middle;">
                                    <tr>
                                        <td style="width:125px; vertical-align: middle;"> State </td>
                                        <td><input type="text" class="form-control" id="state" placeholder="State" style="width:250px; font-size:20px;" value="" /> </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;"> City </td>
                                        <td><input type="text" class="form-control" id="city" style="width:250px; font-size:20px;" placeholder="City" value="" /> </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;"> From </td>
                                        <td> <input type="date" class="form-control" style="width:250px; font-size:20px;" id="start"/> </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;"> To </td>
                                        <td> <input type="date" class="form-control" style="width:250px; font-size:20px;" id="end"/> </td>                                        
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;"> Number of People </td>
                                        <td> <input type="text" class="form-control" id="numberofpeople" name="plannumberofpeople" style="width:250px; font-size:20px;" id="end"/> </td>                                        
                                    </tr>
                                    <tr>
                                        <td>
                                            <button type="button" class="btn btn-warning" data-toggle="modal" id="showguide" data-target="#myModal">Select Guide</button>
                                            
                                              <!-- Modal -->
                                              <div class="modal fade" id="myModal" role="dialog">
                                                <div class="modal-dialog">

                                                  <!-- Modal content-->
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                      <h4 class="modal-title">Select Guide</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        
                                                      <input type="text" id="myInput" placeholder="Search for guide.." title="Type in guide name">
                                                        
                                                        <table class="table" id="table" style="font-weight:0">
                                                            <tr id="attachguide">
                                                                <th>Guide Name</th>
                                                                <th>Guide Rating</th>
                                                                <th>Guide Price</th>
                                                            </tr>
                                                        </table>
                                                        
                                                        
                                                        <script type="text/javascript">
            
            
            var value;
            $(document).ready(function(){
                $("#showguide").click(function(){
                    debugger;
                    
                    var state = $("#state").val();
                    var city = $("#city").val();
                    if(state == "" || city == "" )
                        {
                            alert("Enter state and city.");
                            window.location.replace("http://localhost/GuideMan/tourist_profile.php#plan_tour");
                            $("#showdailogPopup").hide();
                            
                        }
                    else{
                        $.ajax({
                        url:"showguide.php",
                        method:"POST",
                        data:{state:state,city:city,method:"showguide"},
                        success:function(response){
                            
                            $("#attachguide").after(response);
                            $("#showdailogPopup").show();
                        }
                    });
                    }
                    
                });
                
                $("#selectGuideOkButton").click(function(){
                    debugger;
                    var radioSelectedValue = $('input[type=radio][name=selectguide]:checked').val();
                    var selectedguide = radioSelectedValue.split('_')[0];
                    var selectedguideprice = radioSelectedValue.split('_')[1];
//                    var selectedguide = $('input[type=radio][name=selectguide]:checked').val();
//                    var selectedguide = $('input[type=radio][name=selectguide]:checked').val();
                    var selectedguideId = $('input[type=radio][name=selectguide]:checked').parents('tr').attr("id");
                    if(selectedguide == undefined )
                        {
                            alert("Please select Guide");
                            $(".guideadded").remove();
                            $("#showdailogPopup").hide();
                    }else{
//                            window.location.replace("http://localhost/GuideMan_29_3/GuideMan/tourist_profile.php#plan_tour");                          
                        $(".guideadded").remove();
                            $currentURL = $(location).attr('href');
                            window.location.href = $currentURL+'#id='+selectedguideId;
                            $("#showdailogPopup").hide();
                            $("#test").val(selectedguide);
                        $("#guideprice").val(selectedguideprice);
                        }
                    

                });
                
                $("#selectGuideCancelButton").click(function(){
                    location.reload();
                });
                
                 $("#plan_trip").click(function(){
                debugger;

                    var touristname = $("#tourist_name").text();
                    var guidename = document.getElementById("test").value;
                    var state = document.getElementById("state").value;
                    var city = document.getElementById("city").value;
                    var fromdatetravel = document.getElementById("start").value;
                    var todatetravel = document.getElementById("end").value;
                    var numberofpeople = document.getElementById("numberofpeople").value;

                    //for number of days

                    // First we split the values to arrays date1[0] is the year, [1] the month and [2] the day
                    fromdate = fromdatetravel.split('-');
                    todate = todatetravel.split('-');

                    // Now we convert the array to a Date object, which has several helpful methods
                    fromdate = new Date(fromdate[0], fromdate[1], fromdate[2]);
                    todate = new Date(todate[0], todate[1], todate[2]);

                    // We use the getTime() method and get the unixtime (in milliseconds, but we want seconds, therefore we divide it through 1000)
                    fromdate_unixtime = parseInt(fromdate.getTime() / 1000);
                    todate_unixtime = parseInt(todate.getTime() / 1000);

                    // This is the calculated difference in seconds
                    var timeDifference = todate_unixtime - fromdate_unixtime;

                    // in Hours
                    var timeDifferenceInHours = timeDifference / 60 / 60;

                    // and finaly, in days :)
                    var NoOfDays = timeDifferenceInHours  / 24;

                    var guideID = $(location).attr('href').split('id=')[1];

                    var tourId = "";
                    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

                    for (var i = 0; i < 5; i++){
                        tourId += possible.charAt(Math.floor(Math.random() * possible.length));
                    }

                    if(state == "" || city == "" || fromdatetravel == " "  ||todatetravel == " " )
                        {
                            alert("Enter every details.");
                            location.reload(true);
                        }
                    else{
                        debugger;
                        $.ajax({
                            url:"showguide.php",
                            method:"POST",
                            data:{tourId:tourId,touristname:touristname,NoOfDays:NoOfDays,state:state,city:city,numberofpeople:numberofpeople,fromdatetravel:fromdatetravel,todatetravel:todatetravel,guideID:guideID,guidename:guidename,method:"finalGuideSelected"},
                            success:function(response){
                                alert(response);
                            }
                        });

                    }
            });
            $(".hireGuide").click(function(){
//                window.location.href = '';
                 var touristname = $("#tourist_name").text();
                var selectedguideId = $(this).parents('tr').attr("id");
                $.ajax({
                            url:"showguide.php",
                            method:"POST",
                            data:{touristname:touristname,selectedguideId:selectedguideId,method:"hireguide"},
                            success:function(response){
                                var jsonObject = JSON.parse(response);    
                                var guide_id = jsonObject.guide_id;
                                var guideprice = jsonObject.guideprice;
                                var guidename = jsonObject.guidename;
                                var guidecity = jsonObject.guidecity;
                                var guidestate = jsonObject.guidestate;
                                
                                $currentURL = $(location).attr('href');
                                window.location.href = $currentURL+'#id='+guide_id;
                                $(".plan_tour_container").show();
                                $("#state").val(guidestate);
                                $("#city").val(guidecity);
                                $("#test").val(guidename);
                                $("#guideprice").val(guideprice);
                                $(".hire-guide").hide();

                            }
//                $(".plan_tour_container").show();
                
            });
            
            });
        });
            
        </script>
                                                        
                                                        
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal" id="selectGuideOkButton">Ok</button>
                                                      <button type="button" id="selectGuideCancelButton" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                  </div>

                                                </div>
                                              </div>
                                        </td>
                                        <td>
                                            <p contenteditable="false"><input type="text" class="form-control" style="width:250px; font-size:20px;" id="test" disabled=true value=""></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="vertical-align: middle;"> Amount </td>
                                        <td>
                                            <p contenteditable="false"><input type="text" class="form-control" style="width:250px; font-size:20px;" id="guideprice" disabled=true value=""></p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding-left:75px; padding-top:25px;">
                                            <input type="submit" class="btn" id="plan_trip" value="Submit" style="font-size:18px;" />
                                        </td>
                                    </tr>
                                    
                                </table>
                            </form>                           
                            
                         </div>
                          
                       </div>
                      
                      <!-- Hire Guide Section -->
                      <div id="#hire_guide" class="hire-guide" style="display: none;">
                        <div id="myOverlay" class="overlay">
                          <div class="overlay-content">
                            <input type="text" id="myInput" placeholder="Search for guide.." title="Type in guide name">
                              
                              <center>
                              <table id="myTable" style="background-color: white; overflow: auto; margin:25px; width:auto; align:center;">
                                  <thead>
                                      <th style="width:350px; text-align:center;"> Guide Name </th>
                                      <th style="width:350px; text-align:center;"> Guide Ratings </th>
                                      <th style="width:250px; text-align:center;"> State </th>
                                      <th style="width:250px; text-align:center;"> City </th>
                                      <th></th>
                                  </thead>
                                  <tbody style="font-weight:250;">
                              
                               <?php
                              
                              $guide = "select guide_id,guidename,guiderating,guidestate,guidecity,guideprice from tbl_guide order by guiderating desc limit 10";
                            $query = mysqli_query($conn,$guide);
                                            while($row = mysqli_fetch_array($query)){
                                              echo "<tr id=".$row["guide_id"].">".                                         
                                                   "<td id=".$row["guidename"].">".$row["guidename"]."</td>".
                                                   "<td id=".$row["guiderating"].">".$row["guiderating"]."</td>".
                                                   "<td id=".$row["guidestate"].">".$row["guidestate"]."</td>".
                                                   "<td id=".$row["guidecity"]. ">".$row["guidecity"]."</td>".
                                                   "<td ><input type='submit' class='hireGuide' id='button_".$row["guide_id"]."' value='Select Guide'></td>".
                                                   "</tr>";
                                            }
                                ?>    
                              
                          </tbody>
                              </table>
                              </center>
                              
                          </div>
                        </div>
                      </div>
                      
                      <!-- History Section -->
                      <div id="#history" class="history" style="display: none;">
                          
                        <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for tours.." title="Type in a city/state">
                          
                        <table id="myTable" style="background-color: white; overflow: auto;">
                          <thead>
                            <th>Tour Id</th>
                            <th>Guide Name</th>
                            <th>No Of days</th>
                            <th>Tourist Count</th>
                            <th>Description</th>
                            <th>Payment</th>
                            <th>City</th>
                            <th>State</th>
                          </thead>
                          <tbody>
                              
                               <?php
                              
                              $tour = "select * from tbl_tour where touristemail = '$touristemail'";
                            $query_tour = mysqli_query($conn,$tour);
                                            while($row = mysqli_fetch_array($query_tour)){
                                               echo "<tr>".
                                                   "<td>".$row["tour_id"]."</td>".                                             
                                                   "<td>".$row["guide_name"]."</td>".
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
        
        <!--Footer section-->
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
